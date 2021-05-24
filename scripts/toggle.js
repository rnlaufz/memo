// Select items
const showCardDelete = document.querySelector('.delCards');
const showAccountDelete = document.querySelector('.delAccount');
const deleteCardsForm = document.querySelector(".confirm-delete-cards");
const deleteAccountForm = document.querySelector(".confirm-delete-account");
// Set event listeners
showCardDelete.addEventListener("click", () => {
    deleteCardsForm.classList.toggle('hide');
    // Prevent showing second form
    deleteAccountForm.classList.add('hide');
})
showAccountDelete.addEventListener("click", () => {
    deleteAccountForm.classList.toggle('hide');
     // Prevent showing second form
     deleteCardsForm.classList.add('hide');
})

