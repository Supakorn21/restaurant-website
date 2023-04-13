const menuIcon = document.querySelector(".menu-icon");
const sideMenu = document.querySelector(".side-menu");
const closeIcon = document.querySelector(".close-icon");

menuIcon.addEventListener("click", () => {
    sideMenu.classList.toggle("active");
});

closeIcon.addEventListener("click", () => {
    sideMenu.classList.toggle("active");
});
