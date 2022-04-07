<!DOCTYPE html>
<?php 
require_once 'Includes/dbh.inc.php';
require_once 'Includes/products.inc.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="Stylesheets/productdetailsStyle.css">
    </head>
    <body>
        <div class="product-details-header">
            <h2>
                <?php
                $data = getData($conn, $_GET["theme"], $_GET["motive"], $_GET["type"]);
                echo convertDataToString($data["productTheme"]) . " | " . convertDataToString($data["productMotive"]) . " | " . convertDataToString($data["productType"]);
                ?>
            </h2>
        </div>
        <section id="product-details-outer-container">
            <div class="product-details-container">
                <div id="images-container">
                    <div class="main-image">
                        <img src="" alt="">
                    </div>
                    <div id="alternate-images">
                        <!-- Grid -->
                    </div>
                </div>
                <div id="info-container">
                    <div>
                        <h3>
                            <?php
                            $data = getData($conn, $_GET["theme"], $_GET["motive"], $_GET["type"]);
                            echo convertDataToString($data["productTheme"]) . " " . convertDataToString($data["productMotive"]) . " | " . convertDataToString($data["productType"]);
                            ?>
                        </h3>
                        <p class="price">
                            <?php
                            echo $data["productPrice"] . "€";
                            ?>
                        </p>
                        <p class="price-extras">Enthält 19% MwSt.</p>
                        <p class="price-extras">zzgl. Versandkosten</p>
                        <div class="color-container">
                            <?php
                            $colors = getProductColor($conn, $data["productId"], $_GET["theme"], $_GET["motive"], $_GET["type"]);
                                
                            for ($i=0; $i < count($colors); $i++) { 
                                echo "
                                    <div class='color-border'>
                                        <div class='colors' id='" . $colors[$i] . "' onclick='colorChange(" . $colors[$i] . ")'>

                                        </div>
                                    </div>
                                ";
                            }
                            ?>
                        </div>
                        <div class="size-container">
                            <?php
                            $sizes = getProductSize($conn, $data["productId"], $_GET["theme"], $_GET["motive"], $_GET["type"]);
                                
                            for ($i=0; $i < count($sizes); $i++) { 
                                echo "
                                    <div class='sizes' id='$sizes[$i]' onclick='sizeChange(" . $sizes[$i] . ")'>
                                        <span>" . $sizes[$i] . "</span>
                                    </div>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="product-info-footer-container">
                        <p class="price-extras">Lieferzeit: 10 Werktage innerhalb DE (Ausland kann abweichen)</p>
                        <div class="product-info-footer">
                            <div class="normal-button">
                                <div>
                                    <input type="number" name="amount" id="amount" value="1">
                                </div>
                            </div>
                            <div class="normal-button-inverted">
                                <a onclick="addToShoppingCart(<?php echo $_SESSION['userid']?> , <?php echo $data['productId']?>)"><span>In den Warenkorb</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-details-container">
                <div id="details">
                    <h3>DETAILS</h3>
                    <p><?php echo $data["productDetails"]?></p>
                </div>
            </div>
        </section>
        <script src="Javascript/products.js"></script>
        <script src="Javascript/phpfunctions.js"></script>
    </body>
</html>