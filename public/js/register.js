function CheckPassword() {
    password = document.getElementById("password").value;
    confirm_password = document.getElementById("password-confirm").value
    var psw = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    console.log(password,confirm_password)
    if (password.match(psw) && password == confirm_password) {
        $("#reg_submit").submit();
    }
    else {
        return false;
    }
}
