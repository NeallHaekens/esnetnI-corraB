<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
        return view('send_email');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'topic' => 'required',
            'description' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'topic' => $request->topic,
            'description' => $request->description
        );

        Mail::to($request->email)->send(new SendMail($data));
        return back()->with('succes', 'Thanks for contacting us!');
    }
}
