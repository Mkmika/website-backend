<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function sendMessage(Request $request){
       Mail::send(new ContactUsMail([
        'fullname' => $request -> input('fullname'),
        'email' => $request -> input('email'),
        'message' => $request -> input('message')
       ]));
       return back()->with("success", "Votre message a bien été envoyé!!");
    }
}
