document.addEventListener("DOMContentLoaded", function () {
    const buscador = document.getElementById("buscador-popular");
    const resultado = document.getElementById("resultado-busqueda");
    const secciones = document.querySelectorAll("section[class^='busquedas-']");
    const destacados = document.querySelectorAll(".busquedas-populares .elemento.busqueda span");

    buscador.addEventListener("input", function () {
        const texto = buscador.value.toLowerCase().trim();
        resultado.innerHTML = "";

        if (!texto) {
            secciones.forEach(sec => sec.style.display = "block");
            return;
        }

        secciones.forEach(sec => sec.style.display = "none");
        let clasesCoincidentes = new Set();

        destacados.forEach(destacado => {
            const nombre = destacado.textContent.toLowerCase();
            if (nombre.includes(texto)) {
                clasesCoincidentes.add(".busquedas-" + nombre);
            }
        });

        secciones.forEach(sec => {
            const clase = Array.from(sec.classList).find(cl => cl.startsWith("busquedas-"));
            if (clase && clase.includes(texto)) {
                clasesCoincidentes.add("." + clase);
            }
        });

        if (clasesCoincidentes.size > 0) {
            clasesCoincidentes.forEach(selector => {
                const sec = document.querySelector(selector);
                if (sec) sec.style.display = "block";
            });
        } else {
            const mensaje = document.createElement("p");
            mensaje.textContent = "No se encontraron resultados para '" + texto + "'.";
            mensaje.id = "mensaje-error";
            resultado.appendChild(mensaje);
            setTimeout(() => {
                const mensajeExistente = document.getElementById("mensaje-error");
                if (mensajeExistente) {
                    mensajeExistente.remove();
                }
            }, 3000);
        }
    });

    document.querySelectorAll(".busquedas-populares .elemento.busqueda span").forEach(destacado => {
        destacado.parentElement.addEventListener("click", function (e) {
            e.preventDefault();
            const texto = destacado.textContent.toLowerCase();
            const selector = ".busquedas-" + texto;
            const seccion = document.querySelector(selector);
            resultado.innerHTML = "";
            if (seccion) {
                const clon = seccion.cloneNode(true);
                clon.style.display = "block";
                resultado.appendChild(clon);
                secciones.forEach(sec => sec.style.display = "none");
            }
        });
    });

    document.querySelectorAll(".elemento-receta .elemento").forEach(elemento => {
        elemento.addEventListener("click", function (e) {
            e.preventDefault();
            const nombre = elemento.querySelector("span").textContent;
            const imagen = elemento.style.backgroundImage.replace(/url\("?|"?\)/g, "");
            const autor = elemento.dataset.autor || "Autor desconocido";
            const ingredientes = JSON.parse(elemento.dataset.ingredientes || '[]');
            const pasos = JSON.parse(elemento.dataset.pasos || '[]');

            resultado.innerHTML = "";

            const receta = document.createElement("div");
            receta.classList.add("receta-detalle");

            receta.innerHTML = `
        <link rel='stylesheet' type='text/css' media='screen' href='/CSS/recetas.css'> 
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
            secciones.forEach(sec => sec.style.display = "none");
        });
    });
});