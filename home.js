//drop down effect for search bar//
let searchIcon = document.getElementById("search-icon");
let inputDisplay = "none";
searchIcon.addEventListener("click", function () {
  if (inputDisplay == "none") {
    document.getElementById("search-form-container").style.display = "block";
    inputDisplay = "block";
  } else if (inputDisplay == "block") {
    document.getElementById("search-form-container").style.display = "none";
    inputDisplay = "none";
  } else {
    document.getElementById("search-form-container").style.display = "none";
    inputDisplay = "none";
  }
});
