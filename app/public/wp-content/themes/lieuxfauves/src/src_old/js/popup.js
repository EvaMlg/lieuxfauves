const thumbnailPopup = document.querySelector('.thumbnailPopup');
const contentPopup = document.querySelector('.contentPopup');
const logoClose = document.querySelector('.logoClose');

// BOUCLE SUR UN SEUL ÉLÉMÉNT 
thumbnailPopup.addEventListener("mouseover", function () {
    contentPopup.style.display = 'block';

});

thumbnailPopup.addEventListener("mouseout", function () {
    contentPopup.style.display = 'none';

});


contentPopup.addEventListener("mouseover", function () {
    contentPopup.style.display = 'block';

});


contentPopup.addEventListener("mouseout", function () {
    contentPopup.style.display = 'none';

});

logoClose.addEventListener("click", function () {
    contentPopup.style.backgroundColor = 'violet';

});



/*

const thumbnailPopup = document.querySelectorAll('.thumbnailPopup');
const contentPopup = document.querySelectorAll('.contentPopup');
const logoClose = document.querySelectorAll('.logoClose');


thumbnailPopup.forEach(item => {
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

logoClose.forEach(item => {
    item.addEventListener("mouseout", function () {
        for (var i = 0; i < contentPopup.length; i += 1) {
            contentPopup[i].style.backgroundColor = 'violet';
        }

    })
}); 
*/