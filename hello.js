function formValidation() {
    var uname = document.forms["fname"]["uname"].value;
    if (uname.length <= 4 || uname == null){
        document.write("Go Back and enter a username with a Length of more than 4 characters")
        return false;
    }
    var password = document.forms["fname"]["password"].value;
    if (password.length <= 6 || password == null){
        document.write("Go Back and enter a password that is atleast 6 characters")
        return false;
    }
    var reenterpassword = document.forms["fname"]["reenterpassword"].value;
    if (reenterpassword !== password || reenterpassword == null){
        document.write("Go Back. Your passwords do not match.")
        return false;
    }
    var email = document.forms["fname"]["email"].value;
    if (email.length <= 6 || email == null){
        document.write("Go Back and enter a valid email address")
        return false;
    }
    
    
}
