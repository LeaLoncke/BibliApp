
/* ## Dropdown in the navbar (mobile version) ## */

// Get the HTML elements
var dropdownButton = document.getElementById('dropdownButton');
var dropdownContent = document.getElementById('dropdownContent');

// Add event if you click on dropdown's button
dropdownButton.addEventListener("click", displayBlock);

// Function called in the event
function displayBlock() {

    if (dropdownContent.style.display === "none") {
        dropdownContent.style.display = "block";
    } else {
        dropdownContent.style.display = "none";
    }
    
}
