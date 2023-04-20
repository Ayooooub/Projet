@extends('layouts.auth-master')

@section('content')

  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
    
body{
  background-color: #eeeeee;
}

.card {
  margin-bottom: 30px;
  
  height: 350px;
}
/* Change the color of the title and text to blue */


.price{
  color: black !important;
  font-weight: bold;
  font-size: 14px !important;
 
  
}



.card-text {
  margin-bottom: 0.2rem;
}

.card-title {
  margin-top: 0.15rem;
  margin-bottom: 0.5rem;
}
.card {
  margin-bottom: 1rem;
}




.card-img-top {
  height: 190px;
  object-fit: cover;
 
}

.card-body{
  font-size: 16px;
  padding: 15px;
  height: 120px;
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;

}
.card-title,
.card-subtitle {
  font-size: 16px;
  line-height: 1.1;
  
}

.card-text {
  font-size: 14px;
  line-height: 1.3;
}

.badge{
  color: black  ;
  background-color: #C3D6E4;
}

.btn-outline-secondary {
  
  background-color: #C3D6E4;
  border-color: black;
  color: black;
  margin-bottom: 0.1rem;
 

}

.btn-outline-secondary:hover {
  color: #fff;
  background-color:  #6798BB;
}
.btn-outline-secondary:active, 
.btn-outline-secondary.active , 
.btn-outline-secondary:focus{
  
  color: #fff!important;
  background-color: #6798BB !important;
  box-shadow: none !important;
  
}

.ad-column {
        padding: 30px; /* Change this value to adjust the width of the ad column */
    }



</style>




<style>

/**************** Virtual assistant ******************/
.chat-icon {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #fff;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  z-index: 9999;
}

.chat-icon i {
  color: #333;
  font-size: 28px;
}

.chat-container {
  position: fixed;
  bottom: 80px;
  right: 20px;
  width: 300px;
  height: 400px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  display: none;
  z-index: 9998;
}

.chat-header {
  padding: 10px;
  background-color: #f5f5f5;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.chat-header h3 {
  margin: 0;
  font-size: 16px;
  font-weight: 600;
}

.close-btn {
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.close-btn i {
  color: #333;
  font-size: 18px;
}

.chat-body {
  height: 300px;
  overflow-y: scroll;
  padding: 10px;
}

.chat-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  border-top: 1px solid #eee;
}

.chat-footer input {
  border: none;
  padding: 10px;
  width: 100%;
  border-radius: 3px;
  margin-right: 10px;
  font-size: 14px;
  outline: none;
}

.chat-footer button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding:5px 10px;
  border-radius: 3px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.chat-footer button:hover {
background-color: #0069d9;
}
.chat-icon {
  position: fixed;
  bottom: 30px;
  right: 30px;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-color: #0069d9;
  cursor: pointer;
  animation: bounce 1s ease infinite alternate;
}

