<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }
    
    public function traitement()
    {
     //   include('connect.php'); On se connecte à la BD
        
        //Definition des parametres
        $date_time = date('Y-m-d h:i:s');
        $password = request('password');
        request()->validate([
           'email' => ['required','email'],
           'pseudo' => ['required'],
           'password' => ['required','confirmed','min:8'],
           'password_confirmation' => ['required'],
        ]);
        
        $pdo = DB::connection()->getPdo();
        $query1 = "INSERT INTO utilisateur (PSEUDO,PASS_USER,EMAIL_USER,DERNIER_VISITE)
        VALUES ('$_POST[pseudo]','$password','$_POST[email]','$date_time')";
        $result1 = $pdo->prepare($query1);
        if($result1->execute()) return redirect('/connexion');
        else return back()->withInput();
        
        
        //Parametre de connection à la BD
        
    }
    //
}
