const createVal = document.querySelector("#updateForm");

createVal.addEventListener("submit", (e) => {
  const name = document.querySelector("#nameUpdate");
  const price = document.querySelector("#priceUpdate");
  const image = document.querySelector("#imageUpdate");
  const about = document.querySelector("#aboutUpdate");
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
