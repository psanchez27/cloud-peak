// Shrink header on scroll down in header option is fixed

// Declare variables
const header = document.getElementById('header')

//Check scrolled position
const checkPos = () => {
  //Upon scroll event, check if user is at the top of screen
  window.addEventListener('scroll', () => {
    if(window.scrollY !== 0){
      //if not at top
      header.classList.add('scrolled')
    } else{
      // if at top
      header.classList.remove('scrolled')
    }
  })
}

// if header is fixed
header.classList.contains('fixed') && checkPos()
