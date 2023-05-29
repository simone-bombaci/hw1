<?php
    session_start();
    $conn=mysqli_connect("localhost", "root", "", "web");

    $t = mysqli_real_escape_string($conn , $_GET["titolo"]);
    $d = mysqli_real_escape_string($conn , $_GET["descrizione"]);
    $c = mysqli_real_escape_string($conn , $_GET["contenuto"]);
    $i = mysqli_real_escape_string($conn , $_GET["immagine"]);                              

    $query= "INSERT INTO  preferiti VALUES('$t','$d','$c','$i')";

    $risultato= mysqli_query($conn, $query);
    mysqli_close($conn);
?>