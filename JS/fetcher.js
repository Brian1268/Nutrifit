document.addEventListener("DOMContentLoaded", function () {
  // Fetch the header.html content using fetch API
  fetch("Header.html")
    .then((response) => response.text())
    .then((data) => {
      // Insert the fetched HTML into the #header div
      document.getElementById("header").innerHTML = data;
    });
});

document.addEventListener("DOMContentLoaded", function () {
  // Fetch the header.html content using fetch API
  fetch("Header-login.html")
    .then((response) => response.text())
    .then((data) => {
      // Insert the fetched HTML into the #header div
      document.getElementById("Header-login").innerHTML = data;
    });
});

document.addEventListener("DOMContentLoaded", function () {
  // Fetch the Footer.html content using fetch API
  fetch("Footer.html")
    .then((response) => response.text())
    .then((data) => {
      // Insert the fetched HTML into the #footer div
      document.getElementById("footer").innerHTML = data;
    });
});