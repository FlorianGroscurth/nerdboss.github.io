<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shop | Nerd Boss</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Stylesheets/shopStyle.css">
    </head>
    <body>
        <div id="main-wrap1">
            <div id="main-wrap2">
                <?php
                include "isLoggedIn.php";
                include "header.php"; 
                ?>
                <?php
                if(isset($_GET["type"])) {
                    if($_GET["type"] == "none") {
                        include_once "Shop/products.php";
                    }
                    else {
                        include_once "Shop/product-details.php";
                    }
                }
                else if(isset($_GET["motive"])) {
                    if($_GET["motive"] == "none") {
                        include_once "Shop/motives.php";
                    }
                    else {
                        include_once "Shop/products.php";
                    }
                }
                else if(isset($_GET["theme"])) {
                    if($_GET["theme"] == "none") {
                        echo '
                            <section id="image-slot">
                                <img src="Images/fantasy-ufo-over-city2.jpg" alt="Big ufo over a city">
                                <img id="logo" src="Images/Imperium2.png" alt="">
                                <span>SHOP</span>
                            </section>
                        ';
                        include_once "Shop/shopthemes.php";
                    }
                    else {
                        include_once "Shop/motives.php";
                    }
                }
                ?>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>