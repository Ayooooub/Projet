<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/signin.css') !!}" rel="stylesheet">





  <style>
    table{
      
      
    }
    
  



  </style>

</head>


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

         
         
        </div>
        


      </nav>
<table class="table table-striped" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Num tel</th>
      <th scope="col">Role</th>
      <th scope="col">Actions </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->nom }}</td>
      <td>{{ $user->prenom }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->numtel }}</td>
      <td>{{ $user->usertype }}</td>
      <td> <form action="{{ route('users.destroy', $user->id)  }} " method="post" > 
              @csrf 
              @method('DELETE')
              <button type="submit" class="btn btn-danger"> Supprimer</button>
            </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


</html>