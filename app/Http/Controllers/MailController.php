<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function contact_mail_send(Request $request)
    {
        // dd($request->all());
        Mail::to('stackinboxmail@gmail.com')->send( new ContactMail($request));
        return redirect('contact');
    }
}