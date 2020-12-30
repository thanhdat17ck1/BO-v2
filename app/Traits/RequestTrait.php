<?php
namespace App\Traits;

/**
 *
 */
trait RequestTrait
{
     private function apiRequest($method, $parameters =[])
    {
        $url = 'https://api.telegram.org/bot'.env('TELEGRAM_BOT_TOKEN').'/'.$method;
        $handle = curl_init($url);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($handle, CURLOPT_TIMEOUT, 68);
        curl_setopt($handle, CURLOPT_POSTFIELDS, http_build_query($parameters));
        $response =curl_exec($handle);
        if($response === false)
        {
            throwException(new \Exception($response['description']));
            curl_close($handle);
            return false;
        }
        curl_close($handle);
        $response = json_decode($response, true);
        $response = $response['result'];
        return $response;
    }

}

