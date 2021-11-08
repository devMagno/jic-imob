const clickEvents = ['click', 'touchstart']
const mobileButton = document.querySelector('.header__mobileButton')

function toggleMenu(event) {
  event.preventDefault()
  
  const header = document.querySelector('.header')
  header.classList.toggle('active')
  const isActive = header.classList.contains('active')
  if (isActive) {
    document.body.style = 'overflow: hidden;'
  } else {
    document.body.style = 'overflow: auto;'
  }
}

clickEvents.forEach((userEvent) => {
  mobileButton.addEventListener(userEvent, toggleMenu)
})