@keyframes bounce {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-10px);
  }
}

 </style></head>
 
    <div class="chat-icon">
        <i style="color: white;" class="fas fa-comment-alt"></i>
      </div>
      
      <div class="chat-container">
        <div class="chat-header">
          <h3> Kay, votre assistant virtuel</h3>
          <button class="close-btn"><i class="fas fa-times"></i></button>
        </div>
        <div class="chat-body">
          <!-- Chat messages will be displayed here -->
        </div>
        <div class="chat-footer">
          <input type="text" placeholder="Type your message...">
          <button class="send-btn"><i class="fas fa-paper-plane"></i></button>
        </div>
      </div>
      <script>
  const chatIcon = document.querySelector('.chat-icon');
  const chatContainer = document.querySelector('.chat-container');
  const closeBtn = document.querySelector('.close-btn');
  const sendBtn = document.querySelector('.send-btn');
  const chatBody = document.querySelector('.chat-body');
  const inputField = document.querySelector('input');
  
  let isChatOpen = false;
  
  // Toggle the visibility of the chat container
  chatIcon.addEventListener('click', () => {
    isChatOpen = !isChatOpen;
    if (isChatOpen) {
      chatContainer.style.display = 'block';
    } else {
      chatContainer.style.display = 'none';
    }
  });
  
  // Close the chat container when the close button is clicked
  closeBtn.addEventListener('click', () => {
    isChatOpen = false;
    chatContainer.style.display = 'none';
  });
  
  // Send a message when the send button is clicked
  sendBtn.addEventListener('click', () => {
    const message = inputField.value;
    sendMessage(message);
  });
  
  // Send a message when the enter key is pressed
  inputField.addEventListener('keypress', (event) => {
    if (event.key === 'Enter') {
      const message = inputField.value;
      sendMessage(message);
    }
  });
  
  // Send a message to the chatbot and receive a response
  function sendMessage(message) {
    if (message.trim() === '') {
      return;
    }
    const chatMessage = document.createElement('div');
    chatMessage.classList.add('chat-message', 'outgoing');
    chatMessage.textContent = message;
    chatBody.appendChild(chatMessage);
    inputField.value = '';
    setTimeout(() => {
      const response = getResponse(message);
      const chatMessage = document.createElement('div');
      chatMessage.classList.add('chat-message', 'incoming');
      chatMessage.textContent = response;
      chatBody.appendChild(chatMessage);
      chatBody.scrollTop = chatBody.scrollHeight;
    }, 1000);
  }
  
  // Get a response from the chatbot based on the user's message
  function getResponse(message) {
    const keywords = {
      acheter: "Chez nous, l'achat de votre propriété idéale est facile ! Que vous cherchiez une maison, un appartement ou un terrain, sélectionnez simplement le type de bien dans le menu en haut, ou remplissez le formulaire d'achat à l'accueil pour trouver la perle rare.",
      vendre: "Vous souhaitez vendre votre bien rapidement et efficacement ? C'est facile avec Kay! Commencez par sélectionner le type de bien dans le menu en haut,puis continuez en remplissant notre formulaire détaillé pour décrire les caractéristiques de votre bien.",
      louer: 'Vous cherchez un logement à louer ? Kay en ligne vous simplifie la vie ! Il vous suffit de sélectionner le type de bien que vous recherchez dans le menu en haut, puis de remplir notre formulaire de demande de location pour nous faire part de vos critères.',
    };
    const words = message.toLowerCase().split(' ');
    for (const word of words) {
      if (keywords[word]) {
        return keywords[word];
      }
    }
    return "I'm sorry, I didn't understand your message.";
  }
  
      </script>
      
      <!-- <div class="container mt-3">
      <div class="row">
            <div class=" col">
              <label for="filter">Type:</label>
              <select class="form-control" id="filter">
                <option value="">Tous</option>
                <option value="Maison">Maisons</option>
                <option value="Appartement">Appartements</option>
              </select>
            </div>
            <div class=" col">
              <label for="filter">Type:</label>
              <select class="form-control">
                <option value="all">All</option>
                <option value="houses">Houses</option>
                <option value="apartments">Apartments</option>
              </select>
            </div>
            <div class=" col">
              <label for="filter">Type:</label>
              <select class="form-control">
                <option value="all">All</option>
                <option value="houses">Houses</option>
                <option value="apartments">Apartments</option>
              </select>
            </div>
      </div> -->

      

   <div class="container " style="margin-top: 20px;">
      <div class="row" style="margin-top: 40px;">
        @if ($houses->isEmpty() && $buildings->isEmpty() && $lands->isEmpty()) 
          <div class="col text-center mt-5">
            <i class="fas fa-search fa-2x text-muted"></i>
            <h6 class="mt-3 ">Aucun résultat trouvé.</h6>
          </div>
        @else     


    
    

    @foreach ($houses as $item)
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <a href="/houses/{{ $item->id }}">
            @if($item->images->count() > 0 )
              <img class="card-img-top" src="{{ asset('storage/house_images/'.$item->images->first()->path ) }}" alt="Maison">
           
            @else
              <img class="card-img-top" src="{{ asset('storage/default_house.jpg') }}" alt="Maison">
            @endif
          </a>
          <div class="card-body">
            <h6 class="card-title mt-2">{{ $item->type }}</h6>
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <p class="card-text mb-2">
                  <span class="badge badge-secondary">{{ $item->surface }}m²</span>
                  <span class="badge badge-secondary"> {{ $item->nbpiece }} @if($item->nbpiece > 1)pièces @else pièce @endif </span>
                </p>
              </div>
              <h6 class="card-subtitle mb-2 text-muted price align-self-end">{{ $item->prix }} dh @if($item->type_annonce==='Location')/mois @endif </h6>
            </div>
            <h6 class="card-text adresse ">
              {{ $item->adresse  }}
            </h6>
            <div class="btn-group d-flex justify-content-center align-houses-center mt-3 " role="group">
              <button type="button" class="btn btn-outline-secondary btn-sm w-100"> <i class="far fa-envelope"></i> Contactez-nous</button>
              <button type="submit" class="btn btn-outline-secondary btn-sm w-100 add-to-favorites" data-house-id="{{ $item->id }}" data-favorited="true">
                  <i class="far fa-heart"></i> Favoris
              </button>

            </div>
          </div>
        </div>
      </div>
    @endforeach
     
    @foreach ($buildings as $item)
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <a href="/buildings/{{ $item->id }}">
           
            @if($item->images->count() > 0 )
              <img class="card-img-top" src="{{ asset('storage/building_images/'.$item->images->first()->path ) }}" alt="Maison">
            @else
              <img class="card-img-top" src="{{ asset('storage/default_house.jpg') }}" alt="Maison">
            @endif
          </a>
          <div class="card-body">
            <h6 class="card-title mt-2">{{ $item->type }}</h6>
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <p class="card-text mb-2">
                  <span class="badge badge-secondary">{{ $item->surface }}m²</span>
                  <span class="badge badge-secondary">{{ $item->nb_etage }} @if($item->nb_etage > 1)étages @else étage @endif étages</span>
                </p>
              </div>
              <h6 class="card-subtitle mb-2 text-muted price align-self-end">{{ $item->prix }} dh @if($item->type_annonce==='Location')/mois @endif </h6>
            </div>
            <h6 class="card-text adresse ">
              {{ $item->adresse  }}
            </h6>
            <div class="btn-group d-flex justify-content-center align-houses-center mt-3 " role="group">
              <button type="button" class="btn btn-outline-secondary btn-sm w-100"> <i class="far fa-envelope"></i> Contactez-nous</button>
              <button type="submit" class="btn btn-outline-secondary btn-sm w-100 add-building-to-favorites" data-building-id="{{ $item->id }}"> <i class="far fa-heart"></i> Favoris</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach

     
    @foreach ($lands as $item)
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <a href="/houses/{{ $item->id }}">
           
            @if($item->images->count() > 0 )
              <img class="card-img-top" src="{{ asset('storage/land_images/'.$item->images->first()->path ) }}" alt="Maison">
            @else
              <img class="card-img-top" src="{{ asset('storage/default_house.jpg') }}" alt="Maison">
            @endif
          </a>
          <div class="card-body">
            <h6 class="card-title mt-2">{{ $item->type }}</h6>
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <p class="card-text mb-2">
                  <span class="badge badge-secondary">{{ $item->surface }}m²</span>
                 
                </p>
              </div>
              <h6 class="card-subtitle mb-2 text-muted price align-self-end">{{ $item->prix }} dh @if($item->type_annonce==='Location')/mois @endif </h6>
            </div>
            <h6 class="card-text adresse ">
              {{ $item->adresse  }}
            </h6>
            <div class="btn-group d-flex justify-content-center align-houses-center mt-3 " role="group">
              <button type="button" class="btn btn-outline-secondary btn-sm w-100"> <i class="far fa-envelope"></i> Contactez-nous</button>
              <button type="submit" class="btn btn-outline-secondary btn-sm w-100 add-land-to-favorites" data-land-id="{{ $item->id }}"> <i class="far fa-heart"></i> Favoris</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach

    @endif
  </div> 

