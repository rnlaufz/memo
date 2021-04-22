const errors = document.querySelectorAll('.error')

// Hide errors in 5 sec
function hideErrors() {
    
    setTimeout(() => {
        //    return errors[i].style.display = "none" 
        return errors.forEach((error) => {
           return error.style.display = 'none'
        })
        
}, 3000)

}



hideErrors()