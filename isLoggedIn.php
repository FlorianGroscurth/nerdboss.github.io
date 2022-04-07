<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Stylesheets/isLoggedInStyle.css">
</head>
<body>
    <section id="loginBar">
        <div>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<a id='login' href='profile.php?section=profile'>
                        <span>". $_SESSION["userfirstname"]." ". $_SESSION["userlastname"] ."</span>
                        <span class='material-icons' id='profile-picture'>account_circle</span>
                    </a>";  
            }
            else {
                echo "<a id='login' href='login.php'>
                        <span>Login</span>
                        <span class='material-icons' id='login-picture'>login</span>
                    </a>";
            }
            ?>
        </div>
        <?php
        if (isset($_SESSION["useruid"])) {
            if($_SESSION["useruid"] == "Administrator") {
                echo "
                    <div>
                        <a id='login' href='administration.php'>&nbsp Administration</a>
                    </div>
                ";
                // Benutzername: Administrator
                // Vorname: Der
                // Nachname: Administrator
                // Email: administrator@gmail.com
                // Passwort: admin02
            }
        }
        ?>
    </section>
</body>
</html>