<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Classes\TwitterAPIExchange;

class FindController extends Controller
{
    public function index(){
        $lat=$this->currentLoc()['lat'];
        $lng=$this->currentLoc()['lng'];
        $weather = $this->findWeather('',$lat,$lng);
        return view('index', compact('weather'));
    }
    public function find(){
        $destination = Input::get('tujuan');
        $origin = Input::get('asal');
        $auto = Input::get('automatic');

        $weathe = $this->findWeather($destination,'','');
        $twitter = $this->findTwitter($destination);
        $latOri=$this->currentLoc()['lat'];
        $lngOri=$this->currentLoc()['lng'];
        $lat = $this->findLoc($destination)['lat'];
        $lng = $this->findLoc($destination)['lng'];
        
        if (isset($auto)) {
            $calculate = $this->calculate($latOri, $lngOri, $lat, $lng);
        }else{
            $latDes = $this->findLoc($origin)['lat'];
            $lngDes = $this->findLoc($origin)['lng'];
            $calculate = $this->calculate($latOri, $lngOri, $latDes, $lngDes);
        }

        $weather = $this->findWeather($this->currentLoc()['city']);
        $data['weather'] = $weathe;
        $data['result'] = $twitter;
        $data['distance'] = $calculate['dis'];
        $data['time'] = $calculate['time'];
        $data['address'] = $this->findLoc($destination)['address'];
        $data['origin'] = $origin;
        $data['destination'] = $destination;
        return view('index',compact('data','weather','lat','lng'));
    }

    function findTwitter($destination){
        /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = array(
            'oauth_access_token' => "881394060749033472-8kyJB92geowl1LjOopx6xIL5u5sYnlD",
            'oauth_access_token_secret' => "DmafbGkmG7zLydzinMF1SijcoVGX1jBY7dLs88bV63aR0",
            'consumer_key' => "L0mTVF8mporWJxAwMaBMEMzk3",
            'consumer_secret' => "h6D0ZDW5Xq2X1tK72Qp23FMgrpo0zyAfk4aHYkUFLQMPdtP1Xn"
        );

        /** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $requestMethod = 'GET';

        /** GET fields required by the URL above. See relevant docs as above **/
        $getfield = '?q='.$destination;

        /** Perform a GET request and echo the response **/
        $twitter = new TwitterAPIExchange($settings);
        $result =  $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();

        $result = json_decode($result);
        $result = $result->statuses;
        return $result;
    }
    function currentLoc(){
        $ip = file_get_contents('https://api.ipify.org');

        $url ="https://geo.ipify.org/api/v1?apiKey=at_14OxshW7TMLbVoDTPe6W8nXXhYqIm&ipAddress=".$ip;
        $session = curl_init($url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
        $loc = curl_exec($session);
        $loc = json_decode($loc);
        $data['lat'] = $loc->location->lat;
        $data['lng'] = $loc->location->lng;
        $data['city'] = $loc->location->city;
        return $data;
    }
    function findWeather($des='', $lat='',$lng=''){
        $loc='';
        if ($des!='') {
            $loc=$this->findLoc($des)['city'];
        }elseif ($lat!='' && $lng!='') {
            $loc="(".$lat."%2C%20".$lng.")";
        }
        $url ="https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22".$loc."%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";
        $session = curl_init($url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
        $weather = curl_exec($session);
        $weather = json_decode($weather);
        // var_dump($weather);
        $data = $weather->query->results->channel;
        return $data;
    }

    function findLoc($des){
        $url = "https://geocoder.api.here.com/6.2/geocode.json?app_id=e9tAZjgniOoU3sDIkXdk&app_code=GBpbrP3AtORjbt_OYWOk5w&searchtext=".rawurlencode($des);
        $session = curl_init($url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
        $loc = curl_exec($session);
        $loc = json_decode($loc);
        $data= $loc->Response->View;
        if (isset($data)) {
            $res = $data[0]->Result;
            $data['lat'] = $res[0]->Location->DisplayPosition->Latitude;
            $data['lng'] = $res[0]->Location->DisplayPosition->Longitude;
            $data['city']= $res[0]->Location->Address->City;
            $data['address'] = $res[0]->Location->Address->Label;
        }else{
            $data['address'] = 'Not Found';
        }
        
        return $data;
    }

    function calculate($latOri,$lngOri, $lat, $lng){
        $url = "https://wse.api.here.com/2/findsequence.json?start=geo!".$latOri.",".$lngOri."&end=geo!".$lat.",".$lng."&mode=fastest;car&app_id=hIfV710Oo8jhVfyDNPq5&app_code=HeNHNicFMHT7RRIbwVBm2Q";
        $session = curl_init($url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
        $loc = curl_exec($session);
        $loc = json_decode($loc);
        // var_dump($loc);
        $res= $loc->results;
        $data['dis'] = $res[0]->distance;
        $data['time'] = $res[0]->time;
        return $data;
    }
}
