fetch("api.php").then(OnResponse).then(OnJson);

OnResponse(response){
    console.log(response);
    return response.json();
}

OnJson(json){
    console.log(json);
}