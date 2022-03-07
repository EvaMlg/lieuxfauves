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




const thumbnailPopup = document.querySelectorAll('.thumbnailPopup');
const contentPopup = document.querySelectorAll('.contentPopup');
const logoClose = document.querySelectorAll('.logoClose');

console.log(thumbnailPopup);
console.log(contentPopup);
console.log(logoClose);


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




const projetCross = document.querySelectorAll('.thumbnailPopup');
