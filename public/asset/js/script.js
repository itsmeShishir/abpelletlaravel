const Toggle = document.getElementById('hamburger-menu');
const NavigationLinks = document.querySelector('.navigationLinks');

Toggle.addEventListener('click', () => {
  NavigationLinks.classList.toggle('showingBlock');
  Toggle.classList.toggle('active');
});

// Dropdown Menu
const dropdownButton = document.querySelector('.dropdown__btn');

dropdownButton.addEventListener('click', () => {
  dropdownButton.classList.add('dropdown__content_mobile');
})