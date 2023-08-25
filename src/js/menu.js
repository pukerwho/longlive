// Open mobile menu
let menuToggle = document.querySelector(".menu-js");
let mainMenu = document.querySelector(".main-menu");
if (menuToggle) {
  menuToggle.addEventListener("click", () => {
    document.body.classList.toggle("overflow-hidden");
    mainMenu.classList.toggle("mobile");
  });
}