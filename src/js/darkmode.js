document.addEventListener('DOMContentLoaded', function () {
  const body = document.body;
  const savedPreference = localStorage.getItem('darkMode');
  const button = document.getElementById('darkModeToggle');

  if (savedPreference) {
    // Use saved preference
    if (savedPreference === 'enabled') {
      body.classList.add('dark-mode');
      button.classList.toggle('dark-mode')
    }
  } else {
    // Use system preference
    const userPrefersDark = window.matchMedia(
      '(prefers-color-scheme: dark)'
    ).matches;
    if (userPrefersDark) {
      body.classList.add('dark-mode');
    }
  }


  if(button){
      // Save preference when toggled
      button.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        const mode = body.classList.contains('dark-mode') ? 'enabled' : 'disabled';
        localStorage.setItem('darkMode', mode);
        button.classList.toggle('dark-mode')
      });
  }
});
