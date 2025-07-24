console.log("registro.js cargado");

function inicializarRegistro() {
    const formRegistro = document.getElementById('registrarse');
    console.log("¿Formulario encontrado?:", formRegistro);
    if (!formRegistro) return;

    formRegistro.addEventListener('submit', async (e) => {
        e.preventDefault();
        console.log("Formulario enviado");

        limpiarErrores(formRegistro);

        const nombre = formRegistro.querySelector('input[name="nombre"]').value.trim();
        const email = formRegistro.querySelector('input[name="email"]').value.trim();
        const password = formRegistro.querySelector('input[name="password"]').value.trim();

        let valido = true;

        if (nombre === "") {
            mostrarError(formRegistro.querySelector('input[name="nombre"]'), "El nombre es obligatorio.");
            valido = false;
        }
        if (!validarEmail(email)) {
            mostrarError(formRegistro.querySelector('input[name="email"]'), "Correo electrónico no válido.");
            valido = false;
        }
        if (password.length < 6) {
            mostrarError(formRegistro.querySelector('input[name="password"]'), "La contraseña debe tener al menos 6 caracteres.");
            valido = false;
        }

        if (!valido) return;

        try {
            const response = await fetch('PHP/registro.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ nombre, email, password })
            });
            const result = await response.json();

            if (result.success) {
                console.log('Registro exitoso. Iniciando sesión automáticamente...');

                const loginResponse = await fetch('PHP/login.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email, password })
                });

                const loginResult = await loginResponse.json();

                if (loginResult.success) {
                    location.reload(); //recarga y dispara verificar-sesion.php
                } else {
                    alert('Registro correcto, pero error al iniciar sesión.');
                }
            } else {
                alert(result.message);
            }
        } catch (error) {
            console.error("Error en el registro:", error);
        }
    });
}

function validarEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function mostrarError(input, mensaje) {
    input.classList.add('error');
    const errorSpan = input.parentElement.querySelector('.error-msg');
    if (errorSpan) errorSpan.textContent = mensaje;
}

function limpiarErrores(formulario) {
    const inputs = formulario.querySelectorAll('input');
    inputs.forEach(input => input.classList.remove('error'));

    const errores = formulario.querySelectorAll('.error-msg');
    errores.forEach(span => span.textContent = '');
}
