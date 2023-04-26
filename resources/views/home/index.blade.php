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

@if(Auth::user()->usertype =='agent')
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
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>


    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    

    
    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    
    <style>
   
   .content {
  /* Add styling for your content */
  position: relative;
  z-index: 1;
}
.navbar {
 
  
  align-items: center;
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
.navbar{
    max-height: 60px;
}
@media screen and (min-width: 1024px) {
  /* CSS styles to apply when the screen is at least 1024px wide */
  
  .logo{
    margin-left: 250%;
  }
}
      
    </style>

    
   
</head>
    
    <title>User Profile</title>


<style>
body {
    font-size: 16px;
    font-family: "Open Sans", sans-serif;
    color: #2E383F;
    background-color: #EFF5F9; /* set the background color of the page */
}
#header {
   
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    z-index: 9999;
   
    width:300px !important;
    background-color: #496B82; /* set the background color of the navigation menu */
    width: 250px; /* set the width of the navigation menu */
    box-shadow: 3px 0 3px 0px rgba(0,0,0,0.3);
}
#header .profile {
    text-align: center;
}
#header .profile img {
    margin: 15px auto;
    display: block;
    width: 100px;
    border: 3px solid ;
    border-color:  #EFF5F9;
}
#header .profile h1 {
    font-size: 24px;
    margin: 0;
    padding: 0;
    font-weight: 600;
    text-align: center;
 
    font-weight: bold;
   
    color: white !important;
}
header .active1-link {
  font-weight: bold;
  color: #DBE6EE !important;
  /* add other styles as desired */
}
.nav-menu {
    padding: 30px 0 0 0;
}
.nav-menu * {
    margin: 0;
    padding: 0;
    list-style: none;
}
.nav-menu>ul>li {
    position: relative;
    white-space: nowrap;
}
.nav-menu a ,
.nav-menu a:focus {
    display: flex;
    align-items: center;
    color: #AFC0CC;
    padding: 12px 15px;
    margin-bottom: 8px;
    transition: 0.3s;
    font-size: 15px;
}
.nav-menu a i,
.nav-menu a:focus i {
    font-size: 24px;
    padding-right: 8px;
    color: #AFC0CC;
}
button[type="submit"] {
        background-color:#6999BB;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
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
.nav-menu a:hover i,
.nav-menu .active i,
.nav-menu .active:focus i,
.nav-menu li:hover>a i {
    color: #DBE6EE;
} 
@media (max-width: 1199px) {
    #header {
        left: -300px;
    }
}
@media (max-width: 991px) {
    #header {
        width: 100%;
        height: auto;
        left: -100%;
        transition: all 0.3s ease-in;
    }
    #header.active {
        left: 0;
    }
    #header .profile {
        display: none;
    }
    .nav-menu {
        padding-top: 10px;
    }
}
.mobile-nav-toggle {
    position: fixed;
    right: 15px;
    top: 15px;
    z-index: 9998;
    border: 0;
    background-color: #149ddd;
    padding: 10px 15px;
    color: #fff;
    font-size: 24px;
    cursor: pointer;
} 
.mobile-nav-toggle:hover {
    background-color: #37b3ed;
}
.btn-outline-secondary {
  
  background-color: #C3D6E4;
  border-color: black;
  color: black;
  margin-bottom: 0.1rem;
 

}
#info1-form, #password1-form, #picture1-form {
  margin-left: 50%; /* This will push the forms to the right */
  margin-right: 10%; /* This will add some space on the right */
  width: 80%; /* This will make the form 80% of the container width */
}
#info1-form label,
#info1-form input {
  display: inline-block;
  vertical-align: middle;
}
#info1-form label{
  width: 100px;
  font-weight : bold;
}
#password-form label, 
#picture1-form label 
 {
   
  font-weight : bold;
}
#info1-form input {
  width: 200px; /* adjust as needed */
  margin-right: 20px; /* adjust as needed */
}
#info1-links{
  style: none;
  margin-left: 40%; 
  width: 90%;
  font-size: 16px;
 
  
}
#info1-links a {
  color:  #1F2D38 ;
  text-decoration: none;
}
#info1-links .active1-link {
    color: #547A95!important;
    text-decoration: none;
    font-weight:bold;
   
  }
 .fav_panel, .annonce_panel,.ann_panel{
    margin-left: 40%; 
    width: 100%;
}
.welcome1_panel{
  margin-left: 40%; 
  margin-top: 15%;
  width: 80%;
}
.card-img-top {
  height: 150px;
  object-fit: cover;
 
}
.card-body{
  font-size: 16px;
  padding: 15px;
  height: 140px;
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;
}
.card-title,
.card-subtitle {
  font-size: 16px;
  line-height: 1.1;
  font-weight: bold ;
  
}
.card-text {
  font-size: 14px;
  line-height: 1.3;
  font-weight: bold;
}
.price{
  color: black !important;
  font-weight: bold;
  font-size: 14px !important;
 
  
}
.badge{
  color: black  ;
  background-color: #C3D6E4!important;
}
      </style>
