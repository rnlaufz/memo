const errors = document.querySelectorAll('.error');
const messages = document.querySelectorAll('.message');
// Hide errors in 3 sec
function hideErrors() {
    setTimeout(() => {
        return errors.forEach((error) => {
           return error.style.display = 'none'
        })       
}, 3000)}
// Hide messages in 3 sec
function hideMessages() {
    setTimeout(() => {
        return messages.forEach((message) => {
           return message.style.display = 'none'
        })       
}, 3000)}
hideErrors();
hideMessages();