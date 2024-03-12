const openModalButtons = document.querySelectorAll(".hotel-item, .spa-item");
const closeModalButtons = document.querySelectorAll(".close-button-hotel");
const overlays = document.querySelectorAll(".modal-overlay");

function toggleModal(modalId, action = "toggle") {
  const modal = document.getElementById(modalId);
  if (action === "open") modal.classList.add("modal-item-active");
  else if (action === "close") modal.classList.remove("modal-item-active");
  else modal.classList.toggle("modal-item-active");
}

openModalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const modalId = button.getAttribute("data-modal-target");
    toggleModal(modalId, "open");
  });
});

closeModalButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    const modal = button.closest(".modal-overlay");
    modal.classList.remove("modal-item-active");
    event.stopPropagation();
  });
});

overlays.forEach((overlay) => {
  overlay.addEventListener("click", (event) => {
    if (event.target === overlay) {
      overlay.classList.remove("modal-item-active");
    }
  });
});
