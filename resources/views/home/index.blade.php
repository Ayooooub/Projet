@extends('layouts.auth-master')

@section('content')

    
    @user
    <!-- <style> 
 body{
	/* width: 100%;
	height: 100vh; */
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.25)),url(background.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
} -->


</style>
        
    <title>User Profile</title>

    <style>
      
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 20px auto;
            display: block;
        }
        .username {
            text-align: center;
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 0;
        }
       
        .left-content {
    min-height: 800px;
    background-color: #f8f9fa !important;
    margin-left: 20px;
}

        .right-content {
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 20px;
        }
        .spacer {
            width: 1%;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="margin-top:10px;">
        <div class="row">
            <!-- Left Navigation Bar -->
            <div class="col-3 bg-primary left-content">
            <img src="{{ asset('profile_pics/' . Auth::user()->profilep)   }}" class="profile-picture">

            
            <h2 class="username">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h2>

                <ul class="nav flex-column Show">
                    <li class="nav-item">
                        <a class="nav-link" href="#personal-info"><i class="fas fa-id-card"></i> Mes infos personnelles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#favorites"><i class="fas fa-heart"></i> Voir mes favoris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#annonce"><i class="fas fa-pencil-alt"></i> Déposer une annonce</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#account-settings"><i class="fas fa-cog"></i> Paramaitres</a>
                    </li>
                   
                  
                   
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#logout"><i class="fas fa-sign-out-alt"></i> Deconnexion</a>
                    </li>
                </ul>
            </div>
            
            
            <!-- Spacer Column -->
            <!-- <div class=" spacer"></div> -->
            <!-- Right Content Area -->
            <div class="col-8 right-content">
    <div class ="info_panel" style="padding-top: 10%;">
        <h3>information perso</h3>
        <table class="table">
            <tbody>
                <tr>
                    <th>Nom</th>
                    <td>{{ auth()->user()->nom }}</td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <td>{{ auth()->user()->prenom }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ auth()->user()->email }}</td>
                </tr>
                <tr>
                    <th>Téléphone</th>
                    <td>{{ auth()->user()->numtel }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ auth()->user()->adresse }}</td>
                </tr>
            </tbody>
        </table>
    </div>


            <div class="fav_panel">
                <h3>Mes favoris</h3>
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="annonce_panel">
                <h3>Déposer une annonce de maison</h3>
                <form>
                  <div class="form-group">
                    <label for="title">Titre de l'annonce:</label>
                    <input type="text" class="form-control" id="title" placeholder="Entrez un titre pour votre annonce">
                  </div>
                  <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" rows="5" placeholder="Entrez une description pour votre annonce"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="photos">Images:</label>
                    <input type="file" accept="image/*" multiple>
                  </div>
                  <div class="form-group">
                    <label for="price">Prix:</label>
                    <input type="number" class="form-control" id="price" placeholder="Entrez le prix pour votre annonce">
                  </div>
                  <div class="form-group">
                    <label for="bedrooms">Nombre de chambres:</label>
                    <input type="number" class="form-control" id="bedrooms" placeholder="Entrez le nombre de chambres de votre maison">
                  </div>
                  <div class="form-group">
                    <label for="bathrooms">Nombre de salles de bain:</label>
                    <input type="number" class="form-control" id="bathrooms" placeholder="Entrez le nombre de salles de bain de votre maison">
                  </div>
                  <div class="form-group">
                    <label for="size">Surface :</label>
                    <input type="number" class="form-control" id="size" placeholder="Entrez la taille de votre maison en mètres carrés">
                  </div>
                  <div class="form-group">
                    <label for="location">Emplacement:</label>
                    <input type="text" class="form-control" id="location" placeholder="Entrez l'emplacement de votre maison">
                  </div>

                  <button type="submit" class="btn btn-primary">Déposer l'annonce</button>
                </form>
              </div>
              
            </div>
        </div>
    </div>
    <script>
        // Get the link and the content element
        const link = document.querySelector('a[href="#personal-info"]');
        const content = document.querySelector('.info_panel');
        content.style.display = 'block';
      
        const flink = document.querySelector('a[href="#favorites"]');
        const fcontent = document.querySelector('.fav_panel');
        fcontent.style.display = 'none';
      
        const alink = document.querySelector('a[href="#annonce"]');
        const acontent = document.querySelector('.annonce_panel');
        acontent.style.display = 'none';
      
        // Add event listener to the link
        link.addEventListener('click', () => {
          // Toggle the display of the content element
          if (content.style.display === 'none') {
            content.style.display = 'block';
            fcontent.style.display = 'none';
            acontent.style.display = 'none';
          }
        });
      
        // Add event listener to the link
        flink.addEventListener('click', () => {
          // Toggle the display of the content element
          if (fcontent.style.display === 'none') {
            fcontent.style.display = 'block';
            content.style.display = 'none';
            acontent.style.display = 'none';
          }
        });
      
        // Add event listener to the link
        alink.addEventListener('click', () => {
          // Toggle the display of the content element
          if (acontent.style.display === 'none') {
            acontent.style.display = 'block';
            content.style.display = 'none';
            fcontent.style.display = 'none';
          }
        });
      </script>


       
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
          <a href="{{ route('users.show')}}" class="btn btn-primary">Gérer les clients</a>
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