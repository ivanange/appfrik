<?php
   
             // Initialisation de la variable de message. 
        $message = ""; 
        
        // Traitement du formulaire si il y a un fichier envoyé sur le serveur.
       
            // Récupére les informations sur le fichier. 
            $oFileInfos = $_FILES["fichier"]; 
         
            // nom du fichier. 
            $nom = $oFileInfos["name"]; 
        
            // le type MIME.  
            $type_mime = $oFileInfos["type"]; 
        
            // la taille. 
            $taille = $oFileInfos["size"]; 
        
            // emplacement du fichier temporaire. 
            $fichier_temporaire = $oFileInfos["tmp_name"]; 
        
            // le code d’erreur. 
            $code_erreur = $oFileInfos["error"]; 
            
            // Fichier bien reçu. 
                    // Détermine sa destination finale. 
                    $destination = "Upload/profil.jpg";
                    
                    //Suppression des anciens fichiers
                    
                
                    // Copie le fichier temporaire
                    if (copy($fichier_temporaire,$destination))
                    {
                        //Toutes les images poussées auront le même nom qui est profil
                        // Copie OK
                        $message  = "Transfert termine - Fichier = $nom - "; 
                        $message .= "Taille = $taille octets - "; 
                        $message .= "Type MIME = $type_mime.";
                     
                        
                    }
                    else
                    { 
                        // Problème de copie => message d’erreur. 
                        $message = "Probleme de copie sur le serveur."; 
                    } 
            
     
      header('location:/parametre');
?>
  	