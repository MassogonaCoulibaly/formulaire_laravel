<?php

namespace App\Http\Controllers;
use App\Models\Eleve;
use Illuminate\Http\Request;
class EleveController extends Controller
{
    public function liste()
    {
        $eleves = Eleve::all();
        return view('index', compact('eleves'));
    }
    public function store(Request $request)
    {
        return view('welcome');
    }
    public function traitement_register(Request $Request)
    {
        $Request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'tuteur' => 'required',
        ]);
        $eleves = new Eleve();
        $eleves->nom = $Request->input('nom');
        $eleves->prenom = $Request->input('prenom');
        $eleves->tuteur = $Request->input('tuteur');
        $eleves->save();

        return redirect('/index')->with('success', 'Élève enregistré avec succès.');
    }
}
