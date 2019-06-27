<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ConnexionController extends Controller
{
     public function formulaire()
    {
        return view('connexion');
    }
    
    public function traitement()
    {
        $username = $_POST['pseudo'];
        $password = $_POST['password'];
        $username_err= "";
        request()->validate([
           'pseudo' => ['required'],
           'password' => ['required','min:8'],
        ]);
        //Initialize the session
        session_start();
        $pdo = DB::connection()->getPdo();
        $query = "SELECT ID_USER,PSEUDO,PASS_USER,EMAIL_USER FROM utilisateur where PSEUDO = '$username'";
       // $result1 = $pdo->prepare($query1);
       // $result1->execute();
        
        /*Check if the user iis already logged in, if yes then redirect him to connnect page 
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            return redirect('/connexion');
            exit;
        } */
        
        if($stmt = $pdo->prepare($query)){
           // $stmt->bindParam(":username", $_POST['pseudo'],PDO::PARAM_STR);
            
            if($stmt->execute()){
                //check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["ID_USER"];
                        $username = $row["PSEUDO"];
                        $crypt_password = $row["PASS_USER"];
                        $email = $row["EMAIL_USER"];
                        if($password == $crypt_password){
                            //Password is correct, so start a new session
                            //session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] =  $id;
                            $_SESSION["username"] = $username;
                            
                            //redirect user to compte page
                           return redirect('/monCompte');
                        }else{
                            //Display an error message if password is was not valid
                            $password_err = "The password you entered was not valid.";
                            return back()->withInput();
                               
                        }
                    }
                }else{
                    //display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                     return back()->withInput()->withErrors([
                                'pseudo' => $username_err,
                            ]);
                   // return back()->withInput();
                }
            }
            
            //close statement
            unset($stmt);
        }
            
    }
    //
}
