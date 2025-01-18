let lastScrollTop = 0; // Variable to track last scroll position
const menuElement = document.querySelector('.right-menu-wrapper'); // Menu element to shrink/grow
const menuExpand = document.querySelector('#menu-expand');

window.addEventListener('scroll', function() {
  const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  const bodyElement = document.body; // Or you can target a specific element
  
  if( menuExpand.classList.contains('active') ) return;

  if (currentScroll === 0) {
    // When at the top, remove 'small' and animate menu back to full width
    bodyElement.classList.remove('small');
    gsap.to(menuElement, { width: '902px', duration: 0.5 });
  } else if (currentScroll > lastScrollTop) {
    // When scrolling down, add 'small' and shrink the menu
    bodyElement.classList.add('small');
    gsap.to(menuElement, { width: '68px', duration: 0.5 });
  } else {
    // When scrolling up, remove 'small' and animate menu back to full width
    bodyElement.classList.remove('small');
    gsap.to(menuElement, { width: '902px', duration: 0.5 });
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Update the last scroll position
});

menuExpand.addEventListener('click', function() {
  menuExpand.classList.toggle('active');

  if( menuExpand.classList.contains('active') ) {
    gsap.to(menuElement, { width: '902px', duration: 0.5 });
  } else {
    gsap.to(menuElement, { width: '68px', duration: 0.5 });
  }
})
