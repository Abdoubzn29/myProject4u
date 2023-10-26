const sidebar = document.querySelector(".sidebar");
const sidebarClose = document.querySelector("#sidebar-close");
sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"));


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
function checkCharacterLimitQ(textarea) {
  var maxLength = 120;
  var currentLength = textarea.value.length;

  if (currentLength > maxLength) {
      textarea.value = textarea.value.slice(0, maxLength);
      currentLength = maxLength;
  }

  var characterCount = textarea.parentElement.querySelector('.character-countQ');
  characterCount.textContent = 'Characters typed: ' + currentLength + ' / ' + maxLength;
}



  function copyToClipboard() {
  var textarea = document.getElementById("answer");
  textarea.select();
  document.execCommand("copy");
  textarea.setSelectionRange(0, 0); 
}
const textarea = document.getElementById("myTextarea");


window.addEventListener("load", () => {
  const storedText = sessionStorage.getItem("savedText");
  if (storedText) {
    textarea.value = storedText;
    checkCharacterLimit(textarea);
  }
});


textarea.addEventListener("input", () => {
  sessionStorage.setItem("savedText", textarea.value);
  checkCharacterLimit(textarea);
});


