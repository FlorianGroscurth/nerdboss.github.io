<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile | Nerd Boss</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Stylesheets/generalStyle.css">
        <link rel="stylesheet" href="Stylesheets/profileStyle.css">
    </head>
    <body>
        <div id="main-wrap1">
            <div id="main-wrap2">
                <?php
                include "isLoggedIn.php";
                include "header.php"; 
                ?>
                <section id="top-container">
                    <div id="top-inner-container">
                        <section id="image-slot">
                            <img src="Images/fantasy-gate.jpg" alt="Big ufo over a city">
                            <?php
                            if (isset($_SESSION["useruid"])) {
                                echo '<div id="posWelcomeMessage">
                                        <p id="welcomeMessage">Hello there <br>' . $_SESSION['useruid'] . '</p>
                                    </div>';
                            }
                            ?>
                        </section>
                        <section id="profile-info-slot">
                            <div id="pofile-nav-bar">
                                <div>
                                    <a id="profileM" href="profile.php?section=profile">Profil</a>
                                </div>
                                <div>
                                    <a id="adressM" href="profile.php?section=adress">Adresse</a>
                                </div>
                                <div>
                                    <a id="ordersM" href="profile.php?section=orders">Bestellungen</a>
                                </div>
                            </div>
                            <div id="profile-content">
                                <div id="logout">
                                    <a id="logout-button" href="Includes/logout.inc.php">Logout<span class='material-icons'>logout</span></a>
                                </div>
                                <?php
                                if ($_GET["section"] == "profile") {
                                    include "Profile/innerProfile.php";
                                }
                                else if ($_GET["section"] == "adress") {
                                    include "Profile/adress.php";
                                }
                                else if ($_GET["section"] == "orders") {
                                    include "Profile/orders.php";
                                }
                                else {
                                    include "Profile/innerProfile.php";
                                }
                                ?>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>