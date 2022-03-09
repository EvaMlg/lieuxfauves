z = document.querySelector('.logoDistinctions');
z.addEventListener('click', function() { 
    if ( document.querySelector('.distinctionsToggleWrapper').style.display === "none") {
        document.querySelector('.distinctionsToggleWrapper').style.display = "block"; 
        document.querySelector('.distinctionsToggleWrapper').style.animation = "windowDown 0.2s ease"

    }
    else {
        document.querySelector('.distinctionsToggleWrapper').style.display = "none";

    }

 }, false);










