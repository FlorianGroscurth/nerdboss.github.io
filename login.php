<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | Nerd Boss</title>
        <link rel="stylesheet" href="Stylesheets/generalStyle.css">
        <link rel="stylesheet" href="Stylesheets/loginStyle.css">
    </head>

    <body>
    <div id="main-wrap1">
            <div id="main-wrap2">
                <?php 
                include "isLoggedIn.php";
                include "header.php"; 
                ?>

                <?php
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "notloggedin") {
                        echo "<div id='echoNotLoggedIn'>
                                <p>Sie müssen angemeldet sein um Ihre Bestellungen sehen zu können!</p>
                            </div>";
                    }
                }
                ?>
                <section id="login-container">
                    <h1>Hi, Willkommen zurück!</h1>
                    <form name = "Login" action="includes/login.inc.php" method="post">
                        <label for="uid">Benutzername/Email</label>
                        <input type="text" name="uid" id="uid">
                        <label for="pw">Passwort</label>
                        <input type="password" name="pw" id="pw">
                        <div id="stayLI">
                            <input type="checkbox" name="stayLoggedIn" id="stayLoggedIn">
                            <label for="stayLoggedIn">Angemeldet bleiben</label>
                        </div>
                        <button type="submit" name="submit">Anmelden</button>

                        <p>Noch nicht registriert? <a href="signup.php">Jetzt ein neues Konto erstellen</a></p>
                    </form>
                    <?php
                    if(isset($_GET["error"])) {
                        if($_GET["error"] == "emptyinput") {
                            echo "<p>Fill in all fields!</p>";
                        }
                        if($_GET["error"] == "wronglogin") {
                            echo "<p>Incorrect login information!</p>";
                        }
                    }
                    ?>
                </section>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>