<?php

    session_start();
    $conn=mysqli_connect("localhost", "root", "", "web");

    $query= "SELECT * from preferiti ";

    $result= mysqli_query($conn, $query);



    $stampa=[];
    while ($d=mysqli_fetch_assoc($result))
    $stampa[]= $d;

    echo json_encode($stampa);

?>