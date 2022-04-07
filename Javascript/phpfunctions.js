function addToShoppingCart(uid, dt) {
    const data = {
        userId: uid,
        productId: dt,
        productColor: getActiveColor(),
        productSize: getActiveSize(),
        productAmount: getproductAmount()
    }
    console.log(JSON.stringify(data));
    window.fetch("/Webshop_Abschlussprojekt/Includes/products.inc.php", {
        method: 'post',
        headers: {'Content-Type' : 'application/json'},
        body: JSON.stringify(data)
    })
    .then((response) => {
        response.text().then(data => {
            console.log("Data: " + data);
        })
    })
    .catch((error) => {
        console.log("Error: ", error);
    })
}

function getActiveColor() {
    const c = document.getElementsByClassName("colors");
    for (let i = 0; i < c.length; i++) {
        if(c[i].getAttribute("name") == "true") {
            result = c[i];
            return result.id;
        }
    }
}
function getActiveSize() {
    const s = document.getElementsByClassName("sizes");
    for (let i = 0; i < s.length; i++) {
        if(s[i].getAttribute("name") == "true") {
            result = s[i];
            return result.id;
        }
    }
}
function getproductAmount() {
    var amount = document.getElementById("amount");
    return amount.value;
}