function ValidateEmail(email) {
  var emailreg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  var errMsgElem = email.parentElement.nextElementSibling;

  if (email.value.length === 0) {
    email.classList.add("error");
    errMsgElem.classList.add("error-message");
    errMsgElem.innerText = "Email can't be empty";

    return;
  } else if(email.value.length === 0) {
    email.classList.remove("error");
    errMsgElem.classList.remove("error-message");
    errMsgElem.innerText = "";

    return;
  }

  if (!emailreg.test(email.value)) {
    email.classList.add("error");
    errMsgElem.classList.add("error-message");
    errMsgElem.innerText = "Invalid email address";

    return;
  } else {
    email.classList.remove("error");
    errMsgElem.classList.remove("error-message");
    errMsgElem.innerText = "";
  }

//   console.log(emailreg.test(email.value));
//   console.dir(email.parentElement.parentElement);
//   console.dir(errMsgElem);
}

function validatePassword(pass) {
    var passwordReg = /[@\|#\|$\|%]/;
    var errMsgElem = pass.parentElement.nextElementSibling;

    if(pass.value.length === 0) {
        pass.classList.add("error");
        errMsgElem.classList.add("error-message");
        errMsgElem.innerText = "Password can't be empty";
        return;
    } else if(pass.value.length > 0) {
        pass.classList.remove("error");
        errMsgElem.classList.remove("error-message");
        errMsgElem.innerText = "";
    }

    if (passwordReg.test(pass.value) && pass.value.length >= 8) {
        pass.classList.remove("error");
        errMsgElem.classList.remove("error-message");
        errMsgElem.innerText = "";
    } else {
        pass.classList.add("error");
        errMsgElem.classList.add("error-message");
        errMsgElem.innerText = "Password must be larger than 8 character, include at least one of them (@, #, $, %)";
    }

    // console.log(passwordReg.test(pass.value), pass.value.length >= 8);
}
