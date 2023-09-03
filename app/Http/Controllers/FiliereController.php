<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;

class FiliereController extends Controller
{
    public function liste_des_filieres()
    {
        $filieres=Filiere::all();
        return view('filiere.liste_filiere', compact('filieres'));
    }

    public function ajouter_filiere()
    {
        return view('filiere\ajout_filiere');
    } 

    public function traitement_filiere(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'description'=>'required',
        
        ]);
        

        $filiere=new Filiere();
        $filiere->nom = $request->nom;
        $filiere->description = $request->description;
        $filiere->save();


        return redirect('/ajout_filiere')->with('status','La filière a été ajouté avec succès');
    }
}
