@extends('layouts.auth-master')

@section('content')

  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


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
.chat-container {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  max-width: 500px;
  margin: 20px auto;
  font-family: Arial, sans-serif;
}

.chat-header {
  background-color: #007bff;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.chat-body {
  padding: 10px;
  max-height: 400px;
  overflow-y: scroll;
}

.chat-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}

.chat-footer input[type="text"] {
  flex-grow: 1;
  padding: 10px;
  border-radius: 20px;
  border: none;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  margin-right: 10px;
}

.chat-footer button {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 20px;
  padding: 10px 20px;
  cursor: pointer;
}
.chat-message.outgoing {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.chat-message.outgoing i {
  margin-right: 8px;
}

.chat-message.incoming {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.chat-message.incoming i {
  margin-right: 8px;
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
.chat-bubble {
  margin-bottom: 10px;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
}

.chat-bubble.outgoing {
  justify-content: flex-end;
}

.chat-bubble.incoming {
  justify-content: flex-start;
}

.chat-message {
  padding: 8px 12px;
  border-radius: 20px;
  font-size: 16px;
  line-height: 1.4;
  max-width: 70%;
  word-wrap: break-word;
  position: relative;
}

.chat-message.outgoing {
  background-color: #2979ff;
  color: #fff;
  margin-right: 8px;
}

.chat-message.incoming {
  background-color: #f3f3f3;
  color: #333;
  margin-left: 8px;
}

.chat-message:after {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  border-top: 12px solid transparent;
  border-bottom: 12px solid transparent;
  border-right: 12px solid #2979ff;
  top: 50%;
  margin-top: -12px;
}

.chat-message.outgoing:after {
  right: -10px;
}

.chat-message.incoming:after {
  left: -10px;
  border-right-color: #f3f3f3;
  border-left: 12px solid transparent;
}

 </style></head>
 <body >
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

function sendMessage(message) {
if (message.trim() === '') {
return;
}

// Create outgoing message element with icon and chat bubble design
const chatMessage = document.createElement('div');
chatMessage.classList.add('chat-message', 'outgoing');
const icon = document.createElement('i');
icon.classList.add('fas', 'fa-user');
chatMessage.appendChild(icon);
const text = document.createElement('span');
text.textContent = message;
chatMessage.appendChild(text);
const chatBubble = document.createElement('div');
chatBubble.classList.add('chat-bubble', 'outgoing');
chatBubble.appendChild(chatMessage);
chatBody.appendChild(chatBubble);

inputField.value = '';

setTimeout(() => {
const response = getResponse(message);

// Create incoming message element with icon and chat bubble design
const chatMessage = document.createElement('div');
chatMessage.classList.add('chat-message', 'incoming');
const icon = document.createElement('i');
icon.classList.add('fas', 'fa-robot');
chatMessage.appendChild(icon);
const text = document.createElement('span');
text.textContent = response;
chatMessage.appendChild(text);
const chatBubble = document.createElement('div');
chatBubble.classList.add('chat-bubble', 'incoming');
chatBubble.appendChild(chatMessage);
chatBody.appendChild(chatBubble);
chatBody.scrollTop = chatBody.scrollHeight;
}, 1000);
}



// Get a response from the chatbot based on the user's message
function getResponse(message) {
const keywords = {
acheter: "Chez nous, l'achat de votre propriété idéale est facile ! Que vous cherchiez une maison, un appartement ou un terrain, sélectionnez simplement le type de bien dans le menu en haut, ou remplissez le formulaire d'achat à l'accueil pour trouver la perle rare.",
vendre: "Vous souhaitez vendre votre bien rapidement et efficacement ? C'est facile avec Kay! Commencez par sélectionner le type de bien dans le menu en haut,puis continuez en remplissant notre formulaire détaillé pour décrire les caractéristiques de votre bien.",
louer: 'Vous cherchez un logement à louer ? Kay en ligne vous simplifie la vie ! Il vous suffit de sélectionner le type de bien que vous recherchez dans le menu en haut, puis de remplir notre formulaire de demande de location pour nous faire part de vos critères.',
bonjour: "bonjour, comment je peux vous aider",
bonsoir: "bonsoir, comment je peux vous aider"
};
const words = message.toLowerCase().split(' ');
for (const word of words) {
if (keywords[word]) {
return keywords[word];
}
}
return "Désolé,utilise les keywords acheter vendre louer.";
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
        @if ($houses->isEmpty() && $buildings->isEmpty() && $lands->isEmpty() ) 
          <div class="col text-center mt-5">
            <i class="fas fa-search fa-2x text-muted"></i>
            <h6 class="mt-3 ">Aucun résultat trouvé.</h6>
          </div>
        @else 


    
    
        @foreach ($houses as $item)
  @if($item->accepted==1)
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
         
        @auth
          @if(auth()->check() && auth()->user()->favoriteHouses->contains($item->id))
          <button type="submit" class="btn btn-outline-secondary btn-sm w-100 add-to-favorites" data-house-id="{{ $item->id }}" data-favorited="true">    
            <i class="fas fa-heart"></i> Favoris</button>
          @else
          <button type="submit" class="btn btn-outline-secondary btn-sm w-100 add-to-favorites" data-house-id="{{ $item->id }}" data-favorited="false">    <i class="far fa-heart"></i> Favoris</button>
          @endif
        @endauth
        @guest
            <a  class="btn btn-outline-secondary btn-sm w-100" href="/please-login" >    <i class="far fa-heart"></i> Favoris </a>
        @endguest
        </div>
      </div>
    </div>
  </div>
  @endif
@endforeach

     
    @foreach ($buildings as $item)
    @if($item->accepted==1)
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
                  <span class="badge badge-secondary">{{ $item->nb_etage }} @if($item->nb_etage > 1)étages @else étage @endif </span>
                </p>
              </div>
              <h6 class="card-subtitle mb-2 text-muted price align-self-end">{{ $item->prix }} dh @if($item->type_annonce==='Location')/mois @endif </h6>
            </div>
            <h6 class="card-text adresse ">
              {{ $item->adresse  }}
            </h6>
            <div class="btn-group d-flex justify-content-center align-houses-center mt-3 " role="group">
              <button type="button" class="btn btn-outline-secondary btn-sm w-100"> <i class="far fa-envelope"></i> Contactez-nous</button>
              
            @auth
              @if(auth()->check() && auth()->user()->favoriteBuildings->contains($item->id))
              <button type="submit" class="btn btn-outline-secondary btn-sm w-100 add-building-to-favorites" data-building-id="{{ $item->id }}">    
                <i class="fas fa-heart"></i> Favoris</button>
              @else
              <button type="submit" class="btn btn-outline-secondary btn-sm w-100 add-building-to-favorites" data-building-id="{{ $item->id }}" >    <i class="far fa-heart"></i> Favoris</button>
              @endif
            @endauth
            @guest
               <a  class="btn btn-outline-secondary btn-sm w-100" href="/please-login" >    <i class="far fa-heart"></i> Favoris </a>
            @endguest

            </div>
          </div>
        </div>
      </div>
      @endif
    @endforeach

     
    @foreach ($lands as $item)
    @if($item->accepted==1)
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <a href="/lands/{{ $item->id }}">
           
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
              
            @auth
              @if(auth()->check() && auth()->user()->favoriteLands->contains($item->id))
              <button type="submit" class="btn btn-outline-secondary btn-sm w-100 add-land-to-favorites" data-land-id="{{ $item->id }}">    
                <i class="fas fa-heart"></i> Favoris</button>
              @else
              <button type="submit" class="btn btn-outline-secondary btn-sm w-100 add-land-to-favorites" data-land-id="{{ $item->id }}" >    <i class="far fa-heart"></i> Favoris</button>
              @endif
            @endauth
            @guest
              <a  class="btn btn-outline-secondary btn-sm w-100" href="/please-login" >    <i class="far fa-heart"></i> Favoris </a>
            @endguest
            
            </div>
          </div>
        </div>
      </div>
      @endif
    @endforeach

  @endif
  </div> 
@auth
<script>

//*************************** House favorite Function ************************************************
//****************************************************************************************************

//*************************** House favorite Function ************************************************
//****************************************************************************************************


$(document).ready(function() {
    // Add an event listener for the "Add to favorites" button click event
    $('.add-to-favorites').on('click', function(event) {
        // Prevent the default behavior of the button
        event.preventDefault();

        // Get the house ID from the data attribute of the button
        var houseId = $(this).data('house-id');

        // Save a reference to the heart icon inside the button
        var heartIcon = $(this).find('i');

        // Make an AJAX request to add the house to the user's favorites
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

                // Toggle the class of the heart icon
                heartIcon.toggleClass('fas far');
            },
            error: function(xhr) {
                // Handle the error response from the server
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    alert(xhr.responseJSON.message);
                } else {
                    alert('An error occurred while adding the house to your favorites.');
                }
            }
        });
    });
});
//*************************** Building favorite Function ************************************************
//****************************************************************************************************

