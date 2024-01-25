const toggle = document.querySelector(".toggle");
const menuDashboard = document.querySelector(".menu-dashboard");
const iconoMenu = toggle.querySelector("i");
const enlacesMenu = document.querySelectorAll(".enlace");
const logoutLink = document.getElementById("logout");

toggle.addEventListener("click", () => {
    menuDashboard.classList.toggle("open");

    if (iconoMenu.classList.contains("fa-bars")) {
        iconoMenu.classList.replace("fa-bars", "fa-times");
    } else {
        iconoMenu.classList.replace("fa-times", "fa-bars");
    }
});

enlacesMenu.forEach((enlace) => {
    enlace.addEventListener("click", () => {
        menuDashboard.classList.add("open");
        iconoMenu.classList.replace("fa-bars", "fa-times");
    });
});

logoutLink.addEventListener("click", () => {
    window.location.href = "/logout";
});
