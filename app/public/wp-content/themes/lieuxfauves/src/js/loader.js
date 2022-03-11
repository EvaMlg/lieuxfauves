document.querySelector('#loader .progressionBarInner').style.animation = "progressionBar 4s ease";


setTimeout(function once() {

    var state = document.readyState;


    if (state === "complete") {
        // Fully loaded!
        var element = document.getElementById("loader");
        document.querySelector('#loader img').style.animation = "loaderOut 4s ease";
        document.querySelector('#loader .svg').style.animation = "loaderOut 4s ease";
        document.querySelector('#loader .progressionBar').style.animation = "loaderOut 4s ease";
        
        setTimeout(function () {
            element.parentNode.removeChild(element);
            document.querySelector('body').style.overflow = "visible";
        }, 3900)


    } else {

        window.addEventListener("load", () => {
            // Fully loaded!
            var element = document.getElementById("loader");
            document.querySelector('#loader img').style.animation = "loaderOut 4s ease";
            document.querySelector('#loader .svg').style.animation = "loaderOut 4s ease";
            document.querySelector('#loader div').style.animation = "loaderOut 4s ease";

            setTimeout(function () {
                element.parentNode.removeChild(element);
                document.querySelector('body').style.overflow = "visible";
            }, 1900)


        });
    }

}, 2500);





logoOpen = document.querySelector('.logo-open');


// popUps = document.getElementsByClassName('.projet-popup');


// popUps.forEach(element => ));


logoOpen.addEventListener('click', function() { 
    if ( document.querySelector('.projet-popup').style.display === "none") {
        document.querySelector('.projet-popup').style.display = "block"; 
        document.querySelector('.projet-popup').style.animation = "windowUp 0.2s ease"
      


    }
    else {
        document.querySelector('.projet-popup').style.display = "none";



    }

 }, false);



 logoClose = document.querySelector('.logo-close');

 logoClose.addEventListener('click', function() { 
    document.querySelector('.projet-popup').style.animation = "windowDown 0.2s ease"
    document.querySelector('.projet-popup').style.display = "none"; 

 
  }, false);
 
 
