const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector('.multisteps-form__progress'),
    stepsForm: document.querySelector('.multisteps-form__form'),
    stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
    stepFormPanelClass: 'multisteps-form__panel',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next' };
  
  
  const removeClasses = (elemSet, className) => {
  
    elemSet.forEach(elem => {
  
      elem.classList.remove(className);
  
    });
  
  };
  
  const findParent = (elem, parentClass) => {
  
    let currentNode = elem;
  
    while (!currentNode.classList.contains(parentClass)) {
      currentNode = currentNode.parentNode;
    }
  
    return currentNode;
  
  };
  
  const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
  };
  
  const setActiveStep = activeStepNum => {
  
    removeClasses(DOMstrings.stepsBtns, 'js-active');
  
    DOMstrings.stepsBtns.forEach((elem, index) => {
  
      if (index <= activeStepNum) {
        elem.classList.add('js-active');
      }
  
    });
  };
  
  const getActivePanel = () => {
  
    let activePanel;
  
    DOMstrings.stepFormPanels.forEach(elem => {
  
      if (elem.classList.contains('js-active')) {
  
        activePanel = elem;
  
      }
  
    });
  
    return activePanel;
  
  };
  
  const setActivePanel = activePanelNum => {
  
    removeClasses(DOMstrings.stepFormPanels, 'js-active');
  
    DOMstrings.stepFormPanels.forEach((elem, index) => {
      if (index === activePanelNum) {
  
        elem.classList.add('js-active');
  
        setFormHeight(elem);
  
      }
    });
  
  };
  
  const formHeight = activePanel => {
  
    const activePanelHeight = activePanel.offsetHeight;
  
    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
  
  };
  
  const setFormHeight = () => {
    const activePanel = getActivePanel();
  
    formHeight(activePanel);
  };
  
  DOMstrings.stepsBar.addEventListener('click', e => {
  
    const eventTarget = e.target;
  
    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
      return;
    }
  
    const activeStep = getActiveStep(eventTarget);
  
    setActiveStep(activeStep);
  
    setActivePanel(activeStep);
  });
  
  DOMstrings.stepsForm.addEventListener('click', e => {
  
    const eventTarget = e.target;
  
    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))
    {
      return;
    }
  
    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
  
    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
  
    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
      activePanelNum--;
  
    } else {
  
      activePanelNum++;
  
    }
  
    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);
  
  });
  
  window.addEventListener('load', setFormHeight, false);
  
  window.addEventListener('resize', setFormHeight, false);
  
  
  const setAnimationType = newType => {
    DOMstrings.stepFormPanels.forEach(elem => {
      elem.dataset.animation = newType;
    });
  };
  
  //changing animation
  const animationSelect = document.querySelector('.pick-animation__select');
  
  animationSelect.addEventListener('change', () => {
    const newAnimationType = animationSelect.value;
  
    setAnimationType(newAnimationType);
  });
  const apiKey = 'pk.eyJ1IjoiYWxmcmVkMjAxNiIsImEiOiJja2RoMHkyd2wwdnZjMnJ0MTJwbnVmeng5In0.E4QbAFjiWLY8k3AFhDtErA';
  
  const mymap = L.map('map').setView([31.791702, -7.092620], 5);
  
  
  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: apiKey
  }).addTo(mymap);
  
  // Adding Marker
  
  const marker = L.marker([40.748708, -73.985433]).addTo(mymap);
  
  // Add popup message
  let template = `
  
  <h3>Empire State Building</h3>
  <div style="text-align:center">
      <img width="150" height="150"src="image.jpg"/>
  </div>
  `
  marker.bindPopup(template);
  
  // Add circle 
  
  const circle = L.circle([40.748708, -73.985433], {
      radius:500, 
      color: 'green', 
      fillColor: 'red',
      fillOpacity:0.2
  }).addTo(mymap).bindPopup('I am a circle')
  
  // Add Polygon
  
  const polygon = L.polygon([
     
      [40.73618, -73.97545],
      [40.731497, -73.974342],
      [40.729324, -73.972234],
      [40.732368, -73.981293],
  ], {
      color:'blue',
      fillColor:'blue',
      fillOpacity:0.2
  }).addTo(mymap).bindPopup(' I am a polygon')
  
  // polygon.bindPopup(' I am a polygon')
  // Get a reference to the select element
  const propertyTypeSelect = document.querySelector('#property-type');
  const propertyInfoPanel = document.querySelector('#property-info-panel');
  
  propertyTypeSelect.addEventListener('change', (event) => {
    const selectedValue = event.target.value;
  
    if (selectedValue ==='Apa') {
  
      propertyInfoPanel.innerHTML = `
      <div class="multisteps-form__form">
      <div class="row" style="margin-left: 8px;"
      <div class="multisteps-form__panel shadow p-4 rounded bg-white"  id="property-info-panel" data-animation="scaleIn">
      <h3 class="multisteps-form__title">Informations sur le bien</h3>
      <div class="multisteps-form__content">
        <h5>Interieurs</h5>
        <div class="form-row mt-4">
                      <div class="form-group form-inline "  style="margin-bottom: 10px;">
                        <label style="margin-right: 100px;"><strong>Type d'appartement:</strong></label>
                        
                        <div class="form-check" style="margin-right: 10px;">
                          <input class="form-check-input" type="radio" name="TYPE" id="simplex" value="simplex">
                          <label class="form-check-label" for="Simplex">
                            Simplex
                          </label>
                        </div>
                        <div class="form-check" style="margin-right: 10px;">
                          <input class="form-check-input" type="radio" name="TYPE" id="duplex" value="duplex">
                          <label class="form-check-label" for="Duplex">
                            Duplex
                          </label>
                        </div>
                        <div class="form-check" style="margin-right: 10px;">
                          <input class="form-check-input" type="radio" name="TYPE" id="exceptionelle" value="triplex">
                          <label class="form-check-label" for="Triplex">
                           Triplex
                          </label>
                        </div>
                       
                        
                      </div>
                    </div>
                    
                    
        <div class="form-row mt-4">
          <div class="col-12 col-sm-6">
            <label for="surface">Surface (m<sup>2</sup>)</label>
            <input type="number" class="form-control" id="surface"  autocomplete="off" name="sbain" required>
          </div>
          <div class="col-12 col-sm-6 mt-4 mt-sm-0">
            <label for="surface">Pièces</label>
            <input type="number" class="form-control"   autocomplete="off"  id="pieces" name="sbain" required>
          </div>
        </div>
        <div class="form-row mt-4">
          <div class="col-12 col-sm-6">
            <label for="sbain">Salle(s) de bain ou d'eau </label>
            <input type="number" class="form-control" id="sbain"   autocomplete="off" name="sbain" required>
          </div>
          <div class="col-12 col-sm-6 mt-4 mt-sm-0">
            <label for="Chambre">Chambre(s)</label>
            <input type="number" class="form-control" id="chambres"  autocomplete="off" name="sbain" required>
          </div>
        </div>
        <div class="form-row mt-4">
            <div class="form-group form-inline">
              <label style="margin-right: 20px;"><strong>Etat du bien:</strong> </label>
              
              <div class="form-check">
                <input class="form-check-input" type="radio" name="etat" id="etat_neuf" value="neuf">
                <label class="form-check-label" for="etat_neuf">
                  Neuf
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="etat" id="etat_bon" value="bon">
                <label class="form-check-label" for="etat_bon">
                  Bon
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="etat" id="etat_a_renover" value="a_renover">
                <label class="form-check-label" for="etat_a_renover">
                  A rénover
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="etat" id="etat_a_rehabiliter" value="a_rehabiliter">
                <label class="form-check-label" for="etat_a_rehabiliter">
                  A réhabiliter
                </label>
              </div>
            </div>
            
        </div>
        <hr>
        <h5>Exterieurs</h5>
        <div class="form-row mt-4">
          <div class="col-12 col-sm-6">
            <label for="balcons">Terrasses / balcons </label>
            <input type="number" class="form-control" id="balcons" name="sbain" autocomplete="off" required>
          </div>
          <div class="col-12 col-sm-6 mt-4 mt-sm-0">
            <label for="stationnement">Stationnement (m<sup>2</sup>)</label>
            <input type="number" class="form-control" id="stationnement" name="sbain" autocomplete="off" required>
          </div>
        </div>
        <hr>
        <h5>Environnement</h5>
        <div class="form-row mt-4">
          <div class="form-group form-inline">
            <label id="ns" style="margin-right: 15px;"><strong>Niveau sonore:</strong></label>
            
            <div class="form-check">
              <input class="form-check-input" type="radio" name="calme" id="tres_bruyant" value="tres_bruyant">
              <label class="form-check-label" for="tres_bruyant">
                Trés Bruyant
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="calme" id="bruyant" value="bruyant">
              <label class="form-check-label" for="bruyant">
                bruyant
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="calme" id="stand" value="stand">
              <label class="form-check-label" for="stand">
                Standard
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="calme" id="calme" value="calme">
              <label class="form-check-label" for="calme">
                Calme
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="calme" id="tres_calme" value="tcalme">
              <label class="form-check-label" for="calme">
                Très Calme
              </label>
            </div>
           
          </div>
        </div>
        <!-- lum -->
        <div class="form-row mt-4">
          <div class="form-group form-inline">
            <label id= "lum" style="margin-right: 40px;"><strong>Luminosité:</strong></label>
            
            <div class="form-check">
              <input class="form-check-input" type="radio" name="clair" id="sombre" value="sombre">
              <label class="form-check-label" for="sombre">
                Sombre
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="clair" id="pclair" value="pclair">
              <label class="form-check-label" for="pclair">
                Peu clair
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="clair" id="standard" value="standard">
              <label class="form-check-label" for="etat_a_renover">
                Standard
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="clair" id="clair" value="clair">
              <label class="form-check-label" for="clair">
                Clair
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="clair" id="tres_clair" value="tclair">
              <label class="form-check-label" for="clair">
                Très clair
              </label>
            </div>
          
          </div>
        </div>
        <div class="form-row mt-4">
          <div class="form-group form-inline">
            <label style="margin-right: 100px;"><strong>Vue:</strong></label>
            
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sombre" id="vis-à-vis" value="vis-à-vis">
              <label class="form-check-label" for="vis-à-vis">
                Vis-à-vis
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sombre" id="dégager" value="dégager">
              <label class="form-check-label" for="dégager">
                Dégager
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sombre" id="exceptionelle" value="exceptionelle">
              <label class="form-check-label" for="exceptionelle">
                Exceptionelle
              </label>
            </div>
           
            
          </div>
        </div>
  
          <!-- buttons -->
   
        <div class="button-row d-flex mt-4">
          <button class="btn btn-primary js-btn-prev" style="background-color: whitesmoke; color: black;" type="button" title="Prev">Revenir à l'étape précedente</button>
          <button class="btn btn-primary ml-auto js-btn-next" id="nbutton" type="button"  title="Next">Valider </button>
        </div>
      </div>
    </div>
  </div>
    </div>
      `;
  }
  });
  document.getElementById("calculate-btn").addEventListener("click", function() {
    calculateEstimation();
  });
  function calculateEstimation() {
  
    const form = document.getElementById('my_Form');
    const propertyType = document.querySelector('#property-type').value;
    const surface = document.querySelector('#surface').value;
    const pieces = document.querySelector('#pieces').value;
    const sbain = document.querySelector('#sbain').value;
    const chambres = document.querySelector('#chambres').value;
    const etat = document.querySelector('input[name="etat"]:checked').value;
    const balcons = document.querySelector('#balcons').value;
    const stationnement = document.querySelector('#stationnement').value;
    const calme = document.querySelector('input[name="calme"]:checked').value;
    const clair = document.querySelector('input[name="clair"]:checked').value;
    const vue = document.querySelector('input[name="sombre"]:checked').value;
  
    let estimation = 0;
  
    // Apply your estimation calculation logic based on the property type
    if (propertyType === 'house') {
      estimation = surface * 10000 + pieces * 5000 + sbain * 3000 + chambres * 7000;
    } else if (propertyType === 'Apa') {
      estimation = surface * 15000 + pieces * 4000 + sbain * 2500 + chambres * 6000;
    }
    // if(citySelect==='Casablanca'|| citySelect=== 'Rabat'){
    //   estimation+=1000;
    // } 
    // if(districtSelect==='Anfa'|| districtSelect==='Agdal'){
    //   estimation*=0.8;
    // }
    // if(apatype==="simplex"){
    //   estimation*=1.1;
    // }else if(apatype==="duplex"){
    //   estimation*=2;
    // }else if(apatype==="triplex"){
    //   estimate*=3;
    // }
    // Adjust the estimation value based on the other input fields
    if (etat === 'bon') {
      estimation *= 1.1;
    }else if(etat==='neuf'){
        estimation*=2;
    } else if (etat === 'a_renover') {
      estimation *= 0.8;
    } else if (etat === 'a_rehabiliter') {
      estimation *= 0.6;
    }
  
    estimation += balcons * 500 + stationnement * 1000;
  
    if (calme === 'tres_bruyant') {
      estimation *= 0.8;
    } else if (calme === 'bruyant') {
      estimation *= 0.9;
    } else if(calme=='stand'){
      estimation*=1.1;
    } else if(calme==='calme'){
      estimation *=1.5;
    }else if(calme==='tcalme'){
      estimation*=1.9;
    }
  
    if (clair === 'sombre') {
      estimation *= 0.8;
    } else if (clair === 'pclair') {
      estimation *= 0.9;
    } else if(clair=='standard'){
      estimation*=1.1;
    } else if(clair==='clair'){
      estimation *=1.5;
    }else if(clair==='tclair'){
      estimation*=1.9;
    }
  
    if (vue === 'vis-à-vis') {
      estimation *= 4.8;
    } else if (vue === 'dégager') {
      estimation *= 4.9;
    } else if(vue ==='exceptionelle'){
      estimation*=4.1;
    } 
   
    // Display estimated value
    const estimate = form.querySelector('#estimate');
    const prixb = form.querySelector('#prixbas');
    const prixh = form.querySelector('#prixhaut');
    estimate.innerHTML = parseInt(estimation)+" DH ";
    prixb.innerHTML =parseInt( estimation-1000)+" DH " ;
    prixh.innerHTML=parseInt(estimation+1500)+" DH "; 
  
    //Display adress 
    const e= form.querySelector('#str');
    if (propertyType === 'house'){
      str.innerHTML="La maison de "+ citySelect.value+"-"+districtSelect.value;
    }
    else if ( propertyType=== 'Apa'){
      str.innerHTML="L' apartement de"+ citySelect.value +"-"+districtSelect.value;
    }
  }
  
  
  const subBtn = document.getElementById("my-button");
  const q = document.getElementById("add");
  q.addEventListener('change', (e) => {
    console.log(e.currentTarget.value);
    const value = e.currentTarget.value;
    if (value !== "") {
      subBtn.disabled = false;
    } else {
      subBtn.disabled = true;
    }
  });
  
  const button = document.getElementById("nbutton");
  const inputs = document.querySelectorAll('input[name="sbain"]');
  
  inputs.forEach((input) => {
    input.addEventListener('keyup', (e) => {
      let allEmpty = false;
      inputs.forEach((input) => {
        if (input.value == "") {
          allEmpty = true;
        }
      });
      button.disabled = allEmpty;
    });
  });
   // get references to select elements
   const regionSelect = document.getElementById('add');
   const citySelect = document.getElementById('city-select');
  
   // define a function to update cities select element
   function updateCitySelect(regionValue) {
     // clear existing options
     citySelect.innerHTML = '<option selected disabled>Ville...</option>';
     
     // add options based on region
     switch (regionValue) {
       case 'tangier':
         citySelect.innerHTML += `<option>Tanger</option>
                                  <option> M'diq,Fnideq</option>
                                  <option>Tetouan</option>
                                  
                                  <optopn>Larache</option>
                                  <option>Al Hoceima</option>
                                  <option>Chauen</option>
                                  <option>Ouezzane</option>
  `;
         // add more cities for this region
         break;
       case 'oriental':
         citySelect.innerHTML += `<option>Figuig</option>
                                  <option> Oujda</option>
                                  <option> Nador </option>
                                  <option> Driouch</option>
                                  <option> Jerada </option>
                                  <option>Berkane </option>
                                  <option> Taourirt </option>
                                  <option> Guercif </option>
                                    `;
         break;
       case 'rabat':
         citySelect.innerHTML += `<option>Rabat</option>
                                  <option>Salé</option>
                                  <option>Skhirate </option>
                                  <option>Kenitra</option>
                                  <option> Khémisset </option>
                                  <option>Sidi Kacem</option>
                                  <option> Sidi Slimane </option>
                                  `;
         break;
       // add more cases for other regions
       case 'casa':
        citySelect.innerHTML += `<option>Casablanca</option>
                                 <option>Mohammedia</option>
                                 <option>El Jadida </option>
                                 <option>Mediuna</option>
                                 <option> Benslimane </option>
                                 <option>Berrechid</option>
                                 <option> Settat </option>
                                 `;
        break;
        case 'fez':
        citySelect.innerHTML += `<option>Fez</option>
                                 <option>Meknes</option>
                                 <option>El Hajeb </option>
                                 <option>Ifrane</option>
                                 <option> Sefrou </option>
                                 <option>Boulemane</option>
                                 <option> Taza </option>
                                 `;
        break;
        case 'kesh':
        citySelect.innerHTML += `<option>Marrakesh</option>
                                 <option>Chichaoua</option>
                                 <option>Al Haouz</option>
                                 <option>Esauira</option>
                                 <option>Safi</option>
                                 <option>Youssoufia</option>
                                 <option>El Kelaa des Sraghna</option>
                                 `;
        break;
        case 'bni':
        citySelect.innerHTML += `<option>Béni Mellal</option>
                                 <option>Azilal</option>
                                 <option>Fquih Ben Salah</option>
                                 <option>Khénifra</option>
                                 <option>Khouribga</option>
                                 
                                 `;
        break;
        case 'draa':
        citySelect.innerHTML += `<option>Errachidia</option>
                                 <option>Ouarzazate</option>
                                 <option>Midelt</option>
                                 <option>Tinghir</option>
                                 <option>Zagora</option>          
                                 `;
        break;
        case 'souss':
          citySelect.innerHTML += `<option>Agadir</option>
                                   <option>Aït Melloul</option>
                                   <option>Taroudant</option>
                                   <option>Tiznit</option>
                                   <option>Chtouka</option>          
                                   `;
          break;
          case 'glmim':
          citySelect.innerHTML += `<option>Guelmim</option>
                                   <option>Assa-Zag</option>
                                   <option>Tan Tan</option>
                                   <option>Sidi Ifni</option>
                                   `;
          break;
          case 'laayoune':
          citySelect.innerHTML += `<option>Laayoune</option>
                                     <option>Boujdour/option>
                                     <option>Tarfaya<option>
                                     <option>Es-Semara</option>
                                     `;
            break;
            case 'dakhla':
          citySelect.innerHTML += `<option>Oued Ed Dahab</option>
                                     <option>Aousserd</option>
                                     `;
            break;
  
          
     }
   }
  
   // add onchange event listener to region select element
   regionSelect.addEventListener('change', (event) => {
     updateCitySelect(event.target.value);
   });
  
  const districtSelect = document.getElementById('district-select');
  
  // listen for changes in the selected city
  citySelect.addEventListener('change', (event) => {
    const selectedCity = event.target.value;
    districtSelect.innerHTML=`<option selected disabled>Quartier...</option>`;
    // update the options of the district select element based on the selected city
    switch (selectedCity) {
      case 'Tanger':
        districtSelect.innerHTML += `<option>Laplaya</option>
                                    <option>Boulevard</option>
                                    <option>Al-Kasbah</option>
                                    <option>Marshan</option>
                                    <option>Achakar</option>`;
        // add more districts for this city
        break;
      case 'M\'diq,Fnideq':
        districtSelect.innerHTML += `<option>M\'diq</option>
                                    <option>Fnideq</option>`;
        // add more districts for this city
        break;
      case 'Tetouan':
        districtSelect.innerHTML += `<option>El Mandar Al Kbira</option>
                                    <option>El Mandar Al Sghira</option>
                                    <option>Tetouan Medina</option>
                                    <option>Bni Iznassen</option>
                                    <option>Fnideq</option>`;
        // add more districts for this city
        case 'Casablanca':
          districtSelect.innerHTML += `<option>Anfa</option>
                                      <option>Maarif</option>
                                      <option>El fida</option>
                                      <option> Sidi moumen</option>`
        break;
        case 'Agadir':
          districtSelect.innerHTML += `<option>Salam</option>
                                      <option>Houda</option>
                                      <option>Dakhla</option>
                                      <option>Hay Elmouhamadi</option>
                                      <option>Tilila</option>`;
        break;
        case 'Aït Melloul':
          districtSelect.innerHTML +=`<option> admim </option>
                                     <option> Chohada </option>
                                     <option> Moustakbal </option>
                                     <option>Agdall </option>`;
        break;
        case 'Rabat' : 
        districtSelect.innerHTML +=`<option>Agdal </option>
                                  <option>Elmassira</option>
                                  <option> Nahda </option>`;
        break;
        case 'Oujda' :    
        districtSelect.innerHTML +=`<option>  Essayh </option>
                                    <option> Zitoune </option>
                                    <option>EL Fath </option>
                                    <option>EL Andalouss </option>`;
  
        break;
        case 'Fez' :    
        districtSelect.innerHTML +=`<option> Amal </option>
                                    <option> Oued </option>
                                    <option>Mechour </option>
                                    <option>Es- Saada </option>`;
  
        break;
        case 'Marrakesh':
        districtSelect.innerHTML +=`<option> Gueliz </option>
                                    <option> hevirnage </option>
                                    <option>Daoudiate</option>
                                    <option>Semlalia </option>`;
  
        break;
      // add more cases for other cities
     
    }
  });
  const cities = {
    'Tanger': [35.777103, -5.803792],
    'Tetouan': [35.5731, -5.3682],
    'Al Hoceima': [35.2455, -3.9304],
    'Casablanca': [33.5731104, -7.5898434],
    'Mohammedia':[33.6968,- 7.3894],
    'El Jadida':[33.2542, -8.5069],
    'Mediuna' : [33.5574, -7.6174],
    'Berrechid':[33.2675,-7.5815],
    'Settat':[33.0009, -7.6165],
    'Rabat': [34.022405, -6.834543],
    'Salé': [33.994759, -6.833278],
    'Agadir':[ 30.421127, -9.583481],
    'Oujda': [34.677874, -1.934093],
    'Figuig':[32.1194, -1.2244],
    'Fnideq':[ 35.885477, -5.378187],
    'Tétouan': [35.573135, -5.368373],
    'Beni Mellal':[ 32.334198, -6.353114],
    'Fez':[34.018125, -5.007845],
    'Meknes':[33.895920, -5.547450],
    'Marrakesh':[31.6295, -7.9811],
    'Taroudant':[30.4720,-8.8761],
    'Aït Melloul':[30.3489, -9.4960]
  };
  
  function updateMapView(cityName) {
    const cityCoords = cities[cityName];
    if (cityCoords) {
      mymap.setView(cityCoords, 13);
    }
  }
  
  
  citySelect.addEventListener('change', function() {
    const selectedCity = citySelect.value;
    updateMapView(selectedCity);
  });
  const regions = {
    'tangier': [35.777103, -5.803792],
    'oriental': [34.677874, -1.934093],
    'fez': [34.018125, -5.007845],
    'rabat': [34.022405, -6.834543],
    'bni': [32.334198, -6.353114],
    'casa': [33.5731104, -7.5898434],
    'kesh': [30.4720,-8.8761],
    'draa': [30.421127, -9.583481],
    'souss': [30.421127, -9.583481],
    'glmim': [28.977423, -10.063774],
    'Laayoune': [27.138731, -13.202905],
    'dakhla': [23.702631, -15.922342]
  };
  
  function updateMapView1(regionName) {
    const regionCoords = regions[regionName];
    if (regionCoords) {
      mymap.setView(regionCoords, 9);
    }
  }
  
  regionSelect.addEventListener('change', function() {
    const selectedRegion = regionSelect.value;
    updateMapView1(selectedRegion);
  });
  