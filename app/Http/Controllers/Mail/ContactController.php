<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function homeSubmit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'lastName'=> 'required|string',
            'email' => 'required|email|string',
            'phone'=>'required|string|max:30',
            'typeOf'=>'required|string',
            'message' => 'required|string|max:5000',

        ]);

        Mail::to('info@cesarscoffeecup.com')
            ->send(new ContactFormMail($data));

        return redirect('/')->with('success', 'Message sent');
    }
    // public function coRoastingSubmit(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required|string',
    //         'lastName'=> 'required|string',
    //         'businessName'=>'required|string',
    //         'email' => 'required|email|string',
    //         'phone'=>'required|string|max:30',
    //         'typeOf'=>'required|string',
    //         'experience'=>'required|string',
    //         'date'=>'required|date',
    //         'message' => 'required|string|max:5000',

    //     ]);

    //     Mail::to('info@cesarscoffeecup.com')
    //         ->send(new ContactFormMail($data));

    //     return redirect('coRoasting#coRoastingForm')->with('success', 'Message sent');
    // }
}