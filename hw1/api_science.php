
<?php 
header("https://newsapi.org/v2/top-headlines?country=it&category=science&apiKey=2fdbce1d30114e82adc67eaca06efc9a");
    //$response=file_get_contents($url); 
    //$NewsData= json_decode($response); 
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,'https://newsapi.org/v2/top-headlines?country=it&category=science&apiKey=2fdbce1d30114e82adc67eaca06efc9a');
    curl_setopt($curl, CURLOPT_POST,0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt( $curl, CURLOPT_USERAGENT, "My User Agent" );
 
    $result=curl_exec($curl);
    $json= json_decode($result, true);
    echo json_encode($json);

    curl_close($curl);
?> 