const adminBar = document.getElementById('wpadminbar')
const fixedHeader = document.querySelector('.header.fixed')

// console.log(fixedHeader)
// console.log(adminBar)

//if there is an admin bar, push site down when header is fixed
if(adminBar !== null){
  // fixedHeader.style.top = '32px' // or should we push the entire body down?
}


// Mobile menu show and hide
const navToggle = document.getElementById('mobile-menu-toggle')
const mainMenu = document.getElementById('main-menu')

navToggle.addEventListener('click', () => {
  mainMenu.classList.toggle('show-mobile-nav')
  navToggle.childNodes[0].classList.toggle('fa-bars')
  navToggle.childNodes[0].classList.toggle('fa-times')
})
