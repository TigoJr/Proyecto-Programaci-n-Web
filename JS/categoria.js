document.addEventListener("DOMContentLoaded", () => {
    const enlaces = document.querySelectorAll(".sub-menu-link");
    const resultado = document.getElementById("resultado-busqueda");

    function obtenerImagenDeFondo(style) {
        const match = style.match(/url\(["']?(.*?)["']?\)/);
        return match ? match[1] : "";
    }

    function renderizarReceta(nombre, imagen, autor, ingredientes, pasos) {
        const receta = document.createElement("div");
        receta.classList.add("receta-detalle");

        receta.innerHTML = `
            <link rel="stylesheet" href="CSS/recetas.css">
            <div class="receta-header">
                <img src="${imagen}" alt="${nombre}">
                <div class="receta-info">
                    <h2>${nombre}</h2>
                    <p class="autor"><strong>${autor}</strong></p>
                </div>
            </div>
            <div class="receta-contenido">
                <div class="ingredientes">
                    <h3>Ingredientes</h3>
                    <ul>${ingredientes.map(i => `<li>${i}</li>`).join("")}</ul>
                </div>
                <div class="paso-a-paso">
                    <h3>Paso a paso</h3>
                    <ol>${pasos.map(p => `<li>${p}</li>`).join("")}</ol>
                </div>
            </div>
        `;

        resultado.appendChild(receta);
    }

    enlaces.forEach(enlace => {
        enlace.addEventListener("click", (e) => {
            e.preventDefault();
            const categoriaTexto = enlace.textContent.trim().toLowerCase();
            const claseCategoria = `busquedas-${categoriaTexto}`;
            resultado.innerHTML = "";

            const secciones = document.querySelectorAll(`section.${claseCategoria}`);
            let encontrados = 0;

            secciones.forEach(seccion => {
                const elementos = seccion.querySelectorAll(".elemento");
                elementos.forEach(elemento => {
                    const nombre = elemento.querySelector("span")?.textContent || "Sin nombre";
                    const imagen = obtenerImagenDeFondo(elemento.style.backgroundImage);
                    const autor = elemento.getAttribute("data-autor") || "Autor desconocido";
                    const ingredientes = JSON.parse(elemento.getAttribute("data-ingredientes") || "[]");
                    const pasos = JSON.parse(elemento.getAttribute("data-pasos") || "[]");

                    renderizarReceta(nombre, imagen, autor, ingredientes, pasos);
                    encontrados++;
                });
            });

            // Ocultar todas las secciones de búsqueda originales
            document.querySelectorAll('section[class^="busquedas-"]').forEach(seccion => {
                seccion.style.display = "none";
            });

            if (encontrados === 0) {
                const mensaje = document.createElement("p");
                mensaje.textContent = `No se encontraron recetas para la categoría '${categoriaTexto}'.`;
                mensaje.classList.add("mensaje-vacio");
                resultado.appendChild(mensaje);
            }

            resultado.scrollIntoView({ behavior: "smooth" });
        });
    });
});