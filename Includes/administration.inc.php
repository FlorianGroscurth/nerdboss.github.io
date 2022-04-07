<?php

if(isset($_POST["productsubmit"])) {
    require_once 'dbh.inc.php';
    $theme = $_POST["theme"];
    $motive = $_POST["motive"];
    $type = $_POST["type"];
    $price = $_POST["price"];
    $url = $_POST["url"];
    $details = $_POST["details"];

    $sql = "INSERT INTO products (productTheme, productMotive, productType, productPrice, productUrlLink, productDetails) VALUES (?, ? ,? ,?, ?, ?);" ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../administration.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssdss", $theme, $motive, $type, $price, $url, $details);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../administration.php?error=none");
    exit();
}
if(isset($_POST["productmodelssubmit"])) {
    require_once 'dbh.inc.php';
    $id = $_POST["pId"];
    $color = $_POST["pColor"];
    $size = $_POST["pSize"];
    $amount = $_POST["stockAmount"];

    $sql = "INSERT INTO product_models (productId, productColor, productSize, productStockAmount) VALUES (?, ? ,? ,?);" ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../administration.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "issi", $id, $color, $size, $amount);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../administration.php?error=none");
    exit();
}
else if(isset($_POST["sizesubmit"])) {
    require_once 'dbh.inc.php';
    $size = $_POST["size"];

    $sql = "INSERT INTO sizes (sizeName) VALUES (?);" ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../administration.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $size);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../administration.php?error=none");
    exit();
}
else if(isset($_POST["colorsubmit"])) {
    require_once 'dbh.inc.php';
    $color = $_POST["color"];

    $sql = "INSERT INTO colors (color) VALUES (?);" ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../administration.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $color);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../administration.php?error=none");
    exit();
}
else {
    header("location: ../administration.php?error=submitnotavailable");
    exit();
}