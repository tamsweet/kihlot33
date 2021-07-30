<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Auth;
use TwilioMsg;


class TestController extends Controller
{
    
   	public function test()
   	{
   		return view('test');
   	}

   	public function proceed(Request $request)
    { 
        return $request;

        $fileName = $_FILES["file1"]["name"]; // The file name
        $fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
        $fileType = $_FILES["file1"]["type"]; // The type of file it is
        $fileSize = $_FILES["file1"]["size"]; // File size in bytes
        $fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
        if (!$fileTmpLoc) { // if file not chosen
            echo "ERROR: Please browse for a file before clicking the upload button.";
            exit();
        }
        if(move_uploaded_file($fileTmpLoc, "test_uploads/$fileName")){
            echo "$fileName upload is complete";
        } else {
            echo "move_uploaded_file function failed";
        }


        return 'yes';

        // return view('file_upload_parser');

        return $request;


        $recipients = Auth::user()->mobile;
       

        $msg_test = 'Hey%0a'. '%0a' . Auth::user()->fname;

        $msg = urlencode($msg_test);


        
        $this->sendMessage($msg, $recipients);

        
        return back()->with(['success' => "Messages on their way!"]);
    }


   	// private function sendMessage($message, $recipients)
    // {
    //     $account_sid = getenv("TWILIO_SID");
    //     $auth_token = getenv("TWILIO_AUTH_TOKEN");
    //     $twilio_number = getenv("TWILIO_NUMBER");
    //     $client = new Client($account_sid, $auth_token);
    //     $client->messages->create($recipients, ['from' => $twilio_number, 'body' => $message]);
    // }



    // public function sendNotification()
    // {
    //     $deviceTokens = [
    //         ''
    //     ];
        
    //     return Larafirebase::withTitle('Test Notification')
    //         ->withBody('Hey')
    //         ->withImage('https://miro.medium.com/max/256/1*d69DKqFDwBZn_23mizMWcQ.png')
    //         ->withClickAction('admin/notifications')
    //         ->withPriority('high')
    //         ->sendNotification($deviceTokens);
        
        
    // }

   

}
