//home autotype
var typed = new Typed(".auto-type",{
    strings: ["WEB DEVELOPER","WEB DESIGNER"],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true
});
//end

//navbar
const navEl = document.querySelector('.navbar');
    
window.addEventListener('scroll', () => {
  if (window.scrollY >= 56) {
    navEl.classList.add('navbar-scrolled');
  } else if (window.scrollY < 56) {
    navEl.classList.remove('navbar-scrolled');
  }
});
//end

//date
AOS.init();
var date = new Date();
var year = date.getFullYear();
document.getElementById('curYr').innerHTML = year;
//end

//lightbox
lightbox.option({
  'resizeDuration': 200,
  'wrapAround': true,
  'disableScrolling': true,
})
