<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Stylesheets/footerStyle.css">
    </head>
    <body>
        <footer>
            <section id="top">
                <div id="topleft">
                    <img src="Images/Rebellion.png" alt="">
                    <div id="quicklinks">
                        <h3>Quicklinks</h3>
                        <div>
                            <a href="shop.php?theme=none">Shop</a>
                            <span>|</span>
                            <a href="faq.php">FAQ</a>
                            <span>|</span>
                            <a href="contact.php">Kontakt</a>
                            <span>|</span>
                            <?php
                            if(isset($_SESSION["useruid"])) {
                                echo '<a href="profile.php?section=orders">Deine Bestellungen</a>';
                            }
                            else 
                                echo '<a href="login.php?error=notloggedin">Deine Bestellungen</a>';
                            ?>
                        </div>
                        <div>
                            <a href="shop.php">Impressum</a>
                            <span>|</span>
                            <a href="faq.php">Datenschutz</a>
                            <span>|</span>
                            <a href="contact.php">AGB</a>
                        </div>
                    </div>
                </div>
                <div id="social">
                    <h3>Social</h3>
                    <div>
                        <a href=""><img src="Images/5296499_fb_facebook_facebook logo_icon.png" alt=""></a>
                        <a href=""><img src="Images/5296765_camera_instagram_instagram logo_icon.png" alt=""></a>
                    </div>
                </div>
            </section>
            <section id="bottom">
                <span>
                    NERD Boss © 2022
                </span>
            </section>
        </footer>
        <script src="Javascript/phpfunctions.js"></script>
    </body>
</html>