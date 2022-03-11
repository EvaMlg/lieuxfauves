z = document.querySelector('.logoDistinctions');

z.addEventListener('click', function() { 
    if ( document.querySelector('.distinctionsToggleWrapper').style.display === "none") {
        document.querySelector('.distinctionsToggleWrapper').style.display = "block"; 
        document.querySelector('.distinctionsToggleWrapper').style.animation = "windowDown 0.2s ease"
        z.display.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_trait_fermer_gris.svg";


    }
    else {
        document.querySelector('.distinctionsToggleWrapper').style.display = "none";
        z.display.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_trait_fermer_gris.svg";

    }

 }, false);







