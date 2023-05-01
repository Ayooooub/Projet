<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agents</title>
   
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
  background-color: #496B82;
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
.sidenav a:hover {
  color: #495f82;
  background-color:#91a6b4;
}
#clients {
  color: #495f82;
  background-color:#91a6b4;
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
	background-color: #496B82;
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
    background-color: #ddd;
    padding: 3px 10px;
    font-size: 15px;
}
#spin{
	  float: right;
    background-color: #ddd;
    padding: 3px 10px;
    font-size: 15px;
    margin-top: 20%;
}
.box-8, .box-4{
	width: 130%;
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

.dropdown-menu a{
  color: #495f82;
  background-color:#91a6b4;
}
.dropdown-menu a:hover{
  color:white;
}
.btn{ background-color: #9cd3d0;
color: #1b203d;
border-color: #00416A;
}
.btn:hover{
  background-color: #1b203d;
  border-color:#00416A;
}

    </style>
		
	</head>


	<body>
		
  <div id="mySidenav" class="sidenav">
    <p class="logo"><span>K</span>ay-Admin</p>
    <a href="/index" class="icon-a"><i class="fas fa-tachometer-alt icons"></i> Tableau bord</a>
    <a href="/clients"  class="icon-a" ><i class="fas fa-users icons"></i> Clients</a>
    <a href="/agents" id="clients" class="icon-a"><i class="fas fa-user-tie icons"></i> Agents</a>
    <a href="/property1" id="pro" class="icon-a"><i class="fas fa-building icons"></i> Propriétés </a>
    <div class="dropdown">
        <a class="icon-a dropdown-toggle"href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bullhorn icons"></i> Annonces
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="/Bannonce">Immeubles </a>
            <a class="dropdown-item" href="/annonce">Maisons </a>
            <a class="dropdown-item" href="#"> Terrains</a>
        </div>
    </div>  
   <a href="/home" class="icon-a"><i class="fas fa-home icons"></i> Accueil</a>
   <a class="nav-link" href="{{ route('logout.perform') }}"><i class="fas fa-sign-out-alt"></i> Deconnexion</a>

</div>
    
    
	<div id="main">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: #91a6b4;" class="nav" >☰ Agents</span>
	<span style="font-size:30px;cursor:pointer; color: #91a6b4;" class="nav2">☰ Agents</span>
	</div>
		
		<div class="col-div-6">
		<div class="profile">

			<img src="{{ asset('storage/profile_pics/' . Auth::user()->profilep) }}"  class="pro-img" />
			<p><span>{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span></p>
		</div>
	</div>
		<div class="clearfix"></div>
	</div>

		<div class="clearfix"></div>
		
        <div class="container"> <h4  >Ajouter un agent </h4>
  <div class="row">
   
  <form method="POST" action="{{ route('agents.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="prenom">Prenom</label>
      <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Enter prenom" required>
    </div>
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" name="nom" class="form-control" id="nom" placeholder="Enter nom" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email"  name="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="mot-de-passe">Mot de passe</label>
      <input type="password" name="mdp" class="form-control" id="mot-de-passe" placeholder="Enter mot de passe">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Enter adresse" required>
  </div>
  <div class="form-group col-md-6">
    <label for="numtel">Numero</label>
    <input type="text" name="numtel" class="form-control" id="adresse" placeholder="Enter numéro" required>
  </div>
  </div>
  <div class="form-group">
    <label for="photo">Photo de profile</label>
    <input type="file" name="profilep" class="form-control-file" id="photo" >
  </div>
  <button type="submit" class="btn btn-primary">Créer</button>
</form>

		</div></div>
			
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
   
    function confirmDelete(userId) {
        if (confirm("Êtes-vous sûr(e) de vouloir supprimer cet utilisateur ?")) {
            // If user confirms deletion, submit the form
            document.getElementById('deleteForm_' + userId).submit();
        }
    }

 $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
	</script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	</body>


	</html>