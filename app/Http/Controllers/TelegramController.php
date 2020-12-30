<?php

namespace App\Http\Controllers;

use App\Traits\RequestTrait;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\FileUpload\InputFile;


class TelegramController extends Controller
{
    use RequestTrait;




    public function webhook()
    {
        return $this->apiRequest('setWebhook', [
            'url' => str_replace('http', 'https',url(route('webhook')))
        ]) ?['success'] : ['something wrong'];

    }
    public function index()
    {
        $update = json_decode(file_get_contents("php://input"));
      //  if(isset($update->message)){
           // $message = $update->message;
           // if(isset($message->text)){
           //     switch($message->text){
           //         case'/start';
           //         $this->apiRequest('sendMessage',[
           //             'chat_id'=> $message->chat->id,
           //             'text'=>'Hello',
            //            'reply_to_message_id'=>$message->message_id,
           //             'reply_'

           //         ]

           //     }

           // }
       // }
        $this->apiRequest('sendMessage',[
           'chat_id'=> $update->message->chat->id,
            'text'=>'Good'
        ]);

    }


    public function updatedActivity()
   {
        $activity = Telegram::getUpdates();
        dd($activity);
    }

    public function sendMessage()
    {
        return view('message');

    }

   public function storeMessage(Request $request)
   {
        $request->validate([
           'email' => 'required|email',
           'message' => 'required'
        ]);

        $text = "Xin chào bạn!\n"
            . "<b>Email Address: </b>\n"
          . "$request->email\n"
           . "<b>Message: </b>\n"
           . $request->message;

        Telegram::sendMessage([
            'chat_id' => '1459100314',
          'parse_mode' => 'HTML',
        'text' => $text
        ]);


        return redirect()->back();
   }
   // public function sendPhoto()
   //{
       // return view('photo');
   // }

    //public function storePhoto(Request $request)
    //{
        //$request->validate([
        //    'file' => 'file|mimes:jpeg,png,gif'
       // ]);

       // $photo = $request->file('file');

       // Telegram::sendPhoto([
        //    'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
        //    'photo' => InputFile::createFromContents(file_get_contents($photo->getRealPath()), str_random(10) . '.' . $photo->getClientOriginalExtension())
      //  ]);

      //  return redirect()->back();
   // }
 }
