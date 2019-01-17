
var dropdownButton = document.getElementById('dropdownButton');
var dropdownContent = document.getElementById('dropdownContent');

dropdownButton.addEventListener("click", displayBlock);

function displayBlock() {
    console.log("BOUH");

    if (dropdownContent.style.display === "none") {
        dropdownContent.style.display = "block";
    } else {
        dropdownContent.style.display = "none";
    }

    
}
