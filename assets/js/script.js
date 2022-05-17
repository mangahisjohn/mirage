/* General: smooth scrolling */
const links = document.querySelectorAll("header ul a");
for (const link of links) {
  link.addEventListener("click", clickHandler);
};

function clickHandler(e) {
  e.preventDefault();
  const offsetTop = document.querySelector(this.getAttribute("href")).offsetTop;
  scroll({
    top: offsetTop,
    behavior: "smooth"
  });
};

/* Roadmap: icon hover animation */
document.querySelectorAll("article#roadmap div.image-container img").forEach(icon => {
    icon.addEventListener("mouseenter", function(e) {
        icon.style.transform = "scale(1.05, 1.05)";
        icon.style.filter = `drop-shadow(#FFFFFF66 4px 4px 20px)`;
    });
});
document.querySelectorAll("article#roadmap div.image-container img").forEach(icon => {
    icon.addEventListener("mouseleave", function(e) {
        icon.style.transform = "none";
        icon.style.filter = "none";
    });
});


/* Contact: Social links hover animation */
document.querySelectorAll(".socials-icon").forEach(icon => {
      icon.addEventListener("mouseenter", function(e) {
        icon.setAttribute("fill", "99FFFF");
  });
});
document.querySelectorAll(".socials-icon").forEach(icon => {
  icon.addEventListener("mouseleave", function(e) {
      icon.style.fill = "white";
  });
});