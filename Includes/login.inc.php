<?php

if(isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pw = $_POST["pw"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $pw) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pw);
}
else {
    header("location: ../login.php");
    exit();
}