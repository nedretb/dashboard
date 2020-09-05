let drop_menu = document.getElementById("drop-menu");
let drop = document.getElementById("drop");
let arrow = document.getElementById("arrow");

drop.addEventListener('click', event => {
    if(drop_menu.style.display == "none"){
        drop_menu.style.display = "block";
        arrow.className = "fas fa-angle-down";
    }
    else{
        drop_menu.style.display = "none";
        arrow.className = "fas fa-chevron-right";
    }
});