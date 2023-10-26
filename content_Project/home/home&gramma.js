// Function to check character limit and update character count
function checkCharacterLimit(textarea) {
    var maxLength = 1000;
    var currentLength = textarea.value.length;

    if (currentLength > maxLength) {
      textarea.value = textarea.value.slice(0, maxLength);
      currentLength = maxLength;
    }

    var characterCount = document.querySelector('.character-count');
    characterCount.textContent = 'Characters typed :'+currentLength + ' / ' + maxLength;
  }

  // Function to copy the text to clipboard
  function copyToClipboard() {
    var textarea = document.getElementById("myTextarea");
    textarea.select();
    document.execCommand("copy");
    textarea.setSelectionRange(0, 0); // Deselect the text
  }

  const sidebar = document.querySelector(".sidebar");
  const sidebarClose = document.querySelector("#sidebar-close");
  sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"));

  