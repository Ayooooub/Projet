<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-6asOXdI3HPxSxJzkw0B/Xy+BLIvG2QcXpgH4Ad8aOIWb97+IQz/6ZwUZZFY8U6W5+6d5J6XbN6HRZfLmj1hgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  
  
 
  
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  
  
  <style>
    .jumbotron {
      background-image: url("homepics/real.jpg");
      background-size: cover;
      /* animation: slide 10s ease infinite; */
      height: 90vh;
      background-repeat: no-repeat;
      display: flex; 
      justify-content: center;
      align-items: center;
      width: 100%;
     
        /* background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.25)),url(background.jpg); */
      
        background-position: center;
    }
    #content{
      /* background-color: #fff; */
              border-radius: 20px;
            
             
              /* box-shadow: 0px 10px 30px 0px rgba(0,0,0,0.1); */
            }
      .form-card {
        /* background-color: #ffffff; */
        border-radius: 20px;
        padding: 30px;
        height:80%;
        margin-top: 50px; 
        transition: 0.3s;
        width: 100%;
        max-width: 600px;
        /* margin-top: 30px; */
        /* position: relative; Added */
      }
    
      .form-card:before { /* Added */
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 80px;
        background-color: #9cbcd3;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
      }
   
      

      
    
      .btn{
        padding:15px 20px;
        border-radius: 10px; /* Updated */
        background-color: transparent;
        border: none;
      }
  
      /* .btn:hover{
        background:#6999BB
  
      } */
  
      .input-no-label {
        border-radius: 10px;
        border: 1px solid #ccc;
        padding: 10px;
        margin-right: 10px;
        margin-top: 5%;
        width: calc(33.33% - 10px);
      }
      #adr{
        width:100%


      }
      .checkbox-no-label {
        margin-right: 10px;
      }
      #estimerbtn{
        width: 150px;
        height: 50px;
       
        margin-left:25%;
        margin-top: 50px;
        text-align: center;
        border:none;
        border-radius:12px;
        font-size:15px;
        background-color:#9cbcd3;
      }
      #searchbtn{
        background-color:#9cbcd3;
        width: 150px;
        height: 50px;
        margin-bottom: 40px;
        margin-left:35%;
       
        text-align: center;
        border:none;
        border-radius:12px;
        font-size:15px;
        }  
      .btn-group {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding:0 30px;
        z-index: 1; /* Added */
      }
      
  
      .form-row {
        margin-top: 50px; /* Updated */
      }
  
      .form-check{
        font-size: 14px; /* Updated */
        margin:0 5px; /* Updated */
      }
      #searchbtn:before {
  content: "\f002";
  font-family: FontAwesome;
  margin-right: 5px;
  color: white;
 
}
#estimerbtn:before {
  content: "\f002";
  font-family: FontAwesome;
  margin-right: 5px;
  color: white;
}


 #ads-section {
  height: 50vh;
  width: 100%;
  
  margin-top: 50px; /* adjust as needed */
  margin-bottom: 20px;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
} 


#ads-section {
  background-image: url('homepics/smth.jpg'), url('homepics/smth1.jpg'), url('homepics/adsi.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  animation: slide 10s infinite;
}

@keyframes slide {
  0% { background-image: url('homepics/smth.jpg'), url('homepics/smth1.jpg'), url('homepics/adsi.jpg'); }
  33% { background-image: url('homepics/smth1.jpg'), url('homepics/adsi.jpg'), url('homepics/smth.jpg'); }
  66% { background-image: url('homepics/adsi.jpg'), url('homepics/smth.jpg'), url('homepics/smth1.jpg'); }
  100% { background-image: url('homepics/smth.jpg'), url('homepics/smth1.jpg'), url('homepics/adsi.jpg'); }
}

.card {
  border-radius: 10px;
  transition: transform 0.2s;
}

.card:hover {
  transform: translateY(-5px);
}
.footer-text {
    font-size: 14px; /* adjust the font size as desired */
    color: #666; /* choose a color that doesn't appear too much */
  }
  @media (max-width: 991.98px) {
  .navbar-brand {
    position:absolute;
    left: 50%;
    transform: translateX(-50%);
  }
.navbar{
    max-height: 500px !important ;
}}

  /* .container {
  position: absolute;
  z-index: 9999;
} */