</head>
<body>
    <header id="header" >
        <div class=" d-flex flex-column">
            <div class="profile">
            <img src="{{ asset('storage/profile_pics/' . Auth::user()->profilep) }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light user">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h1>
            </div>

            <nav id="navbar" class="nav-menu navbar ">
            <ul>
                <li><a class="nav-link " href="#personal-info1"><span><i class="fas fa-id-card"></i> Mes infos personnelles</span></a></li>
                <li><a class="nav-link" href="#propriete-info"><i class="fas fa-home"></i> <span>View Properties</span></a></li>
                <li><a class="nav-link" href="#messages"><i class="fas fa-envelope"></i> <span>View Messages</span></a></li>
                <li><a class="nav-link" href="#rendez-vous"><i class="far fa-calendar-alt"></i> <span>Rendez-vous</span></a></li>
                <li><a class="nav-link " href="/home"><span><i class="fas fa-home"></i> Revenir à l'acceuil</span></a></li>
                <li><a class="nav-link" href="{{ route('logout.perform') }}"><i class="fas fa-sign-out-alt"></i> Deconnexion</a></li>
            </ul>
            </nav><!-- .nav-menu -->
        </div>




    </header><!-- End Header -->



<div class=" container-fluid">
  <div class="row">
   
    <div class="col-8 right-content">
      <div class="info1_panel mt-2">
        <div class="row mt-4 mb-5 p-3 border rounded shadow" id="info1-links">
          <a href="#info1" class="active1-link col" style="cursor: pointer;" onclick="showInfoForm1()" id="info1-link">Informations personnelles</a>
          <a href="#pwd1" class="col" style="cursor: pointer;" onclick="showPasswordForm1()" id="password1-link">Changer le mot de passe</a>
          <a href="#pic1" class="col" style="cursor: pointer;" onclick="showPictureForm1()" id="picture1-link">Changer la photo de profil</a>
        </div>
      


      <div id="info1-form">
        <form method="POST" action="{{ route('users.update') }}">
          @csrf
          @method('PUT')
          <label for="nom1">Nom:</label>
          <input id="nom1" type="text" name="nom" value="{{ auth()->user()->nom }}"><br><br>
          <label for="prenom1">Prénom:</label>
          <input id="prenom1" type="text" name="prenom" value="{{ auth()->user()->prenom }}"><br><br>
          <label for="email1">Email:</label>
          <input id="email1" type="email" name="email" value="{{ auth()->user()->email }}"><br><br>
          <label for="numtel1">Téléphone:</label>
          <input id="numtel1" type="tel" name="numtel" value="{{ auth()->user()->numtel }}"><br><br>
          <button type="submit">Enregistrer</button>
        </form>
      </div>

  <div id="password1-form" style="display: none;">
    <form method="POST" action="{{ route('users.update-password') }}">
      @csrf
      @method('PUT')
      <label for="old_password1">Votre mot de passe actuel:</label>
      <input id="old_password1" type="password" name="old_password"><br><br>
      <label for="new_password1">Votre nouveau mot de passe:</label>
      <input id="new_password1" type="password" name="new_password"><br><br>
      <label for="new_password1_confirmation">Confirmer le nouveu mot de passe</label>
      <input id="new_password1_confirmation" type="password" name="new_password1_confirmation"><br><br>
      <button type="submit">Enregistrer</button>
    </form>
    <form method="POST" action="{{ route('users.delete', ['user' => auth()->user()->id]) }}" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
      @csrf
      @method('DELETE')
      <button type="submit">Supprimer mon compte </button>
    </form>
  </div>
  <div id="picture1-form" style="display: none;">
  <form method="POST" action="{{ route('users.update-picture') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="picture1">Choisir une nouvelle photo de profile:</label>
    <input type="file" id="picture1" name="picture1" accept="image/*"><br><br>
    <button type="submit">Enregistrer</button>
  </form>
