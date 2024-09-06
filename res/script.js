document.querySelectorAll('a.nav-link').forEach(link => {
  link.addEventListener('click', (event) => {
      event.preventDefault();
      document.startViewTransition(() => {
          window.location = event.target.href;
      });
  });
});