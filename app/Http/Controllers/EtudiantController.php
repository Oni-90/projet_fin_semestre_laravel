<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants=Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    } 

    public function traitement_ajout(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'filiere'=>'required',
        ]);
        

        $etudiant=new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->filiere = $request->filiere;
        $etudiant->save();


        return redirect('/ajouter')->with('status','L\'étudiant a été ajouté avec succès');
    }
}
