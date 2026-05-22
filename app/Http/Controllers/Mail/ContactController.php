<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'lastName'=>    'required|string',
            'email' => 'required|email|string',
            'phone'=>'required|string',
            'typeOf'=>'required|string',
            'message' => 'required|string|max:5000',

        ]);

        Mail::to('info@cesarscoffeecup.com')
            ->send(new ContactFormMail($data));

        return redirect('/')->with('success', 'Message sent');
    }
}