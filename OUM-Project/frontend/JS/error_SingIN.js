// Calling the tags
var email = document.getElementById('email');
var password = document.getElementById('pass');

// Validation
function validation() {
    if (email.value.trim() === "" || password.value.trim() === "") {
        alert("Désolé, votre email ou mot de passe n'est pas correct");
    } else {
        location.href = "C:/Users/yassi/Desktop/Work/OUM-Project/Public/frontend/HTML";
    }
}
