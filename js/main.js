const navbar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
  this.scrollY > 1
    ? navbar.classList.add("navbar-light")
    : navbar.classList.remove("navbar-light");
});
