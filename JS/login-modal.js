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

    // Verifica que los elementos existen antes de continuar
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
}

// VALIDACIÓN DE FORMULARIOS
function inicializarValidacionLogin() {
    const formLogin = document.getElementById('iniciar-sesion');
    const formRegistro = document.getElementById('registrarse');

    if (!formLogin || !formRegistro) return;

    formLogin.addEventListener('submit', (e) => {
        e.preventDefault();
        limpiarErrores(formLogin);

        const emailInput = formLogin.querySelector('input[name="email"]');
        const passInput = formLogin.querySelector('input[name="password"]');

        let valido = true;

        if (!validarEmail(emailInput.value.trim())) {
            mostrarError(emailInput, "Correo electrónico no válido.");
            valido = false;
        }

        if (passInput.value.trim().length < 6) {
            mostrarError(passInput, "La contraseña debe tener al menos 6 caracteres.");
            valido = false;
        }

        if (valido) {
            const email = emailInput.value;
            const nombre = email.split('@')[0];
            // Actualizar vista del menú del index
            const loginBtn = document.getElementById('login-btn');
            const menu = document.querySelector('.menu-footer ul');
            const usuarioBox = document.querySelector('.usuario');
            const usuarioNombre = usuarioBox?.querySelector('.nombre');
            const usuarioEmail = usuarioBox?.querySelector('.email');

            if (loginBtn) loginBtn.style.display = 'none';
            if (menu) menu.style.display = 'block';
            if (usuarioBox) usuarioBox.style.display = 'flex';

            if (usuarioNombre) usuarioNombre.textContent = nombre;
            if (usuarioEmail) usuarioEmail.textContent = email;

            localStorage.setItem('usuario', JSON.stringify({
                nombre: nombre,
                email: email
            }));

            actualizarVistaUsuario(nombre, email);
            // Cerrar modal
            const modal = document.getElementById('modal-login');
            if (modal) modal.classList.add('oculto');
        }
    });

    formRegistro.addEventListener('submit', (e) => {
        e.preventDefault();
        limpiarErrores(formRegistro);

        const nombreInput = formRegistro.querySelector('input[name="nombre"]');
        const emailInput = formRegistro.querySelector('input[name="email"]');
        const passInput = formRegistro.querySelector('input[name="password"]');

        let valido = true;

        if (nombreInput.value.trim() === "") {
            mostrarError(nombreInput, "El nombre es obligatorio.");
            valido = false;
        }

        if (!validarEmail(emailInput.value.trim())) {
            mostrarError(emailInput, "Correo electrónico no válido.");
            valido = false;
        }

        if (passInput.value.trim().length < 6) {
            mostrarError(passInput, "La contraseña debe tener al menos 6 caracteres.");
            valido = false;
        }

        if (valido) {
            const email = emailInput.value;
            const nombre = nombreInput.value; // Nombre "simulado" desde el email

            const loginBtn = document.getElementById('login-btn');
            const menu = document.querySelector('.menu-footer ul');
            const usuarioBox = document.querySelector('.usuario');
            const usuarioNombre = usuarioBox?.querySelector('.nombre');
            const usuarioEmail = usuarioBox?.querySelector('.email');

            if (loginBtn) loginBtn.style.display = 'none';
            if (menu) menu.style.display = 'block';
            if (usuarioBox) usuarioBox.style.display = 'flex';

            if (usuarioNombre) usuarioNombre.textContent = nombre;
            if (usuarioEmail) usuarioEmail.textContent = email;

            localStorage.setItem('usuario', JSON.stringify({
                nombre: nombre,
                email: email
            }));

            actualizarVistaUsuario(nombre, email);

            const modal = document.getElementById('modal-login');
            if (modal) modal.classList.add('oculto');
        }

    });

    function validarEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function mostrarError(input, mensaje) {
        input.classList.add('error');
        const errorSpan = input.parentElement.querySelector('.error-msg');
        if (errorSpan) {
            errorSpan.textContent = mensaje;
        }
    }

    function limpiarErrores(formulario) {
        const inputs = formulario.querySelectorAll('input');
        inputs.forEach(input => input.classList.remove('error'));

        const errores = formulario.querySelectorAll('.error-msg');
        errores.forEach(span => span.textContent = '');
    }
}