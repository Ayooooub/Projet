@if(Auth::user()->usertype=='admin')
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <style>
    body{
	margin:0px;
	padding: 0px;
	background-color:#1b203d;
	overflow: hidden;
	font-family: system-ui;
}
.clearfix{
	clear: both;
}
.logo{
	margin: 0px;
	margin-left: 28px;
    font-weight: bold;
    color: white;
    margin-bottom: 30px;
}
.logo span{
	color:#9cd3d0;
}
.sidenav {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#496B82;
  overflow: hidden;
  transition: 0.5s;
  padding-top: 30px;
}
.sidenav a {
  padding: 15px 8px 15px 32px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  transition: 0.3s;
}
#tb{
  color: #495f82;
  background-color:#91a6b4;
}
.sidenav a:hover {
  color: #495f82;
  background-color:#91a6b4;
  text-decoration: none;
}
.sidenav{
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}
#main {
  transition: margin-left .5s;
  padding: 16px;
  margin-left: 300px;
}
.head{
	padding:20px;
}
.col-div-6{
	width: 50%;
	float: left;
}
.profile{
	display: inline-block;
	float: right;
	width: 160px;
}
.pro-img{
	float: left;
	width: 40px;
	margin-top: 5px;
}
.profile p{
	color: white;
	font-weight: 500;
	margin-left: 55px;
	margin-top: 10px;
	font-size: 13.5px;
}
.profile p span{
	font-weight: 400;
    font-size: 12px;
    display: block;
    color: #8e8b8b;
}
.col-div-3{
	width: 25%;
	float: left;
}
.box{
	width: 85%;
	height: 100px;
	background-color:#496B82;
	margin-left: 10px;
	padding:10px;
}
.box p{
	 font-size: 35px;
    color: white;
    font-weight: bold;
    line-height: 30px;
    padding-left: 10px;
    margin-top: 20px;
    display: inline-block;
}
.box p span{
	font-size: 20px;
	font-weight: 400;
	color: white;
}
.box-icon{
	font-size: 40px!important;
    float: right;
    margin-top: 35px!important;
    color: #9cd3d0;
    padding-right: 10px;
}
.col-div-8{
	width: 70%;
	float: left;
}
.col-div-4{
	width: 30%;
	float: left;
}
.content-box{
	padding: 20px;
}
.content-box p{
	margin: 0px;
    font-size: 20px;
    color: #9cd3d0;
}
.content-box p span{
	float: right;
    /* background-color: #ddd; */
    padding: 3px 10px;
    font-size: 15px;
  
}
.box-8, .box-4{
	width: 95%;
	background-color: #496B82;
	height: 330px;
	
}
.nav2{
	display: none;
}

.box-8{
	margin-left: 10px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}
td, th {
  text-align: left;
  padding:15px;
  color: #ddd;
  border-bottom: 1px solid #81818140;
}
.circle-wrap {
  margin: 50px auto;
  width: 150px;
  height: 150px;
  background: #e6e2e7;
  border-radius: 50%;
}
.circle-wrap .circle .mask,
.circle-wrap .circle .fill {
  width: 150px;
  height: 150px;
  position: absolute;
  border-radius: 50%;
}
.circle-wrap .circle .mask {
  clip: rect(0px, 150px, 150px, 75px);
}

.circle-wrap .circle .mask .fill {
  clip: rect(0px, 75px, 150px, 0px);
  background-color: #b23bf7;
}
.circle-wrap .circle .mask.full,
.circle-wrap .circle .fill {
  animation: fill ease-in-out 3s;
  transform: rotate(126deg);
}

