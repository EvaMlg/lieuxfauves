const fullMenu = document.querySelector('.fullMenu');
const burgerButton = document.querySelector('.burgerButton');
const buttonOn = document.querySelector('.menuIcon');
const buttonOff = document.querySelector('.closeIcon');
const sideNavWrapper = document.querySelector('.sideNavWrapper');
const sideNav = document.querySelector('.sideNav');
const flecheBas = document.querySelector('.flecheBas');
const loupe = document.querySelector('.loupe');
const picto = document.querySelector('.pictoLogo');



loupe.addEventListener('click', function () {
    if (fullMenu.classList.contains('fullMenuOff')) {
        fullMenu.classList.remove("fullMenuOff");
        fullMenu.classList.add("fullMenuOn");
        fullMenu.style.animation = "transition 2s ease";
        buttonOn.style.display = "none";
        buttonOff.style.display = "flex";
        sideNavWrapper.style.backgroundColor = "rgb(0,83,78)";
        sideNav.style.display ="none";
        flecheBas.style.display ="none";
        loupe.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_menu_loupe.svg";
        picto.style.display = "none";

    } else if (document.querySelector('.single-explorations')) {
        fullMenu.classList.remove("fullMenuOn");
        fullMenu.classList.add("fullMenuOff");
        buttonOn.style.display = "flex";
        buttonOff.style.display = "none";
        sideNavWrapper.style.backgroundColor = "white";
        sideNav.style.display ="block";
        flecheBas.style.display ="block";
        loupe.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_nav_loupe.svg";
        picto.style.display = "block";
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "rgb(229, 238, 237)";
        document.querySelector('.menu-item-383 a').classList.add("inactivePage2");
        document.querySelector('.menu-item-382 a').classList.add("activePage");
        document.querySelector('.menu-item-381 a').classList.add("inactivePage2");
        document.querySelector('.menu-item-418 a').classList.add("inactivePage2");

    }
    
    else {
        fullMenu.classList.remove("fullMenuOn");
        fullMenu.classList.add("fullMenuOff");
        buttonOn.style.display = "flex";
        buttonOff.style.display = "none";
        sideNavWrapper.style.backgroundColor = "white";
        sideNav.style.display ="block";
        flecheBas.style.display ="block";
        loupe.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_nav_loupe.svg";
        picto.style.display = "block";

        
        
        
    }
}, false); 




burgerButton.addEventListener('click', function () {
    if (fullMenu.classList.contains('fullMenuOff')) {
        fullMenu.classList.remove("fullMenuOff");
        fullMenu.classList.add("fullMenuOn");
        fullMenu.style.animation = "transition 2s ease";
        buttonOn.style.display = "none";
        buttonOff.style.display = "flex";
        sideNavWrapper.style.backgroundColor = "rgb(0,83,78)";
        sideNav.style.display ="none";
        flecheBas.style.display ="none";
        loupe.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_menu_loupe.svg";
        picto.style.display = "none";

    } else if (document.querySelector('.single-explorations')) {
        fullMenu.classList.remove("fullMenuOn");
        fullMenu.classList.add("fullMenuOff");
        buttonOn.style.display = "flex";
        buttonOff.style.display = "none";
        sideNavWrapper.style.backgroundColor = "white";
        sideNav.style.display ="block";
        flecheBas.style.display ="block";
        loupe.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_nav_loupe.svg";
        picto.style.display = "block";

        document.querySelector('div#sideNavWrapper').style.backgroundColor = "#f4f4f4";
        document.querySelector('.menu-item-383 a').classList.add("inactivePage2");
        document.querySelector('.menu-item-382 a').classList.add("activePage");
        document.querySelector('.menu-item-381 a').classList.add("inactivePage2");
        document.querySelector('.menu-item-418 a').classList.add("inactivePage2");

    }  else if (document.querySelector('.single-post')) {
        fullMenu.classList.remove("fullMenuOn");
        fullMenu.classList.add("fullMenuOff");
        buttonOn.style.display = "flex";
        buttonOff.style.display = "none";
        sideNavWrapper.style.backgroundColor = "white";
        sideNav.style.display ="block";
        flecheBas.style.display ="block";
        loupe.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_nav_loupe.svg";
        picto.style.display = "block";

        document.querySelector('div#sideNavWrapper').style.backgroundColor = "#f4f4f4";
        document.querySelector('.menu-item-383 a').classList.add("inactivePage");
        document.querySelector('.menu-item-382 a').classList.add("inactivePage");
        document.querySelector('.menu-item-381 a').classList.add("inactivePage");
        document.querySelector('.menu-item-418 a').classList.add("activePage");

    } else if (document.querySelector('.single-projets div#sideNavWrapper')) {
        fullMenu.classList.remove("fullMenuOn");
        fullMenu.classList.add("fullMenuOff");
        buttonOn.style.display = "flex";
        buttonOff.style.display = "none";
        sideNavWrapper.style.backgroundColor = "white";
        sideNav.style.display ="block";
        flecheBas.style.display ="block";
        loupe.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_nav_loupe.svg";
        picto.style.display = "block";

            document.querySelector('div#sideNavWrapper').style.backgroundColor = "transparent";
            document.querySelector('.menu-item-383 a').classList.add("inactivePage3");
            document.querySelector('.menu-item-382 a').classList.add("inactivePage3");
            document.querySelector('.menu-item-381 a').classList.add("inactivePage4");
            document.querySelector('.menu-item-418 a').classList.add("inactivePage3");
   

    } 
    
    else {
        fullMenu.classList.remove("fullMenuOn");
        fullMenu.classList.add("fullMenuOff");
        buttonOn.style.display = "flex";
        buttonOff.style.display = "none";
        sideNavWrapper.style.backgroundColor = "white";
        sideNav.style.display ="block";
        flecheBas.style.display ="block";
        loupe.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_nav_loupe.svg";
        picto.style.display = "block";

        
        
        
    }
}, false); 



const responsiveBurger =  document.querySelector('.responsiveBurger');
const logoResponsive = document.querySelector('.logoResponsive');
const responsiveBurgerImg =  document.querySelector('.responsiveBurgerImg');




responsiveBurger.addEventListener('click', function () {
    if (fullMenu.classList.contains('fullMenuOff')) {
        fullMenu.classList.remove("fullMenuOff");
        fullMenu.classList.add("fullMenuOn");
       logoResponsive.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_nav_logo.svg";
       responsiveBurgerImg.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_menu_burguer-fermer.svg";
        fullMenu.style.animation = "transition 2s ease"; }
else {
    fullMenu.classList.remove("fullMenuOn");
    fullMenu.classList.add("fullMenuOff");
    logoResponsive.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_nav_logo.svg";
    responsiveBurgerImg.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_nav_menu-burguer.svg";
  
}
}, false); 



const responsiveCatLogo =  document.querySelector('.responsiveCatLogo');
const responsiveCat = document.querySelector('.reponsiveCat');
const catHeader = document.querySelector('.categoryHeader');


responsiveCatLogo.addEventListener('click', function () {
   if (catHeader.classList.contains('catHeaderOff')) {
       catHeader.classList.add("catHeaderOn");
       catHeader.classList.remove("catHeaderOff");
         catHeader.style.animation = "transition 2s ease"; }
 else {
     catHeader.classList.remove("catHeaderOn");
     catHeader.classList.add("catHeaderOff");
  
 }
 }, false); 



