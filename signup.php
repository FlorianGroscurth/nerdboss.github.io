<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrierung | Nerd Boss</title>
        <link rel="stylesheet" href="Stylesheets/generalStyle.css">
        <link rel="stylesheet" href="Stylesheets/signupStyle.css">

    </head>

    <body>
        <div id="main-wrap1">
            <div id="main-wrap2">
                <?php 
                include "isLoggedIn.php";
                include "header.php"; 
                ?>

                <section id="signup-container">
                    <h1>Registrierung</h1>
                    <form name = "Signup" action = "includes/signup.inc.php" method = "post">
                        <h3>Persönliche Angaben</h3>
                        <label for="uid">Benutzername</label>
                        <input type="text" name="uid" id="uid" required>
                        <label for="forename">Vorname</label>
                        <input type="text" name="forename" id="forename" required>
                        <label for="lastname">Nachname</label>
                        <input type="text" name="lastname" id="lastname" required>
                        <label for="email">E-Mail-Adresse</label>
                        <input type="email" name="email" id="email" required>
                        <h3>Passwort</h3>
                        <label for="uid">Passwort</label>
                        <input type="password" name="pw" id="pw" required>
                        <label for="uid">Passwort wiederholen</label>
                        <input type="password" name="pwr" id="pwr" required>
                        <div id="dtSchutz">
                            <input type="checkbox" name="nutzungsbedingungen" id="nutzungsbedingungen" required>
                            <label for="nutzungsbedingungen">Ich akzeptiere die <a href="">Geschäftsbedingungen</a> und die <a href="">Datenschutzerklärung</a></label>
                        </div>
                        <button type="submit" name="submit">Registrieren</button>

                        <p>Bereits ein Konto? <a href="login.php">Zum Login</a></p>
                    </form>
                    <?php
                    if(isset($_GET["error"])) {
                        if($_GET["error"] == "emptyinput") {
                            echo "<p>Bitte füllen Sie alle Felder aus!</p>";
                        }
                        if($_GET["error"] == "invaliduid") {
                            echo "<p>Ihr Nutzername darf nur Zahlen und Buchstaben enthalten!</p>";
                        }
                        if($_GET["error"] == "invalidemail") {
                            echo "<p>Bitte geben Sie eine Email-Adresse ein!</p>";
                        }
                        if($_GET["error"] == "passwordsdontmatch") {
                            echo "<p>Die Passwörter müssen überein stimmen</p>";
                        }
                        if($_GET["error"] == "stmtmfailed") {
                            echo "<p>Irgendwas ist schief gelaufen :(</p>";
                        }
                        if($_GET["error"] == "usernametaken") {
                            echo "<p>Nutzername oder Email bereits vergeben!</p>";
                        }
                        if($_GET["error"] == "datacondition") {
                            echo "<p>Bitte akzeptieren Sie die Geschäftsbedingungen und die Datenschutzerklärung!</p>";
                        }
                        if($_GET["error"] == "none") {
                            echo "<p>Sie sind angemeldet!</p>";
                        }
                    }
                    ?>
                </section>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>