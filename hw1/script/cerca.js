const searchFrom = document.querySelector('.search');
const input = document.querySelector('.input');
const newsList = document.querySelector('.news-list');

searchFrom.addEventListener('submit', retrieve);

function retrieve(e){

    newsList.innerHTML = '';

    e.preventDefault();
    const apiKey = '2fdbce1d30114e82adc67eaca06efc9a';
    let topic = input.value;
    
    
    let url = 'https://newsapi.org/v2/everything?q=' + topic + '&apiKey=' + apiKey;


    fetch(url).then((res)=>{
        return res.json()
    }).then((data)=>{
        console.log(data)

        data.articles.forEach(article => {
            let li = document.createElement('li');
            let a = document.createElement('a');
            a.setAttribute('href', article.url);
            a.setAttribute('target', '_blank');
            a.textContent = article.title;
            li.appendChild(a);
            newsList.appendChild(li);
        });

    }).catch((error)=>{
        console.log(error);
    });


    console.log(topic);
}