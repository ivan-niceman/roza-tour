const burgerButton = document.querySelector(".burger-button");
const mobileNav = document.querySelector(".mobile-nav");
const closeMobileButton = document.querySelector(".mobile-close-button");

const closeButtonPopup = document.querySelectorAll(".popup__button-close");
const blockPopup = document.querySelector(".popup-block");
const contentPopup = document.querySelector(".popup-content");

function closeMobileNav() {
  mobileNav.classList.remove("mobile-nav-active");
}

burgerButton.addEventListener("click", () => {
  mobileNav.classList.add("mobile-nav-active");
});

closeMobileButton.addEventListener("click", closeMobileNav);

document.addEventListener("click", (e) => {
  if (!mobileNav.contains(e.target) && !burgerButton.contains(e.target)) {
    closeMobileNav();
  }
});

///

function closePopupMessage() {
  blockPopup.classList.remove("active-message");
}

closeButtonPopup.forEach(elem => {
  elem.addEventListener("click", closePopupMessage);
})

document.addEventListener("click", (e) => {
  if (!contentPopup.contains(e.target)) {
    closePopupMessage();
  }
});

// about numbers

const targetValues = [24, 47, 10000];
const numberElements = document.querySelectorAll('.about-number');

function updateNumbers() {
  numberElements.forEach((el, index) => {
    const currentValue = parseInt(el.textContent);
    const targetValue = targetValues[index];
    const increment = Math.ceil(targetValue / 100);

    if (currentValue < targetValue) {
      const newValue = Math.min(currentValue + increment, targetValue);
      el.textContent = newValue >= 10000 ? `${newValue}+` : newValue;
    }
  });
}

window.addEventListener('scroll', function() {
  const numberElement = document.querySelector('.about-numbers');
  const rect = numberElement.getBoundingClientRect();
  if (rect.top < window.innerHeight - 100 && rect.bottom >= 100) {
    setInterval(updateNumbers, 50);
  }
})

// scroll up

const scroll = document.querySelector(".scroll-up");
scroll.addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

function scrollFunction() {
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    scroll.style.display = "block";
  } else {
    scroll.style.display = "none";
  }
}

window.onscroll = function() {scrollFunction()};

// card hidden

const hotelItems = document.querySelectorAll('.bus-tours-hotel-item');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.remove('bus-tours-hotel-hidden');
    }
  });
}, { threshold: 0.5 });

hotelItems.forEach(item => {
  observer.observe(item);
});