$(document).ready(function() {
    // Add an event listener for the "Add to favorites" button click event
    $('.add-building-to-favorites').on('click', function(event) {
        // Prevent the default behavior of the button
        event.preventDefault();

        // Get the building ID from the data attribute of the button
        var buildingId = $(this).data('building-id');

        // Save a reference to the heart icon inside the button
        var heartIcon = $(this).find('i');

        // Make an AJAX request to add the building to the user's favorites
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

                // Toggle the class of the heart icon
                heartIcon.toggleClass('fas far');
            },
            error: function(xhr) {
                // Handle the error response from the server
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    alert(xhr.responseJSON.message);
                } else {
                    alert('An error occurred while adding the building to your favorites.');
                }
            }
        });
    });
});

//*************************** Land favorite Function ************************************************
//****************************************************************************************************
$(document).ready(function() {
    // Add an event listener for the "Add to favorites" button click event
    $('.add-land-to-favorites').on('click', function(event) {
        // Prevent the default behavior of the button
        event.preventDefault();

        // Get the land ID from the data attribute of the button
        var landId = $(this).data('land-id');

        // Save a reference to the heart icon inside the button
        var heartIcon = $(this).find('i');

        // Make an AJAX request to add the land to the user's favorites
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

                // Toggle the class of the heart icon
                heartIcon.toggleClass('fas far');
            },
            error: function(xhr) {
                // Handle the error response from the server
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    alert(xhr.responseJSON.message);
                } else {
                    alert('An error occurred while adding the land to your favorites.');
                }
            }
        });
    });
});

</script>

@endauth
<script>



</script>

 

@endsection