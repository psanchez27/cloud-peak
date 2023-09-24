// Mobile menu show and hide
const navToggle = document.getElementById('mobile-menu-toggle')
const mainMenu = document.getElementById('main-menu')

navToggle.addEventListener('click', () => {
  mainMenu.classList.toggle('show-mobile-nav')
  navToggle.childNodes[0].classList.toggle('fa-bars')
  navToggle.childNodes[0].classList.toggle('fa-times')
})
