<?php

namespace App\Utils;

class Api
{
    public function makePetition($url = '', $method = 'GET', $params = array()){
        //return "https://api.mk1.es/$url".($method == 'GET' && count($params) > 0 ? '?'.http_build_query($params) : '');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.mk1.es/$url".($method == 'GET' && count($params) > 0 ? '?'.http_build_query($params) : ''));
        if($method == 'POST'){
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$params);  //Post Fields
        }
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $headers = [
            'HTTP_X_AUTHENTICATION: 11111111111111111111',
            'Accept-Encoding: gzip, deflate',
            'Accept-Language: en-US,en;q=0.5',
            'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
            'Host: api.mk1.es',
            'Referer: https://admin.mk1.es' //Your referrer address
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        return  $server_output ;
    }
    public function getText($section = 'login', $lang = 'es'){
        return $this->makePetition('text/'.$lang.'/'.$section);
    }

    public function login($user = false, $pass = false){
        if($user === false || $pass === false){return false;}

    }
}