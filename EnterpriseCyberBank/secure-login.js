//This function has the information for both the ceo and the ceopassword that can be changed at any time. 
//With if and else statements
// testing out what is correct or incorrect
function braveFunction() {
    var ceo = document.forms["secure-form"]["userName"].value;
    var ceoPassword = document.forms["secure-form"]["passWord"].value;

    if (ceo=="BraveBankCeo" && ceoPassword=="PassWordCannotbeHaCkedsinceitis==password") {
        window.location.href="secure-welcome-screen.html";
    } else {
        alert("The information you entered is not correct. Please try again! ");
    }
}