@keyframes fill {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(126deg);
  }
}
.circle-wrap .inside-circle {
  width: 130px;
  height: 130px;
  border-radius: 50%;
  background: #fff;
  line-height: 130px;
  text-align: center;
  margin-top: 10px;
  margin-left: 10px;
  position: absolute;
  z-index: 100;
  font-weight: 700;
  font-size: 2em;
}
   *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      list-style: none;
      text-decoration: none;
      font-family: 'Josefin Sans', sans-serif;
    }
    
    body{
       background-color: #f3f5f9;
    }
    
    .wrapper{
      display: flex;
      position: relative;
    }
    
    .wrapper .sidebar{
      width: 200px;
      height: 100%;
      background: #426676;
      padding: 30px 0px;
      position: fixed;
    }
    
    .wrapper .sidebar h2{
      color: #fff;
      text-transform: uppercase;
      text-align: center;
      margin-bottom: 30px;
    }
    
    .wrapper .sidebar ul li{
      padding: 15px;
      border-bottom: 1px solid #bdb8d7;
      border-bottom: 1px solid rgba(0,0,0,0.05);
      border-top: 1px solid rgba(255,255,255,0.05);
    }    
    
    .wrapper .sidebar ul li a{
      color: #bdb8d7;
      display: block;
    }
    
    .wrapper .sidebar ul li a .fas{
      width: 25px;
    }
    
    .wrapper .sidebar ul li:hover{
      background-color: #4f818d;
    }
        
    .wrapper .sidebar ul li:hover a{
      color: #fff;
    }
     
    .wrapper .sidebar .social_media{
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
    }
    
    .wrapper .sidebar .social_media a{
      display: block;
      width: 40px;
      background:  #9cd3d0 ;
      height: 40px;
      line-height: 45px;
      text-align: center;
      margin: 0 5px;
      color: #bdb8d7;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }
    
    .wrapper .main_content{
      width: 100%;
      margin-left: 200px;
    }
    
    .wrapper .main_content .header{
      padding: 20px;
      background: #fff;
      color: #717171;
      border-bottom: 1px solid #e0e4e8;
    }
    
    .wrapper .main_content .info{
      margin: 20px;
      color: #717171;
      line-height: 25px;
    }
    
    .wrapper .main_content .info div{
      margin-bottom: 20px;
    }
    .sidebar{
      background-color: #00416A;
    }
    .main-cards {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

.card {
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    padding: 20px;
    flex-grow: 1;
    margin-right: 15px;
}

.card-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.card h3 {
    font-size: 16px;
    font-weight: bold;
}

.card span {
    font-size: 20px;
    color: #666;
}

.card h1 {
    font-size: 30px;
    font-weight: bold;
}



    </style>
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <div id="mySidenav" class="sidenav">
    <p class="logo"><span>K</span>ay-Admin</p>
    <a href="/index" id="tb" class="icon-a"><i class="fas fa-tachometer-alt icons"></i> Tableau bord</a>
    <a href="/clients" class="icon-a" ><i class="fas fa-users icons"></i> Clients</a>
    <a href="/agents" class="icon-a"><i class="fas fa-user-tie icons"></i> Agents</a>
    <a href="/property1"  class="icon-a"><i class="fas fa-building icons"></i> Propriétés </a>
    <a href="/annonce" class="icon-a"><i class="fas fa-bullhorn icons"></i> Annonces</a>    <a href="/homee" class="icon-a"><i class="fas fa-home icons"></i> Accueil</a>
    </div>
    
    
    
	<div id="main">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: #91a6b4;" class="nav" >☰ Tableau bord</span>
	<span style="font-size:30px;cursor:pointer; color: #91a6b4;" class="nav2">☰ Tableau bord</span>
	</div>
		
		<div class="col-div-6">
		<div class="profile">

			<img  src="{{ asset('storage/profile_pics/' . Auth::user()->profilep) }}" class="pro-img" />
			<p><span>{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span></p>
		</div>
	</div>
		<div class="clearfix"></div>
	</div>

		<div class="clearfix"></div>
		<br/>
		
		<div class="col-div-3">
    <div class="box">
        <p>
            <?php
              $clientCount = \Illuminate\Support\Facades\DB::table('users')->where('usertype', 'client')->count();
            echo $clientCount;
            ?><br/>
            <span>Clients</span>
        </p>
        <i class="fa fa-users box-icon"></i>
    </div>
</div>

    <div class="col-div-3">
      <div class="box">
        <p>88<br/><span>Agents</span></p>
        <i class="fas fa-user-tie box-icon"></i>
      </div>
    </div>
    <div class="col-div-3">
      <div class="box">
        <p> <?php
              $clientCount = \Illuminate\Support\Facades\DB::table('houses')->count();
            echo $clientCount;
            ?><br/><span>Properties</span></p>
        <i class="fas fa-building box-icon"></i>
      </div>
    </div>
    <div class="col-div-3">
    <div class="box">
        <p>
            <?php
              $clientCount = \Illuminate\Support\Facades\DB::table('users')->where('usertype', 'admin')->count();
            echo $clientCount;
            ?><br/>
            <span>Admins</span>
        </p>
        <i class="fas fa-user-cog box-icon"></i>
    </div>
</div>

		<div class="clearfix"></div>
		<br/><br/>
		<div class="col-div-8">
			<div class="box-8">
      <div class="content-box">
  <p>Les nouvaux utilisateurs <span>Voir tout</span></p>
  <br>
  <table>
    <tr>
      <th>Email</th>
      <th>Nom</th>
      <th>Date de joint</th>
    </tr>
    <?php
    $users = \Illuminate\Support\Facades\DB::table('users')->get();
    foreach ($users as $user) {
      echo "<tr>";
      echo "<td>" . $user->email . "</td>";
      echo "<td>" . $user->nom . "</td>";
      echo "<td>" . $user->created_at . "</td>";
      echo "</tr>";
    }
    ?>
  </table>
</div>

       </div>
       </div> 
		<div class="col-div-4">
			<div class="box-4">
			<div class="content-box">
				<p>Totale de vente </p>

				<div class="circle-wrap">
	    <div class="circle">
	      <div class="mask full">
	        <div class="fill"></div>
	      </div>
	      <div class="mask half">
	        <div class="fill"></div>
	      </div>
	      <div class="inside-circle"> 70% </div>
	    </div>
	  </div>
			</div>
		</div>
		</div>
			
		<div class="clearfix"></div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>

	  $(".nav").click(function(){
	    $("#mySidenav").css('width','70px');
	    $("#main").css('margin-left','70px');
	    $(".logo").css('visibility', 'hidden');
	    $(".logo span").css('visibility', 'visible');
	     $(".logo span").css('margin-left', '-10px');
	     $(".icon-a").css('visibility', 'hidden');
	     $(".icons").css('visibility', 'visible');
	     $(".icons").css('margin-left', '-8px');
	      $(".nav").css('display','none');
	      $(".nav2").css('display','block');
	  });

	$(".nav2").click(function(){
	    $("#mySidenav").css('width','300px');
	    $("#main").css('margin-left','300px');
	    $(".logo").css('visibility', 'visible');
	     $(".icon-a").css('visibility', 'visible');
	     $(".icons").css('visibility', 'visible');
	     $(".nav").css('display','block');
	      $(".nav2").css('display','none');
	 });

	</script>
   @endif

@if(Auth::user()->usertype =='client')
    @extends('layouts.auth-master')

    @section('content')
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
    max-height: 100%;
    background-color: #f8f9fa !important;
   
}

        .right-content {
           
            background-color: #fff;
          
        }
        .spacer {
            width: 1%;
        }
       
    /* Style pour les éléments de formulaire */
    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"] {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 50%;
        margin-bottom: 10px;
        box-sizing: border-box;
        font-size: 16px;
    }

    button[type="submit"] {
        background-color:#9cbcd3;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    /* Style pour les éléments de navigation */
    .left-content {
        background-color: 
#a5c2d7!important;
       
        padding: 20px;
        height: 100vh;
    }

    .username {
        margin-top: 10px;
        font-size: 24px;
    }

    .nav-link {
       color: #00308F;
        margin-bottom: 10px;
    }

    .nav-link:hover {
        text-decoration: none;
    }

    /* Style pour les images de profil */
    .profile-picture {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        margin-bottom: 10px;
    }
    #nv2{
      background-color:#9cbcd3 !important;
    }
    #info-link:visited, #password-link:visited ::after{
 
  text-decoration: none;
}
#info-link, #password-link , #picture-link {
  color: blue ;
  text-decoration: none;
}
.active-link {
    color: #9cbcd3 !important;
    text-decoration: none;
  }


