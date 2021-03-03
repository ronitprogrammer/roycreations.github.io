
function validate(){
    var sname = document.getElementById('signname').value;
    var spass = document.getElementById('signpass').value;
    var smail = document.getElementById('signmail').value

    if (sname == "") {
        document.getElementById('uspan').innerHTML = "** Please Enter the Username";
        return false;
        
    }
    if ((sname.length <= 2) || (sname.length > 25)) {
        document.getElementById('uspan').innerHTML = "**Character must be between 2 and 15";
        return false;
    }
    if (!isNaN(sname)) {
        document.getElementById('uspan').innerHTML = "**You cannot use only digit in Username";
        return false;
    }
    if (spass == "") {
        document.getElementById('pspan').innerHTML = "**Please Enter the Password";
        return false;
    }
    if ((spass.length <= 2 ) || (spass.length > 25)) {
        document.getElementById('pspan').innerHTML = "**Password must be between 2 and 10";
        return false;
    }
    if((spass.length > 2 ) && (spass.length <= 5)){
        document.getElementById('pspan').innerHTML = "** Your Password is very weak, PLease Create a Strong Password"
    }
    if (smail == "") {
        document.getElementById('espan').innerHTML = "**Please fill the Your E-mail";
        return false;
    }
    if (smail.indexOf('@') <= 0) {
        document.getElementById('espan').innerHTML = "** '@' Invalid Position";
        return false;
    }
    if ((smail.charAt(smail.length -4) != '.') && (smail.charAt(smail.length -3) != '.')){
        document.getElementById('espan').innerHTML = "** Invalid E-mail Id";
        return false;
    }
}
