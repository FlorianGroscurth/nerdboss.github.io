<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nerd Boss</title>
        <link rel="stylesheet" href="Stylesheets/generalStyle.css">
        <link rel="stylesheet" href="Stylesheets/indexStyle.css">
    </head>

    <body>
        <div id="main-wrap1">
            <div id="main-wrap2">
                <?php
                include "isLoggedIn.php";
                include "header.php"; 
                ?>
                <section id="image-slot">
                    <img src="Images/ufo-over-rocks3.jpg" alt="Big ufo over a city">
                    <img id="logo" src="Images/Imperium2.png" alt="">
                    <span>NERD BOSS</span>
                </section>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>