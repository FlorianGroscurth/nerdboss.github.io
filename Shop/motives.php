<!DOCTYPE html>
<?php 
require_once 'Includes/dbh.inc.php';
require_once 'Includes/products.inc.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="Stylesheets/motivesStyle.css">
    </head>
    <body>
    <section>
            <div class="motives-header">
                <h2>
                    <?php
                    echo convertDataToString($_GET["theme"]);
                    ?>
                </h2>
            </div>
            <div class="motives-container">
                <?php
                $motives = getMotives($conn, $_GET["theme"]);
                foreach($motives as $val) {
                    foreach($val as $item) {
                        $allmotives[] = $item;
                    }
                }


                for ($i=0; $i < count($allmotives); $i++) { //Beim Punkt muss die url des Bildes eingfügt werden
                    echo '
                        <a class="grid-item" href="shop.php?theme=' . $_GET["theme"] . '&motive=' . $allmotives[$i] . '">                     
                            <div class="motives-picture"><img src=" ' . ' " alt="Theme 1"></div> 
                            <div class="motives-content">
                                <h3>' . convertDataToString($allmotives[$i]) . '</h3> 
                            </div>
                        </a>
                    ';
                }
                ?>
                
                <!-- <a class="grid-item" href="shop.php?theme=harrypotter&motive=starwarsmilleniumfalcon">                     <div class="motives-picture"><img src="" alt="Theme 1"></div>
                    <div class="motives-content">
                        <h3>Millenium Falcon</h3> 
                    </div>
                </a>
                <a class="grid-item" href="shop.php?theme=starwars&motive=starwars">                     <div class="motives-picture"><img src="" alt="Theme 1"></div>
                    <div class="motives-content">
                        <h3>Mandalorianischer Helm</h3> 
                    </div>
                </a>
                <a class="grid-item" href="shop.php?theme=starwars&motive=starwars"> 
                    <div class="motives-picture"><img src="" alt="Theme 1"></div>
                    <div class="motives-content">
                        <h3>Lichtschwert</h3> 
                    </div>
                </a>
                <a class="grid-item" href="shop.php?motive=starwars">
                    <div class="motives-content">
                        <h3>This is the Way</h3>
                    </div>
                </a> -->
                
            </div>
        </section>
    </body>
</html>