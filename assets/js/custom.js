new WOW().init();

window.onscroll = function () {
    navScroll()
};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function navScroll() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky-top")
    } else {
        navbar.classList.remove("sticky-top");
    }
}