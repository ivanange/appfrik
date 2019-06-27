<html>
  <head>
    <meta content="">
     <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
     <link rel="stylesheet" href="{{asset('css/layout.css')}}">
     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script> 
    <style></style>
  </head>
  <body>
  	<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><img src="{{asset('svg/logo8.svg')}}" class="logo" width="172" height="112" alt=""></a>
				</div>
				<div id="myNavbar">
					<ul class="connect-link">
                        @if(auth()->check())
                            <button class="login-btn"><li><a href="#" class="fa fa-user">Disconnect</a></li></button>  
                        @else
                             <button class="inscrip-btn"><li><a href="#" class="fa fa-user">Subscribe</a></li></button>
                            <button class="login-btn"><li><a href="#" class="fa fa-user">Login</a></li></button>  
                        @endif    
                    </ul>
				</div>
			</div>
	  </nav>
<!--

-->
    @yield('contenu')
   
    <div class="footer">
        <p>Footer Text</p>
    </div>
  </body>
    <style>
  /*    body {margin: 0;}
      
      .navbar {          
          background-color: #fff;
          height: 100px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      ul{
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
      }
      ul li {float: right;}
      
      ul li a {
          display: block;
          color: #0d001a;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
      }
      ul li a:hover {font-size:16px;}
      ul li.right {float: right;}
      
      @media screen and (max-width: 600px){
          ul li.right, 
          ul li {float: none;}
      }*/
</style>
</html>