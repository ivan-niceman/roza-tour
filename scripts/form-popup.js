const buttonBanner = document.querySelector(".banner-button");
const formPopup = document.querySelector(".popup-form");
const formPopupBlock = document.querySelector(".popup-form-block");
const closeButtonFormPopup = document.querySelector(".popup__form-button-close");

function closePopupForm() {
  formPopup.classList.remove("popup-active");
}

buttonBanner.addEventListener("click", () => {
    formPopup.classList.add("popup-active");
})

formPopup.addEventListener("click", (e) => {
  if (!formPopupBlock.contains(e.target)) {
    closePopupForm(formPopup);
  }
});

closeButtonFormPopup.addEventListener("click", () => {
  closePopupForm();
});

// send form

const sendFormPopup = document.getElementById("popup-form");

sendFormPopup.addEventListener("submit", async (event) => {
  event.preventDefault();

  try {
    const response = await fetch("send-form.php", {
      method: "POST",
      body: new FormData(sendFormPopup),
    });

    if (response.ok) {
      const messageElement = document.querySelector(".popup-block");
      messageElement.classList.add("active-message");
      formPopup.classList.remove("popup-active");
      sendFormPopup.reset();
    } else {
      console.error("Ошибка отправки формы:", response.statusText);
    }
  } catch (error) {
    console.error("Ошибка:", error);
  }
});