const menusDesplegables = document.querySelectorAll('.menu-desplegable');
const menuEstatico = document.querySelectorAll('.menu-estatico');
const barraLateral = document.getElementById('barra-lateral');
const barraLateralBtn = document.getElementById('barra-lateral-btn');
const menuBtn = document.getElementById('menu-btn');

barraLateralBtn.addEventListener('click', () => {
    document.body.classList.toggle('barra-lateral-oculto');
});

menuBtn.addEventListener('click', () => {
    barraLateral.classList.toggle('minimizar');
    document.body.classList.toggle('barra-minimizada');
    console.log("Barra lateral minimizada:", barraLateral.classList.contains('minimizar'));
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

function verificarTamano() {
    barraLateral.classList.remove('minimizar');
}

document.querySelector('.login-btn').addEventListener('click', function () {
    window.location.href = 'login.html';
});

verificarTamano();
window.addEventListener('resize', verificarTamano);