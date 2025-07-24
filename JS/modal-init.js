function inicializarLoginModal() {
    const modal = document.getElementById('modal-login');
    if (!modal) return;

    const btnInicioSesion = modal.querySelector('#btn-inicio-sesion');
    const btnRegistro = modal.querySelector('#btn-registro');
    const formularios = modal.querySelector('#formularios');
    const barraLateral = modal.querySelector('#barra-lateral');
    const iniciarSesion = modal.querySelector('#iniciar-sesion');
    const registrarse = modal.querySelector('#registrarse');
    const iniciarSesionLink = modal.querySelector('#iniciar-sesion-link');
    const registrarLink = modal.querySelector('#registrar-link');
    const container = modal.querySelector('#container');

    if (!btnInicioSesion || !btnRegistro || !formularios || !barraLateral || !iniciarSesion || !registrarse) return;

    iniciarSesionLink?.addEventListener('click', cambiarInicioSesion);
    registrarLink?.addEventListener('click', cambiarRegistro);
    btnInicioSesion?.addEventListener('click', cambiarInicioSesion);
    btnRegistro?.addEventListener('click', cambiarRegistro);

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
    
    window.cambiarInicioSesion = cambiarInicioSesion;
    window.cambiarRegistro = cambiarRegistro;
}
inicializarLoginModal();

