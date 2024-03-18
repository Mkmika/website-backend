<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsLetter;

class NewsLetterControllers extends Controller
{
    //
    public function listNewsLetter(){
        $newsletters = NewsLetterControllers::all();
        return  view();
    }

    public function storeNewsLetter(Request $request){
        $newsletter = NewsLetterControllers::all();
        NewsLetter::create([
            'email' =>$request->input('email'),
        ]);
        return redirect();
    }

}
