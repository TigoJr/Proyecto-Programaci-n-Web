console.log("login.js cargado");

function inicializarLogin() {
    const formLogin = document.getElementById('iniciar-sesion');
    console.log("¿Formulario login encontrado?:", formLogin);
    if (!formLogin) return;

    formLogin.addEventListener('submit', async (e) => {
        e.preventDefault();
        limpiarErrores(formLogin);

        const email = formLogin.querySelector('input[name="email"]').value.trim();
        const password = formLogin.querySelector('input[name="password"]').value.trim();

        let valido = true;

        if (!validarEmail(email)) {
            mostrarError(formLogin.querySelector('input[name="email"]'), "Correo electrónico no válido.");
            valido = false;
        }

        if (password.length < 6) {
            mostrarError(formLogin.querySelector('input[name="password"]'), "La contraseña debe tener al menos 6 caracteres.");
            valido = false;
        }

        if (!valido) return;

        try {
            const response = await fetch('PHP/login.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ email, password })
            });

            const result = await response.json();

            if (result.success) {
                console.log('Inicio de sesión exitoso. Recargando...');
                location.reload(); // Dispara verificar-sesion.php al cargar de nuevo
            } else {
                alert(result.message);
            }
        } catch (error) {
            console.error('Error al iniciar sesión:', error);
        }
    });
}

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
