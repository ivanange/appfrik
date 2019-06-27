<html>
  <head>
    <meta content="">
    <!--<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css">')}}">-->
     <link rel="stylesheet" href="css/parametre.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>   
     <script src="js/parametre.js"></script>
     <title>Ushare | Parametre</title>  
     <style></style>
  </head>
  <body id="cbody">
        <nav class="navbar navbar-setting" id="cnav">     
                <div class="">
                    <ul class="parameter">
                          <li class="fa fa-cog"><span class="setting">Parametre</span></li>
                    </ul>
                    <div class="user-info">       
                        <?php
                            echo '<span class= "user-profil">Username<span>'; //Nom de l'utilisateur
                               function explorer($chemin) {
                                $repertoire = opendir($chemin);
                                while($fichier = readdir($repertoire) ) 
                                 {
                                 // Inutile d'afficher les entrées . et ..
                                     if(($fichier != ".")&&($fichier != "..")) 
                                     {
                                            $nomfichier = $chemin."/".$fichier;
                                            echo '<div class="responsive">';
                                            echo '<div class="img-profil">';	            
                                            echo '</div>';
                                            echo '</div>';   
                                     }
                                }
                               echo '<img src="'.$nomfichier.'" width="60" height="60" alt="">';
                                //On ferme le repertoire
                                closedir($repertoire);
                            } 
                            //Definition du chemin
                            $chemin = "./Upload";
                            //Appel de la fonction
                            $fichiers= explorer($chemin);	
                        ?>
                        
                    </div>    
                </div>
        </nav>
        
        <div class="update-config">
            <div id="cuser" 
                <div class="config-user" >
                    <ul class="option">
                     <!--   <li class=" fa fa-cog"><img src="{{asset('svg/icons8-edit-480.svg')}}" class="edit" width="52" height="52" alt=""> 
                            <form action="/parametre" method="post" enctype="multipart/form-data"> 
                                <div class="file">  
                                    <input size="100" type="file" name="fichier" value="" /> 
                                    <input type="submit" class="confirm-edit" name="valid" value="Modifier" />     
                                </div> 
                            </form>  -->
                            <form action="import.php" method="post" enctype="multipart/form-data"> 
                                <div> 
                                    Fichier :  
                                    <input size="100" type="file" name="fichier" value="" /> 
                                    <input type="submit" name="valid" value="Envoyer le fichier" /><br /> 
                                
                                </div> 
                            </form>     
                          <!--  <ul>
                                <li><a href="#">Nom utilisateeur</a></li>
                                <li><a href="#">Mot de passe</a></li>
                                <li><a href="#">email</a></li>
                            </ul> -->
                                
                        <li ><span>Profil</span></li>
                        <li ><a  href="#demo" data-toggle="collapse"><span>Arrière plan</span></a>
                            <div class="container">
                               <ul id="demo" class="collapse"> 
                                    <li>Page 1-1</li>
                                    <li>Page 1-2</li>
                                    <li>Page 1-3</li>
                               </ul>     
                          </div>
                           
                        </li>         
                        <li><span>Langue</span></li>    
                    </ul>
                </div>
           </div>      
            
        </div>
        
</div>
      <div>
    
      </div>
        
        <input type="button" value="default" onClick="sombre('black');" />
        <input type="button" value="sombre-bleu" onClick="light('#000d1a');" />
        <input type="button" value="petit" onClick="police1('12px');" />
            
   
     
  </body>

</html>