<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emploi;

class EmploiController extends Controller
{
    //Renvoi tous les emplois
    public function getAll() {
        $emplois = Emploi::all();

        return view('emploi_all', ['emplois' => $emplois]);
    }


    // Renvoi la vue avec les informations d'un emploi
    public function getEmploi($id) {
        $emploi = Emploi::find($id);

        return view('singleEmploi', ['emploi' => $emploi]);
    }
}
