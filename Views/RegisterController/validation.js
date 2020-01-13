function isRightLength(variable, name){
    if(variable.value.length < 3){
        document.getElementById("warning").innerHTML = "Co najmniej 3 litery w " + name;
        return false;
    }
    return true;
}
function isAlphaNumeric(str, name) {
    var code, i, len;

    for (i = 0, len = str.length; i < len; i++) {
        code = str.charCodeAt(i);
        if (!(code > 47 && code < 58) && // numeric (0-9)
            !(code > 64 && code < 91) && // upper alpha (A-Z)
            !(code > 96 && code < 123)) { // lower alpha (a-z)
            document.getElementById("warning").innerHTML = "Niepoprawny ciąg znaków w " + name;
            return false;
        }
    }
    return true;
}
function validateEmail(inputText)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.value.match(mailformat))
    {
        return true;
    }
    else
    {
        document.getElementById("warning").innerHTML = "Niepoprawny email";
        return false;
    }
}
window.onload = function(){
    document.getElementById("contactForm").onsubmit = function () {
        if(isRightLength(this.userName, 'Nazwa użytkownika')){
            if(isRightLength(this.password, 'Hasło')){
                if(isAlphaNumeric(this.userName.value, 'Nazwa użytkownika')){
                    if(isAlphaNumeric(this.password.value, 'Hasło')){
                        if(validateEmail(this.email)){
                            return true;
                        }
                    }
                }
            }
        }
        return false;


    }
}