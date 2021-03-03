function validation(){
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (name == "") {
        document.getElementById('username').innerHTML = "**Please Enter the Username";
        return false;
        
    }
    if ((name.length <= 2) || (name.length > 25)) {
        document.getElementById('username').innerHTML = "**Character must be between 2 and 25";
        return false;
    }
    if (!isNaN(name)) {
        document.getElementById('username').innerHTML = "**You cannot use only digit in Username";
        return false;
    }
    if (email == "") {
        document.getElementById('useremail').innerHTML = "**Please fill the Your E-mail";
        return false;
    }
    if (email.indexOf('@') <= 0) {
        document.getElementById('useremail').innerHTML = "** '@' Invalid Position";
        return false;
    }
    if ((email.charAt(email.length -4) != '.') && (email.charAt(email.length -3) != '.')){
        document.getElementById('useremail').innerHTML = "** Invalid E-mail Id";
        return false;
    }
    if(message == ""){
        document.getElementById('usermessage').innerHTML = "** Please write your comments";
        return false;
    }
    if((message.length < 2) || (message.length > 255 )){
        document.getElementById('usermessage').innerHTML = "** Character must be between 2 and 255";
        return false;
    }
}


















