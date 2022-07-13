/* Roadmap: icon hover animation */
document.querySelectorAll("article#app div.image-container img").forEach(icon => {
    icon.addEventListener("mouseenter", function(e) {
        icon.style.transform = "scale(1.05, 1.05)";
        icon.style.filter = `drop-shadow(#FFFFFF66 4px 4px 20px)`;
    });
});
document.querySelectorAll("article#app div.image-container img").forEach(icon => {
    icon.addEventListener("mouseleave", function(e) {
        icon.style.transform = "none";
        icon.style.filter = "none";
    });
});

const toggleMobileNav = () => {
    document.getElementById("mobile-nav-container").classList.toggle("mobile-navstate-inactive");
    document.getElementById("mobile-nav-container").classList.toggle("mobile-navstate-active");
}

document.getElementById("nav-mobile-icon").addEventListener("click", toggleMobileNav);

document.getElementsByClassName("nav-mobile-icon")