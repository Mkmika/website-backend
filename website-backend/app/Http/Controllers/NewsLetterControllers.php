<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsLetter;

class NewsLetterControllers extends Controller
{
    //

    public function storeNewsletter(Request $request){
        NewsLetter::create([
            'email' =>$request->input('email'),
        ]);
        return redirect("/");
    }

}
