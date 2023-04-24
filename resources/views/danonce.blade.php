<!DOCTYPE html>
<html lang="en">
<head>
  <title>Announcement Detail Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>.slider {
    width: 90%;
    height: 500px;
    position: relative;
    overflow: hidden;
    
    border-radius: 15px;
    /* margin-right: 20px; */
}
     /* Add this style for the house type */
     #house-type {
           
            top: 0;
            left: 0;
            padding: 10px;
          margin-top: 10%;
        }
        .location {
       display: flex;
       align-items: center;
   }
.slide {
    
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.slide.active {
    opacity: 1;
}

.arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    color: #fff;
    cursor: pointer;
}

.arrow.back {
    left: 20px;
}

.arrow.next {
    right: 20px;
}

</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Kay</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Retour</a>
            </li>
          </ul>
        </div>
        <div class="ml-auto">
          <button type="button" class="btn btn-primary" onclick="scrollToForm()">Accepter l'annonce</button>
        </div>
      </nav>
<div class="container">
  <div class="row">
    <div class="col-md-8">
        <div class="slider" style="margin-top: 3%;">
          
        @foreach($images as $image)
            <div class="slide @if($loop->first) active @endif">
                <img src="{{ asset('storage/house_images/' . $image->path) }}" alt="{{ $image->name }}" width="100%" height="100%" loading="lazy">
            </div>
            @endforeach
              <!-- The arrows to control the slide transition -->
              <span class="arrow back" onclick="prevSlide()">&#10094;</span>
              <span class="arrow next" onclick="nextSlide()">&#10095;</span>
        </div>
    </div>
    <div class="col-md-4" id="house-type"style="font-size: 36px; color: #777; margin-bottom: 30px; font-weight: bold; font-style:inherit;">
    
              <h2>{{ $house->type }} @if ($house->type_annonce == 'Vente') à vendre @else à louer @endif</h2>

              <h2 >{{ $house->nbpiece }} @if($house->nbpiece > 1)pièces @else pièce @endif <span>. {{ $house->surface }} m²</span></h2>
              <div class="location col-5" style="margin-top: 30px;">
                <i class="glyphicon glyphicon-map-marker" id ="pin" style="margin-right: 10px;"></i>
                <h3 >{{ $house->adresse }}</h3>
              </div>
              <div class="price " style="color: #7dbad8; margin-top: 20px;" >
                <h2 >{{ $house->prix }} <span>DH</span></i></h2>
              </div>
           
    
  </div>
  <hr>
  <div class="row">
    
  <div class="col-md-6">
            <h3>L'essentiel</h3>
            <div class="d-flex flex-row">
              <div class="p-2">
                <i class="lolo fas fa-cube"></i> {{ $house->nbpiece }} @if($house->nbpiece > 1)pièces @else pièce @endif
              </div>
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-bath"></i> 1 salle de bain/eau
              </div>
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-car"></i> Garage
              </div>
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-square"></i> {{$house->surface}} m²
              </div>
            </div>
            <hr>
            <h3>Intérieur</h3>
            <div class="d-flex flex-row">
              <div class="p-2">
                <i class=" lolo fas fa-utensils"></i> Cuisine équipée
              </div>
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-user"></i> Gardien
              </div>
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-door-open"></i> Interphone
              </div>
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-lock"></i> Digicode
              </div>
            </div>
            <hr>
            <h3>Autre</h3>
            <div class="d-flex flex-row">
              @if(isset($house->annee_construction))
              <div class="p-2">
                <i class="lolo fas fa-calendar-alt"></i> Construit en {{$house->annee_construction}}
              </div>
              @endif
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-building"></i> Construction en Pierres
              </div>
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-sort-numeric-up"></i> Étage 5
              </div>
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-building"></i> Immeuble de 5 étages
              </div>
            </div>
            <hr>
            <h3>L'avis de l'agent</h3>
            <div class="d-flex flex-row">
              <p> l'agence Orpi vous propose, au 5ème étage, ce grand studio traversant (18.82 m2 Carrez, 48.16m2 au sol, pondéré 29m2) ,étant composé comme il suit : une entrée, un séjour, une cuisine ouverte, d'un coin chambre et d'une salle de bain avec baignoire et WC . </p>
            </div>
          </div>
   
    <div class="col-md-4 offset-md-2" style="background-color: #f2f2f2; padding: 20px;">
    <h4>Poste par : <b> {{ $house->user->nom }} {{ $house->user->prenom }}</b></h4>
    <p>en: {{ \Carbon\Carbon::parse($house->created_at)->format('F j, Y') }}</p>

    <p>Email: {{ $house->user->email }}</p>
    <p>Phone: {{ $house->user->numtel }}</p>
    <a href="mailto:{{ $house->user->email }}" class="btn btn-primary">Contact Client</a>
</div>


  
  <hr>

  
    <div class="col-md-6"  id="bottom">
    <form method="post" action="{{ route('houses.destroy', ['id' => $house->id]) }}">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{ $house->id }}">
                    <button type="submit" class="btn btn-danger mr-2" onclick="return confirm('Êtes-vous sûr(e) de vouloir supprimer cette maison ?')">Refuser</button>
                </form>
    </div>
    <div class="col-md-6">
    <form method="post" action="{{ route('houses.accept', ['id' => $house->id]) }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $house->id }}">
                       
                        <button type="submit"  onclick="return confirm('Êtes-vous sûr(e) de vouloir accepter cette annonce ?')" name="accept" value="1" class="btn btn-success">Accepter</button>
                    </form>
    </div>
  </div>
</div>
<footer><div><p> </p></div></footer>
<script>
    function scrollToForm() {
var form = document.getElementById("bottom");
form.scrollIntoView({behavior: "smooth"});
}
      // Get all slide elements
      const slides = document.querySelectorAll(".slide");

      // Function to show the nth slide
      function showSlide(n) {
          // Hide all slides
          for (let slide of slides) {
              slide.classList.remove("active");
          }
          // Show the nth slide
          slides[n].classList.add("active");
      }

      let slideIndex = 0;
      showSlide(slideIndex);

      // Function to show the next slide
      function nextSlide() {
          slideIndex++;
          if (slideIndex >= slides.length) {
              slideIndex = 0;
          }
          showSlide(slideIndex);
      }

      // Function to show the previous slide
      function prevSlide() {
          slideIndex--;
          if (slideIndex < 0) {
              slideIndex = slides.length - 1;
          }
          showSlide(slideIndex);
      }</script>
</body>
</html>
