function closeNav(x) {
    document.getElementById("header_menu").classList.toggle("show");
    x.classList.toggle("moveRight"); //the menu bar icon moves right when toggled
    if (x.classList.contains("moveRight")) { //if toggled
        x.innerHTML = "x"; //show "x" as the icon
    }
    else {
        x.innerHTML="\u2261" //show the triple menus if not toggled
    }
}