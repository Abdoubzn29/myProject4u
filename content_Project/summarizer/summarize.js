// Select the sidebar and sidebar close button
const sidebar = document.querySelector(".sidebar");
const sidebarClose = document.querySelector("#sidebar-close");

// Add event listener to toggle the sidebar on close button click
sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"));

// Get the textarea element by its ID
const textarea = document.getElementById("myTextarea");

// Function to check and limit the character count in the textarea
function checkCharacterLimit(textarea) {
  var maxLength = 1000;
  var currentLength = textarea.value.length;

  if (currentLength > maxLength) {
    textarea.value = textarea.value.slice(0, maxLength);
    currentLength = maxLength;
  }

  var characterCount = textarea.parentElement.querySelector('.character-count');
  characterCount.textContent = 'Characters typed: ' + currentLength + ' / ' + maxLength;
}

function copyToClipboard() {
  var outputText = document.getElementById("output-text");
  outputText.select();
  outputText.setSelectionRange(0, 99999); // For mobile devices

  document.execCommand("copy");
  
}






