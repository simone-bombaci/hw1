function metticuore(event)
{
  const a = event.currentTarget;
  const img5 = a.querySelector('.like');
  img5.src = 'images/cuorepieno.png';
  const titolo_e=a.querySelector('h1').textContent
  const descrizione_e=a.querySelector('h3').textContent;
  const contenuto_e=a.querySelector('h6').textContent;
  const img_e=a.querySelector('img').src;
  console.log(titolo_e);
  console.log(descrizione_e);
  console.log(contenuto_e);
  console.log(img_e);
  fetch('dati.php?&titolo='+titolo_e+'&descrizione=' +descrizione_e +'&contenuto=' +contenuto_e +'&immagine=' +img_e);

}






fetch("api_bbc.php").then(OnResponse).then(OnJson);

function OnResponse(response){
    console.log(response);
    return response.json();
}

function OnJson(json){
 
    console.log(json.articles);
    const risultato= json.articles;
    const aaa=document.querySelector('#album-view');
    const n=9;
    for (i=0; i<n; i++){
      const valore=risultato[i];
      const img_like=document.createElement('img');
      img_like.classList.add("like");
      const container=document.createElement('div');
      container.classList.add('container');
      const titolo= valore.title;
      const descrizione=valore.description;
      const img=valore.urlToImage;
      const contenuto=valore.content;

      container.classList.add('container');
    const titolo_e =document.createElement('h1');
    titolo_e.textContent=titolo;
    const descrizione_e=document.createElement('h3');
    descrizione_e.textContent = descrizione;
    const img_e =document.createElement('img');
    img_e.src=img;
    const contenuto_e= document.createElement('h6');
    contenuto_e.textContent= contenuto;
    img_like.src="images/cuorevuoto.png";
     
 const link=document.createElement('a');
 link.href=valore.url;
 link.textContent="Continua a leggere";
       container.appendChild(img_e);
       container.appendChild(titolo_e);
       container.appendChild(descrizione_e);
       container.appendChild(contenuto_e);
       container.appendChild(img_like);
       container.appendChild(link);
      aaa.appendChild(container);
    }

    const like= document.querySelectorAll('.container');
    for(const l of like ){
      l.addEventListener('click', metticuore);
    }
}