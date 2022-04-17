const userLoginVal = document.querySelector("#loginFormUser");

userLoginVal.addEventListener("submit", (e) => {
  const username = document.querySelector("#usernameUser");
  const password = document.querySelector("#passwordUser");
  if (username.value === "" || password.value === "") {
    if (username.value === "" && password.value === "") {
      alert("Please enter your username and password");
    } else if (usernameUser.value === "") {
      alert("Please enter your username");
    } else if (passwordUser.value === "") {
      alert("Please enter your password");
    }
    e.preventDefault();
  } else {
    return true;
  }
});