</div>

  <script>
    function showInfoForm1() {
    var info1Link = document.getElementById("info1-link");
    var password1Link = document.getElementById("password1-link");
    var info1Form = document.getElementById("info1-form");
    var password1Form = document.getElementById("password1-form");
    var picture1Link = document.getElementById("picture1-link");
    var picture1Form = document.getElementById("picture1-form");
    // Show the info form and hide the password form
    info1Form.style.display = "block";
    password1Form.style.display = "none";
    picture1Form.style.display = "none";
    // Add the active-link class to the info link and remove it from the password link
    info1Link.classList.add("active1-link");
    password1Link.classList.remove("active1-link");
    picture1Link.classList.remove("active1-link");
  }
  function showPasswordForm1() {
    var info1Link = document.getElementById("info1-link");
    var passwordLin1k = document.getElementById("password1-link");
    var info1Form = document.getElementById("info1-form");
    var password1Form = document.getElementById("password1-form");
    var picture1Link = document.getElementById("picture1-link");
    var picture1Form = document.getElementById("picture1-form");
    // Show the password form and hide the info form
    password1Form.style.display = "block";
    info1Form.style.display = "none";
    picture1Form.style.display = "none";
    // Add the active-link class to the password link and remove it from the info link
    password1Link.classList.add("active1-link");
    info1Link.classList.remove("active1-link");
    picture1Link.classList.remove("active1-link");
  }
  function showPictureForm1() {
  var info1Link = document.getElementById("info1-link");
  var password1Link = document.getElementById("password1-link");
  var picture1Link = document.getElementById("picture1-link");
  var info1Form = document.getElementById("info1-form");
  var password1Form = document.getElementById("password1-form");
  var picture1Form = document.getElementById("picture1-form");
  // Show the picture form and hide the other forms
  picture1Form.style.display = "block";
  info1Form.style.display = "none";
  password1Form.style.display = "none";
  // Add the active-link class to the picture link and remove it from the other links
  picture1Link.classList.add("active1-link");
  info1Link.classList.remove("active1-link");
  password1Link.classList.remove("active1-link");
}
  </script>
</div>


<script>
  function toggleForm1(formId) {
    var doll = document.getElementById(formId + '-form');
    var dtitle = document.getElementById(formId);
    if (doll.style.display === "none") {
      doll.style.display = "block";
      dtitle.classList.add('selected');
    } else {
      doll.style.display = "none";
      dtitle.classList.remove('selected');
    }
  }
</script>



            <div class="welcome1_panel "> 
             <h3 class="font-weight-bold"> Bienvenue  dans votre espace, {{ Auth::user()->prenom }}  !</h3>
          
          
            </div>
            
    
           
        </div>
    </div>
</div>
    <script>
      
      const wcontent1 = document.querySelector('.welcome1_panel');
      wcontent1.style.display = 'block';
  // Get the link and the content element
  const link1 = document.querySelector('a[href="#personal-info1"]');
  const content1 = document.querySelector('.info1_panel');
  content1.style.display = 'none';
  
  const flink1 = document.querySelector('a[href="#favorites"]');
  const fcontent11 = document.querySelector('.fav_panel');
  fcontent.style.display = 'none';
  
  const alink = document.querySelector('a[href="#annonce"]');
  const acontent = document.querySelector('.annonce_panel');
  acontent.style.display = 'none';
  
  const plink=document.querySelector('[href="#annonces-deposees"]')
  const pcontent = document.querySelector('.ann_panel');
  pcontent.style.display = 'none';
  
  // Add event listener to the link
  link.addEventListener('click', () => {
    // Toggle the display of the content element
    if (content1.style.display === 'none') {
      content1.style.display = 'block';
     
      wcontent1.style.display = 'none'; // hide the welcome panel
     
      link1.classList.add('active1-link'); // add the active-link class
     
    }
  });
  // Add event listener to the link

  // Add event listener to the link

 
</script>
@endif

