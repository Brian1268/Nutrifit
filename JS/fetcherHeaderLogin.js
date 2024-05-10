document.addEventListener("DOMContentLoaded", function () {
  // Fetch the header.html content using fetch API
  fetch("Header-login.php")
    .then((response) => response.text())
    .then((data) => {
      // Insert the fetched HTML into the #header div
      document.getElementById("Header-login").innerHTML = data;
    });
});