.navbar{
    max-height: 60px;
}




    /* @keyframes slide {
      0% {
        background-position: 0 0;
      }
      100% {
        background-position: 100% 0;
      }
    } */
    </style>
    
  
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light"  >
    <a class="navbar-brand" href="homepage.php" >
        <img src="images/logo7.png" alt="Kay.com logo" style="max-height: 200px;" >
      </a>
    <button class="navbar-toggler  ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Acceuil</a>
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
            
          </div>
        </li>
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
          <a class="nav-link" href="#">Agents</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="mailto:info@kay.com">
          <i class="fas fa-envelope">
          </i> Contactez-nous</a></li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('login.perform') }}"><i class="fas fa-user"></i>  Se connecter</a>
        </li>
      </ul>
    </div>
  </nav>
  <script>
$(document).ready(function(){
  $("#rentButton").click(function(){
    $("#buyForm, #sellForm").hide();
    $("#rentForm").show();
    $("#rentButton").addClass("active");
    $("#buyButton, #sellButton").removeClass("active");
  });
  $("#buyButton").click(function(){
    $("#rentForm, #sellForm").hide();
    $("#buyForm").show();
    $("#buyButton").addClass("active");
    $("#rentButton, #sellButton").removeClass("active");
  });
  $("#sellButton").click(function(){
    $("#rentForm, #buyForm").hide();
    $("#sellForm").show();
    $("#sellButton").addClass("active");
    $("#rentButton, #buyButton").removeClass("active");
  });

  $("#rentButton").addClass("active");
});



  
	</script>
  <!-- Background Image/Video -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container" id="content">
      <h2 class="display-4" style="color: #fff; text-align: center;"><b>Welcome to Real Estate!</b></h2>
      
		<div class="row justify-content-center ">
			<div class="col-lg-6 col-md-8 col-sm-10" >
        <div class="card form-card mx-auto">
          <form>
          <div class="btn-group btn-group-lg" role="group" >
            <button type="button" class="btn btn-secondary active" id="rentButton">Louer</button>
            <button type="button" class="btn btn-secondary" id="buyButton">Acheter</button>
              <button type="button" class="btn btn-secondary" id="sellButton">Estimer</button>
          </div>
          <div id="rentForm" style="display:block;">
                  <div class="form-row" >
                    <input type="text" placeholder="Adresse " class="form-control input-no-label"  >
                    <input type="number" placeholder="Budget DH" class="form-control input-no-label">
                    <input type="number" placeholder="Surface    m²" class="form-control input-no-label" >
                  </div>
            <div class="form-row mt-3">
              <div class="form-check">
                <input class="form-check-input checkbox-no-label" type="checkbox" value="" id="check2"> Appartements
              </div>
              <div class="form-check">
                <input class="form-check-input checkbox-no-label" type="checkbox" value="" id="check3"> Maisons
              </div>
              <div class="form-check">
                <input class="form-check-input checkbox-no-label" type="checkbox" value="" id="check2"> Parking
              </div> 
            </div>
            <div class="form-row">

              <button type="submit" id="searchbtn">Rechercher </button>
            </div>
          </div>
          <div id="buyForm" style="display:none;">
            <div class="form-row" >
              <input type="text" placeholder="Adresse " class="form-control input-no-label"  >
              <input type="number" placeholder="Budget DH" class="form-control input-no-label">
              <input type="number" placeholder="Surface    m²" class="form-control input-no-label" >
            </div>
      <div class="form-row mt-3">
        <div class="form-check">
          <input class="form-check-input checkbox-no-label" type="checkbox" value="" id="check2"> Appartements
        </div>
        <div class="form-check">
          <input class="form-check-input checkbox-no-label" type="checkbox" value="" id="check3"> Maisons
        </div>
        <div class="form-check">
          <input class="form-check-input checkbox-no-label" type="checkbox" value="" id="check2"> Parking
        </div> 
      </div>
      <div class="form-row">

        <button type="submit" id="searchbtn">Rechercher </button>
      </div>
          
      </div>
          <div id="sellForm" style="display:none;">
            
              
           
            <div class="form-group ">
              <div style="margin-left: 30%; text-align: center; margin:15%;" >
                <h6 > Estimer votre bien <strong>en quelques minutes</strong></h6>
              <div class="input-group" style="margin: 25px;">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" id="localisation" placeholder="Ville, Quartier..." required>
              </div>
          <label style="margin: auto;">
            <input type="radio" name="options" value="louer">
            Pour louer
          </label>
          
          <label>
            <input type="radio" name="options" value="vendre">
            Pour vendre 
          </label>
          <div class="form-group">
            <button  Style="margin-right: 70px; margin-top: 30px;"type="submit" id="estimerbtn"><b style="color: white;">Estimer</b> </button>
          </div>
          </div>
          </div></div>
          </form>
        </div>
      </div>
		</div>
	</div>
    </div>
   

  <!-- Agents Section -->
