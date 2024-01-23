const openModal = document.querySelector(".modal-btn-horarios");
const modal = document.querySelector(".modal");
const closeModal = document.querySelector(".modal-close");

openModal.addEventListener("click", (e) => {
    e.preventDefault();
    modal.classList.add("modal--show");
});

closeModal.addEventListener("click", (e) => {
    e.preventDefault();
    modal.classList.remove("modal--show");
});

const toggleBtn = document.querySelector(".toggle-btn");
const toggleBtnIcon = document.querySelector(".toggle-btn i");
const dropDownMenu = document.querySelector(".dropdown-menu");

toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle("open");
    const isOpen = dropDownMenu.classList.contains("open");

    toggleBtnIcon.classList = isOpen ? "fa-solid fa-xmark" : "fa-solid fa-bars";
};
