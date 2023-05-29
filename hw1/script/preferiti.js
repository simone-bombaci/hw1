fetch("stampa_preferiti.php").then(OnResponse).then(OnJson);

function OnResponse(response){
    console.log(response);
    return response.json();
}

function OnJson(json){
 
    
    const risultato= json;
    const aaa=document.querySelector('#album-view');
    
    for (let i of risultato){
        
    
      const container=document.createElement('div');
      container.classList.add('container');
    
    const titolo_e =document.createElement('h1');
    titolo_e.textContent=i.titolo;
    const descrizione_e=document.createElement('h3');
    descrizione_e.textContent = i.descrizione;
    const img_e =document.createElement('img');
    img_e.src=i.immagine;
    console.log(img_e);
    const contenuto_e= document.createElement('h6');
    contenuto_e.textContent= i.contenuto;
    
     
 const link=document.createElement('a');
       container.appendChild(img_e);
       container.appendChild(titolo_e);
       container.appendChild(descrizione_e);
       container.appendChild(contenuto_e);
       
      aaa.appendChild(container);
    }

}