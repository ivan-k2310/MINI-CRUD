const createVal = document.querySelector("#createForm");

createVal.addEventListener("submit", (e) => {
  const name = document.querySelector("#nameCreate");
  const price = document.querySelector("#priceCreate");
  const image = document.querySelector("#imageCreate");
  const about = document.querySelector("#aboutCreate");
  if (
    name.value === "" ||
    price.value === "" ||
    image.value === "" ||
    about.value === ""
  ) {
    if (
      name.value === "" &&
      price.value === "" &&
      image.value === "" &&
      about.value === ""
    ) {
      alert("Please enter your name, price, image, and about");
    } else if (name.value === "") {
      alert("Please enter your name");
    } else if (price.value === "") {
      alert("Please enter your price");
    } else if (image.value === "") {
      alert("Please enter your image");
    } else if (about.value === "") {
      alert("Please enter your about");
    }
    e.preventDefault();
  } else {
    return true;
  }
});
