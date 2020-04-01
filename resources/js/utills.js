const navbar = document.getElementById('navbar');
const sticky = navbar.offsetTop;

window.addEventListener('scroll', function (e) {
    if (this.pageYOffset >= sticky) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
});