<script>

//*************************** House favorite Function ************************************************
//****************************************************************************************************

$(document).ready(function() {
    // Get the favorite house IDs from localStorage, or an empty array if none are found
var favoriteHouseIds = JSON.parse(localStorage.getItem('favoriteHouseIds')) || [];

// Add an event listener for the "Add to favorites" button click event
$('.add-to-favorites').on('click', function(event) {
    // Prevent the default behavior of the button
    event.preventDefault();

    // Get the house ID from the data attribute of the button
    var houseId = $(this).data('house-id');

    // Check if the house is already in the user's favorites
    var houseIndex = favoriteHouseIds.indexOf(houseId);
    if (houseIndex !== -1) {
        // The house is already in the user's favorites, so remove it
        favoriteHouseIds.splice(houseIndex, 1);
        $(this).html('<i class="far fa-heart"></i> Favoris');
    } else {
        // The house is not yet in the user's favorites, so add it
        favoriteHouseIds.push(houseId);
        $(this).html('<i class="fas fa-heart"></i> Favoris');
    }

    // Store the updated favorite house IDs in localStorage
    localStorage.setItem('favoriteHouseIds', JSON.stringify(favoriteHouseIds));

    // Make an AJAX request to add/remove the house to/from the user's favorites on the server
    $.ajax({
        url: '{{ route("add-to-favorites") }}',
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            'house_id': houseId
        },
        success: function(response) {
            // Handle the success response from the server
            alert(response.message);
        },
        error: function(xhr) {
            // Handle the error response from the server
            if (xhr.responseJSON && xhr.responseJSON.message) {
                alert(xhr.responseJSON.message);
            } else {
                alert('An error occurred while adding/removing the house to/from your favorites.');
            }
        }
    });
});

// Set the text of the "Add to favorites" button based on whether the house is already in the user's favorites
$('.add-to-favorites').each(function() {
    var houseId = $(this).data('house-id');
    if (favoriteHouseIds.includes(houseId)) {
        $(this).html('<i class="fas fa-heart"></i> Favoris');
    } else {
        $(this).html('<i class="far fa-heart"></i> Favoris');
    }
});

});


//*************************** Building favorite Function ************************************************
//****************************************************************************************************

