document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("myModal");
    const closeButton = document.querySelector(".close-btn");
    const gotitButton = document.querySelector(".gotit-btn");

    closeButton.addEventListener("click", function () {
        modal.style.display = "none";
    });

    gotitButton.addEventListener("click", function () {
        modal.style.display = "none";
    });
});
