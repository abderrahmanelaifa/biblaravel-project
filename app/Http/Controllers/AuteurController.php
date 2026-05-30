<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    //afficher la liste des auteurs
    public function index(){
        $authors= Auteur::all();
        return view('authors.index',compact('authors'));
    
    }

    //afficher le formulaire de creation d'un auteur
    public function create(){
        return view('authors.create');
}

    //enregistrer un auteur
    public function store (Request $request){
        $request->validate([
            'nom'=>'required|string|max:255',
            'bibliographie'=>'nullable|string',
        ]);

        Auteur::create($request->all());

        return redirect()->route('authors.index')->with('success','Auteur ajouté avec succès');
    }


    //affihe le formulaire de modification
    public function edit (Auteur $author){
        return view ('authors.edit',compact('author'));
    }


    //mettre a jour un auteur
    public function update (Request $request, Auteur $author){
        $request->validate([
            'nom'=>'required|string|max:255',
            'bibliographie'=>'nullable|string',
        ]);

        $author->update($request->validated());

        return redirect()->route('authors.index')->with('success','auteur mis a jour');
    }

    //delete un element de la table bdd
    public function destroy(Auteur $author){
        $author->delete();
        return redirect()->route ('authors.index')->with ('success','auteur supprimer');
    

    }

}