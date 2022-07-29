password = document.getElementById("password");
verifypassword = document.getElementById("verifypassword");
registerbtn = document.getElementById("register");
verifypassword.addEventListener("blur", function () {
  if (verifypassword.value.trim() != password.value.trim()) {
    password.style.borderColor = "red";
    verifypassword.style.borderColor = "red";
    registerbtn.setAttribute("disabled");
  }
});

