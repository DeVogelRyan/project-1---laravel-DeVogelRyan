const toggleprofileBtn = document.querySelector("#user-menu-button");
const profileMenu = document.querySelector("#menu");
const toggleMobileMenu = document.querySelector("#toggle-mobile-menu");
const mobileMenu = document.querySelector("#mobile-menu");

menu.classList.toggle("hidden");//hide it initialy

// Add Event Listeners
toggleprofileBtn.addEventListener("click", () => {
    profileMenu.classList.toggle("hidden");
});

toggleMobileMenu.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
});
