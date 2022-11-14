<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function SendMail(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];
        
        Mail::to('receive@mail.com')->send(new ContactMail($data));
        return "Thanks For Reaching Out!!!";
       
    }
}