<div class="container my-5">
  <h2 style="text-align: center;">Nos Agents</h2>
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="homepics/woman2.jpg" alt="Agent 1">
      <div class="card-body">
        <h5 class="card-title">Sarah</h5>
        <p class="card-text">spécialisée dans la vente de propriétés résidentielles. Elle a une expérience de plus de 10 ans dans l'industrie immobilière et est connue pour son professionnalisme et sa détermination à aider ses clients à trouver leur maison de rêve.</p>
        <p>
          <a href="mailto:agent1@example.com"><i class="fas fa-envelope"></i></a>
          <a href="https://www.facebook.com/agent1" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/agent1" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/agent1" target="_blank"><i class="fab fa-instagram"></i></a>
        </p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="homepics/man.jpg" alt="Agent 2">
      <div class="card-body">
        <h5 class="card-title">Ahmed </h5>
        <p class="card-text">un expert en investissement immobilier.de 15 ans d'expérience dans l'industrie,il a aidé de nombreux investisseurs à trouver des opportunités d'investissement rentables. Il aide ses clients à comprendre les subtilités du marché immobilier.</p>
        <p>
          <a href="mailto:agent2@example.com"><i class="fas fa-envelope"></i></a>
          <a href="https://www.facebook.com/agent2" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/agent2" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/agent2" target="_blank"><i class="fab fa-instagram"></i></a>
        </p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="homepics/man2.jpg" alt="Agent 3">
      <div class="card-body">
        <h5 class="card-title">Salim</h5>
        <p class="card-text">spécialisée dans la gestion immobilière.Il a une grande expérience dans la gestion de propriétés résidentielles et commerciales, ainsi que dans la location de biens. il connue pour sa compétence et son attention aux détails.</p>
        <p>
          <a href="mailto:agent3@example.com"><i class="fas fa-envelope"></i></a>
          <a href="https://www.facebook.com/agent3" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/agent3" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/agent3" target="_blank"><i class="fab fa-instagram"></i></a>
        </p>
      </div>
    </div>
  </div>
</div>

  <!-- Articles Section -->
  <div class="container my-5">
    <h2 style="text-align: center;">Dérniers Articles</h2>
    <div class="card-deck">
      <div class="card">
       <a href="https://www.orpi.com/actualites/l-audit-energetique-bientot-obligatoire-pour-la-vente-de-son-logement-classe-f-ou-g/">
        <img class="card-img-top" src="homepics/ccc.PNG" alt="Article 1"></a> 
        <div class="card-body">
          <h5 class="card-title">L’audit énergétique, obligatoire depuis le 1er avril 2023 pour la vente de son logement classé F ou G.</h5>
        </div>
      </div>
      <div class="card">
        <a href="https://www.orpi.com/actualites/les-logements-classes-g-au-dpe-seront-ils-interdits-a-la-location-des-janvier-2023/">  
                <img class="card-img-top" src="homepics/three.jpg" alt="Article 2">
</a>
        <div class="card-body">
          <h5 class="card-title">Les logements classés G au DPE seront-ils interdits à la location dès janvier 2023 ?</h5>
        </div>
      </div>
      <div class="card">
       <a href="https://www.orpi.com/actualites/dpe-tenez-vous-informe-des-nouvelles-reglementations/">
       <img class="card-img-top" src="homepics/Article3.jpg" alt="Article 3"></a> 
        <div class="card-body">
          <h5 class="card-title">DPE : tenez-vous informé des nouvelles règlementations</h5>
        </div>
      </div>
    </div>
  </div>
  <div id="ads-section" class="container-fluid">
    
  </div>
  
  
  <!-- Footer -->
<footer class="page-footer font-small bg-light pt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5>Kay.com</h5>
        <p class="footer-text"> votre destination pour trouver la maison de vos rêves. Notre site web propose une large gamme de propriétés dans les différentes régions du royaume, adaptées à tous les budgets. Nous avons une équipe de professionnels dévoués qui travaillent dur pour satisfaire tous vos besoins immobiliers. Rejoignez-nous aujourd'hui et commencez votre parcours pour trouver la maison de vos rêves.</p>
      </div>
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


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
