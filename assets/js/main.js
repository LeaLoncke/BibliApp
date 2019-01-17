
var dropdownButton = document.getElementById('dropdownButton');
var dropdownContent = document.getElementById('dropdownContent');

dropdownButton.addEventListener("click", displayBlock);
dropdownButton.addEventListener("touchend", displayBlock);

function displayBlock() {
    console.log("BOUH");
    dropdownContent.style.display = "block";
}


// dropdownButton.removeEventListener("click", displayBlock); 