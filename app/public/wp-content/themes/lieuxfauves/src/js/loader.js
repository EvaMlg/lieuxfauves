document.querySelector('#loader .progressionBarInner').style.animation = "progressionBar 4s ease";


setTimeout(function () {

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






/*thumbnailPopup.forEach(item => {
    item.addEventListener("mouseover", function () {
        for (var i = 0; i < contentPopup.length; i += 1) {
            contentPopup[i].style.display = 'block';
        }
    })
});

thumbnailPopup.forEach(item => {
    item.addEventListener("mouseout", function () {
        for (var i = 0; i < contentPopup.length; i += 1) {
            contentPopup[i].style.display = 'none';
        }
    })
});


contentPopup.forEach(item => {
    item.addEventListener("mouseover", function () {
        for (var i = 0; i < contentPopup.length; i += 1) {
            contentPopup[i].style.display = 'block';
        }
    })
});

contentPopup.forEach(item => {
    item.addEventListener("mouseout", function () {
        for (var i = 0; i < contentPopup.length; i += 1) {
            contentPopup[i].style.display = 'none';
        }

    })
});
*/


// Pop up Thumbnail

logoOpen = document.querySelector('.logo-open');


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
 
 
