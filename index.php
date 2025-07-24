<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recipepad - Recetas</title>
        <link rel="icon" href="Imagenes/logo_receta-icono.png" type="image/png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css'
            rel='stylesheet'>
        <link rel="stylesheet" href="CSS/barra.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
        <div class="menu-btn barra-lateral-btn" id="barra-lateral-btn">
            <i class='bxr  bx-menu'></i>
            <i class='bxr  bx-x'></i>
        </div>
        <aside>
            <div class="barra-lateral" id="barra-lateral">
                <div class="menu-header">
                    <div class="menu-btn" id="menu-btn">
                        <i class="bx bx-chevron-left"></i>
                    </div>
                    <div class="logo">
                        <img src="Imagenes/logo_receta.jpg" alt="logo">
                        <span>Repicepad</span>
                    </div>
                </div>
                <div class="menu-contenedor">
                    <div class="buscar">
                        <i id="botonBuscar" class="bx bx-search"></i>
                        <input id="buscador-popular" type="search"
                            placeholder="Buscar">
                    </div>
                    <ul class="menu">
                        <li class="menu-elemento menu-estatico active">
                            <a href="index.php" class="menu-link">
                                <i class='bx bx-home-alt-2'></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li class="menu-elemento menu-estatico">
                            <a href="#" class="menu-link" id="ver-recetarios">
                                <i class='bx bx-book-bookmark'></i>
                                <span>Recetas</span>
                            </a>
                        </li>
                        <li class="menu-elemento menu-desplegable">
                            <a href="#" class="menu-link">
                                <i class='bxr  bx-categories'></i>
                                <span>Categorías</span>
                                <i class='bxr  bx-chevron-down'></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#" class="sub-menu-link"
                                        data-categoria="pollo">Pollo</a></li>
                                <li><a href="#" class="sub-menu-link"
                                        data-categoria="carne">Carne</a></li>
                                <li><a href="#" class="sub-menu-link"
                                        data-categoria="papa">Papa</a></li>
                                <li><a href="#" class="sub-menu-link"
                                        data-categoria="potajes y cocidos">Potajes
                                        y cocidos</a></li>
                                <li><a href="#" class="sub-menu-link"
                                        data-categoria="salsas">Salsas</a></li>
                            </ul>

                        </li>
                        <li class="menu-elemento menu-estatico">
                            <a href="#" class="menu-link">
                                <i class='bxr  bx-food-menu'></i>
                                <span>Menús</span>
                            </a>
                        </li>
                        <li class="menu-elemento menu-desplegable">
                            <a href="#" class="menu-link">
                                <i class='bx bx-book-heart'></i>
                                <span>Colección</span>
                                <i class='bxr  bx-chevron-down'></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#"
                                        class="sub-menu-link">Todo</a></li>
                                <li><a href="#"
                                        class="sub-menu-link">Guardadas</a></li>
                                <li><a href="#"
                                        class="sub-menu-link">Publicadas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu-footer">
                    <div class="menu-login">
                        <div class="login">
                            <button id="login-btn" class="login-btn">INICIAR
                                SESIÓN</button>
                        </div>
                    </div>
                    <ul class="menu">
                        <li class="menu-elemento menu-estatico">
                            <a href="#" class="menu-link">
                                <i class='bx bx-bell'></i>
                                <span>Notificaciones</span>
                            </a>
                        </li>
                        <li class="menu-elemento menu-estatico">
                            <a href="#" class="menu-link">
                                <i class='bx bx-cog'></i>
                                <span>Ajustes</span>
                            </a>
                        </li>
                    </ul>
                    <div class="usuario">
                        <div class="usuario-img">
                            <img src="Imagenes/perfil.jpg" alt="usuario">
                        </div>
                        <div class="usuario-datos">
                            <span class="nombre">usuario</span>
                            <span class="email">ejemplo@gmail.com</span>
                        </div>
                        <div class="usuario-icon">
                            <i id="logout-btn"
                                class='bxr bx-arrow-out-right-square-half'></i>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <main class="contenido">
            <div class="contenido-inicio">
                <header class="encabezado">
                    <div class="logo-centro">
                        <img src="Imagenes/logo_receta.jpg" alt>
                        <span> Recipepad</span>
                    </div>
                </header>

                <script src="JS/buscador.js"></script>
                <section id="resultado-busqueda">
                    <!-- Aquí se insertará la tarjeta encontrada -->

                </section>

                <section class="busquedas-populares">
                    <h2>Búsquedas populares</h2>
                    <div class="rejilla">
                        <a href="#" class="elemento busqueda"
                            style="background-image: url('https://www.paulinacocina.net/wp-content/uploads/2021/11/Pollo-asado-con-verduras.jpg');">
                            <span>Pollo</span>
                        </a>
                        <a href="#" class="elemento busqueda"
                            style="background-image: url('https://i.blogs.es/14390c/copia-de-portada-79-/1366_2000.jpg');">
                            <span>Papa</span>
                        </a>
                        <a href="#" class="elemento busqueda"
                            style="background-image: url('https://images.unsplash.com/photo-1546964124-0cce460f38ef?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEwfHx8ZW58MHx8fHx8');">
                            <span>Carne</span>
                        </a>
                        <a href="#" class="elemento busqueda"
                            style="background-image: url('https://st.depositphotos.com/1030624/1430/i/450/depositphotos_14300677-stock-photo-shrimps.jpg');">
                            <span>Camarones</span>
                        </a>
                        <a href="#" class="elemento busqueda"
                            style="background-image: url('https://elrinconcolombiano.com/wp-content/uploads/2024/05/Yuca-frita-receta-colombiana-1068x588.jpg');">
                            <spawn>Yuca</spawn>
                        </a>
                        <a href="#" class="elemento busqueda"
                            style="background-image: url('https://treurer.com/wp-content/uploads/Espinacas-catalana.jpg');">
                            <span>Espinaca</span>
                        </a>
                        <a href="#" class="elemento busqueda"
                            style="background-image: url('https://comedera.com/wp-content/uploads/sites/9/2022/03/Coliflor-gratinada-shutterstock_1023314734.jpg?w=4096');">
                            <span>Coliflor</span>
                        </a>
                        <a href="#" class="elemento busqueda"
                            style="background-image: url('https://www.cocotine.com/wp-content/uploads/2019/07/tortillas-oignons-500g-ronde-ambiance.jpg');">
                            <span>Tortilla</span>
                        </a>
                    </div>
                </section>

                <section class="busquedas-pollo">
                    <h3>Pollo</h3>
                    <div class="rejilla">
                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Carmen Ruiz"
                                data-ingredientes='["2 pechugas de pollo (500g)", "1 cebolla mediana", "2 dientes de ajo", "300g tomate triturado", "2 cdas aceite de oliva", "1 cdita orégano", "Sal y pimienta al gusto"]'
                                data-pasos='["Cortar el pollo en tiras.", "Sofreír cebolla y ajo por 3 minutos.", "Agregar el pollo y dorar 7 minutos.", "Añadir tomate y orégano, cocinar 15 minutos a fuego medio."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/8ded7f2d37243bf9/1280x1280sq90/photo.webp');">
                                <span>Pollo en salsa roja</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Carmen Ruiz</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Luis Cordero"
                                data-ingredientes='["4 muslos de pollo", "1 limón", "1 cda orégano seco", "1/2 cdita ajo en polvo", "Sal y pimienta", "1 cda aceite vegetal"]'
                                data-pasos='["Mezclar el jugo de limón con orégano y especias.", "Marinar el pollo 30 minutos.", "Cocinar a fuego medio por 20-25 minutos hasta dorar."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/7db20e446970b0f1/1280x1280sq90/photo.webp');">
                                <span>Pollo al orégano</span>
                                <button class="material-icons">bookmark</button>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Luis Cordero</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Chef Javier Santamaría"
                                data-ingredientes='["2 supremas de pechuga de pollo", "100g queso brie", "4 lonjas de jamón serrano", "1 cda mantequilla", "1 copa vino blanco seco", "1/2 taza crema de leche", "Pimienta negra", "Sal", "Romero fresco"]'
                                data-pasos='["Abrir las pechugas como libro y salpimentar.", "Rellenar con queso brie y una lonja de jamón serrano, enrollar y asegurar con palillos.", "Sellar los rollos en mantequilla caliente.", "Agregar el vino blanco y dejar reducir.", "Añadir la crema de leche y el romero, cocinar a fuego bajo por 12 minutos.", "Servir en rodajas con salsa por encima."]'
                                style="background-image: url('https://i.pinimg.com/736x/86/fb/e7/86fbe7d9446cac09a61d41a81485d0fe.jpg');">
                                <span>Pollo Relleno de Queso Brie y Jamón
                                    Serrano</span>
                                <button class="material-icons">bookmark</button>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Chef Javier
                                        Santamaría</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento" data-autor="Summi CB"
                                data-ingredientes='["500g pollo trozado", "3 tomates maduros", "1 cebolla blanca", "1 hoja de laurel", "1 cdita comino", "2 cdas aceite", "Sal al gusto"]'
                                data-pasos='["Sofreír cebolla en aceite 3 minutos.", "Añadir tomate y laurel y cocinar 10 minutos.", "Agregar pollo, comino y sal. Cocinar 20 minutos."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/d5803d3fb0ad98e1/1280x1280sq90/photo.webp');">
                                <span>Pollo entomatado</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Summi CB</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Romina Gómez"
                                data-ingredientes='["4 presas de pollo", "1 cebolla roja", "2 dientes de ajo", "2 cdas ají amarillo molido", "Sal (1 cdita)", "Comino (1/2 cdita)", "Aceite vegetal"]'
                                data-pasos='["Adobar el pollo con sal y comino.", "Freír cebolla, ajo y ají por 4 minutos.", "Agregar el pollo y cocinar tapado por 25 minutos."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/30c3237459a8ff22/1280x1280sq90/photo.webp');">
                                <span>Pollo a la norteña</span>
                               
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Romina Gómez</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Luis Rodríguez"
                                data-ingredientes='["1 pechuga de pollo", "2 tazas arroz", "1 taza de zanahoria picada", "1/2 taza de arvejas", "2 dientes de ajo", "Sillao", "Aceite"]'
                                data-pasos='["Cocinar el arroz y reservar.", "Saltear ajo y verduras, luego añadir pollo en tiras.", "Agregar arroz y sillao, mezclar todo y freír por 5 minutos."]'
                                style="background-image: url('https://www.eatperu.com/wp-content/uploads/2019/09/Chaufa-de-Arroz-Peruvian-Rice.jpeg');">
                                <span>Arroz chaufa de pollo</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Luis Rodríguez</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Claudia Paredes"
                                data-ingredientes='["6 presas de pollo", "3 papas amarillas", "3 cdas ají mirasol molido", "1 cebolla", "1 taza caldo de pollo", "Maní molido", "Sal y pimienta"]'
                                data-pasos='["Freír cebolla y ají mirasol.", "Agregar el pollo, maní y caldo.", "Cocinar 30 minutos y añadir papas sancochadas."]'
                                style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6E31eZRVMXHFzMZ8B4vAKMsUAuP0xjVlLCA&s');">
                                <span>Picante de pollo</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Claudia Paredes</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Javier Torres"
                                data-ingredientes='["1 pollo trozado", "1 taza de cerveza negra", "2 cebollas", "1 tomate", "2 cdas ají panca", "Ajo molido", "Sal y orégano"]'
                                data-pasos='["Dorar el pollo.", "Hacer aderezo con cebolla, tomate, ají y ajo.", "Añadir pollo y cerveza, cocinar 30 minutos."]'
                                style="background-image: url('https://superpilopi.com/wp-content/uploads/2020/06/emplatado-pollo-a-la-cerveza.jpg');">
                                <span>Pollo a la cerveza</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Javier Torres</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Daniela Silva"
                                data-ingredientes='["2 pechugas de pollo", "1 taza crema de leche", "1 cda mostaza", "1 cda mantequilla", "Sal y pimienta", "Perejil picado"]'
                                data-pasos='["Sellar el pollo con mantequilla.", "Agregar crema y mostaza, cocinar 10 minutos.", "Espolvorear perejil antes de servir."]'
                                style="background-image: url('https://okdiario.com/img/recetas/2017/01/12/pechugas-de-pollo-con-salsa-de-mostaza-y-estragon.jpg');">
                                <span>Pechuga en salsa de mostaza</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Daniela Silva</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Eduardo Núñez"
                                data-ingredientes='["1 pollo entero", "2 ramas de romero", "1 limón", "4 dientes de ajo", "Aceite de oliva", "Sal y pimienta"]'
                                data-pasos='["Sazonar el pollo con ajo, limón, sal y pimienta.", "Rellenar con romero y hornear a 180°C por 1 hora y 15 minutos."]'
                                style="background-image: url('https://mojo.generalmills.com/api/public/content/GDyvbPc-skqU3WXLSZrJFg_gmi_hi_res_jpeg.jpeg?v=d7546749&t=16e3ce250f244648bef28c5949fb99ff');">
                                <span>Pollo al horno con romero</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Eduardo Núñez</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Marcos Díaz"
                                data-ingredientes='["6 presas de pollo", "1 taza de chicha de jora", "1 cebolla picada", "2 cdas ají panca", "1 cdita comino", "Sal al gusto", "Aceite vegetal"]'
                                data-pasos='["Dorar el pollo en aceite.", "Agregar cebolla, ají y condimentos.", "Verter la chicha y cocinar a fuego lento por 30 minutos."]'
                                style="background-image: url('https://i.ytimg.com/vi/i1jdknEnCNw/sddefault.jpg');">
                                <span>Seco de pollo</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Marcos Díaz</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Fiorella Hurtado"
                                data-ingredientes='["4 muslos de pollo", "1 taza de arroz", "1 zanahoria picada", "1/2 taza arvejas", "2 tazas caldo de pollo", "1 cda ajo molido", "Aceite", "Sal y pimienta"]'
                                data-pasos='["Sazonar el pollo y dorar.", "Agregar ajo, zanahoria y arvejas.", "Añadir arroz y caldo. Cocinar tapado 20 minutos."]'
                                style="background-image: url('https://static.wixstatic.com/media/9755d8_ca62ce45bea34ec990a66fe48880e6b1~mv2.png/v1/fill/w_1280,h_720,al_c/9755d8_ca62ce45bea34ec990a66fe48880e6b1~mv2.png');">
                                <span>Arroz con pollo</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Fiorella Hurtado</div>
                                </a>
                            </div>
                        </div>

                    </div>
                </section>

                <section class="busquedas-carne">
                    <h3>Carne</h3>
                    <div class="rejilla">
                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Román Gamarra"
                                data-ingredientes='["500g hígado de res", "1 cebolla", "2 cdas vinagre", "2 dientes ajo", "1 cdita comino", "Sal y pimienta"]'
                                data-pasos='["Sazonar el hígado con sal y comino.", "Freír con ajo 5 minutos.", "Agregar cebolla y vinagre, cocinar 10 minutos más."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/0e472f6d520bc55e/1360x1928f0.5_0.459477_1.0q90/higado-frito-de-res-foto-principal.webp');">
                                <span>Hígado frito de res</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Román Gamarra</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Danitza Nocile"
                                data-ingredientes='["8 láminas de lasaña", "400g carne molida", "200g salsa de tomate", "1 cebolla", "1 taza queso rallado", "Sal y orégano"]'
                                data-pasos='["Preparar carne con cebolla y tomate por 20 minutos.", "Intercalar capas de pasta y carne.", "Cubrir con queso y hornear 25 minutos a 180°C."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/aebe29d6ed1e94dd/1280x1280sq90/photo.webp');">
                                <span>Lasaña casera</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Danitza Nocile</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Carla Jasmín"
                                data-ingredientes='["300g carne de cordero", "2 papas", "1 tomate", "1 cebolla", "1 cda sillao", "Vinagre"]'
                                data-pasos='["Saltear carne con sillao 5 minutos.", "Añadir vegetales y vinagre.", "Cocinar hasta que la papa esté lista."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/7aa974a1b225edc2/1280x1280sq90/photo.webp');">
                                <span>Lomo saltado (cordero)</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Carla Jasmín</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Lily Correa"
                                data-ingredientes='["400g carne cordero", "1 cdita pimienta negra", "100ml crema de leche", "1 diente de ajo", "1 cda mantequilla"]'
                                data-pasos='["Sazonar con pimienta y ajo.", "Sellar la carne con mantequilla.", "Agregar crema y cocinar 10 minutos."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/3da28089ee4195b2/1360x1928cq90/cordero-a-la-pimienta-foto-principal.webp');">
                                <span>Cordero a la pimienta</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Lily Correa</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Carlos Mejía"
                                data-ingredientes='["500g lomo de res", "1 cebolla roja", "2 tomates", "2 cdas sillao", "Papas fritas", "Sal y pimienta"]'
                                data-pasos='["Cortar la carne y verduras.", "Saltear carne, agregar sillao y verduras.", "Servir con papas fritas."]'
                                style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Lomo-saltado-perudelights.jpg/960px-Lomo-saltado-perudelights.jpg');">
                                <span>Lomo saltado</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Carlos Mejía</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Lucía Rivas"
                                data-ingredientes='["600g carne molida", "1 cebolla", "2 dientes de ajo", "1 huevo", "Pan rallado", "Sal, pimienta y comino"]'
                                data-pasos='["Mezclar ingredientes.", "Formar albóndigas.", "Freír hasta dorar."]'
                                style="background-image: url('data:image/jpeg;base64,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');">
                                <span>Albóndigas caseras</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Lucía Rivas</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Jorge Salazar"
                                data-ingredientes='["1 kg costillas de res", "1 cebolla", "2 zanahorias", "1 tomate", "2 cdas pasta de tomate", "1 hoja de laurel"]'
                                data-pasos='["Dorar las costillas.", "Agregar verduras y pasta de tomate.", "Cocinar 1 hora a fuego lento."]'
                                style="background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEBUQEhIVFRUVFxUXFxcWFRUWFRYVFhcYFhcVGBgYHyggGholHRcVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGy0mICYtLS0yLS01LS0wLSstLS0tLS8rLS0tLS0tLS0tKy0tLS0tLSstLS0tLS0tLS0tLS0tLf/AABEIALQBGAMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAADAAECBAUGB//EADoQAAEDAgQEBAQFBAIBBQAAAAEAAhEDIQQSMUEFIlFhBhNxgZGhsfAyQsHR4RRSYvEVI4IWQ3KSk//EABkBAAIDAQAAAAAAAAAAAAAAAAEDAAIEBf/EAC0RAAICAQQABAQGAwAAAAAAAAABAhEDBBIhMRMiQVEUYYHwBXGRobHRIzLh/9oADAMBAAIRAxEAPwD0tjB1RMoCq0m7o4VxJIKQCiAiAIkHAUwEwCmESCCmEyrYOnWBPmPa4flhpaR63MqELgUkwTyiQqcWxBp0XObGbQTpJtPtquZ4bxmthnZa7jVY6+Ycz29x/jpb4Lb8S1f+nLuXCPa5XD0+INa1zX53ExMGLA6E9DK4+t1E4Z0ouuPuzq6PBGeJ2vU9LwuKZUaH03BzTuD8ux7I0rxzB8Yq4at5tKADZzTJa4dDG/dencJ41Sr0vMa4CPxDdp/ZbtNqY5o+zMmp0zwv3RqylKqvqEgeWW63JvbtCLmWoy2EzJZ0LMnlQlhJTyhylKhAgcOqkqVDCtYSRqbnurIKC+ZLCpShgpw5QNhE8qAcnlQJMFPKglKFEJpJgU6ARJ0yx/ENPGPaWYV7KUtP/YRmc15kAgFrpAsYy+4UIbKr4XHUqhe2nUY803ZXhrg4sdE5XRoY2K5luIp1GsbiXYivmaM3/t0iT5QINOkQ0g+aOV5cbGJhbfh7CYZlEOwuHZQY+HFraTaRJgXcALmLb9ECGqElEFJSiGCWjQJwmBUmoooSaEQKLQiBWIOApAKIKkFCEgU4KQCkAiQYBM9wAJJgC5J0AG6kua8a8WNOn5LLveL9mm3zVMk1CLkxmPG5yUUU/FfH2OoxTBdez4IFwRy9d1xuJxYkBgIAbzF1i49Y2CLRx1Tyi1xGWbCROado999gsypOcls7/iifnsuBqJeLLdLs7eDF4ape5YzkggG0XmYlTocQfSeHUnc3pYjoW7hRwTM7haBrAvHfuVs4fDUqdbKQHNyESdQbQfikxk4ySuh8knFpqzY4R4uY3kq0/L/yZJbJ6t1HzXXtqAgEaG49F4vjsa0FzZ6+kr0DwRjs+DY0vzOZIPUXlo+C7Oi1Ep+WRyNbpY41ugdHUoNc4OMyNOYgfDRHDlyniXxSMORSZBqG99Gg7kDU9lzruMYis0kVnkaRZpPWzR3T8uqx43XqJw6PJkVrhHdYvxLhqRLXVRmEyGy422taVm/+u6F+SpMAgDKZB03svOK/Jcxe0EiZQqfIA6QZ2GrQTosXx05dJG1aCEe7Z69wbxJRxPK05H25XEAmf7b82i2JXh1CuQWkE2II7EGdeq9dwHGadVjHtJOa0QbOiSD0WvS53lXPaMeqwLE049M1QU8oIqJw9aqMgWU8oYKlKgSFPEy4tyutuRAnt1VgOQ04KBAwKdBBUg5Sg2EBXNeNMRZlE5sjsxrFtiyk+KPmNM/jD6rSB2c7VoB6MFCr4Zr7kDMAQ10Als7ie4BjsEGgpnAVuO42rWbDKbIcMgFMufRzimx7dwSxtenUu3mLYhtgtzws7GNrN/rXvL6lN8M5crPJNJjnENgc55gbiDbLJBu4LwtSZBdVxNUgfnxNYM//ACpubSHoGrYw2FZTnIxrZ1ygAmNJO/uhRaywkkkoAwGhFCG07qUoooFBThQaitCJB2hEATAKQRIOnTBKVAgcVjGUwXPcBHU3PoN15fx/inn1X1ACL2noLaei6jxThh/VU3uaCxzCCd5bJMHaxXHVqADwGwZNgNOt5329lx/xDPK9iOrosUUt/rQBz3ZTJN9f9fCyBMGYdBvNj7q1i2uL/NcWzqG9BpZYfEeJmYpiQL+/Rc7GnLs6G6lyaJx7ad2vkZiA6I01t6EKliOKOc2GanUgQANbd1kBjqhvJPTp1WmzD5BHa6c4xQlSbZmV87iA4wOgsP5K6fwXx0Uazaboh3IXb3PLPYEx7rBqC/3ZVsQ8NcCNt0/HkcZJorlx7otMvY6vUfiqzqk5g90z1mAFu8NpGzwSIv009FU4tiGPr0q2WDVpMe8dSJ+enwC2cLTDmCLNgTMbTN9dIF91XUQuTotp5eVFDG0mudMTvoJVYUxBkC8QSbtH+MbqzxSsC+G6RHv1+iqYanLiImNx9/RIxwbdDcjVWRpS1xbMifj6hdD4Nxhp1w1zuV026OIifoLrm69TmJEQTbT0kn4o2LcabhBDhYFzL5Sf2WzHUMqMmapw2s9jFVOawAkmAufdxhgoNrZpBytJAJhxtJC5h9R9Z72NquqAZoceUECDv327dF0M2qjj47Zy8OBztt0kddxTxbSpN5P+x2wuB6m0ws5/jSplD202loAziZJkXi8gT1+a417AGtOaQ65ABkXi+09kqYyvDtR/baD1B7aLB8fNy54R0Y6HE1xyeqcC8Q0cU3kMOAuw6j06ha2ZeJYrHNa4VG8rmHLLDk10kjpHzV9nFKriK4xDy86wSIjYjotS1qUbkhD0Lcqiz17MnzLD8OcW/qKDXky4crtuYb+4grWD1ti1JJowSi4ycWWA5SDkAPUg5WorZYDlIFAaVMFVotYYJKAcmQoNmGxoAAAgCwGwCKwKDUZgURUm0IjQotCmFYhJOEwTqBI1XENJAkgGB1OwWFxPxK3D0m+a0ecWgmmDME9T0WtxLGCjSfVN8o06nQD4ryjir3VnuqVHiXGSBIj0+Sx6vU+EqXZs0ml8V7n0izxTxVWrjK6A2Z5WiR7nT+Vi0MSLk5iZ5RA9566hCY0gmYIFwSdf9Jq+He8AtEU2m5aYcSdp2316LkSk8juTOp4aS2w4/IbH4wQJBDzI7NHp+qymyduUbkfWFZxFAZnGSYIaJ1tBJ+gVM19RBA26d53+wrxjS4Kt32XBWawANmd5G/3KWJx03kX6LNLy5odIAmI6R9VNrNo9La90XD1ZIzXoE83oPf8A2gYlhcItPurLKS1OE8M86oGaDUncD90HNRL02WcI81ywBl2iG2BIt8ALBa9auabcpIMiDG20SqVRvl8jATMAwDJOu14VOrVh1mmPzA6g9vklynLI7YYJQSSQOpUOaRbXv9Vaw1N45zpqRprugVcRAs0kmCT92TElwIPv9UyEWqYJST4AYzDGRGUjoDN+g79u6fG1Xtiq/K4iIAytLRP5mtECJnRGfRDTznMwkEho5gB0VLidFlTOaZcGgyA65gjr3hNjJOSaMmRU+Tp+JY8ubh6Tbcge4RfNEMt1s5V8K+LF7W5iAZbJPYgXH8rFw2NNVzqhBBEAbGAIurrGES+Y97+qVmm3k3DcOJvEomlSqtbTfSbTbzE3IktGx6gx9VluxAAc0O03tY6R3VilUytzFxPXcfysjGAufYgN1Ebyq4lbbY6SUVx6ljC0QAQ6863sZ0KK4ZGw38PzCDQYI1PwRKRzW6iffQg/BXS3Pkj8q4Os8EY1zXmn+UguPbYffddzTrrhvDNDLneNHZQPYX9rhdLQqrr4bjBI4moalkbNtr0VpWbRqK5Tcn2IottKmCgNKICiQKCkogpKEMxgRWobEZqBCbVMKAUwiQcFOs7DcNyVX1c7iXm87AaAfFaCrFtrlUQ5jxdxRlsN+YkTGxIOUetwemi4OpTz4qiwO5Ccr2gQ4mSB6WIWz4nZOIquiSx5tcWIAB9dFj4OiwEVSXZpuIF/eZ+S42oleVyl9o7ungliSX2w3H8Mxk5WaHZxIiJtIusWniX1Kfl5iAHQGwJgydtbz6SrnE8TnJhxsTyEmCNyFQ4Y0uxDSJ5QSSOhBERtqkY62sa20wjmURUmsSxuUiQTZ40JG4P7LmTUJJaNyR99ltcTxLBNIwHEzmNg21oMrFoNO8BztZNgPbr+idjjfIib8xYpMa3mbBglsTfY5j2/ZWadI6x+gQKfQEDa2p/hbOD4YCA+s/y2GIGriP0H7quSVdjMapBeGcLqPAqhocxpuZEA7A3C6PDjy6bnANe97YDtmk2bJ3MTHqqlLCTQIonNTJBkG0iwJadDqFE4sUGOYakh2rQZ06Tv+ywyuVpl0k7v7QbA16rCSXEyBncANACGjTbcrHNQubmcRq4HtCHW4sagjpodBGlwFj4nFkvO3W+p7J8VJ9lnNLobiXGb8ttj/AV/htYuBdcEmJI12i2i5bGVMkuOs/XVbPDuIOaxrdo2t81rlHyiIy8xu1KRkzOip1jAg9v17oP/ACh0cZ6b+ylwymHOcXCBE3BMmRbUQPsJUXt5ZbIk+i/Qw4gACT3Rzh4j4TECfv6o5rvOoABaBZoEhsDl+F/dDcATYwOk/os1ts0R6AYocmU2B1O33ZU2FrRD9BcGFbxbhlBJ1jrY7E/NVzStE+4v97rowx+VIyTn5gnEyaTwPMY5uUO5DI2MG2sLPbVzVMlMi/5ieVs9T0kqzRpMLHCebToTr8VNmMZTblLZneb26ztqrQxpLli3OXod3wqllptaDMDXr3WrSYvP8LiDTmowhoAaXANMwbA6wfUK9w/j72VXEuL2uMkOIAHZs6LUs0VwYpaeTdo9Aoq5TK5rD8co1G5S5zJtI2/8hot/AxlADy7uSCT8E6LT6M8otdl1pRWlCaEQJpQICkohJEBTYitQWIwVQhAoYjEsptzPcGgbkwqmBwbqbnk1HPDnFwDvyg/lHZWqmHa6C5oMaSJj0QTbXVMgZrgRITpmhOrEOZ8VcIDg7EMHNEPGxaB+KOot7ei4yoyWEAwRJvba4nrovVXhcRx7hAo1PNDM1J34mAxB9eix6rAmtyN2l1DXlf0/o4DEsc15cflturra9IDM8FjizlIsSRMzGsiFbDWlzhFpcRMfhd+XTZUuJcPBEtMho0JuP3C5cocHRtyVdHO8co87XQYe0a9RY/fdUaZvYrU4jSdUfTotBL50GsfY+SFS4ZU87yiC07zcRqCcs9PmmQktnLFT4nSI0QQ4Sfn9VdxtY1GWJk7nSxmFo0OGUvKy1GgvcbPDnDLb8MaH1IRsNwxoGVogSDe5Pxv9El5Y3fsOUJNUY+Gxnlc+Ykwc18ouIIjcLAxXEi4mDMru8XgRIZUpscI1MGBsI90w4SwuzeWCRGWwBkCBe+kfJW+JhdyRT4eXSZmeH8NVDDIyktIEwZOwc3bX1HRVuJ8IqU+YODz+YCQR0idfkuqoUXM7Tbv8wrTuEsLy1zspaC4zuYmOnf2SFlk5Wuh0oRhC2eRcaDpDXAjsQR9VDDPqOsDMaaAwuvxFTzxUpjLl0mBE7ET33WEMMwAiDmH1XShkTjTRknjqVpgK1Wo1plpkb6Lu6HK0XglvMdCZF5jRcrhuGZ4McsgEzA6wvQcJhWtptNVriLDSLSZIJtpBjv0WbN56UR2Hi9xm1Q/FPgPY3y2ABshggDQSbn9kHDkMdDQ18tuS2cpN5bO/ddDiaGHazOxol2UNM9gc3vItssYB2dzTEx2HpB3/AGVYwSlsYXHy36ewz6bdDvcdR1n6+yxHuyO8vTLobyRK2BUDmwfxNt8tY+Ky8e8NeIgm4MdLwZ9/ot90ZuxGoBff7tYdlXe6bn9P1UKTpcdB0O090+UzDpnXYz6RqkZJDcdBaTCSLgmeunpt1WpTY2k3MQ1zp1e3MCD0BBHylS4RhmNP/dp0GvpfRamMbSe3MwQd2kH/AOw7LK5PtGhR9DHfrYRPRzgB1idNFp8K4xUouBzOyjbNI72i6y2gtdreZ/0izsrrLKLtMEsUZKmj1PhHF2VgIcJ6StcFeNGtlAcwkEGRBIvAFvou68EcddWYaTzLmAEOOpbpfuLXXT02rWR7X2crU6N405J8HWSkh5ky3HPAsRWoFMozVQsECkFEKYRCOFJUMZxSnTDpdJaJLW3dExp7qxgsU2qwPZMOEiRBg9iqqSbpMAYhV8XSaWHPGWCTOkbyqfE+OU6D8ryTacrWkuvpfQehvuuZ8ReIatSmabKZYNTeXFvQgaf6ScuphjTvn5GjDp55Gq69yjj6eBfJDSy5AOYs0jmytBjXoudruptmHZrxMkSOwsfjdM6rUeew6jTt6qniWH8zr9BHwXEeWU/+HZhhUObb/Mu1MPSlr6VIMOue7nHbrqjgMglwB7uBaT2BGyDhiQ20wLG9+oMKvj8aAzluSde3xSabY2MYRVk340h/JTBGggZWj6GbbouDNSGvbzS6HCbkb+yzncSAa1rTzAcx6uNoA6DRQo4xze8kak/omyhxwUhKzqajqbZdbsNyeke6rv4pDDyAPmcxfFv/AI+n1WIMW90gH9B9/sk6gRE2JWdYV6jZPcXquNLiCXtA/tBJ+gT4vGteJB11JzQ61/n23VbC0Gw4WzAOMuIGg0E/H2SpYfka/QHUnSf7fYR8U5QVUiKXNGTSwLqmYiWkk6GAfWyo4jDPFQtcObXrbquspHIABAvmEi5t/o+6x+OVQ6qCOUlv6mxT4yblQmcEo2Z1KtkM/FbuFx76jWggkAANucpDdAY9fW65zFU4gk6mCdlc4PVdGXUTEa9NBudFaUK5KwlydTgaw8tzZgTI3FxI77Ee5VDFVnN0ItPpZXcPUvnbkkQHMOXLJ1LejSQT0EoPFeHuaMzg0XNh21udYtZKUGnY5zVcmXXrvvUDhDgZgcwgXiLTYlZbq5JLiYnUwB9/BWxWJcabWuylsGJi+8myXBMEHOLag5mmIdIAgXceu1lr3pRsyOLslhuF1HgOc0taRZzhr6BaDKflNhsnU3PoD6bLfFQZW0nRAaSDfmDjy+g3WXjsFHKajQBsJE7zJKyOdupGlQ44K5cIBcJNrA6fuFYwzjH1hV/6YCXCp6Xke/RGeRTiwJNtIkoOLfRZcdh8W0sZ5pIgmBeZJE/fdZrsVmn5R+qlVktg9ZjUA6T9EOlTACYsQvf7kqf0WrwHiZw7s7Lnedx0WO6oSY6KzgsPUqO8uk2XH4e+yfCOxprsVkkpRal0ew4LFtq021G6PAI99klS4W0so02EZS1jQRMwQBIn1SXYT45OC6vgu01L+qYHtpl7Q9wJDZ5iBqY6IdMp6GFY17qgaA98ZnbmBAugQutUwhtKmiWIswzAS4NaCdSAJPqqXGuJ+QwllM1H6BogAToSdldoF+XmAzf46E9p0np9V5/ice9zSwvh3Mehlxgg27/Jc/XamWCKUFyzZo9Osrbl0iD6NR9MnNzg5nTGpzWl2sSEPh1WsXlj3AtHLnIE2JAIuNxpfT3VnDU7OFyRGnbVY7qrWgvqVCDrYmTmcAZj1nSbLj6bPbd2djJj4pGg9smoKzhYck2AcBrYQZ6ntdctjqm4E9Pbqt3FY0BpY6KgAhpB0ETkMey5OrVzFwFv023T9vm4KpJRonRLnC7rXsO+yi6hYmArXC28vNvJhPXZcxpqEnc9xF0ZjmgX6a9U7atpjSfj1RXDUkffRAY20mwT10D1LeDn56forFXEaD/ay/6nLcmB6hAPFqQMEz1iT9FPCb5DuS7OjwGEz/mAG1pk9DGnuhYl8cvciZ1Omn3onwniGkMoZANhMHMY0AMWtZZvG8b5xml/dMSLb+pVtnSQVPiyzjsVDrmIAAFtAsfE48VH8p/CIvpfVNiuH1XDMXX3G3xTUOGdbHcaFXjFR5fYqc3LhBKDw+WnaO49kQtLHkbOg9Ljp0UqfC3khrJc46AamASlkcPx3g3G4Ohv11RlNMrFUzRbjHtGZxJi0kEz2PvKlWxVWo0MeSKdjB2HQTotThbPM5mkhoh8VTImSCZ36TG/oVHGNomi+oKp8zOGtYBoCDv1sdNIE6pEnUqGOdK2BfXFtPkgOpHNMWduL94IVNrwQS4TEeq1MG/MwZWAQLkanqSqyWzoupKXZaww5ZcbDQXJtp7Kt4hJLc4JMG9jpvrdSwld7HhzSDcSJsRMwR0sEKviC55aTs4gR+IgzbuhjhckwzltizJoU3uEg2nSbxa8dFejKAPmblQw9HJUto4Ex0meVAq1iSfWI/RbIxoRKRYFSTc23j79EKrUieiB5t40AuUqLHVHZWCfp6lWpi3JG54d4W2uXOqE5QNoFz/C7fBU2UxDGNbYSWta0mNzAusjhOF8tjWDb5ncrYotW/HjUV8zmZsrm/kaFKskoUQkm2JovMcrDCqbCjsciAthyBg8YXzyFom06kdeykxyKCg09yd8e3uFBQV5viWzXqNMZg8z01MkHr2XojiuB8RYCrSe57SXMdmdoC4GZj0ub/FYfxGDlBP2N+gmlJr3J1HeWXAH8Qt7j+VxmJqy8+q6LAcRbUw4FQxUFvgZHtC57ieBOfM2MutpJvJ0/ULkafC1J2dTJPgtl4bTaxhdBgFjrgTJJadr9NZWY+g1tR3YI1XFGmIDDnAjM4RE7xdZbC4gjvLjOq0xTttlG+EkXMPXaBE6ff7qNfFW7KhWpmdNvu6rnnAuCDf0HfohHEmysp0FqY8TbTrqEGpjn/lEdz07BXMJgsxygSSYG2unsrR4awOgS6CQTs6LWm+xTG4xKrc3Rh1cD5hEZoEa6Tub/dlawvBZBIuBv1XT8O4A6qWhrIGaS7t0A0XQca4OKNCWBKyZcjjuiuCRjBS2vs89pYEWEfFHbw4g2/ZatKgTLzcn7+CnTpsLx5ktZ+YgSQANh6wFXe+zRtSXJUwby14OuUg3BOl4IO3ZHx+IfWrGq4NuIAaC0ADr1UCAYIj4XF4junDxM3Hrojd8ldsW7GFN7CHsJDhNwTva3xUuD8J86pDicozOcfQEwOpJge6KXTcXWlhcNyB1tj6k9ev8JWTJsVstsUujf/4ylTow6wIBz76TlgWiNPX48lSw7WuLus9LAro+J0K1cAucAA0EMAIB9I/Efp2WQcKAIVsuaEn/AI1wHHjdeZmXiaAdYRH6Kxw8OzNpN/Nb2Iv8pV1mDk2BNjpf3QcsutMg2EKm5su4oDUptbUcwDQkiPogU6cul0gNk+03+SLjGFrw9wgHXT5jooVHjy33/K6O9pTsbSqhU1admZRxOZ5fsJj9FGmC90tab30haHDeEyATvddHgsAG6BdOGF1ycvLqKfBgYbw/n/Hp0XScN4U2mIGiv0qCrnE+XWPmOysyjKTZmaTMu2MZdU7ZGPJllklLs0cPRhXabEOjBEi4OhGiu0mJiYuh6bUkdjElcABjkZjlTaUZrlEAuMciseqjHIrHIgHwNdz8xc3LD3AWIloJAN+sT7omJw4eIP8AI7hSY5VGYar5xqGsSyIbTAAaB1O7nW1+Sq1ap8llJp2jlOPeGnSX05k9BY9+x+Xoudw1N7XClUBAMgF392tj96hetlqpY3hdOqCHNF1jloavY/o/7N0Nc+FJHl3EsIBTkNALTBMmTrttosfKILzeNl3fGvC9YvmnlywBd17fmv1/RZdPw25h5r+kws8NJkvo1S12LbfqcTUL6xgDK21uvqt3D8Jp06YNVzWgkAZjDeup+7LqcLwFhF2D4QtrD8KblDS0EDYiUXo8knTfAh6uNXHswuG+HabmhxhwMEFuhGoM7rawnAKTdGD3utahhg0QBAClSL85Bpw0fmJFz2aNvWPRaIaTHFcq/wAzPLU5JPsjRwwAgCEPiOCD6bmxsVfwr2vaHMMg6FH8tPeOM4bfRio5GpbjykcPaA+pUqFrWEgwwkgTAMz8hKo8QoMzgU3lzYkk5Yk7ANXpXF+AtqBxaAC7Wwv/ACuPxXBy0FsNaQTqTGQDlnobH5d1xZ6eeJ0zq4s6nc5S49jngNv0j4I2CxWR85QbEQ67TIvZSfQkTETp3Gkg9EOpQjuqWvU2OO5A6jiXEgBoP5RoLLp8E5r2sLRYD2lc1Twxc4DQbnt0BW41+VoAIAA29/4Ss+PxEkgw8ptjGgZQ8zYsm4LQdPQbLE4liaYMjU6R0sB8r+6E+vmCoVKRcbK8YtQUWW4u0HdxZ7QRTtmETN+/7IGDrljvMzDMfwzeDP7KH9OQZ1j4ITr76XV0ikmEr1s05tZPwUPKdUaWN1JA2s2+Y/p7oQmY+a3eFYbK2dzcrTp8Fsy6jPtjwW8HhoAC0qVOFCixWvJDgWkSDYjqF1DjvkIxqIaIdYiUPBYQMbkbMbSSY7Cduy0KVFAhRo8NDJdSa0OIjoPgFp4Ok4NGcgnsiMYjtCkYc2BscBJTaEydQuzOLQf3UcpCa40UycwjRAhJiM0oDTGqO1ylhoji2Pcz/rfldqCbj3HRXKBMDNE7whNKK0qJc2QME8IbXIrSrgGNNAqYMHZWwpAKWSjPGCA2RW0ArkJ8qqErNpKWRWMqbKoECGKUImVLKoQHCpY/hdOsIe2e+6uYl7mtzNbniJAMGN46ntaUQXVZQjJVJBUmnaORx3hORDHWGgO1ybfE/FYmK8LVW7T3XpJCYtWDJ+G45cxbX7/ybYfiGWPDpnkuLwD6bCYhwOkHmBEfIjT/ACKxq/Enf2H9l7VicEx4hzQVkV/C9E7QkS0WePCp/sx8ddB8ytHl9LibCOaR7H9FD/mGN/Dm+BXoWM8HUyOUkFc7i/CNVp5QT80mePJj/wB4P6c/waMeoxz6kvrwYNHEl9wSoV6x6Ba7PD9dpltO512B/lQPh/EOMGlH/l/CvBSl0n+hJZILtoo8MolzgCBAuY0XTYemp8N8OvYL7/IfcrZocNhdPDilGPJytRmUpcdFWjSV6jQVqlhYVhtFO2mfcBZSRmtRBTUgxHaCxgFNrVJrFMNRSI2JrUlDFVHtbLKfmGYjMGgdyTski3RSyHFcM1vMBBWcnSQLD5rKTCkkqMuiwwogKSSsAIEVqSSJUmCpgpJIhJhSTJIBHTpJKEEkkkoQSUJklCCTEJJKEMfh9KMRXMm7habWHT3WqQkkl4VUf1/kBAhQLUyScAY0wmNIdEkkQETTCYMCSSgB8qeEklAsQCkkkgBCUgkkigsmEkklAH//2Q==');">
                                <span>Costillas guisadas</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Jorge Salazar</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Daniela Paredes"
                                data-ingredientes='["500g carne para guiso", "1 cebolla", "1 taza de arvejas", "2 papas", "1 cda ají panca", "Sal y pimienta"]'
                                data-pasos='["Sofreír cebolla y ají.", "Agregar carne y sellar.", "Añadir arvejas y papas, cocinar 30 min."]'
                                style="background-image: url('https://www.recetasnestle.com.pe/sites/default/files/srh_recipes/91ef3e5f44cafd41df8d0a530efc37a0.jpg');">
                                <span>Guiso de carne</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Daniela Paredes</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Luis Cárdenas"
                                data-ingredientes='["1 kg asado de tira", "2 cdas mostaza", "1 cda ajo", "1 cda sillao", "1/2 taza vino tinto"]'
                                data-pasos='["Marinar la carne con todos los ingredientes.", "Hornear a 180°C por 1 hora y media.", "Servir caliente."]'
                                style="background-image: url('https://locotemarket.com/cdn/shop/products/images_-_2021-04-13T191931.945.jpg?v=1618359610');">
                                <span>Asado de tira</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Luis Cárdenas</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Sandra Ugarte"
                                data-ingredientes='["500g carne molida", "1 cebolla", "1 tomate", "1 cda pasta de tomate", "Pasta cocida"]'
                                data-pasos='["Freír carne con cebolla.", "Agregar tomate y pasta.", "Mezclar con pasta cocida."]'
                                style="background-image: url('https://www.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2021/06/preparar-carne-molida-para-espagueti-kilo.jpg');">
                                <span>Spaghetti con carne</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Sandra Ugarte</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Marco Villanueva"
                                data-ingredientes='["2 bistecs de res", "1 cda aceite", "1 cda vinagre", "1 cdita orégano", "Sal y pimienta"]'
                                data-pasos='["Sazonar los bistecs.", "Freír 3 minutos por lado.", "Servir con ensalada."]'
                                style="background-image: url('https://i.ytimg.com/vi/chQb3WeJnRo/maxresdefault.jpg');">
                                <span>Bistec a la plancha</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Marco Villanueva</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Paula Rodríguez"
                                data-ingredientes='["800g carne de res", "1 cebolla", "1 zanahoria", "1 taza vino tinto", "Romero, tomillo", "Sal y pimienta"]'
                                data-pasos='["Sazonar y dorar la carne.", "Agregar verduras y vino.", "Hornear 2 horas a 170°C."]'
                                style="background-image: url('https://rumbameats.com/wp-content/uploads/2018/02/red-wine-beef-stew-7-a-768x512.jpg');">
                                <span>Carne guisada al vino</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Paula Rodríguez</div>
                                </a>
                            </div>
                        </div>

                    </div>
                </section>

                <section class="busquedas-papa">
                    <h3>Papa</h3>
                    <div class="rejilla">
                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Carlos Alvarez"
                                data-ingredientes='["3 papas amarillas", "1 lata jurel", "1 palta", "Mayonesa (2 cdas)", "Sal y pimienta"]'
                                data-pasos='["Hacer puré con las papas.", "Colocar capa de papa, luego jurel y palta.", "Repetir capas y decorar con mayonesa."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/d2a888f462d422d6/1360x1928f0.5_0.5_1.0q90/causa-de-jurel-y-palta-foto-principal.webp');">
                                <span>Causa de jurel y palta</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Carlos Alvarez</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Lily Correa"
                                data-ingredientes='["3 papas sancochadas", "1 lata atún", "1 zanahoria", "3 cdas mayonesa", "Limón y sal"]'
                                data-pasos='["Picar zanahoria y mezclar con atún y mayonesa.", "Formar capas con papa y relleno.", "Refrigerar y servir con limón."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/f46f561ada8e420b/1280x1280sq90/photo.webp');">
                                <span>Causa rellena de atún</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Lily Correa</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Diana Cordero"
                                data-ingredientes='["4 papas", "2 ajíes amarillos", "150g queso fresco", "100ml leche evaporada", "Galletas de soda (4)", "Sal"]'
                                data-pasos='["Licuar ají, queso, leche y galletas.", "Servir sobre papas en rodajas.", "Acompañar con huevo cocido y aceituna."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/9dcae0fe27a4c7ec/1280x1280sq90/photo.webp');">
                                <span>Papa a la Huancaína</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Diana Cordero</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Marian Gonzalez"
                                data-ingredientes='["4 papas amarillas", "200g carne molida", "1 huevo cocido", "Cebolla y ajo", "Aceite para freír", "Sal, comino y pimienta"]'
                                data-pasos='["Preparar relleno con carne y huevo picado.", "Formar bolas con el puré y rellenar.", "Freír en aceite caliente por 5 minutos cada lado."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/f7325c787cb5d907/1280x1280sq90/photo.webp');">
                                <span>Papa rellena</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Marian Gonzalez</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Luis Barragán"
                                data-ingredientes='["4 papas grandes", "1 cda mantequilla", "Sal y pimienta al gusto", "1 cda perejil picado"]'
                                data-pasos='["Lavar bien las papas y hervirlas con cáscara hasta que estén blandas.", "Escurrir y cortar por la mitad.", "Servir calientes con mantequilla derretida, sal, pimienta y espolvorear perejil."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/9304fd97df5f244e/680x482cq80/papas-cambray-a-la-mantequilla-foto-principal.jpg');">
                                <span>Papas sancochadas con mantequilla</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Luis Barragán</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Ana Salazar"
                                data-ingredientes='["6 papas amarillas", "1 taza de mayonesa", "1 huevo duro", "Aceitunas negras", "1 hoja de lechuga", "Ají amarillo molido", "Sal y limón"]'
                                data-pasos='["Hervir las papas, pelarlas y hacerlas puré.", "Mezclar con ají amarillo, sal y unas gotas de limón.", "Formar capas con mayonesa, huevo picado y aceitunas sobre una base de lechuga."]'
                                style="background-image: url('https://cdn0.recetasgratis.net/es/posts/8/6/2/causa_limena_31268_600_square.jpg');">
                                <span>Causa limeña</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Ana Salazar</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Mario Paredes"
                                data-ingredientes='["1 kg papas blancas", "2 cdas ají panca", "1 cda ajo molido", "1 cebolla roja picada", "Aceite vegetal", "Sal", "Pimienta"]'
                                data-pasos='["Freír la cebolla con ajo y ají panca hasta dorar.", "Agregar las papas sancochadas y trozadas.", "Saltear todo junto por 5 minutos para que tome sabor."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/032ef18cb919f0d3/300x426cq80/papas-criollas-doradas-con-tomillo-foto-principal.webp');">
                                <span>Papas doradas criollas</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Mario Paredes</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Valeria Cueva"
                                data-ingredientes='["6 papas medianas", "1 cda orégano seco", "1 cda ají panca", "2 dientes ajo", "Aceite de oliva", "Sal y pimienta"]'
                                data-pasos='["Lavar y cortar las papas en gajos.", "Mezclar con aceite, ajos picados, ají panca y orégano.", "Hornear por 40 minutos a 200°C hasta dorar."]'
                                style="background-image: url('https://img-global.cpcdn.com/recipes/1ad0026b1ad47875/300x426cq80/papas-al-horno-crocantes-por-fuera-y-cremosas-por-dentro-foto-principal.webp');">
                                <span>Papas al horno crocantes</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Valeria Cueva</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Jorge Alarcón"
                                data-ingredientes='["5 papas blancas", "1 taza leche evaporada", "100g queso fresco", "2 cdas ají amarillo", "Galletas saladas (4 unidades)", "Sal", "Huevos y aceitunas para decorar"]'
                                data-pasos='["Hervir y pelar las papas.", "Licuar leche, queso, ají y galletas hasta lograr una crema.", "Servir la salsa sobre las papas y decorar con huevo y aceituna."]'
                                style="background-image: url('https://www.gourmet.cl/wp-content/uploads/2022/08/papas-a-la-huancaina-ajustada-web-570x458.jpg');">
                                <span>Papas a la huancaína</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Jorge Alarcón</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Paola Reátegui"
                                data-ingredientes='["6 papas", "3 huevos", "1 cda mostaza", "1 cda vinagre", "1/4 taza mayonesa", "Cebolla china picada", "Perejil picado"]'
                                data-pasos='["Hervir las papas y los huevos, pelar y picar.", "Mezclar con mayonesa, vinagre, mostaza y cebolla china.", "Refrigerar por 30 minutos y servir frío."]'
                                style="background-image: url('https://www.laylita.com/recetas/wp-content/uploads/2020/12/Ensalada-de-papas-con-huevo-cocido-1024x768.jpg');">
                                <span>Ensalada de papa con huevo</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Paola Reátegui</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Kevin Mendoza"
                                data-ingredientes='["4 papas medianas", "Aceite para freír", "Sal", "Salsa tártara o ketchup al gusto"]'
                                data-pasos='["Pelar y cortar las papas en bastones.", "Freír en aceite caliente hasta dorar.", "Escurrir en papel y salar al gusto."]'
                                style="background-image: url('https://www.cocinacaserayfacil.net/wp-content/uploads/2019/01/Patatas-fritas-caseras-perfectas-y-crujientes.jpg');">
                                <span>Papas fritas caseras</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Kevin Mendoza</div>
                                </a>
                            </div>
                        </div>

                        <div class="elemento-receta">
                            <a href="#" class="elemento"
                                data-autor="Lucía Peña"
                                data-ingredientes='["8 papas medianas", "1/2 taza queso fresco rallado", "2 cdas mantequilla", "Leche evaporada", "Sal", "Pimienta negra molida"]'
                                data-pasos='["Hervir las papas y hacer puré.", "Agregar mantequilla y leche hasta textura suave.", "Salpimentar y añadir queso fresco antes de servir."]'
                                style="background-image: url('https://www.daisybrand.com/wp-content/uploads/2019/12/cheesy-mashed-potatoes2-770x628_1688.jpg');">
                                <span>Puré de papas con queso</span>
                            </a>
                            <div class="descripcion">
                                <a href="#" class="usuario">
                                    <div
                                        class="material-icons">account_circle</div>
                                    <div class="nombre">Lucía Peña</div>
                                </a>
                            </div>
                        </div>

                    </div>
                </section>

                <footer class="pie-pagina">
                    <div class="contenido-pie">
                        <div class="seccion-pie comentarios">
                            <h3>Ayúdanos a mejorar nuestro servicio</h3>
                            <p>
                                Nos encantaría recibir tus comentarios sobre
                                nuestro servicio. Por favor, háznos saber
                                cómo
                                podemos
                                mejorarlo.
                            </p>
                            <form class="formulario-comentario">
                                <textarea
                                    placeholder="Escribe tu comentario aquí..."></textarea>
                                <button type="submit">Enviar</button>
                            </form>
                        </div>

                        <div class="seccion-pie acerca-de">
                            <h3>Sobre Recipepad</h3>
                            <p>
                                Nuestra misión en Recipepad es que la cocina
                                diaria sea divertida, porque creemos que
                                cocinar
                                es
                                clave
                                para una vida más feliz y saludable para las
                                personas, las comunidades y el planeta.
                            </p>
                            <p>
                                Empoderamos a cocineros caseros de todo el mundo
                                para que entre todos nos ayudemos
                                compartiendo
                                sus
                                recetas y experiencias en la cocina.
                            </p>
                        </div>

                        <div class="seccion-pie enlaces">
                            <h3>Enlaces útiles</h3>
                            <ul>
                                <li><a href="#">Términos y condiciones</a></li>
                                <li><a href="#">Política de privacidad</a></li>
                                <li><a href="#">Contacto</a></li>
                                <li><a href="#">Redes sociales</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="fondo-pie">
                        <p>&copy; 2025 Recipepad. Todos los derechos
                            reservados.</p>
                    </div>
                </footer>
            </div>
        </main>

        <div id="modal-login" class="modal oculto">
            <div class="modal-contenido">
                <span id="cerrar-modal"><i class='bxr  bx-x'></i></span>
            </div>
        </div>

        <script src="JS/script.js"></script>
        <script src="JS/categoria.js"></script>

    </body>

</html>