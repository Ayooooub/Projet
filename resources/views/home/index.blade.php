@extends('layouts.auth-master')

@section('content')

    
    @user
    <style> 
 body{
	/* width: 100%;
	height: 100vh; */
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.25)),url(background.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}


</style>
        
            
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Mes favoris</h5>
                            <p class="card-text">Retrouvez ici tous les biens que vous avez sauvegardés en favoris.</p>
                            <a href="#" class="btn btn-primary">Voir mes favoris</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Mes recherches sauvegardées</h5>
                            <p class="card-text">Retrouvez ici toutes les recherches que vous avez sauvegardées.</p>
                            <a href="#" class="btn btn-primary">Voir mes recherches</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Mes annonces en cours</h5>
                            <p class="card-text">Retrouvez ici toutes vos annonces en cours de publication.</p>
                            <a href="#" class="btn btn-primary">Voir mes annonces</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Mes estimations </h5>
                            <p class="card-text">Retrouvez ici toutes vos estimations réalisées de vos biens.</p>
                            <a href="" class="btn btn-primary">Voir mes estimations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       
    @enduser
   

    @admin
<style> 
 body{
	/* width: 100%;
	height: 100vh; */
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.25)),url(background.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}


</style>

    <div class="container-fluid mt-3">
  <h1 style="color: white;">Bienvenue dans votre espace d'administration</h1>
  <p style="color: white;"><b>Vous pouvez gérer les différentes fonctionnalités du Kay à partir du menu de navigation ci-dessus.</b></p>
  <div class="row row-eq-height">
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Gestion des annonces</h5>
          <p class="card-text">Créer, modifier et supprimer les demandes des annonces.</p>
          <a href="#" class="btn btn-primary">Gérer les annonces</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Gestion des clients</h5>
          <p class="card-text">Créer, modifier, supprimer et ajouter des profils de clients.</p>
          <a href="#" class="btn btn-primary">Gérer les clients</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Gestion des demandes de visites</h5>
          <p class="card-text">Gérer les demandes de visite des propriétés par les clients.</p>
          <a href="#" class="btn btn-primary">Accéder à la page</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3 row-eq-height">
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Analytiques</h5>
          <p class="card-text">Afficher les statistiques relatives aux propriétés, telles que le nombre de visites.</p>
          <a href="#" class="btn btn-primary">Accéder à la page</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Gestion des propriétés</h5>
          <p class="card-text">Gérer les informations relatives aux propriétés, ajouter, modifier ou supprimer des biens.</p>
          <a href="#" class="btn btn-primary">Accéder à la page</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Gestion des transactions immobiliers</h5>
          <p class="card-text">Gérer les contrats, les paiements effectués par les clients et les messages reçus.</p>
          <a href="#" class="btn btn-primary">Accéder à la page</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div>

    @endadmin
    
@endsection