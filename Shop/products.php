<!DOCTYPE html>
<?php 
require_once 'Includes/dbh.inc.php';
require_once 'Includes/products.inc.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="Stylesheets/productsStyle.css">
    </head>
    <body>
        <section>
            <div class="products-header">
                <h2>
                    <?php
                    $data = getData($conn, $_GET["theme"], $_GET["motive"], "hoodie");
                    echo convertDataToString($data["productTheme"]) . " | " . convertDataToString($data["productMotive"]);
                    ?>
                </h2>
            </div>
            <div class="motive-container">
                <div class="grid-item">
                    <div class="motive-picture"><img src="" alt="Star Wars Motiv 1"></div>
                    <div class="motive-content">
                        <div>
                            <h3>
                                <?php
                                $data = getData($conn, $_GET["theme"], $_GET["motive"], "hoodie");
                                echo convertDataToString($data["productMotive"]) . " | Hoodie";
                                ?>
                            </h3>
                            <p class="price">
                                <?php
                                echo $data["productPrice"] . "€";
                                ?>
                            </p>
                            <p class="price-extras">Enthält 19% MwSt.</p>
                            <p class="price-extras">zzgl. Versandkosten</p>
                        </div>
                        <div class="single-motive-footer-container">
                            <p class="price-extras">Lieferzeit: 10 Werktage innerhalb DE (Ausland kann abweichen)</p>
                            <div class="single-motive-footer">
                                <a href="shop.php?theme=<?php echo $_GET["theme"]?>&motive=<?php echo $_GET["motive"]?>&type=hoodie" class="normal-button">
                                    <span>Details</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="motive-picture"><img src="" alt="Star Wars Motiv 2"></div>
                    <div class="motive-content">
                        <div>
                            <h3>
                                <?php
                                $data = getData($conn, $_GET["theme"], $_GET["motive"], "pullover");
                                echo convertDataToString($data["productMotive"]) . " | Pullover";
                                ?>
                            </h3>
                            <p class="price">
                                <?php
                                echo $data["productPrice"] . "€";
                                ?>
                            </p>
                            <p class="price-extras">Enthält 19% MwSt.</p>
                            <p class="price-extras">zzgl. Versandkosten</p>
                        </div>
                        <div class="single-motive-footer-container">
                            <p class="price-extras">Lieferzeit: 10 Werktage innerhalb DE (Ausland kann abweichen)</p>
                            <div class="single-motive-footer">
                                <a href="shop.php?theme=<?php echo $_GET["theme"]?>&motive=<?php echo $_GET["motive"]?>&type=pullover" class="normal-button">
                                    <span>Details</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="motive-picture"><img src="" alt="Star Wars Motiv 3"></div>
                    <div class="motive-content">
                        <div>
                            <h3>
                                <?php
                                $data = getData($conn, $_GET["theme"], $_GET["motive"], "tshirt");
                                echo convertDataToString($data["productMotive"]) . " | T-Shirt";
                                ?>
                            </h3>
                            <p class="price">
                                <?php echo $data["productPrice"] . "€"?>
                            </p>
                            <p class="price-extras">Enthält 19% MwSt.</p>
                            <p class="price-extras">zzgl. Versandkosten</p>
                        </div>
                        <div class="single-motive-footer-container">
                            <p class="price-extras">Lieferzeit: 10 Werktage innerhalb DE (Ausland kann abweichen)</p>
                            <div class="single-motive-footer">
                                <a href="shop.php?theme=<?php echo $_GET["theme"]?>&motive=<?php echo $_GET["motive"]?>&type=tshirt" class="normal-button">
                                    <span>Details</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="motive-picture"><img src="" alt="Star Wars Motiv 4"></div>
                    <div class="motive-content">
                        <div>
                            <h3>
                                <?php
                                $data = getData($conn, $_GET["theme"], $_GET["motive"], "sweatjacke");
                                echo convertDataToString($data["productMotive"]) . " | Sweatjacke";
                                ?>
                            </h3>
                            <p class="price">
                                <?php
                                echo $data["productPrice"] . "€";
                                ?>
                            </p>
                            <p class="price-extras">Enthält 19% MwSt.</p>
                            <p class="price-extras">zzgl. Versandkosten</p>
                        </div>
                        <div class="single-motive-footer-container">
                            <p class="price-extras">Lieferzeit: 10 Werktage innerhalb DE (Ausland kann abweichen)</p>
                            <div class="single-motive-footer">
                                <a href="shop.php?theme=<?php echo $_GET["theme"]?>&motive=<?php echo $_GET["motive"]?>&type=sweatjacke" class="normal-button">
                                    <span>Details</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="motive-picture"><img src="" alt="Star Wars Motiv 5"></div>
                    <div class="motive-content">
                        <div>
                            <h3>
                                <?php
                                $data = getData($conn, $_GET["theme"], $_GET["motive"], "cap");
                                echo convertDataToString($data["productMotive"]) . " | Cap";
                                ?>
                            </h3>
                            <p class="price">
                                <?php
                                echo $data["productPrice"] . "€";
                                ?>
                            </p>
                            <p class="price-extras">Enthält 19% MwSt.</p>
                            <p class="price-extras">zzgl. Versandkosten</p>
                        </div>
                        <div class="single-motive-footer-container">
                            <p class="price-extras">Lieferzeit: 10 Werktage innerhalb DE (Ausland kann abweichen)</p>
                            <div class="single-motive-footer">
                                <a href="shop.php?theme=<?php echo $_GET["theme"]?>&motive=<?php echo $_GET["motive"]?>&type=cap" class="normal-button">
                                    <span>Details</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>