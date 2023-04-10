const menuIcon = document.querySelector(".menu-icon");
const sideMenu = document.querySelector(".side-menu");
const sideMenuOutside = document.querySelector(".side-menu");

menuIcon.addEventListener("click", () => {
    sideMenu.classList.toggle("active");
});
