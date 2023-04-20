@extends('layouts.auth-master')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
      <!-- Font library CSS files -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<!-- Bootstrap 4 CSS and JS files -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Bootstrap 3 CSS and JS files -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Bootstrap Icons CSS file -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

      
    <title>Image Slider</title>
    <style>
        .slider {
            width: 90%;
            height: 500px;
            position: relative;
            overflow: hidden;
            
            border-radius: 15px;
            /* margin-right: 20px; */
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
        
        /* Add this style for the house type */
        .house-type {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px;
          margin-top: 10%;
        }
        .location {
       display: flex;
       align-items: center;
   }
   /* CSS */
.fixed-bottom {
  height: 70px;
  border-top: 1px solid #ccc;
  background-color: #fff;
}
.lolo{
  color: #7dbad8;
}
   .location h3 {
       margin: 0 10px 0 0;
   }
   .fa-map-marker {
       color: blue;
       font-size: 24px;
   }
   #pin{
    color:  rgb(132, 179, 241);
       font-size: 24px;
   }
   /* CSS */
button.btn-light:hover {
  background-color: #7dbad8;
}
a.text-decoration-none {
  text-decoration: none;
}

a.text-decoration-none:hover {
  color: your-desired-color;
}

   @media (max-width: 768px) {
          .house-type {
            position: relative;
            top: 20px;
          }
          .slider{
            width: 110%;
          }
        }
        
    </style>
