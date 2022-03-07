const fullMenu = document.querySelector('.fullMenu');
const burgerButton = document.querySelector('.burgerButton');
const buttonOn = document.querySelector('.menuIcon');
const buttonOff = document.querySelector('.closeIcon');
const sideNavWrapper = document.querySelector('.sideNavWrapper');
const sideNav = document.querySelector('.sideNav');
const flecheBas = document.querySelector('.flecheBas');
const loupe = document.querySelector('.loupe');




console.log(burgerButton);

burgerButton.addEventListener('click', function () {
    if (fullMenu.classList.contains('fullMenuOff')) {
        fullMenu.classList.remove("fullMenuOff");
        fullMenu.classList.add("fullMenuOn");
        buttonOn.style.display = "none";
        buttonOff.style.display = "flex";
        sideNavWrapper.style.backgroundColor = "rgb(0,83,78)";
        sideNav.style.display ="none";
        flecheBas.style.display ="none";
        loupe.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_menu_loupe.svg";

    } else {
        fullMenu.classList.remove("fullMenuOn");
        fullMenu.classList.add("fullMenuOff");
        buttonOn.style.display = "flex";
        buttonOff.style.display = "none";
        sideNavWrapper.style.backgroundColor = "white";
        sideNav.style.display ="block";
        flecheBas.style.display ="block";
        loupe.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_nav_loupe.svg";
        
    }
}, false); 


