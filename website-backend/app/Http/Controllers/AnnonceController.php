<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function listAnnonce(){
        $annonces = Annonce::all();
        return view('tableauAnnonce',compact('Annonces'));
    }

    public function storeAnnonce(Request $request){
        $annonces = Annonce::all();
        Annonce::create([
            'nomAnnonce' => $request->input('nomAnnonce'),
            'typeAnnonce' => $request->input('typeAnnonce'),
            'contenu' =>$request->input('contenu'),

        ]);
        return redirect('listeAnnonce');

    }

    public function getFormulaireAnnonce (Request $request){

        return view('formulaireAnnonce');

    }

    public function editAnnonce($id){

        $annonces = Annonce::find($id);

        $nomAnnonce = $annonces->nomAnnonce;
        $typeAnnonce = $annonces->typeAnnonce;
        $contenu = $annonces->contenu;

        return view('updateAnnonce',compact('Annonces',));

    }
    public function updateAnnonce(Request $request ,$id)
    {
        $annonces = Annonce::find($id);
        if (null !== ($request->input('nomAnnonce')))
        {
            $annonces->nomAnnonce = $request->input('nomAnnonce');
        }
        if (null !== ($request->input('typeAnnonce')))
        {
            $annonces->typeAnnonce = $request->input('typeAnnonce');
        }
        if (null !== ($request->input('contenu')))
        {
            $annonces->contenu = $request->input('contenu');
        }

        // Sauvegarde
        $annonces->save();
        return redirect('listeAnnonce');
    }



    public function deleteAnnonce($id){
        $annonces = Annonce::find($id);
        $annonces -> delete();
        return redirect('listeAnnonce');

    }


}
