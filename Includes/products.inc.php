<?php
require_once "dbh.inc.php";
function getData($conn, $theme, $motive, $type) {
    $sql = "SELECT * FROM products WHERE productTheme = ? AND productMotive = ? AND productType = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../shop.php?theme=$theme&motive=$motive&error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $theme, $motive, $type);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    mysqli_stmt_close($stmt);
}

function getProductColor($conn, $productId, $theme, $motive, $type) {
    $sql = "SELECT DISTINCT productColor FROM product_models WHERE productId = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../shop.php?theme=$theme&motive=$motive&type=$type&error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $productId);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($col = mysqli_fetch_all($resultData)) {
        foreach($col as $val) {
            foreach($val as $item) {
                $allitems[] = $item;
            }
        }
        return $allitems;
    }
    mysqli_stmt_close($stmt);
}
function getProductSize($conn, $productId, $theme, $motive, $type) {
    $sql = "SELECT DISTINCT productSize FROM product_models WHERE productId = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../shop.php?theme=$theme&motive=$motive&type=$type&error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $productId);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($col = mysqli_fetch_all($resultData)) {
        foreach($col as $val) {
            foreach($val as $item) {
                $allitems[] = $item;
            }
        }
        return $allitems;
    }
    mysqli_stmt_close($stmt);
}

function convertDataToString($item) {
    switch ($item) {
        // Themes ------------------------------------------------
        case 'starwars':
            $itemname = "Star Wars";
            break;
        case 'marvel':
            $itemname = "Marvel";
            break;
        case 'harrypotter':
            $itemname = "Harry Potter";
            break;

        // Motive ------------------------------------------------
            // Star Wars ------------------------------------------------
        case 'starwarslogo':
            $itemname = "Logo";
            break;
        case 'starwarsdeathstar':
            $itemname = "Todesstern";
            break;
        case 'starwarsmilleniumfalcon':
            $itemname = "Millenium Falcon";
            break;
        case 'f':
            $itemname = "lol";
            break;

            // Marvel ------------------------------------------------
        case 'marvellogo':
            $itemname = "Logo";
            break;
        case 'marveldeathstar':
            $itemname = "Todesstern";
            break;
        case 'marvelmilleniumfalcon':
            $itemname = "Millenium Falcon";
            break;

        //Types ------------------------------------------------
        case 'hoodie':
            $itemname = "Hoodie";
            break;
        case 'pullover':
            $itemname = "Pullover";
            break;
        case 'tshirt':
            $itemname = "T-Shirt";
            break;
        case 'sweatjacke':
            $itemname = "Sweatjacke";
            break;
        case 'cap':
            $itemname = "Cap";
            break;

        //Farben ------------------------------------------------
        case 'black':
            $itemname = "Schwarz";
            break;
        case 'white':
            $itemname = "Weiß";
            break;
        case 'red':
            $itemname = "Rot";
            break;
        case 'blue':
            $itemname = "Blau";
            break;
        case 'green':
            $itemname = "Grün";
            break;

        default:
            $itemname = null;
            break;
    }
    return $itemname;
}

function getMotives($conn, $theme) {
    $sql = "SELECT DISTINCT productMotive FROM products WHERE productTheme = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../shop.php?theme=$theme&error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $theme);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($col = mysqli_fetch_all($resultData)) {
        return $col;
    }
    mysqli_stmt_close($stmt);
}

$json = file_get_contents("php://input");
echo $json;

if (!empty($json)) {
	$data = json_decode($json, true);
    echo $data["productId"];
} 
if(isset($data)) {
    $item = itemInShoppingCart($conn, $data["userId"], $data["productId"], $data["productColor"], $data["productSize"]);
    if($item == false) {
        $sql = "INSERT INTO shopping_cart (userId, productId, productColor, productSize, productAmount) VALUES (?, ?, ?, ?, ?);" ;
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../products.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "iissi", $data["userId"], $data["productId"], $data["productColor"], $data["productSize"], $data["productAmount"]);
    }
    else {
        $sql = "UPDATE shopping_cart SET productAmount = ? WHERE productId = ? AND productColor = ? AND productSize = ?";
        $amount = $item["productAmount"] + $data["productAmount"];
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../products.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "iiss", $amount, $data["productId"], $data["productColor"], $data["productSize"]);
    }
    
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    exit();
}

function itemInShoppingCart($conn, $id, $product, $color, $size) {
    $sql = "SELECT * FROM shopping_cart WHERE userId = ? AND productId = ? AND productColor = ? AND productSize = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../products.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "iiss", $id, $product, $color, $size);
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
?>