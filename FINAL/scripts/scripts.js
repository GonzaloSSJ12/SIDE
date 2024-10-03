function ShowPassword() {
    const passwordInput = document.getElementById("showpwd");
    if (passwordInput.type === 'password'){
        passwordInput.type = 'text';
    }else{
        passwordInput.type = 'password';
    }
}

function validatePassword() {
    var password = document.getElementById("showpwd").value;
    var feedback = document.getElementById("passwordFeedback");

    if (password.length < 8) {
        feedback.textContent = "La contraseña es demasiado corta. Debe tener al menos 8 caracteres.";
    } else if (!/[A-Z]/.test(password)) {
        feedback.textContent = "La contraseña debe contener al menos una letra mayúscula.";
    } else if (!/[a-z]/.test(password)) {
        feedback.textContent = "La contraseña debe contener al menos una letra minúscula.";
    } else if (!/[0-9]/.test(password)) {
        feedback.textContent = "La contraseña debe contener al menos un número.";
    } else if (!/[!@#\$%\^&\*-(¡!¿?._|=)]/.test(password)) {
        feedback.textContent = "La contraseña debe contener al menos un carácter especial (!@#$%^&*).";
    } else {
        feedback.textContent = "La contraseña es segura.";
        feedback.style.color = "green";
    }
}