</style>

   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id ="nv2" style="background-color: #6CB4EE;">
  <div class="container-fluid">
    <a class="navbar-brand  mx-auto"  href="#">Kay & Moi</a>
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
    <!-- Left Navigation Bar -->
    <div class="col-3 bg-primary left-content">
      <img src="{{ asset('storage/profile_pics/' . Auth::user()->profilep) }}" class="profile-picture">
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
          <a class="nav-link" href="#annonces-deposees"><i class="fas fa-bullhorn"></i> Mes annonces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout.perform') }}"><i class="fas fa-sign-out-alt"></i> Deconnexion</a>
        </li>
      </ul>
    </div>

    <!-- Spacer Column -->
    <!-- <div class=" spacer"></div> -->
    <!-- Right Content Area -->
    <div class="col-8 right-content">

<div class="info_panel" >
  <div style="display:flex; padding-bottom:30px; margin-top:30px">
  <a href="#info" class="active-link" style="cursor: pointer;" onclick="showInfoForm()" id="info-link">Informations personnells</a>
  <a href="#pwd" style="cursor: pointer; margin-left:50px" onclick="showPasswordForm()" id="password-link">Changer le mot de passe</a>
  <a href="#pic" style="cursor: pointer; margin-left:50px" onclick="showPictureForm()" id="picture-link">Changer la photo de profile</a>

  </div>

  <div id="info-form">
    <form method="POST" action="{{ route('users.update') }}">
      @csrf
      @method('PUT')
      <label for="nom">Nom:</label>
      <input id="nom" type="text" name="nom" value="{{ auth()->user()->nom }}"><br><br>
      <label for="prenom">Prénom:</label>
      <input id="prenom" type="text" name="prenom" value="{{ auth()->user()->prenom }}"><br><br>
      <label for="email">Email:</label>
      <input id="email" type="email" name="email" value="{{ auth()->user()->email }}"><br><br>
      <label for="numtel">Téléphone:</label>
      <input id="numtel" type="tel" name="numtel" value="{{ auth()->user()->numtel }}"><br><br>
      <button type="submit">Enregistrer</button>
    </form>
  </div>

  <div id="password-form" style="display: none;">
    <form method="POST" action="{{ route('users.update-password') }}">
      @csrf
      @method('PUT')
      <label for="old_password">Votre mot de passe actuel:</label>
      <input id="old_password" type="password" name="old_password"><br><br>
      <label for="new_password">Votre nouveau mot de passe:</label>
      <input id="new_password" type="password" name="new_password"><br><br>
      <label for="new_password_confirmation">Confirmer le nouveu mot de passe</label>
      <input id="new_password_confirmation" type="password" name="new_password_confirmation"><br><br>
      <button type="submit">Enregistrer</button>
    </form>
    <form method="POST" action="{{ route('users.delete', ['user' => auth()->user()->id]) }}" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
      @csrf
      @method('DELETE')
      <button type="submit">Suprimmer ce compte </button>
    </form>
  </div>
  <div id="picture-form" style="display: none;">
  <form method="POST" action="{{ route('users.update-picture') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="picture">Choisir une nouvelle photo de profile:</label>
    <input type="file" id="picture" name="picture" accept="image/*"><br><br>
    <button type="submit">Enregistrer</button>
  </form>
