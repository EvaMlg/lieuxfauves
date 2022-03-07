const devise = document.querySelector('.devise');

const lieuxSpan = document.querySelector('.lieuxSpan');
const faireSpan = document.querySelector('.faireSpan');
const archiSpan = document.querySelector('.archiSpan');
const urbaSpan = document.querySelector('.urbaSpan');
const vivantSpan = document.querySelector('.vivantSpan');
const ethiqueSpan = document.querySelector('.ethiqueSpan');
const soutenableSpan = document.querySelector('.soutenableSpan');

/* console.log(lieuxSpan);
console.log(faireSpan);
console.log(archiSpan);
console.log(urbaSpan);
console.log(ethiqueSpan);
console.log(soutenableSpan); */

const secLieux = document.querySelector('.sec-lieux');
const secFaire = document.querySelector('.sec-faire');
const secArchiUrba = document.querySelector('.sec-archiurba');
const secVes = document.querySelector('.sec-ves');
const secFooter = document.querySelector('.sec-footer');

const listChapter = document.querySelector('.list-chapter');

const logoFrontpage = document.querySelector('.logoFrontpage');

console.log(logoFrontpage);

/* console.log(secLieux);
console.log(secFaire);
console.log(secArchiUrba);
console.log(secVes);
console.log(secFooter); */

let heightSecLieux = secLieux.clientHeight;
let heightSecFaire = secFaire.clientHeight;
let heightSecArchiUrba = secArchiUrba.clientHeight;
let heightSecVes = secVes.clientHeight;

let sectionUn = heightSecLieux;
let sectionDeux = heightSecLieux + heightSecFaire;
let sectionTrois = heightSecLieux + heightSecFaire + heightSecArchiUrba;
let sectionQuatre = heightSecLieux + heightSecFaire + heightSecArchiUrba + heightSecVes;
let sectionCinq = heightSecLieux + heightSecFaire + heightSecArchiUrba + heightSecVes;


const splitRight = document.querySelector('.split-right');
let sectionSplit = splitRight.clientHeight;

console.log(sectionUn);
console.log(sectionDeux);
console.log(sectionTrois);
console.log(sectionQuatre);
console.log(sectionCinq);
console.log(sectionSplit);


window.addEventListener('scroll', function () {
    if (window.scrollY < sectionUn) {
        lieuxSpan.classList.add("scroll");
        faireSpan.classList.remove("scroll");
        archiSpan.classList.remove("scroll");
        urbaSpan.classList.remove("scroll");
        vivantSpan.classList.remove("scroll");
        ethiqueSpan.classList.remove("scroll");
        soutenableSpan.classList.remove("scroll");
        listChapter.classList.remove("scroll-off");
        logoFrontpage.classList.remove("scroll-off");
        devise.classList.remove("deviseOn");
    } else if (window.scrollY < sectionDeux) {
        lieuxSpan.classList.remove("scroll");
        faireSpan.classList.add("scroll");
        archiSpan.classList.remove("scroll");
        urbaSpan.classList.remove("scroll");
        vivantSpan.classList.remove("scroll");
        ethiqueSpan.classList.remove("scroll");
        soutenableSpan.classList.remove("scroll");
        listChapter.classList.remove("scroll-off");
        logoFrontpage.classList.remove("scroll-off");
        devise.classList.remove("deviseOn");
    } else if (window.scrollY < sectionTrois) {
        lieuxSpan.classList.remove("scroll");
        faireSpan.classList.remove("scroll");
        archiSpan.classList.add("scroll");
        urbaSpan.classList.add("scroll");
        vivantSpan.classList.remove("scroll");
        ethiqueSpan.classList.remove("scroll");
        soutenableSpan.classList.remove("scroll");
        listChapter.classList.remove("scroll-off");
        logoFrontpage.classList.remove("scroll-off");
        devise.classList.remove("deviseOn");
    } else if (window.scrollY < sectionQuatre) {
        lieuxSpan.classList.remove("scroll");
        faireSpan.classList.remove("scroll");
        archiSpan.classList.remove("scroll");
        urbaSpan.classList.remove("scroll");
        vivantSpan.classList.add("scroll");
        ethiqueSpan.classList.add("scroll");
        soutenableSpan.classList.add("scroll");
        listChapter.classList.remove("scroll-off");
        logoFrontpage.classList.remove("scroll-off");
        devise.classList.remove("deviseOn");
    } else {
        listChapter.classList.add("scroll-off");
        lieuxSpan.classList.add("scroll");
        faireSpan.classList.add("scroll");
        archiSpan.classList.add("scroll");
        urbaSpan.classList.add("scroll");
        vivantSpan.classList.add("scroll");
        ethiqueSpan.classList.add("scroll");
        soutenableSpan.classList.add("scroll");
        logoFrontpage.classList.add("scroll-off");
        devise.classList.add("deviseOn");
       
    }


}, false);

