<?php

namespace App\Utils;

class Api
{
    public function makePetition($url = '', $method = 'GET', $params = array()){
        $ch = curl_init();

        $parsedURL = "https://api.mk1.es/$url";
        
        switch($method){
            case 'GET':
                if(count($params) > 0){
                    $parsedURL .= '?'.http_build_query($params);
                }
                break;
            case 'POST':
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($params));
                break;
            case 'PUT':
                if(count($params) > 0){
                    foreach($params as $param){
                        $parsedURL .= '/'.$param;
                    }
                }
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                break;
        }
        curl_setopt($ch, CURLOPT_URL,$parsedURL);    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $headers = [
            'HTTP_X_AUTHENTICATION: 11111111111111111111',
            'Accept-Encoding: gzip, deflate',
            'Accept-Language: en-US,en;q=0.5',
            'Content-Type: application/json; charset=utf-8',
            'Host: api.mk1.es',
            'Referer: https://admin.mk1.es' //Your referrer address
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        return  $server_output ;
    }
    public function request($url = '', $method = 'GET', $params = array()){
        return $this->makePetition($url, $method, $params);
    }
    public function getText($section = 'login', $lang = 'es'){
        return $this->makePetition('text/'.$lang.'/'.$section);
    }
}