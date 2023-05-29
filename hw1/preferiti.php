<?php 
      session_start(); 
?>

<!DOCTYPE html> 
<html lang="it">
      <head> 
            <meta charset="UTF-8"> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
            <link href="stile/api.css?v=<?php echo time();?>" rel="stylesheet"/>
            <script src="script/preferiti.js?v=<?php echo time();?>" defer="true"></script> 
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
                  <h2>Ecco i tuoi articoli preferiti</h2>
            </div>
            
            <article id="album-view">
                  
            </article>
      </body>

</html>