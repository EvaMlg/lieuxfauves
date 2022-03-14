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




 
