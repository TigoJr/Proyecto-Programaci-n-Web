const menusDesplegables = document.querySelectorAll('.menu-desplegable');
const menuEstatico = document.querySelectorAll('.menu-estatico');
const barraLateral = document.getElementById('barra-lateral');
const barraLateralBtn = document.getElementById('barra-lateral-btn');
const menuBtn = document.getElementById('menu-btn');
const loginBtn = document.getElementById('login-btn');
const modal = document.getElementById('modal-login');

barraLateralBtn.addEventListener('click', () => {
    document.body.classList.toggle('barra-lateral-oculto');
});

menuBtn.addEventListener('click', () => {
    barraLateral.classList.toggle('minimizar');
    document.body.classList.toggle('barra-minimizada');

    actualizarBotonLogin();
});

menusDesplegables.forEach((menu) => {
    menu.addEventListener('click', () => {
        const subMenu = menu.querySelector('.sub-menu');
        const activo = menu.classList.toggle('sub-menu-toggle');

        if (subMenu) {
            if (activo) {
                subMenu.style.height = `${subMenu.scrollHeight + 6}px`;
                subMenu.style.padding = '0.2rem 0';
            } else {
                subMenu.style.height = '0';
                subMenu.style.padding = '0';
            }
        }

        menusDesplegables.forEach((elemento => {
            if (elemento !== menu) {
                const otroSubMenu = elemento.querySelector('.sub-menu');
                if (otroSubMenu) {
                    elemento.classList.remove('sub-menu-toggle');
                    otroSubMenu.style.height = '0';
                    otroSubMenu.style.padding = '0';
                }
            }
        }))
    });
});

menuEstatico.forEach((menu) => {
    menu.addEventListener('mouseenter', () => {
        menusDesplegables.forEach((elemento => {
            if (!barraLateral.classList.contains('minimizar')) return;

            const otroSubMenu = elemento.querySelector('.sub-menu');
            if (otroSubMenu) {
                elemento.classList.remove('sub-menu-toggle');
                otroSubMenu.style.height = '0';
                otroSubMenu.style.padding = '0';
            }
        }))
    })
});

function actualizarBotonLogin() {
    const minimizada = barraLateral.classList.contains('minimizar');

    if (minimizada) {
        loginBtn.classList.add('mini');
        loginBtn.innerHTML = `<i class='bx bx-user'></i>`;
    } else {
        loginBtn.classList.remove('mini');
        loginBtn.textContent = 'INICIAR SESIÓN';
    }
}

function verificarTamano() {
    barraLateral.classList.remove('minimizar');
}

loginBtn.addEventListener('click', async () => {
    if (!modal.querySelector('.login-modal')) {
        try {
            const response = await fetch('login-contenido.html');
            const html = await response.text();

            modal.querySelector('.modal-contenido').insertAdjacentHTML('beforeend', `
                <div class="login-modal">
                    ${html}
                </div>
            `);

            if (!document.querySelector('link[href="CSS/login-modal.css"]')) {
                const css = document.createElement('link');
                css.rel = 'stylesheet';
                css.href = 'CSS/login-modal.css';
                document.head.appendChild(css);
            }

            const modalInitScript = document.createElement('script');
            modalInitScript.src = 'JS/modal-init.js';
            document.body.appendChild(modalInitScript);

            const registroScript = document.createElement('script');
            registroScript.src = 'JS/registro.js';
            registroScript.onload = () => {
                inicializarRegistro();
            };
            document.body.appendChild(registroScript);

            const loginScript = document.createElement('script');
            loginScript.src = 'JS/login.js';
            loginScript.onload = () => {
                console.log("login.js cargado dinámicamente");
                if (typeof inicializarLogin === 'function') {
                    inicializarLogin();
                } else {
                    console.warn("inicializarLogin no definida");
                }
            };
            document.body.appendChild(loginScript);


        } catch (error) {
            console.error('Error al cargar login-modal:', error);
        }
    }

    modal.classList.remove('oculto');
});

document.addEventListener('click', (e) => {
    if (e.target.id === 'logout-btn') {
        fetch('PHP/logout.php')
            .then(() => location.reload())
            .catch(error => console.error('Error al cerrar sesión:', error));
    }
});

document.getElementById('cerrar-modal').addEventListener('click', () => {
    modal.classList.add('oculto');
});

window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.classList.add('oculto');
    }
});

actualizarBotonLogin();
verificarTamano();

fetch('PHP/verificar-sesion.php')
    .then(res => res.json())
    .then(data => {
        if (data.logueado) {
            const { nombre, email } = data.usuario;
            mostrarUsuario(nombre, email);
        }
    })
    .catch(err => console.error('Error al verificar sesión:', err));

function mostrarUsuario(nombre, email) {
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
}

window.addEventListener('resize', verificarTamano);