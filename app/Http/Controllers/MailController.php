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
            $message->to('info@fahrocatovic.ba', 'NO REPLY')->subject('Nova poruka sa stranice');
        }
        );
    \Session::flash('flash_message', 'Uspješno ste poslali poruku');
    return redirect('/');
    }

}
