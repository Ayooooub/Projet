@extends('layouts.app-master')

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

                .form-signup {
                  background-color: #fff;
                  border-radius: 20px;
                  padding: 20px;
                  margin-top: 20px;
                  box-shadow: 0px 10px 30px 0px rgba(0,0,0,0.1);
                }
                .form-signup h2 {
                  text-align: center;
                  margin-bottom: 30px;
                }
                .form-signup input[type="text"],
                .form-signup input[type="email"],
                .form-signup input[type="password"]
               {
                  border-radius: 10px;
                  margin-bottom: 20px;
                  padding: 10px;
                }
                .form-signup button[type="submit"] {
                  background-color: #6999BB;
                  border: none;
                  color: #fff;
                  border-radius: 10px;
                  padding: 10px 10px;
                  font-size: 18px;
                  margin-top: 20px;
                  width: 100%;
                }
                .form-signup button[type="submit"]:hover {
                  background-color: #447598;
          
                }
              </style>        

  
       
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form-signup" method="post" action="{{ route('register.perform') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <h2>Créer un Compte</h2>
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col">
                                <label for="name">Nom:</label>
                                
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
                            </div>
                            <div class="col">
                                <label for="name">Prénom:</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-2 mb-0">
                        <label for="email">Adresse email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
                        @if ($errors->has('email'))
                           <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mt-2 mb-0">
                        <label for="password">Mot de passe:</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}"
                            placeholder="Entrez votre mot de passe" required>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                    <div class="form-group mt-2 mb-0">
                        <label for="password">Mot de passe:</label>
                        <input type="password" class="form-control" id="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
                            placeholder="Confirmez votre mot de passe" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                    </div>
                    <div class="form-group mt-2 mb-0">
                        <label for="numtel">Téléphone:</label>
                        <input type="text" class="form-control" id="tele" name="numtel" placeholder="Entrez votre numéro de téléphone " required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" name="create">Créer un compte</button>
                    <div class="create-account">
                       <p style="text-align: center;"> Déjà inscrit ? <a href="seconnecter.php">se connecter</a> </p> 
                    </div>
                    @include('auth.partials.copy')
                  </form>
            </div>
        </div>
    </div>



@endsection