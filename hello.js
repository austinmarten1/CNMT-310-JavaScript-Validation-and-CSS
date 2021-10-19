function formValidation() {
    var uname = document.forms["fname"]["uname"].value;
    if (uname.length <= 4 || uname == null){
        return false;
    }
    var password = document.forms["fname"]["password"].value;
    if (password.length <= 6 || password == null){
        return false;
    }
    var reenterpassword = document.forms["fname"]["reenterpassword"].value;
    if (reenterpassword !== password || reenterpassword == null){
        return false;
    }
    var email = document.forms["fname"]["email"].value;
    if (email.length <= 6 || email == null){
        return false;
    }
    
    
}
