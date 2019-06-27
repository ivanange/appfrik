<html>
  <head>
    <meta content="">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/layout2.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>   
     <style></style>
  </head>
  <body>
        
    <nav class="navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="#"><img src="{{asset('svg/logo8.png')}}" class="logo" width="112" height="68" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>   
                <li><a href="#">Page 2</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Notification</a>
                    <ul class="dropdown-menu" id="notification">   
                        <li>
                            <div class="alert alert-info fade in">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-info fade in">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-info fade in">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
                            </div>
                        </li>
                    </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown">Me</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">
                             <?php
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
                               echo '<img src="'.$nomfichier.'" width="72" height="72" alt="">';
                                //On ferme le repertoire
                                closedir($repertoire);
                            } 
                            //Definition du chemin
                            $chemin = "./Upload";
                            //Appel de la fonction
                            $fichiers= explorer($chemin);	
                        ?>
                    Username</a></li> <!--nom de l'abonné-->
                    <li><a href="#">Your profile</a></li>
                    <li><a href="/parametre">Settings</a></li>
                    <li ><a href="#">help</a></li>
                  </ul>
                </li>
                <li><a href="/deconnexion"><span class="fa fa-power-off"></span>Sign out</a></li>
              </ul>
            </div>
        </div>
    </nav>
    
    <div class="field-user">  
        <div class="container">
            <ul class="nav nav-tabs">
              <li class="active"><a class="fa fa-list-alt" data-toggle="tab" href="#home"><span>Forum</span></a></li>
              <li><a class="fa fa-envelope" data-toggle="tab" href="#menu1"><span>Message</span></a></li>
              <li><a  data-toggle="tab" href="#menu2"><sapn>Menu 2</sapn></a></li>
              <li><a data-toggle="tab" href="#menu3"><sapn>Menu 3</sapn></a></li>
            </ul>
          
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <ul>
                    <h5>Category</h5>
                    <li>Academy</li>
                    <li>Developpment</li>   
                </ul>
              </div>
              <div id="menu1" class="tab-pane fade">
                <ul>
                    <li><a href="/inbox#message">inbox</a></li>
                    <li>view message</li>
                    <li>compose message</li>    
                </ul>
              </div>
              <div id="menu2" class="tab-pane fade">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
              </div>
              <div id="menu3" class="tab-pane fade">
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            </div>
        </div>
    </div>     
    
    <div class="user-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner ">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">50,000</span></h2>
                            <p>Total Sharing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner ">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">90,000</span>k</h2>
                            <p>Website Impressions</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner ">
                        <div class="website-traffic-ctn">
                            <h2>$<span class="counter">40,000</span></h2>
                            <p>Total Online Sales</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">1,000</span></h2>
                            <p>Total Followers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <hr>   
    
       @yield('contenu')
   
   
    <footer >  
        <div class="field-info"> 
             <div class="container text-center">    
                 <br>
                 <div class="row">
                     <div class="col-sm-2">
                           <p>© 2019 <span>Ushare</span></p>
                     </div> 
                     <div class="col-sm-2">
                           <p>Terms</p>
                     </div>
                     <div class="col-sm-2"> 
                           <p class="logoshare" data-toggle="tooltip" data-placement="bottom" title="Ushare"><img src="{{asset('svg/lo.png')}}" width="42" height="42" alt="" ></p>    
                     </div>
                     <div class="col-sm-2">                 
                           <p>About</p>
                     </div>
                     <div class="col-sm-2"> 
                           <p>Contact Ushare</p>    
                     </div>    
                     <div class="col-sm-2"> 
                           <p>Help</p>
                     </div>  
                 </div>
                  <div class="field-sug">
                      <div class="col-sm-2"> 
                           <form>
                                 <textarea name="comment" cols="40" rows="2" wrap="SOFT"></textarea>
                                 <button type="submit" class="comment-btn">Add comment</button>
                           </form>
                      </div> 
                  </div>   
                      
             </div><br>
         </div>  
    </footer>     
  </body>
</html>