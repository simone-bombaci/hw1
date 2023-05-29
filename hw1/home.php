<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="stile/profilo_personale.css?v=<?php echo time();?>" rel="stylesheet"/>
        <script src="script/pagina_personale.js?v=<?php echo time();?>" defer="true"></script>
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

        <article>
            
            <span class="welcome">
                <h3>Benvenuto/a <?php echo $_SESSION["email"]; ?> </h3>
            </span>

            <div id="category">
                <h2>Scopri tutto su:</h2>
                <a class="categorie" href="sport.php">Sport</a>
                <a class="categorie" href="technology.php">Tecnologia</a>
                <a class="categorie" href="science.php">Scienza</a>
                <a class="categorie" href="business.php">Business</a>
                <a class="categorie" href="health.php">Health</a>
                <a class="categorie" href="general.php">Notizie generali</a>
                <a class="categorie" href="entertainment.php">Intrattenimento</a>
                <a class="categorie" href="bbc.php">Principali titoli BBC News</a>
            </div>

        </article>

        <footer>
            <a href="">Instagram</a>
            <a href="">Twitter</a>
            <a href="">Facebook</a>
        </footer>

    </body>
</html>