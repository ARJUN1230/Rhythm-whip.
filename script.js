function login() {
    var email = Document.getElementById("email").Value;
    var password = Document.getElementById("password").Value;

    if (email == "" && password == "" && ) {
        alert("please enter valid email and password.");
        window.location = "dashboard.html";
    }
    else {
        Document.getElementById("email").Value = "";
        Document.getElementById("password").focus();
        alert("invalid username or password.try again.");
    }
}
