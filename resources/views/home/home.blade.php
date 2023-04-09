<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="style6.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-6asOXdI3HPxSxJzkw0B/Xy+BLIvG2QcXpgH4Ad8aOIWb97+IQz/6ZwUZZFY8U6W5+6d5J6XbN6HRZfLmj1hgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      body{
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.25)),url(background.jpg);
        background-size: cover;
        background-position: center;
      }

      /* Form------------------------------------------------------------------------------- */
      .container{
      /* background-color: #fff; */
              border-radius: 20px;
              padding: 30px;
              margin-top: 80px;
              box-shadow: 0px 10px 30px 0px rgba(0,0,0,0.1);
            }
      .form-card {
        /* background-color: #ffffff; */
        border-radius: 20px;
        padding: 30px;
        height:80%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 100%;
        max-width: 600px;
        margin-top: 30px;
        position: relative; /* Added */
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
      #rentButton{
        background-color:#9cbcd3;



      }
      #rentButton:active{
        background-color: #6999BB;
      }

      
    
      .btn{
        padding:15px 20px;
        border-radius: 10px; /* Updated */
        background-color: transparent;
        border: none;
      }
  
      .btn:hover{
        background:#6999BB
  
      }
  
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
        color: white;
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
        height: 80px;
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


    </style>

  </head>
  <body>
    <div class="banner">
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
            
      
	 <script>
	$(document).ready(function(){
		$("#rentButton").click(function(){
			$("#buyForm, #sellForm").hide();
			$("#rentForm").show();
		});
		$("#buyButton").click(function(){
			$("#rentForm, #sellForm").hide();
			$("#buyForm").show();
		});
		$("#sellButton").click(function(){
			$("#rentForm, #buyForm").hide();
			$("#sellForm").show();
		});

		$("#rentButton").addClass("active");
	});
  
	</script>


	<div class="container">
		<div class="row justify-content-center ">
			<div class="col-lg-6 col-md-8 col-sm-10" >
        <div class="card form-card mx-auto">
          
          <div class="btn-group btn-group-lg" role="group" >
            <button type="button" class="btn btn-secondary active" id="rentButton">Louer</button>
            <button type="button" class="btn btn-secondary" id="buyButton">Acheter</button>
              <button type="button" class="btn btn-secondary" id="sellButton">Estimer</button>
          </div>
          <form id="rentForm" style="display:block;" action="{{ url('/search-rent') }}" type="get">
                  <div class="form-row" >
                    <input type="text" placeholder="Adresse " name="adresse" class="form-control input-no-label"  >
                    <input type="number" placeholder="Budget DH" name ="price" class="form-control input-no-label">
                    <input type="number" placeholder="Surface    m²"  name="surface" class="form-control input-no-label" >
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
        </form>
          <form id="buyForm" style="display:none;" action="{{ url('/search-buy') }}" type="get">
            <div class="form-row" >
              <input type="text" placeholder="Adresse " name="adresse"class="form-control input-no-label"  >
              <input type="number" placeholder="Budget DH" name="price" class="form-control input-no-label">
              <input type="number" placeholder="Surface    m²" name="surface" class="form-control input-no-label" >
            </div>
            <div class="form-row mt-3">
              <div class="form-check">
                  <input class="form-check-input checkbox-no-label" type="checkbox" name="building_types[]" value="Appartement" id="check2"> Appartements
              </div>
              <div class="form-check">
                   <input class="form-check-input checkbox-no-label" type="checkbox" name="building_types[]" value="Maison" id="check3"> Maisons
              </div>
              <div class="form-check">
                  <input class="form-check-input checkbox-no-label" type="checkbox" value="building_types[]" id="check2"> Parking
              </div> 
            </div>
            <div class="form-row">
              <button type="submit" id="searchbtn">Rechercher </button>
            </div>
          
        </form>
          <form id="sellForm" style="display:none;">
            
              
           
            <div class="form-group">
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
          </div>
        </form>
          
        </div>
      </div>
		</div>
	</div>
  <!-- <form action="{{ url('/search') }}" type="get">
  <div id="rentForm" style="display:block;">
    <div class="form-row">
      <input type="text" placeholder="Adresse" name="adresse" class="form-control input-no-label">
      <input type="number" placeholder="Budget DH" name="price" class="form-control input-no-label" name="budget">
      <input type="number" placeholder="Surface m²" name="surface" class="form-control input-no-label" name="surface">
    </div>
    <button type="submit" id="searchbtn">Rechercher</button>
  </div>
</form> -->
  