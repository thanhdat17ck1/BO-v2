<?php
use  Telegram\Bot\Laravel\Facades\Telegram;

$token= "1202245887:AAGY5EOWPMxzWrjbj_bZcj2rw1WQ3DM1HUI";
$user_id= -1001269083554;
$message="Hello";
$request_param =[
    'chat_id'=> $user_id,
    'text'=> $message
];
$request_url ='https://api.telegram.org/bot'.$token.'/sendMessage'.http_build_query($request_param);
file_get_contents($request_url);
$response = Telegram::sendMessage([
  'chat_id' => 'CHAT_ID',
  'text' => 'Hello World'
]);


