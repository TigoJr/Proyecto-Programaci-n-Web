const btnInicioSesion = document.getElementById('btn-inicio-sesion');
const btnRegistro = document.getElementById('btn-registro');
const formularios = document.getElementById('formularios');
const barraLateral = document.getElementById('barra-lateral');
const iniciarSesion = document.getElementById('iniciar-sesion');
const registrarse = document.getElementById('registrarse');
const iniciarSesionLink = document.getElementById('iniciar-sesion-link');
const registrarLink = document.getElementById('registrar-link');
const container = document.getElementById('container');

iniciarSesionLink.addEventListener('click', () => {
    cambiarInicioSesion();
});

registrarLink.addEventListener('click', () => {
    cambiarRegistro();
});

btnInicioSesion.addEventListener('click', () => {
    cambiarInicioSesion();
});

btnRegistro.addEventListener('click', () => {
    cambiarRegistro();
});

function cambiarInicioSesion() {
    formularios.classList.remove('activo');
    barraLateral.classList.remove('activo');
    container.style.animation = 'none';
    container.style.animation = 'rebotar-arriba 1s ease';
    transicion(iniciarSesion);
}

function cambiarRegistro() {
    formularios.classList.add('activo');
    barraLateral.classList.add('activo');
    container.style.animation = 'none';
    container.style.animation = 'rebotar-abajo 1s ease';
    transicion(registrarse);
}

function transicion(padre) {
    const hijos = padre.children;
    
    Array.from(hijos).forEach((hijo) => {
        hijo.style.animation = 'none';
        hijo.style.opacity = '0';
        
    });

    setTimeout(() => {
        Array.from(hijos).forEach((hijo, index) => {
            hijo.style.animation = 'desplazar 0.4s ease forwards';
            let delay = (index * 0.05) + 's';
            hijo.style.animationDelay = delay;
        });
    }, 300);
}