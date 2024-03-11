<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Emploi;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function show() {
        $annonces = Annonce::all();
        $emplois = Emploi::all();

        return view('index', ['emplois' => $emplois]);
    }
}
