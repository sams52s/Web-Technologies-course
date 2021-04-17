var userName = document.getElementById("userName").value;
var unlenght = userName.length;
var name = document.getElementById("Name").value;
var email = document.getElementById("email").value;
var pass = document.getElementById("pass").value;
var cpass = document.getElementById("cpass").value;
var phone = document.getElementById("phone").value;
var add = document.getElementById("add").value;
var dob = document.getElementById("dob").value;
/*function get() {
    var params = new URLSearchParams(window.location.search),
        userName = params.get("userName");
    unlenght = userName.length;
    name = params.get("name");
    email = params.get("email");
    pass = params.get("pass");
    cpass = params.get("cpass");
    phone = params.get("phone");
    add = params.get("add");
    dob = params.get("dob");
    console.log(userName);

}*/


function getvalue(userName, name, email, pass, cpass, phone, add, dob) {
    this.userName = userName;
    this.unlenght = userName.length;
    this.name = name;
    this.email = email;
    this.pass = pass;
    this.cpass = cpass;
    this.phone = phone;
    this.add = add;
    this.dob = dob;
    document.getElementById("errorpass").innerHTML = this.userName;
}


function myFunction() {
    validation();
    empty();


}

function validation() {
    if (unlenght < 2) {
        document.getElementById("erroruname").innerHTML = "Not valid user name";
        document.getElementById("erroruname").style.background = "red";
    } else {
        /* document.getElementById("erroruname").innerHTML = "valid";*/
        document.getElementById("erroruname").innerHTML = userName;
        document.getElementById("erroruname").style.background = "green";
    }

    if (pass.length < 8) {
        document.getElementById("errorpass").innerHTML = "Not valid";
        document.getElementById("errorpass").style.background = "red";
    } else {
        document.getElementById("errorpass").innerHTML = "valid";
        document.getElementById("errorpass").style.background = "green";
    }

    if (cpass !== pass) {
        document.getElementById("errorcpass").innerHTML = "Not match";
        document.getElementById("errorcpass").style.background = "red";
    } else {
        document.getElementById("errorcpass").innerHTML = "match";
        document.getElementById("errorcpass").style.background = "green";
    }


    if (phone.length < 11) {
        document.getElementById("errorphne").innerHTML = "Not valid";
        document.getElementById("errorphne").style.background = "red";
    } else {
        document.getElementById("errorphne").innerHTML = "valid";
        document.getElementById("errorphne").style.background = "green";
    }
}


function empty() {
    if (userName == "" || userName == null) {
        alert("User Name Can not be empty")
    }
    if (email == "" || email == null) {
        alert("Email Can not be empty")

    }
    if (phone == "" || phone == null) {
        alert("Phone Number Can not be empty")
    }
    if (add == "" || add == null) {
        alert("address Can not be empty")
    }
    if (dob == "" || dob == null) {
        alert("Date of birth Can not be empty")
    }

    if (pass == "" || pass == null || cpass == "" || cpass == null) {
        alert("Password Can not be empty")
    }
}