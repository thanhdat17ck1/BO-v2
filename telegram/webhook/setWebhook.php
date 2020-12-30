<?php
use Telegram\Webhook\Bot;
use Telegram\Webhook\SetWebhook;
use function GuzzleHttp\Psr7\str;

$bot = new Bot('1202245887:AAGY5EOWPMxzWrjbj_bZcj2rw1WQ3DM1HUI');

$setWebhook = new SetWebhook(' ');

// uncomment if use use self-signed certificate
// $setWebhook->setCertificate(file_get_contents('/path/to/self-signed-certifcate.pem'));

$response = $bot->setWebhook($setWebhook);

// echo str($response);
