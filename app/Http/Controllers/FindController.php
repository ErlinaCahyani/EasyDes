<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Classes\TwitterAPIExchange;

class FindController extends Controller
{
    public function find(){
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
        $destination = Input::get('tujuan');
        $getfield = '?q='.$destination;

        /** Perform a GET request and echo the response **/
        $twitter = new TwitterAPIExchange($settings);
        $result =  $twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();

        $result = json_decode($result);

        $result = $result->statuses;

        return view('index',compact('result'));
    }
}
