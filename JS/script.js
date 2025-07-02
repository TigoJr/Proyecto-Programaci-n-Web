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

            // Insertar contenido dentro de un contenedor con clase .login-modal
            modal.querySelector('.modal-contenido').insertAdjacentHTML('beforeend', `
                    <div class="login-modal">
                        ${html}
                    </div>
                `);

            // Cargar CSS si no está
            if (!document.querySelector('link[href="CSS/login-modal.css"]')) {
                const css = document.createElement('link');
                css.rel = 'stylesheet';
                css.href = 'CSS/login-modal.css';
                document.head.appendChild(css);
            }

            // Cargar JS y ejecutar inicialización
            const script = document.createElement('script');
            script.src = 'JS/login-modal.js';
            script.onload = () => inicializarLoginModal();
            document.body.appendChild(script);
        } catch (error) {
            console.error('Error al cargar login-modal:', error);
        }
    }

    modal.classList.remove('oculto');
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
window.addEventListener('resize', verificarTamano);