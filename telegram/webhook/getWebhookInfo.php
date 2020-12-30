<?php
use Telegram\Webhook\Bot;
use function GuzzleHttp\Psr7\str;

$bot = new Bot('1202245887:AAGY5EOWPMxzWrjbj_bZcj2rw1WQ3DM1HUI');

$response = $bot->getWebhookInfo();

echo str($response);
