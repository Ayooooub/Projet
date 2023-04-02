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
                .form-signup input[type="number"],
                .form-signup input[type="file"]
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
                  margin-left:25%;
                  width: 50%;
                }
                .form-signup button[type="submit"]:hover {
                  background-color: #447598;
          
                }
</style>





 <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form-signup" method="post" action="{{  route('sell.store')  }}" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                  
                  <div class="form-group mt-2 mb-0">
                        <label for="Adresse"> Adresse</label>
                        <input type="text" class="form-control" name="adresse" placeholder="Entrez votre adresse" required>
                       
                  </div>
                  <div class="form-group mb-0">
                        <div class="row">
                              <div class="col">
                                <label for="prix">Prix:</label>
                                
                                <input type="number" class="form-control" name="prix" placeholder="" required>
                              </div>
                              <div class="col">
                                <label for="surface">Surface:</label>
                                <input type="number" class="form-control" name="surface" placeholder="" required>
                              </div>
                        </div>
                  </div>
                  <div class="form-row mt-3">
                          <div class="form-check">
                                <input class="form-check-input checkbox-no-label" type="checkbox" value="Appartement" id="check2" name="App-checkbox"> Appartement
                          </div>
                          <div class="form-check">
                                <input class="form-check-input checkbox-no-label" type="checkbox" value="Maison" id="check3" name="Maison-checkbox"> Maison
                          </div>
                          
                 </div>
                  
                  <div class="form-group mt-2 mb-0">
                        <label for="image">Image :</label>
                        <input multiple type="file" class="form-control"  name="image" required>
                            
                  </div>
            
                  <div class="form-group mt-2 mb-0">
                      <label for="nbpiece">Nombre de pièces:</label>
                      <input type="number" class="form-control" name="nbpiece" placeholder="" required>
                  </div>

                  <div class="form-row mt-3">
                          <div class="form-check">
                                <input class="form-check-input checkbox-no-label" type="checkbox" value="Vente" id="check2" name="Vente"> A vendre
                          </div>
                          <div class="form-check">
                                <input class="form-check-input checkbox-no-label" type="checkbox" value="Location" id="check3" name="Location"> A louer
                          </div>
                         
                 </div>
                  <button type="submit" class="btn btn-primary mt-3" name="save">Soumettre</button>
                  
                    @include('auth.partials.copy')
              </form>
          </div>
      </div>
  </div>
 

@endsection