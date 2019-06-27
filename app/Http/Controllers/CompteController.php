<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        
        return view('monCompte');
    }
    public function deconnexion()
    {
        session_start();
        session_destroy();
        return view('connexion');
    }
    //
}
