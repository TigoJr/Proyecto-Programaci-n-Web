document.addEventListener("DOMContentLoaded", function () {
    const buscador = document.getElementById("buscador-popular");
    const resultado = document.getElementById("resultado-busqueda");
    const secciones = document.querySelectorAll("section[class^='busquedas-']");
    const destacados = document.querySelectorAll(".busquedas-populares .elemento.busqueda span");
    const enlaceRecetarios = document.getElementById("ver-recetarios");

    // Función para extraer URL del background-image
    function obtenerURLDeFondo(style) {
        const match = style.match(/url\(["']?(.*?)["']?\)/);
        return match ? match[1] : "";
    }

    // Función para renderizar receta
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
          <ul>
            ${ingredientes.map(i => `<li>${i}</li>`).join("")}
          </ul>
        </div>
        <div class="paso-a-paso">
          <h3>Paso a paso</h3>
          <ol>
            ${pasos.map(p => `<li>${p}</li>`).join("")}
          </ol>
        </div>
      </div>
    `;

        resultado.appendChild(receta);
    }

    // Búsqueda en tiempo real
    buscador.addEventListener("input", function () {
        const texto = buscador.value.toLowerCase().trim();
        resultado.innerHTML = "";

        if (!texto) {
            secciones.forEach(sec => sec.style.display = "block");
            return;
        }

        secciones.forEach(sec => sec.style.display = "none");

        let encontrado = false;

        document.querySelectorAll(".elemento-receta .elemento").forEach(elemento => {
            const nombre = elemento.querySelector("span").textContent.toLowerCase();
            const categoria = elemento.closest("section")?.className.toLowerCase() || "";

            if (nombre.includes(texto) || categoria.includes(texto)) {
                const imagen = obtenerURLDeFondo(elemento.style.backgroundImage);
                const autor = elemento.dataset.autor || "Autor desconocido";
                const ingredientes = JSON.parse(elemento.dataset.ingredientes || '[]');
                const pasos = JSON.parse(elemento.dataset.pasos || '[]');
                renderizarReceta(nombre, imagen, autor, ingredientes, pasos);
                encontrado = true;
            }
        });

        if (!encontrado) {
            const mensaje = document.createElement("p");
            mensaje.textContent = `No se encontraron resultados para '${texto}'.`;
            mensaje.id = "mensaje-error";
            resultado.appendChild(mensaje);
            setTimeout(() => {
                const mensajeExistente = document.getElementById("mensaje-error");
                if (mensajeExistente) mensajeExistente.remove();
            }, 3000);
        }
    });

    // Click en búsquedas populares
    destacados.forEach(destacado => {
        destacado.parentElement.addEventListener("click", function (e) {
            e.preventDefault();
            const texto = destacado.textContent.toLowerCase();
            resultado.innerHTML = "";

            document.querySelectorAll(".elemento-receta .elemento").forEach(elemento => {
                const nombre = elemento.querySelector("span").textContent.toLowerCase();
                const categoria = elemento.closest("section")?.className.toLowerCase() || "";

                if (nombre.includes(texto) || categoria.includes(texto)) {
                    const imagen = obtenerURLDeFondo(elemento.style.backgroundImage);
                    const autor = elemento.dataset.autor || "Autor desconocido";
                    const ingredientes = JSON.parse(elemento.dataset.ingredientes || '[]');
                    const pasos = JSON.parse(elemento.dataset.pasos || '[]');
                    renderizarReceta(nombre, imagen, autor, ingredientes, pasos);
                }
            });

            secciones.forEach(sec => sec.style.display = "none");
        });
    });

    // Click en cada receta individual
    document.querySelectorAll(".elemento-receta .elemento").forEach(elemento => {
        elemento.addEventListener("click", function (e) {
            e.preventDefault();
            const nombre = elemento.querySelector("span").textContent;
            const imagen = obtenerURLDeFondo(elemento.style.backgroundImage);
            const autor = elemento.dataset.autor || "Autor desconocido";
            const ingredientes = JSON.parse(elemento.dataset.ingredientes || '[]');
            const pasos = JSON.parse(elemento.dataset.pasos || '[]');

            resultado.innerHTML = "";
            renderizarReceta(nombre, imagen, autor, ingredientes, pasos);
            secciones.forEach(sec => sec.style.display = "none");
        });
    });

    // Mostrar todo al hacer clic en "Recetarios"
    if (enlaceRecetarios) {
        enlaceRecetarios.addEventListener("click", function (e) {
            e.preventDefault();
            resultado.innerHTML = "";

            document.querySelectorAll(".elemento-receta .elemento").forEach(elemento => {
                const nombre = elemento.querySelector("span").textContent;
                const imagen = obtenerURLDeFondo(elemento.style.backgroundImage);
                const autor = elemento.dataset.autor || "Autor desconocido";
                const ingredientes = JSON.parse(elemento.dataset.ingredientes || '[]');
                const pasos = JSON.parse(elemento.dataset.pasos || '[]');
                renderizarReceta(nombre, imagen, autor, ingredientes, pasos);
            });

            secciones.forEach(sec => sec.style.display = "none");
        });
    }
});
