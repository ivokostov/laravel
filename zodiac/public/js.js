var body = document.querySelector('body');
var menu = document.querySelector('.nav-menu');
var menuToggle = document.querySelector('.mennu-toggle');
menuToggle.addEventListener('click',(e) => { 
    e.preventDefault();
    menu.classList.toggle('open');
    body.classList.toggle('open');
});