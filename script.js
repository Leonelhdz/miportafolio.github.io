// Resaltar proyecto al pasar el mouse
const proyectos = document.querySelectorAll('.proyecto');

proyectos.forEach(proyecto => {
    proyecto.addEventListener('mouseenter', () => {
        proyecto.style.border = '2px solid #333';
    });

    proyecto.addEventListener('mouseleave', () => {
        proyecto.style.border = '1px solid #ccc';
    });
});

// Agrega una clase al hacer scroll para activar la transición
window.addEventListener('scroll', () => {
    const nav = document.querySelector('.sticky-nav');
    if (window.scrollY > 50) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  });
