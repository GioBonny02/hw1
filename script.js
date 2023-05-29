function imgclick(event){
    event.preventDefault();
    const check = event.currentTarget;   //ricavo l'elemento cliccato
  
    const input=check.dataset.choice; //memorizzo id immagine selezionata
  
    console.log("caricamento.php?id="+input);
    fetch("caricamento.php?id="+input).then(principale);
  };

function imgdelete(event){
    event.preventDefault();
    const check = event.currentTarget;   //ricavo l'elemento cliccato
  
    const input=check.dataset.choice; //memorizzo id immagine selezionata
  
    console.log("rimuovi.php?id="+input);
    fetch("rimuovi.php?id="+input).then(principale);
};

function onJSON(json){
    console.log(json);
    const card_container = document.querySelector('#lavori');
  
    for (let cont in json) {
  
        const div = document.createElement('div');
        div.classList.add("card");
        div.setAttribute("data-choice", json[cont].id);
        const img = document.createElement('img');
        img.src = json[cont].immagine;
        const text = document.createElement('p');
        text.innerHTML = json[cont].titolo;
  
        div.appendChild(img);
        div.appendChild(text);
  
        card_container.appendChild(div);
        
        div.addEventListener('click', imgclick);
    }
};

function visualizza(json){
    console.log(json);
    const card_container = document.querySelector('#preferiti');
    card_container.innerHTML = '';
  
    for (let cont in json) {
  
        const div = document.createElement('div');
        div.classList.add("card");
        div.setAttribute("data-choice", json[cont].id);
        const img = document.createElement('img');
        img.src = json[cont].immagine;
        const text = document.createElement('p');
        text.innerHTML = json[cont].titolo;
  
        div.appendChild(img);
        div.appendChild(text);
  
        card_container.appendChild(div);

        div.addEventListener('click', imgdelete);
    }
};

function onResponse(response){
    return response.json();
};



fetch("carica_cont.php").then(onResponse).then(onJSON);

function principale(){
fetch("visual_pref.php").then(onResponse).then(visualizza);
};