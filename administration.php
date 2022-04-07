<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Stylesheets/administrationStyle.css">
    </head>
    <body>
    <div id="main-wrap1">
            <div id="main-wrap2">
                <?php
                include "isLoggedIn.php";
                include "header.php"; 
                ?>
                <div class="grid">
                    <div class="grid-item">
                        <h3>Produkte</h3>
                        <form action="Includes/administration.inc.php" method="post">
                            <input name="theme" type="text" placeholder="Thema">
                            <input name="motive" type="text" placeholder="Motiv">
                            <input name="type" type="text" placeholder="Typ">
                            <input name="price" type="text" placeholder="Preis">
                            <input name="url" type="text" placeholder="Bild Url">
                            <input name="details" type="text" placeholder="Details">
                            <input name="productsubmit" type="submit" value="Einfügen">
                        </form>
                    </div>
                    <div class="grid-item">
                        <h3>Produktausführungen</h3>
                        <form action="Includes/administration.inc.php" method="post">
                            <input name="pId" type="number" placeholder="Produkt ID" value="2">
                            <input name="pColor" type="text" placeholder="Farbe" value="green">
                            <input name="pSize" type="text" placeholder="Größe">
                            <input name="stockAmount" type="number" placeholder="Vorhandene Menge" value="1000">
                            <input name="productmodelssubmit" type="submit" value="Einfügen">
                        </form>
                    </div>
                    <div class="grid-item">
                        <h3>Größen</h3>
                        <form action="Includes/administration.inc.php" method="post">
                            <input name="size" type="text" placeholder="Größe">
                            <input name="sizesubmit" type="submit" value="Einfügen">
                        </form>
                    </div>
                    <div class="grid-item">
                        <h3>Farben</h3>
                        <form action="Includes/administration.inc.php" method="post">
                            <input name="color" type="text" placeholder="Farbe">
                            <input name="colorsubmit" type="submit" value="Einfügen">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>