<?php

// --------Signup---------------------------------------------------------------------
function emptyInputSignup($forename, $lastname, $email, $username, $pw, $pwr) {
    $result = true;
    if(empty($forename) || empty($lastname) || empty($email) || empty($username) || empty($pw) || empty($pwr)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidUid($username) {
    $result = true;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email) {
    $result = true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function passwordMatch($pw, $pwr) {
    $result = true;
    if($pw !== $pwr) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;" ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($conn, $fname, $lname, $email, $username, $pw) {
    $sql = "INSERT INTO users (usersUid, usersFirstName, usersLastName, usersEmail, usersPwd) VALUES (?, ? ,? ,?, ?);" ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPw = password_hash($pw, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $username, $fname, $lname, $email, $hashedPw);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    loginUser($conn, $username, $pw);
    exit();
}


// --------Login---------------------------------------------------------------------

function emptyInputLogin($username, $pw) {
    $result = true;
    if(empty($username) || empty($pw)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pw) {
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pw, $pwHashed);

    if($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["userfirstname"] = $uidExists["usersFirstName"];
        $_SESSION["userlastname"] = $uidExists["usersLastName"];
        header("location: ../index.php");
        exit();
    }
}
?>