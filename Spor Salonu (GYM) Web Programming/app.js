const passwordElement = document.getElementById("password");
const togglePasswordElement = document.getElementById("togglePassword");

togglePasswordElement.addEventListener('click', function(){
    let type = passwordElement.getAttribute("type");
    type = type == "password" ? "text" : "password";
    passwordElement.setAttribute("type", type);
    
    this.classList.toggle("fa-eye-slash");
})