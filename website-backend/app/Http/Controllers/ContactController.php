<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function sendMessage(Request $request){
    //    Contact::create([
    //     'fullname' => $request -> input('fullname'),
    //     'email' => $request -> input('email'),
    //     'message' => $request -> input('message')
    //    ]);

       Mail::to("agossihoundjenoukon@gmail.com")->send(new WelcomeEmail([
        'fullname' => $request -> input('fullname'),
        'email' => $request -> input('email'),
        'message' => $request -> input('message')
       ]));
       return true;
    }
}