</div>

  <script>
    function showInfoForm() {
    var infoLink = document.getElementById("info-link");
    var passwordLink = document.getElementById("password-link");
    var infoForm = document.getElementById("info-form");
    var passwordForm = document.getElementById("password-form");
    var pictureLink = document.getElementById("picture-link");
    var pictureForm = document.getElementById("picture-form");
    // Show the info form and hide the password form
    infoForm.style.display = "block";
    passwordForm.style.display = "none";
    pictureForm.style.display = "none";
    // Add the active-link class to the info link and remove it from the password link
    infoLink.classList.add("active-link");
    passwordLink.classList.remove("active-link");
    pictureLink.classList.remove("active-link");
  }

  function showPasswordForm() {
    var infoLink = document.getElementById("info-link");
    var passwordLink = document.getElementById("password-link");
    var infoForm = document.getElementById("info-form");
    var passwordForm = document.getElementById("password-form");
    var pictureLink = document.getElementById("picture-link");
    var pictureForm = document.getElementById("picture-form");
    // Show the password form and hide the info form
    passwordForm.style.display = "block";
    infoForm.style.display = "none";
    pictureForm.style.display = "none";
    // Add the active-link class to the password link and remove it from the info link
    passwordLink.classList.add("active-link");
    infoLink.classList.remove("active-link");
    pictureLink.classList.remove("active-link");
  }
  function showPictureForm() {
  var infoLink = document.getElementById("info-link");
  var passwordLink = document.getElementById("password-link");
  var pictureLink = document.getElementById("picture-link");
  var infoForm = document.getElementById("info-form");
  var passwordForm = document.getElementById("password-form");
  var pictureForm = document.getElementById("picture-form");

  // Show the picture form and hide the other forms
  pictureForm.style.display = "block";
  infoForm.style.display = "none";
  passwordForm.style.display = "none";

  // Add the active-link class to the picture link and remove it from the other links
  pictureLink.classList.add("active-link");
  infoLink.classList.remove("active-link");
  passwordLink.classList.remove("active-link");
}

  </script>
</div>


<script>
  function toggleForm(formId) {
    var form = document.getElementById(formId + '-form');
    var title = document.getElementById(formId);

    if (form.style.display === "none") {
      form.style.display = "block";
      title.classList.add('selected');
    } else {
      form.style.display = "none";
      title.classList.remove('selected');
    }
  }
</script>




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


      
 
   @endsection
@endif

