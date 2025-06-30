
document.addEventListener("DOMContentLoaded", function () {
    const buscador = document.getElementById("buscador-popular");
    const boton = document.querySelector(".boton-buscar");
    const resultado = document.getElementById("resultado-busqueda");

    // Guardar todas las secciones originales para restaurarlas después
    const seccionesOriginales = document.querySelectorAll("section[class^='busquedas-']");

    boton.addEventListener("click", function () {
        const texto = buscador.value.toLowerCase().trim();
        resultado.innerHTML = ""; // Limpiar resultados anteriores

        // Ocultar todas las secciones originales momentáneamente
        seccionesOriginales.forEach((sec) => {
            sec.style.display = "none";
        });

        if (!texto) return;

        const claseBuscada = ".busquedas-" + texto;
        const seccion = document.querySelector(claseBuscada);

        if (seccion) {
            const clon = seccion.cloneNode(true);
            clon.style.display = "block";
            resultado.appendChild(clon);
        } else {
            const mensaje = document.createElement("p");
            mensaje.textContent = "No se encontraron resultados para '" + texto + "'.";
            resultado.appendChild(mensaje);
        }
    });

    // Restaurar visibilidad al borrar el input
    buscador.addEventListener("input", function () {
        const texto = buscador.value.trim();
        if (!texto) {
            // Mostrar todas las secciones originales si se limpia el campo
            seccionesOriginales.forEach((sec) => {
                sec.style.display = "block";
            });
            resultado.innerHTML = ""; // Limpiar los resultados
        }
    });
});
