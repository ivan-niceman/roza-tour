const buttonBannerAdvice = document.querySelectorAll(".banner-button-advice");
const formPopupAdvice = document.querySelector(".popup-form-advice");
const formPopupBlockAdvice = document.querySelector(".popup-form-block-advice");
const closeButtonFormPopupAdvice = document.querySelector(".popup-close-advice");

function closePopupFormAdvice() {
  formPopupAdvice.classList.remove("popup-active");
}

buttonBannerAdvice.forEach(e => {
  e.addEventListener("click", () => {
    formPopupAdvice.classList.add("popup-active");
  })
  })

formPopupAdvice.addEventListener("click", (e) => {
  if (!formPopupBlockAdvice.contains(e.target)) {
    closePopupFormAdvice(formPopupAdvice);
  }
});

closeButtonFormPopupAdvice.addEventListener("click", () => {
    closePopupFormAdvice();
  });

// send form

const sendFormPopupAdvice = document.getElementById("popup-form-advice");

sendFormPopupAdvice.addEventListener("submit", async (event) => {
  event.preventDefault();

  try {
    const response = await fetch("send-form-advice.php", {
      method: "POST",
      body: new FormData(sendFormPopupAdvice),
    });

    if (response.ok) {
      const messageElement = document.querySelector(".popup-block");
      messageElement.classList.add("active-message");
      formPopupAdvice.classList.remove("popup-active");
      sendFormPopupAdvice.reset();
    } else {
      console.error("Ошибка отправки формы:", response.statusText);
    }
  } catch (error) {
    console.error("Ошибка:", error);
  }
});