<?php

if(isset($_POST["submit"])) {
    $forename = $_POST["forename"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pw = $_POST["pw"];
    $pwr = $_POST["pwr"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($forename, $lastname, $email, $username, $pw, $pwr) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if(invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if(passwordMatch($pw, $pwr) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    if(!$_POST["nutzungsbedingungen"]) {
        header("location: ../signup.php?error=datacondition");
    }


    createUser($conn, $forename, $lastname, $email, $username, $pw);
}
else {
    header("location: ../signup.php");
    exit();
}

?>