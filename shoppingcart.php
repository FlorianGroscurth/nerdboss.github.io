<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Warenkorb | Nerd Boss</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Stylesheets/shoppingcartStyle.css">
    </head>
    <body>
        <div id="main-wrap1">
            <div id="main-wrap2">
                <?php
                include "isLoggedIn.php";
                include "header.php"; 
                require_once "Includes/dbh.inc.php";
                require_once "Includes/shoppingcart.inc.php";
                require_once "Includes/products.inc.php";
                ?>
                <section id="head">
                    <div>
                        <h1>Warenkorb</h1>
                    </div>
                </section>
                <section id="cart-container">
                    <div id="cart">
                        <div class="grid-header">
                            <span class="grid-header-item"></span>
                            <span class="grid-header-item">Produkt</span>
                            <span class="grid-header-item">Anzahl</span>
                            <span class="grid-header-item">Preis</span>
                            <span class="grid-header-item">Summe</span>
                        </div>
                        <div class="cart-items">
                            <?php
                            $items = getShoppingCartItems($conn, $_SESSION["userid"]);

                            $userids = $items[0];
                            $productids = $items[1];
                            $productcolors = $items[2];
                            $productsizes = $items[3];
                            $productamounts = $items[4];
                            $sum = 0;
                            for ($i=0; $i < count($userids); $i++) { 
                                $userid = $userids[$i];
                                $productid = $productids[$i];
                                $productcolor = $productcolors[$i];
                                $productsize = $productsizes[$i];
                                $productamount = $productamounts[$i];

                                $productinfos = getShoppingCartItemInfo($conn, $productid);

                                $sum += ($productinfos["productPrice"] * $productamount);

                                echo '
                                <div class="grid-item">
                                    <div class="dustbin">
                                        <span class="material-icons" onclick="deleteItem()">delete</span> 
                                    </div>
                                    <div class="product">
                                        <h4>' . convertDataToString($productinfos["productTheme"]) . " " . convertDataToString($productinfos["productMotive"]) . " | " . convertDataToString($productinfos["productType"]) . '</h4>
                                        <p>Farbe: ' . convertDataToString($productcolor) . ' - Größe: ' . $productsize .' </p>
                                    </div>
                                    <div class="amount">
                                        <div class="normal-button">
                                            <form action="" method="post">
                                                <input type="number" name="amount" value="' . $productamount . '">
                                            </form> 
                                        </div>
                                    </div>
                                    <div class="price">
                                        <p class="price">' . $productinfos["productPrice"] . '€</p>
                                    </div>
                                    <div class="sum">
                                        <p>' . ($productinfos["productPrice"] * $productamount) . '€</p>
                                    </div>
                                </div>
                                ';
                            }
                            ?>
                        </div>
                        <h3>WARENKORB - SUMME</h3>
                        <div id="shoppingcart-sum">
                            <div class="sum-elements">
                                <span>Zwischensumme</span>
                                <span><?php echo $sum?>€</span>
                            </div>
                            <div class="sum-elements" id="sum-elements-versand">
                                <span>Versand</span>
                                <span>Versandkostenpauschale: 5.00€ <br>      
                                    <span>Enthält 0,95€ MwSt. (19%) <br></span>
                                    <span>Versand nach <span><!-- Adresse einfügen falls vorhanden --></span><br></span>
                                    <span>Adresse ändern <!--  --></span>
                                </span>
                            </div>
                            <div class="sum-elements" id="sum-elements-summe">
                                <span>Summe</span>
                                <span><?php echo $endsum = ($sum + 5)?>€ <br>      
                                    <span>Enthält <?php echo round(($endsum * 0.19), 2, PHP_ROUND_HALF_UP)?>€ MwSt. (19%)</span>
                                </span>
                            </div>
                        </div>
                        <div id="cart-buttons">
                            <a href="shop.php?theme=none" class="normal-button">
                                <span class='material-icons'>arrow_back_ios_new</span> 
                                <span>&nbsp Zurück zum Shop</span>
                            </a>
                            <a href="checkout.php" class="normal-button-inverted">
                                <span> Weiter zur Kasse</span> 
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>