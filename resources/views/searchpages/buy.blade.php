<html>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
    
body{
  background-color: #eeeeee;
}

.card {
  margin-bottom: 30px;
  
  height: 400px;
}
/* Change the color of the title and text to blue */


.price{
  color: black !important;
  font-weight: bold;
  
}






/* Style the number of rooms, surface, and price to become bold and underlined on hover */
.card-text:hover span {
  font-weight: bold;
  text-decoration: underline;
}

.card-img-top {
  height: 200px;
  object-fit: cover;
 
}

.card-body{
  height: 150px;


}



.badge{
  color: black  ;
  background-color: #C3D6E4;
}
.btn-outline-secondary {

  background-color: #C3D6E4;
  border-color: black;
  color: black;
 
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

  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><b>Kay.com</b></a>
            
          
  </nav>
  <!-- <div class="container mt-3">
  <div class="form-group">
    <label for="filter">Filter:</label>
    <select class="form-control" id="filter">
      <option value="all">All</option>
      <option value="houses">Houses</option>
      <option value="apartments">Apartments</option>
    </select>
  </div>
  <div class="form-group">
    <label for="filter">Filter:</label>
    <select class="form-control" id="filter">
      <option value="all">All</option>
      <option value="houses">Houses</option>
      <option value="apartments">Apartments</option>
    </select>
  </div>
  <div class="form-group">
    <label for="filter">Filter:</label>
    <select class="form-control" id="filter">
      <option value="all">All</option>
      <option value="houses">Houses</option>
      <option value="apartments">Apartments</option>
    </select>
  </div>
</div> -->

  <div class="container" style="margin-top: 20px;">
    
    
  <div class="row" style="margin-top: 40px;">
  @foreach ($houses as $item)
    <div class="col-md-4">
      <div class="card mb-4 box-shadow">
        <a href="/houses/{{ $item->id }}">
          <img class="card-img-top" src="{{ asset('uploads/houses/'.$item->image ) }}" alt="Maison">
        </a>
        <div class="card-body">
          <h6 class="card-title">{{ $item->type }}</h6>
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <p class="card-text mb-1">
                <span class="badge badge-secondary">{{ $item->surface }}m²</span>
             
             
                <span class="badge badge-secondary">{{ $item->nbpiece }} pièces</span>
              </p>
            </div>
            <h6 class="card-subtitle mb-2 text-muted price align-self-end">{{ $item->prix }} DH</h6>
          </div>
          <p class="card-text mt-3">
            {{ $item->adresse  }}
          </p>
          <div class="btn-group d-flex justify-content-center align-items-center mt-3" role="group">
            <button type="button" class="btn btn-outline-secondary w-100"> <i class="far fa-envelope"></i> Contactez-nous</button>
            <button type="button" class="btn btn-outline-secondary w-100"> <i class="far fa-heart"></i> Favoris</button>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>






 </body>

</html>