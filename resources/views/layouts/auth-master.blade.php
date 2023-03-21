<!doctype html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <meta charset="utf-8">
   
    
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-6asOXdI3HPxSxJzkw0B/Xy+BLIvG2QcXpgH4Ad8aOIWb97+IQz/6ZwUZZFY8U6W5+6d5J6XbN6HRZfLmj1hgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    

    
    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    
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



      
    </style>

    
   
</head>
<body>

    
    
       
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="homepage.php"><b>Kay.com</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="homepage.php">Acceuil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Conseils & Articles
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item" href="#">Actualités</a>
                <a class="dropdown-item" href="#">Articles</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Conseils</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Acheter
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <a class="dropdown-item" href="#">Maisons</a>
                <a class="dropdown-item" href="#">Appartements</a>
                <a class="dropdown-item" href="#">Immeubles</a>
                
                <a class="dropdown-item" href="#">Terrains</a>
                
                
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Louer
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                <a class="dropdown-item" href="#">Maisons</a>
                <a class="dropdown-item" href="#">Appartements</a>
                <a class="dropdown-item" href="#">Immeubles</a>
                
                <a class="dropdown-item" href="#">Terrains</a>
                
               </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Vendre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Estimer</a>
            </li>
            
            
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
          @auth
          <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <li  class="nav-item"  ><a class="nav-link"><i class="fas fa-heart" >
            </i>         Mes favoris   </a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu" style="left: -105px !important;" aria-labelledby="navbarDropdown4">
                <a class="dropdown-item" href="{{ route('logout.perform') }}">Se Déconnecter</a>
                
                <a class="dropdown-item" href="#">Modifier le profil</a>
            </div>
        </li>
    </li>
</ul>

          @endauth
          @guest
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login.show') }}"><i class="fas fa-user"></i> Se connecter</a>
            </li>
          </ul>
        </div>

          @endguest
        </div>
        


      </nav>
     
        

      <div class="banner">
  
   

        @yield('content')
        
    </div>
    

</body>
</html>