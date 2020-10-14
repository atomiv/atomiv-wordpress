/* ##################################################
    Script for mobile hamburger menu
################################################## */

let hamburgerMenu       = document.querySelector('.hamburgerMenu');
let slideMenu           = document.querySelector('.slide__menu');
let closeHamburger      = document.querySelector('.closeWrapper');
var bodyClass           = document.querySelector('body');

// Add "open" class to menu and body
function openMenu(){
    slideMenu.classList.add('open');
    bodyClass.classList.add('open')
}

// Remove "open" class from menu and body
function closeMenu(){
    slideMenu.classList.remove('open');
    bodyClass.classList.remove('open')
}

// Call openMenu() on click on hamburgerMenu
hamburgerMenu.addEventListener('click', openMenu);
// Call closeMenu() on click on loseHamburger
closeHamburger.addEventListener('click', closeMenu);