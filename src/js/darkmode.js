document.addEventListener('DOMContentLoaded', function () {
  const body = document.body;
  const savedPreference = localStorage.getItem('darkMode');

  if (savedPreference) {
    // Use saved preference
    if (savedPreference === 'enabled') {
      body.classList.add('dark-mode');
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

  // Save preference when toggled
  document.getElementById('darkModeToggle').addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    const mode = body.classList.contains('dark-mode') ? 'enabled' : 'disabled';
    localStorage.setItem('darkMode', mode);
  });
});
