<?php 
      session_start(); 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cerca</title>
        <link rel="stylesheet" href="stile/api.css">
        <script src="script/cerca.js" defer></script>
    </head>

    <body>
        <header>
            <nav>
                <div id="logo">
                    News24
                </div>

                <div id="links">
                    <a href="home.php">HOME</a>
                    <a href="preferiti.php">Preferiti</a>
                    <a href="cerca.php">Cerca</a>
                    <a href="">Contact</a>
                    <div id="separator"></div>
                    <a href="logout.php">Logout</a> 
                </div>

                <div id="menu">
                        <div></div>
                        <div></div>
                        <div></div>
                </div>
            </nav>
        </header>

        <div id="title">
                <h2>Cerca le notizie tramite parole chiave</h2>
        </div>

        <article id="album-view">

        </article>



        <form class="search" action="">
            <label for="">News24</label>
            <input class="input" type="text">
            <input type="submit">
        </form>

        <div class="container">
            <ul class="news-list"></ul>
        </div>

    </body>
</html>