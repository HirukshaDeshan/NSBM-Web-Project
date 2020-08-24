function validate() {
    var fName = document.getElementById("first_name");
    var lName = document.getElementById("last_name");
    var email = document.getElementById("email");
    var uname = document.getElementById("user_name");
    var pass = document.getElementById("pass_word");
    var con_pass = document.getElementById("C_password");


    if (pass.length < 6) {
        postMessage.push("sdfsdfsdf");
    }
    if (pass != con_pass) {
        alert("Password are not match!!");
    }



}