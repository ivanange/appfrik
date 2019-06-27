<head>
    <title>Sign in to Ushare</title>
    <meta content="">
    <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
    <srcipt src="{{asset('js/bootstrap.min.js')}}"></srcipt>
    <style></style>
  </head>

  <div class="main">
    <div class="header-wrapper">
        <a class="connect-logo"><img src="{{asset('svg/lo1.svg')}}" width="172" height="112" alt=""></a>
    </div>
   <div class="application-main">
        
      <div class="auth-form">  
            <form action="/connexion" method="post" class="login100-form validate-form">
                {{ csrf_field() }}
                
                <div class="header-brand">
                    <h1 >Sign in to Ushare</h1>
                </div>
                <div class="auth-form-container">   
                        <div class="wrap-input100 validate-input">
                            <div class="control">
                                <label for="pseudo">Username :</label>
                                <input class="input100" type="text" name="pseudo" 
                      <input type="password" class="form-control" name="pass" id="password" >
                                <p id="message1"></p> 
                            </div>
                            @if($errors->has('pseudo'))
                                <p class="help is-danger">{{ $errors->first('pseudo') }}</p>
                            @endif
                        </div>
                           
                        <div class="wrap-input100 validate-input">
                            <div class="control">
                                <label for="password">Password :</label>
                                <input class="input100" type="password" name="password" >
                            </div>
                            @if($errors->has('password'))
                               <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                                          
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                              Login
                            </button>
                                                
                        </div>
                </div>        
            </form>
             <div class="create-account">
                New to Ushare?<a href="#" class="forgot">Create an account.</a>  
            </div>    
        </div>        
  </div>
 </div>   
     