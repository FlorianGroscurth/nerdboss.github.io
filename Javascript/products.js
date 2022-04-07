const colors = document.getElementsByClassName("colors");

for (let i = 0; i < colors.length; i++) {
    colors[i].style.backgroundColor = colors[i].getAttribute ("id");
}
colors[0].setAttribute("name", "true");
colors[0].parentElement.style.border = "2px solid black";


function colorChange(color) {
    const colors = document.getElementsByClassName("colors");
    for (let i = 0; i < colors.length; i++) {
        colors[i].parentElement.style.border = "2px solid grey";
        colors[i].setAttribute("name", "false");
    }
    document.getElementById(color.id).parentElement.style.border = "2px solid black";
    document.getElementById(color.id).setAttribute("name", "true");
}



const sizes = document.getElementsByClassName("sizes");
sizes[0].style.backgroundColor = "grey";
sizes[0].setAttribute("name", "true");

function sizeChange(size) {
    const sizes = document.getElementsByClassName("sizes");
    for (let i = 0; i < sizes.length; i++) {
        sizes[i].style.backgroundColor = "rgb(177, 177, 177)";
        sizes[i].setAttribute("name", "false");
    }
    document.getElementById(size.id).style.backgroundColor = "grey";
    document.getElementById(size.id).setAttribute("name", "true");
}