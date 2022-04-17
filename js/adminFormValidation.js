const adminLoginVal = document.querySelector("#loginFormAdmin");

adminLoginVal.addEventListener("submit", (e) => {
  const username = document.querySelector("#usernameAdmin");
  const password = document.querySelector("#passwordAdmin");
  if (username.value === "" || password.value === "") {
    if (username.value === "" && password.value === "") {
      alert("Please enter your username and password");
    } else if (usernameAdmin.value === "") {
      alert("Please enter your username");
    } else if (passwordAdmin.value === "") {
      alert("Please enter your password");
    }
    e.preventDefault();
  } else {
    return true;
  }
});
