<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class InfoController extends Controller
{
    public function find(){

        return view('find-info');
    }
    public function result(){
        
        $kab = '';
        $nama_kab =  Input::get('kab');
        if($nama_kab == "kp"){
            $kab = rawurlencode("Kabupaten Purwakarta");
            $url = 'http://dev.farizdotid.com/api/instansi/daftar_instansi/'.$kab;
            $content= file_get_contents($url);
        
            $result = json_decode($content);
            // print_r($result);
            // echo $result->daftar_instansi[0]->id;
            return view('result-info',compact('result'));
        } else if($nama_kab == "kb"){
            $kab = rawurlencode("Kota Bandung");
            $url = 'http://dev.farizdotid.com/api/instansi/daftar_instansi/'.$kab;
            $content= file_get_contents($url);
        
            $result = json_decode($content);
            return view('result-info',compact('result'));
        } else if($nama_kab == "kjb"){
            $kab = rawurlencode("Kota Jakarta Barat");
            $url = 'http://dev.farizdotid.com/api/instansi/daftar_instansi/'.$kab;
            $content= file_get_contents($url);
        
            $result = json_decode($content);
        } else if($nama_kab == "kjt"){
            $kab = rawurlencode("Kota Jakarta Timur");
            $url = 'http://dev.farizdotid.com/api/instansi/daftar_instansi/'.$kab;
            $content= file_get_contents($url);
        
            $result = json_decode($content);
            return view('result-info',compact('result'));
        } else if($nama_kab == "kju"){
            $kab = rawurlencode("Kota Jakarta Utara");
            $url = 'http://dev.farizdotid.com/api/instansi/daftar_instansi/'.$kab;
            $content= file_get_contents($url);
        
            $result = json_decode($content);
            return view('result-info',compact('result'));
        } else if($nama_kab == "kjs"){
            $kab = rawurlencode("Kota Jakarta Selatan");
            $url = 'http://dev.farizdotid.com/api/instansi/daftar_instansi/'.$kab;
            $content= file_get_contents($url);
        
            $result = json_decode($content);
            return view('result-info',compact('result'));
        }
    }
}
