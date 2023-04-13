@extends('layouts.auth-master')

@section('content')
 
  <style>
    .jumbotron {
    
      /* animation: slide 10s ease infinite; */
      height: 40vh;
     width: 650px;
      display: flex; 
     
      background-image: url('storage/homepics/smth.jpg'), url('storage/homepics/smth1.jpg'), url('storage/homepics/adsi.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  animation: slide 10s infinite;
     
        /* background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.25)),url(background.jpg); */
      
        background-position: center;
    }
  

@keyframes slide {
  0% { background-image: url('storage/homepics/smth.jpg'), url('storage/homepics/smth1.jpg'), url('storage/homepics/adsi.jpg'); }
  33% { background-image: url('storage/homepics/smth1.jpg'), url('storage/homepics/adsi.jpg'), url('storage/homepics/smth.jpg'); }
  66% { background-image: url('storage/homepics/storage/adsi.jpg'), url('storage/homepics/smth.jpg'), url('storage/homepics/smth1.jpg'); }
  100% { background-image: url('storage/homepics/smth.jpg'), url('storage/homepics/smth1.jpg'), url('storage/homepics/adsi.jpg'); }
}
    /* Center the page content */
.container {
  margin-top: 50px;
}

/* Style the article cards */
.card {
  max-width: 500px;
}

/* Style the article images */
.card img {
  width: 100%;
  height: 100%;
}

  /* Style par défaut pour le titre */
  .card-title a {
    color: black; /* Couleur du texte en noir */
    text-decoration: none; /* Pas de soulignement */
    transition: color 0.3s ease; /* Transition pour le changement de couleur en douceur */
  }
  
  /* Style au survol du titre */
  .card-title a:hover {
    color: blue; /* Couleur du texte en bleu */
    text-decoration: none; /* Pas de soulignement */
  }


/* Style the section headings */
h2 {
  font-weight: bold;
  margin-bottom: 30px;
}

/* Style the advertisement images */
.col-md-6 img {
  width: 100%;
  /*height: auto; */
}
#zz{
  width: auto;
}
   /* Style pour le conteneur de la zone colorée */
    .alert-container {
      background-image: url('background.jpg'); /* Chemin de l'image d'arrière-plan */
      background-size: cover; /* Ajuster la taille de l'image pour couvrir le conteneur */
      padding: 50px; /* Espacement interne pour le contenu */
      color: #ffffff; /* Couleur du texte */
      margin-left: 10%;
      padding-bottom: 10%;
    }
    
    /* Style pour le formulaire d'inscription */
    .alert-form {
      max-width: 400px; /* Largeur maximale du formulaire */
      margin: 0 auto; /* Centrer le formulaire horizontalement */
    }
    
    /* Style pour les champs de formulaire */
    .alert-form input[type="text"],
    .alert-form input[type="email"] {
      width: 100%; /* Largeur à 100% pour occuper tout l'espace disponible */
      padding: 10px; /* Espacement interne pour les champs */
      margin-bottom: 20px; /* Marge inférieure pour les espacer */
    }
    
    /* Style pour le bouton d'inscription */
    .alert-form input[type="submit"] {
      background-color: #007bff; /* Couleur de fond du bouton */
      color: #fff; /* Couleur du texte du bouton */
      border: none; /* Pas de bordure */
      padding: 10px 20px; /* Espacement interne pour le bouton */
      cursor: pointer; /* Curseur pointeur au survol */
    }
  </style>


  <div class="container">
    <div class="row">
      <div class="col-lg-6" >
        <h2>Actualités & Conseils</h2>
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4 order-md-2">
              <img src="storage/articlespics/imgy.webp" alt="Article Image">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><a href="" class="text-decoration-none">Vente d'appartements de luxe avec terasse à Agadir Maroc</a></h5>
                <p class="card-text"><small  class="text-muted">Découvrez notre nouvelle offre exceptionnelle d'appartements de luxe avec terrasse à Agadir, au Maroc. Situés dans des emplacements prisés de la ville</small> </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4 order-md-2">
              <img src="storage/articlespics/prestige.jpg" alt="Article Image">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><a href="https://proprietes.lefigaro.fr/conseils/acheter-un-bien-de-prestige-avec-vue-1619224649/" class="text-decoration-none">Acheter un bien de prestige avec vue</a></h5>
                <p class="card-text"><small class="text-muted"> Vous rêvez d'acquérir un bien de prestige avec une vue panoramique à couper le souffle ? Voici quelques conseils essentiels pour vous aider dans votre démarche d'achat...</small></p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4 order-md-2">
              <img src="storage/homepics/Article3.jpg" alt="Article Image">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><a href="">Article Title</a></h5>
                <p class="card-text">gna sed sem suscipit, sit amet volutpat enim gravida.</p>
                <p class="card-text"><small class="text-muted">Published 3 days ago</small></p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-lg-4">
        
        <a href="https://immobilier.lefigaro.fr/article/voici-10-logements-a-vendre-avec-jardin-ou-terrasse-d-exception_13f6acc6-d392-11ed-92bf-5b52037a802b/"><img src="storage/articlespics/annone.PNG" alt="Advertisement Image" id="zz"></a>
        <div class="jumbotron jumbotron-fluid"></div>
        <div class="alert-container">
          <h1>Créer une alerte</h1>
          <p>Entrez votre adresse e-mail pour recevoir des alertes :</p>
          <form class="alert-form" action="#" method="post"> <!-- Remplacez "#" par l'action souhaitée pour le formulaire -->
            <input type="email" name="email" placeholder="Adresse e-mail" required>
            <input type="submit" value="S'inscrire">
          </form>
        </div>
      </div>
      </div>
    </div>
    
  </div>
    <!-- Footer -->
<footer class="page-footer font-small bg-light pt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5>Kay.com</h5>
        <p class="footer-text"><small class="text-muted"> votre destination pour trouver la maison de vos rêves. Notre site web propose une large gamme de propriétés dans les différentes régions du royaume, adaptées à tous les budgets. Nous avons une équipe de professionnels dévoués qui travaillent dur pour satisfaire tous vos besoins immobiliers. Rejoignez-nous aujourd'hui et commencez votre parcours pour trouver la maison de vos rêves.</p>
        </small></div>
      <div class="col-md-3">
        <h5>Liens</h5>
        <ul class="list-unstyled">
          <li><a href="#"></a></li>
          <li><a href="#">Articles</a></li>
          <li><a href="#">Agents</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Contact</h5>
        <ul class="list-unstyled">
          <ul class="list-unstyled list-inline mt-3">
            <li class="list-inline-item"><a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a></li>
            <li class="list-inline-item"><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
          </ul>
          <li>Agadir, Maroc 12345</li>
          <li>info@Kay.com</li>
          <li>555-555-5555</li>
        </ul>
      
      </div>
    </div>
  </div>
</footer>

@endsection
