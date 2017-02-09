<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

public function send(Request $request){
    Mail::send('emails.mail', [
        'email'=>$request->input('emailSender'),
        'name'=>$request->input('nameSender'),
        'message_s'=>$request->input('messageSender'),
        ], function($message)
        {
            $message->to('kenan_balija@hotmail.com', 'NO REPLY')->subject('Nova poruka sa stranice');
            $message->to('conanobalija@gmail.com', 'NO REPLY')->subject('Nova poruka sa stranice');
        }
        );
    return redirect('/');
    }

}
