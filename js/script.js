console.log("script is working")

// -----[ BUTTON FUNCTIONS ]-----
const buttons_login = document.querySelectorAll(".signin")

buttons_login.forEach(button => {
    button.onclick = () => {
        location.href = "signin.php"
    }
})