$(document).ready(function() {
    // Get the favorite building IDs from localStorage, or an empty array if none are found
var favoriteBuildingIds = JSON.parse(localStorage.getItem('favoriteBuildingIds')) || [];

// Add an event listener for the "Add to favorites" button click event
$('.add-building-to-favorites').on('click', function(event) {
    // Prevent the default behavior of the button
    event.preventDefault();

    // Get the building ID from the data attribute of the button
    var buildingId = $(this).data('building-id');

    // Check if the building is already in the user's favorites
    var buildingIndex = favoriteBuildingIds.indexOf(buildingId);
    if (buildingIndex !== -1) {
        // The building is already in the user's favorites, so remove it
        favoriteBuildingIds.splice(buildingIndex, 1);
        $(this).html('<i class="far fa-heart"></i> Favoris');
    } else {
        // The building is not yet in the user's favorites, so add it
        favoriteBuildingIds.push(buildingId);
        $(this).html('<i class="fas fa-heart"></i> Favoris');
    }

    // Store the updated favorite building IDs in localStorage
    localStorage.setItem('favoriteBuildingIds', JSON.stringify(favoriteBuildingIds));

    // Make an AJAX request to add/remove the building to/from the user's favorites on the server
    $.ajax({
        url: '{{ route("add-building-to-favorites") }}',
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            'building_id': buildingId
        },
        success: function(response) {
            // Handle the success response from the server
            alert(response.message);
        },
        error: function(xhr) {
            // Handle the error response from the server
            if (xhr.responseJSON && xhr.responseJSON.message) {
                alert(xhr.responseJSON.message);
            } else {
                alert('An error occurred while adding/removing the building to/from your favorites.');
            }
        }
    });
});

// Set the text of the "Add to favorites" button based on whether the building is already in the user's favorites
$('.add-building-to-favorites').each(function() {
    var buildingId = $(this).data('building-id');
    if (favoriteBuildingIds.includes(buildingId)) {
        $(this).html('<i class="fas fa-heart"></i> Favoris');
    } else {
        $(this).html('<i class="far fa-heart"></i> Favoris');
    }
});

});

//*************************** Land favorite Function ************************************************
//****************************************************************************************************


$(document).ready(function() {
    // Get the favorite land IDs from localStorage, or an empty array if none are found
var favoriteLandIds = JSON.parse(localStorage.getItem('favoriteLandIds')) || [];

// Add an event listener for the "Add to favorites" button click event
$('.add-land-to-favorites').on('click', function(event) {
    // Prevent the default behavior of the button
    event.preventDefault();

    // Get the land ID from the data attribute of the button
    var landId = $(this).data('land-id');

    // Check if the land is already in the user's favorites
    var landIndex = favoriteLandIds.indexOf(landId);
    if (landIndex !== -1) {
        // The land is already in the user's favorites, so remove it
        favoriteLandIds.splice(landIndex, 1);
        $(this).html('<i class="far fa-heart"></i> Favoris');
    } else {
        // The land is not yet in the user's favorites, so add it
        favoriteLandIds.push(landId);
        $(this).html('<i class="fas fa-heart"></i> Favoris');
    }

    // Store the updated favorite land IDs in localStorage
    localStorage.setItem('favoriteLandIds', JSON.stringify(favoriteLandIds));

    // Make an AJAX request to add/remove the Land to/from the user's favorites on the server
    $.ajax({
        url: '{{ route("add-land-to-favorites") }}',
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            'land_id': landId
        },
        success: function(response) {
            // Handle the success response from the server
            alert(response.message);
        },
        error: function(xhr) {
            // Handle the error response from the server
            if (xhr.responseJSON && xhr.responseJSON.message) {
                alert(xhr.responseJSON.message);
            } else {
                alert('An error occurred while adding/removing the land to/from your favorites.');
            }
        }
    });
});

// Set the text of the "Add to favorites" button based on whether the land is already in the user's favorites
$('.add-land-to-favorites').each(function() {
    var landId = $(this).data('land-id');
    if (favoriteLandIds.includes(landId)) {
        $(this).html('<i class="fas fa-heart"></i> Favoris');
    } else {
        $(this).html('<i class="far fa-heart"></i> Favoris');
    }
});

});


$(document).ready(function() {
  $('#sort-select').change(function() {
    var sortType = $(this).val();
    var url = '/search-rent';
    
    if (sortType === 'date_asc') {
      url += '?sort=date_asc';
    } else if (sortType === 'date_desc') {
      url += '?sort=date_desc';
    } else if (sortType === 'price_asc') {
      url += '?sort=price_asc';
    } else if (sortType === 'price_desc') {
      url += '?sort=price_desc';
    } else if (sortType === 'type_asc') {
      url += '?sort=type_asc';
    } else if (sortType === 'type_desc') {
      url += '?sort=type_desc';
    }
    
    window.location.href = url;
  });
});

</script>

 

@endsection