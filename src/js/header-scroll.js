let lastScrollTop = 0; // Store the last scroll position

window.addEventListener('scroll', function() {
  const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  const bodyElement = document.body; // Or you can target a specific element

  if (currentScroll === 0) {
    bodyElement.classList.remove('small'); // Remove 'small' when at the top
  } else if (currentScroll > lastScrollTop) {
    bodyElement.classList.add('small'); // Add 'small' when scrolling down
  } else {
    bodyElement.classList.remove('small'); // Remove 'small' when scrolling up
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Update the last scroll position
});

