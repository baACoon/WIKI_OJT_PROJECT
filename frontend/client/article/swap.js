function swapContent(clickedItem) {
    let mainSection = document.getElementById("mainSection");

    // Prevent swapping if already selected
    if (mainSection.innerHTML === clickedItem.innerHTML) return;

    // Apply fade-out effect
    mainSection.style.opacity = "0";
    clickedItem.style.opacity = "0.5"; // Reduce opacity to indicate interaction

    setTimeout(() => {
        // Swap the text in the left section
        mainSection.innerHTML = clickedItem.innerHTML;

        // Restore opacity with fade-in effect
        mainSection.style.opacity = "1";
        clickedItem.style.opacity = "1";
    }, 300); // Matches transition duration

    // Hide all content sections
    document.querySelectorAll(".content-section").forEach(section => {
        section.classList.add("hidden");
    });

    // Get the section ID and show the correct one
    let sectionId = clickedItem.innerHTML.toLowerCase() + "Section";
    let activeSection = document.getElementById(sectionId);

    if (activeSection) {
        activeSection.classList.remove("hidden");
    }
}
