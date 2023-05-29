<?php
session_start();
if (isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["conferma_password"]))
{
    $error = array();
    $conn = mysqli_connect("Localhost","root", "","web");                                                            

    # password
    if (strlen($_POST["password"]) < 8) {
        $error[] = "Caratteri password insufficienti";
        echo "Caratteri passsword insufficienti inserire almeno 8 carratteri ";

    } 

    if (strcmp($_POST["password"], $_POST["conferma_password"]) != 0) {
        $error[] = "Le password non coincidono";
        echo "Le password non coincidono ";

    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error[] = "Email non valida";
        echo "Email non valida";

    } else {
        $email = mysqli_real_escape_string($conn, strtolower($_POST['email']));
        $query = "SELECT * FROM USERS WHERE EMAIL = '".$_POST['email']."'";
        $res = mysqli_query($conn,$query);
        if (mysqli_num_rows($res) > 0) {
            $error[] = "Email già utilizzata";
            echo "Email già utilizzata ";

        }
    }
    #registrazione nel database
    //print_r($error);
    if (count($error) == 0) {
        $name = mysqli_real_escape_string($conn, $_POST['nome']);
        $surname = mysqli_real_escape_string($conn, $_POST['cognome']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $query = "INSERT INTO users VALUES('','".$name."', '".$surname."', '".$email."', '".$password."')";
        if (mysqli_query($conn, $query)) {
            $_SESSION["nome"] = $_POST["nome"];
            $_SESSION["cognome"] = $_POST["cognome"];
            mysqli_close($conn);
            header("Location: login.php");
            exit;
        } else {
            $error[] = "Errore di connessione al Database";
        }
    }

    mysqli_close($conn);
}
else  {
$error = array("Riempi tutti i campi");
echo "Riempi tutti i campi per proseguire";
}

//print_r($error);
//print_r($_POST["nome"]);

?>



<html>
    <head>
        <title>Registrazione</title>
        <link rel='stylesheet' href="stile/login.css">
        <script src="script/validazione.js" defer="true"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
    </head>

    <body>
        <h1>News24</h1>

        <main>

            <form name='login' method='post'>

                <h1>Registrazione</h1>
                
                Nome
                <p>
                    <label><input id='nome' type='text' name='nome'></label>
                    <div id='nome_er'></div>
                </p>

                Cognome
                <p>
                    <label><input id='cognome' type='text' name='cognome'></label>
                    <div id='cognome_er'></div>
                </p>

                Email
                <p>
                    <label><input id='email' type='text' name='email'></label>
                    <div id='email_er'></div>
                </p>
                
                Password
                <p>
                    <label><input id='password' type='password' name='password'></label>
                    <div id="password_er"></div>
                </p>

                Conferma password
                <p>
                    <label><input id='conferma_password' type='password' name='conferma_password'></label>
                    <div id="conferma_password_er"></div>
                </p>
                <p>
                    <label>&nbsp;<input type='submit'></label>
                </p>
                <p id="accedi">
                    Hai già un account?<br>
                    <a href="login.php">Accedi</a>
                </p>
            
            </form>
        </main>
    </body>
</html>