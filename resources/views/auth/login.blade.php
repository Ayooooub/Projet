@extends('layouts.auth-master')

@section('content')



  
    <style>
      
      .banner {
                  content: "";
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.25)),url(background.jpg);
                  background-size: cover;
                  background-position: center;
                  z-index: -1;
                }


      .form-login {
        background-color: #fff;
        border-radius: 20px;
        padding: 30px;
        margin-top: 80px;
        box-shadow: 0px 10px 30px 0px rgba(0,0,0,0.1);
      }
      .form-login h2 {
        text-align: center;
        margin-bottom: 30px;
      }
      .form-login input[type="email"],
      .form-login input[type="password"] {
        border-radius: 10px;
        margin-bottom: 20px;
        padding: 10px;
      }
      .form-login button[type="submit"] {
        background-color: #6999BB;
        
        
        border: none;
        color: #fff;
        border-radius: 10px;
        padding: 10px 20px;
        font-size: 18px;
        margin-top: 20px;
        width: 100%;
      }
      .form-login button[type="submit"]:hover {
        background-color: #447598;

      }
      .form-login .create-account {
        text-align: center;
        margin-top: 20px;
      }
      .form-login .create-account a {
        color: #6c757d;
      }
    </style>
   


 

    
   
    
        
     
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form class="form-login" method="POST" action="{{ route('login.perform') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <h2>Connexion</h2>
                @include('layouts.partials.messages')

                <div class="form-group">
                  <label for="email">Adresse email:</label>
                  <input type="email" class="form-control" name="email" id="email"  value="{{ old('email') }}" placeholder="Entrez votre email">
                  @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="password">Mot de passe:</label>
                  <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Entrez votre mot de passe">
                  @if ($errors->has('password'))
                  <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                  @endif
                </div>
                <button type="submit" class="w-100 btn btn-primary" >Se connecter</button>
                <div class="create-account">
                  <a href="{{ route('register.show')}}">Créer un compte</a>
                </div>
                @include('auth.partials.copy')
              </form>
            </div>
          </div>
        </div>
    
      
   

@endsection