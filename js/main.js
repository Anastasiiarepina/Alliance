const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo");
const logoLight = document.querySelector(".logo-light");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.style.display = "block";
  logoLight.style.display = "none";
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.style.display = "none";
  logoLight.style.display = "block";
};

const openMenu = (event) => {
  // открываем меню
  menu.classList.add("is-open");
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; // запрещаем прокрутку сайта под меню
  lightModeOn();
};
const closeMenu = (event) => {
  // закрываем меню
  menu.classList.remove("is-open");
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; // разрешаем прокрутку сайта под меню
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper1 = new Swiper(".swiper-1", {
  speed: 400,
  slidesPerView: 1,
  autoHeight: true,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    },
  },
});

const SwiperSteps = new Swiper(".steps-swiper", {
  speed: 400,
  slidesPerView: 1,
  autoHeight: true,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 4,
    },
  },
});

const BlogSteps = new Swiper(".blog-swiper", {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  autoHeight: true,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
    },
  },
});

const modal = document.querySelector(".modal");
const modalToggle = document.querySelectorAll("[data-toggle=modal");
const modalClose = document.querySelector(".modal-close");

modalToggle.forEach((element) => {
  element.addEventListener("click", (event) => {
    event.preventDefault();
    modal.classList.add("is-open");
  });
});
modalClose.addEventListener("click", (event) => {
  event.preventDefault();
  modal.classList.remove("is-open");
});

document.addEventListener("keydown", (e) => {
  if (e.code == "Escape") {
    modal.classList.remove("is-open");
  }
});
modal.addEventListener("click", (event) => {
  // console.log(event.target);
  if (!event.target.closest(".modal-dialog")) {
    modal.classList.remove("is-open");
  }
});