</head>
<body>
  
      <div class="d-sm-block d-md-none fixed-bottom">
        <div class="content">
          <div class="row justify-content-between align-items-center" style="margin-top: 10px;">
            <div class="col-5">
              <button class="btn btn-primary btn-block py-3">
                <i class="fas fa-phone-alt"></i> Call
              </button>
            </div>
            <div class="col-5">
              <button class="btn btn-primary btn-block py-3">
                <i class="fas fa-comment-alt"></i> Message
              </button>
            </div>
          </div>
        </div>
      </div>
      
    <!-- Add the house type div -->
    <div class="container">

      <div class="row align-items-center">
        <div class="col">
            <a href="#" class="text-decoration-none">
                <i class="glyphicon glyphicon-chevron-left"></i>Retour aux résultats
            </a>
        </div>
        <div class="col-auto">
          <button class="btn btn-light me-3" style="border: 1px solid blue; padding: 6px 12px; font-size: 16px;" onclick="scrollToForm()">
            <span class="d-none d-md-inline"><i class="bi bi-envelope-fill"></i> Ecrire à l'agence</span>
            <span class="d-md-none"><i class="bi bi-envelope-fill"></i></span>
          </button>
          
            <button class="btn btn-light" style="border: 1px solid blue; padding: 6px 12px; font-size: 16px;">
              <span class="d-none d-md-inline"><i class="glyphicon glyphicon-heart-empty"></i> </span>
              <span class="d-md-none"><i class="glyphicon glyphicon-heart-empty"></i></span>
            </button>
            
        </div>
        <div class="col-auto ms-auto">
            <a href="#" class="text-decoration-none" style="margin-right: 20px;">
                <span class="d-none d-md-inline"><i class="glyphicon glyphicon-chevron-left"></i>Précédent</span>
                <span class="d-md-none"><i class="glyphicon glyphicon-chevron-left"></i></span>
            </a>
            <a href="#" class="text-decoration-none">
                <span class="d-none d-md-inline">Suivant<i class="glyphicon glyphicon-chevron-right"></i></span>
                <span class="d-md-none"><i class="glyphicon glyphicon-chevron-right"></i></span>
            </a>
        </div>
    </div>
    
        <div class="row">
          <div class="col-md-8">
          <div class="slider" style="margin-top: 3%;">
            @foreach($images as $image)
            <div class="slide @if($loop->first) active @endif">
                <img src="{{ asset('storage/building_images/' . $image->path) }}" alt="{{ $image->name }}" width="100%" height="100%" loading="lazy">
            </div>
            @endforeach
        
              <!-- The arrows to control the slide transition -->
              <span class="arrow back" onclick="prevSlide()">&#10094;</span>
              <span class="arrow next" onclick="nextSlide()">&#10095;</span>
              </div>
         
          </div>
          <div class="col-md-4">
            <div class="house-type" style="font-size: 36px; color: #777; margin-bottom: 30px; font-weight: bold; font-style:inherit;">
              <h2>{{ $building->type }} @if ($building->type_annonce == 'Vente') à vendre @else à louer @endif</h2>

              <h2 >{{ $building->nb_etage }} @if($building->nb_etage > 1)étages @else étage @endif <span>. {{ $building->surface }} m²</span></h2>
              <div class="location col-5" style="margin-top: 30px;">
                <i class="glyphicon glyphicon-map-marker" id ="pin" style="margin-right: 10px;"></i>
                <h3 >{{ $building->adresse }}</h3>
              </div>
              <div class="price " style="color: #7dbad8; margin-top: 20px;" >
                <h2 >{{ $building->prix }} <i class="glyphicon glyphicon-euro"></i></h2>
              </div>
            </div>
          </div>
          
          
        </div>
      
    
        <div class="row" style="margin-top: 20px;">
          <div class="col-md-8">
            <h3>L'essentiel</h3>
            <div class="d-flex flex-row">
              <div class="p-2">
                <i class="lolo fas fa-cube"></i> {{ $building->nbpiece }} @if($building->nbpiece > 1)pièces @else pièce @endif
              </div>
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-bath"></i> 1 salle de bain/eau
              </div>

              @if($building->garage)
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-car"></i> Garage
              </div>
              @endif
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-square"></i> {{$building->surface}} m²
              </div>
            </div>
            <hr>
            <h3>Intérieur</h3>
            <div class="d-flex flex-row">
              @if($building->cuisine_equipee)
              <div class="p-2">
                <i class=" lolo fas fa-utensils"></i> Cuisine équipée
              </div>
              @endif
              @if($house->ascenceur)
              <div class="p-2" style="margin-left: 10px;">
              <i class="cil-elevator"></i></i> Ascenceur
              </div>
              @endif
              @if($house->balcon)
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-door-open"></i> Balcon
              </div>
              @endif
              <div class="p-2" style="margin-left: 10px;">
                <i class="lolo fas fa-lock"></i> Digicode
              </div>
            </div>
            <hr>
            <h3>Autre</h3>
            <div class="d-flex flex-row">
              @if(isset($building->annee_construction))
              <div class="p-2">
                <i class="lolo fas fa-calendar-alt"></i> Construit en {{$building->annee_construction}}
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
          <div class="col-md-4 bg-light" style="margin-bottom: 30px; "  >
            <form id="contact-form"  onsubmit="alert('Votre demande a bien été envoyée à l\'agence Urban Success.');" >
              <h3>Ce bien vous intéresse ?</h3>
              Contactez vite l'agence pour le visiter !
              <div class="mb-3">
                <label for="prenom" class="form-label">Prénom:</label>
                <input type="text" class="form-control" id="pre">
              </div>
              <div class="mb-3">
                <label for="nom" class="form-label">Nom:</label>
                <input type="text" class="form-control" id="nom">
              </div>
              
              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email1">
              </div>
              <div class="mb-3">
                <label for="Téléphone" class="form-label">Téléphone:</label>
                <input type="tel" class="form-control" id="tel1">
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              
              <div class="mb-2">
                <label class="form-label">Vous préférez être contacté par :</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="contact" id="email" value="email">
                  <label class="form-check-label" for="email">Email</label>
                  <input class="form-check-input "style="margin-left:10px;" type="radio" name="contact" id="telephone" value="telephone">
                  <label class="form-check-label" for="telephone"> Téléphone </label>
                </div>
              </div>
              
  
              <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-primary " >Ecrire à l'agence</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      
      
      
      
      
      
    <script>
      function scrollToForm() {
  var form = document.getElementById("contact-form");
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
        }
    </script>
</body

   
  @endsection