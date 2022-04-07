<?php
function getShoppingCartItems($conn, $userid) {
    $sql = "SELECT * FROM shopping_cart WHERE userId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        if(isset($_SERVER['HTTP_REFERER'] ) && !empty($_SERVER['HTTP_REFERER'] )) {
            ob_start();
            header( 'Location: ' . $_SERVER['HTTP_REFERER'] );
            ob_end_clean();
            exit(1);
        } else {
            print '<html><head><script type="text/javascript">history.back();</script></head><body /></html>';
            exit(1);
        }
    }
    mysqli_stmt_bind_param($stmt, "i", $userid);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($resultData)) {
        $userIdRow[] =  $row['userId'];
        $productIdRow[] =  $row['productId'];
        $productColorRow[] =  $row['productColor'];
        $productSizeRow[] =  $row['productSize'];
        $productAmountRow[] =  $row['productAmount'];
    }
    $rowdata = array($userIdRow, $productIdRow, $productColorRow, $productSizeRow, $productAmountRow);
    return $rowdata;
    mysqli_stmt_close($stmt);
}

function getShoppingCartItemInfo($conn, $productid) {
    $sql = "SELECT * FROM products WHERE productId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        if(isset($_SERVER['HTTP_REFERER'] ) && !empty($_SERVER['HTTP_REFERER'] )) {
            ob_start();
            header( 'Location: ' . $_SERVER['HTTP_REFERER'] );
            ob_end_clean();
            exit(1);
        } else {
            print '<html><head><script type="text/javascript">history.back();</script></head><body /></html>';
            exit(1);
        }
    }

    mysqli_stmt_bind_param($stmt, "i", $productid);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    mysqli_stmt_close($stmt);
}

function deleteItem() {
    
}


?>