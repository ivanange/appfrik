<head>
    <title>Ushare-connect</title>
    <meta content="">
    <link rel="stylesheet" href="{{asset('css/inscription.css')}}">
    <script src="bootstrap.min.js"></script>
    <style></style>
  </head>
  
@extends('layout')

@section('contenu')
  <div class="main">
    <div class="column-text">
        <h1 class="text-white-h1">Built for student</h1>
        <p class="text-field">
            Ushare is a platform inspired by the way you work.
            From <span class="free">free</span>learning,
            you can <span>share</span>your informations with other
            for help to <span>progress.</span>
        </p>    
    </div>
   <div class="container-sign-in"> 
    <form action="/inscription" method="post" class="login100-form validate-form">
        {{ csrf_field() }}
        
        <div class="wrap-input100 validate-input">
            <div class="control">
                <label for="pseudo">Username</label>
                <input class="input100" type="text" name="pseudo" placeholder="Enter your username">         
            </div>
            @if($errors->has('pseudo'))
                <p class="help is-danger">{{ $errors->first('pseudo') }}</p>
            @endif
        </div>
         
          <div class="wrap-input100 validate-input">
            <div class="control">
                <label for="email">E-mail</label>
                <input class="input100" type="email" name="email" placeholder="exemple@test.com">         
            </div>
            @if($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>
        
        <div class="wrap-input100 validate-input">
            <div class="control">
                <label for="password">Password</label>
                <input class="input100" type="password" name="password" placeholder="Password">
            </div>
            @if($errors->has('password'))
               <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>
        
        <div class="wrap-input100 validate-input">
            <div class="control">
                <label for="password_confirmation">Confirm password</label>
                <input class="input100" type="password" name="password_confirmation" placeholder="Confirm password">
            </div>
            @if($errors->has('password_confirmation'))
               <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
            @endif
        </div>    
                    
        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
            <a href="#" class="forgot">Forgot your email or password?</a>    
        </div>  
    </form>
  </div>
 </div>   
@endsection        