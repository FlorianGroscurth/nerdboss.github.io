document.getElementById("normal-button").onmouseenter = function() {
    var arrow = document.createElement("span");
    arrow.className = "material-icons"
    arrow.innerHTML = "arrow_back_ios_new";
    arrow.id = "normal-button-arrow";

    document.getElementById("normal-button").appendChild(arrow);
}
document.getElementById("normal-button").onmouseleave = function() {
    document.getElementById("normal-button-arrow").remove();
}

