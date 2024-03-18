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
