const wrapper = document.querySelector(".wrapper");
const signupHeader = document.querySelector(".signup header");
const loginHeader = document.querySelector(".login header");

// Add event listener to show the signup form and hide the login form
loginHeader.addEventListener("click", () => {
  wrapper.classList.add("active");
});

// Add event listener to show the login form and hide the signup form
signupHeader.addEventListener("click", () => {
  wrapper.classList.remove("active");
});