const modalButtons = document.querySelectorAll(".modal-btn");
const modals = document.querySelectorAll(".modal");
const closeModalButtons = document.querySelectorAll(".modal-close");
const body = document.body;
const overlay = document.querySelector(".overlay");

modalButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        const modalId = button.getAttribute("data-modal");
        const modal = document.getElementById(`${modalId}Modal`);

        modal.classList.add("modal--show");
        body.classList.add("modal-open");
        overlay.style.display = "block";
    });
});

closeModalButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        const modal = button.closest(".modal");
        modal.classList.remove("modal--show");
        body.classList.remove("modal-open");
        overlay.style.display = "none";
    });
});

const toggleBtn = document.querySelector(".toggle-btn");
const toggleBtnIcon = document.querySelector(".toggle-btn i");
const dropDownMenu = document.querySelector(".dropdown-menu");

toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle("open");
    const isOpen = dropDownMenu.classList.contains("open");
    toggleBtnIcon.classList = isOpen ? "fa-solid fa-xmark" : "fa-solid fa-bars";
};
