<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explora los 151 Pokémon originales de la región de Kanto y descubre un proyecto de simulación de combates basado en la primera generación.">
    <link rel="stylesheet" href="styles-pokedex-kanto.css">
    <title>Pokédex Kanto | Inicio</title>
</head>
<body>
    <!-- CABECERA DE LA WEB -->
    <header id="inicio">
        
        <img src="img/logo-inicial-pokedex-kanto.png" alt="Logotipo del proyecto Pokédex Kanto">

        <h1>Pokédex Kanto</h1>
        <p>Descubre los 151 Pokémon de la primera generación.</p>

        <!-- MENÚ DE NAVEGACIÓN PRINCIPAL -->
        <nav aria-label="Navegación principal">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#presentacion">El proyecto</a></li>
                <li><a href="#pokedex">Pokédex</a></li>
                <li><a href="#combates">Combates</a></li>
                <li><a href="#acerca-de">Acerca de</a></li>
            </ul>
        </nav>
    </header>

    <!-- CONTENEDOR: FUTURAMENTE PERMITIRÁ COLOCAR MAIN Y ASIDE CON FLEXBOX -->
    <div class="contenedor-principal">
        <main>
            <!-- PRESENTACIÓN DE LA PÁGINA -->
            <section id="presentacion" aria-labelledby="titulo-presentacion">
                <h2 id="titulo-presentacion">Bienvenido a la región de Kanto</h2>
                <p>
                    Esta aplicación web es un homenaje a los primeros videojuegos de Pokémon,
                    publicados en Japón en 1996. Aquí podrás conocer a los 151 Pokémon
                    originales, consultar sus características y descubrir cómo evolucionan.
                </p>
                <p>
                    El objetivo inicial del proyecto es desarrollar una Pokédex interactiva.
                    Más adelante, se pretende incorporar un simulador de combates inspirado
                    en las mecánicas de la primera generación.
                </p>
                <img src="img/imagen-bienvenida.jpg" alt="Imagen de bienvenida con varios Pokémon originales de Kanto">
                <p><a href="#pokedex">Descubrir la Pokédex</a></p>
            </section>

            <!-- SECCIÓN DE LA POKÉDEX -->
            <section id="pokedex" aria-labelledby="titulo-pokedex">
                <h2 id="titulo-pokedex">Pokédex de primera generación</h2>
                <p>
                    Explora los Pokémon del número 001 al 151 y consulta su información
                    original: tipos, estadísticas base y evoluciones.
                </p>

                <h3>¿Qué información encontrarás?</h3>
                <ul>
                    <li>Número y nombre de cada Pokémon.</li>
                    <li>Tipo o tipos de la primera generación.</li>
                    <li>Estadísticas base: PS, Ataque, Defensa, Especial y Velocidad.</li>
                    <li>Cadena evolutiva y métodos de evolución.</li>
                </ul>

                <h3>Pokémon destacados</h3>
                <!-- Estas fichas son ejemplos estáticos. En el futuro, los datos vendrán de MySQL mediante PHP. -->
                <div class="lista-pokemon">
                    <article>
                        <h4>Bulbasaur</h4>
                        <img src="img/bulbasur-tarjeta.webp" alt="Imagen de Bulbasaur, Pokémon número 001 de la Pokédex">
                        <p>N.º: 001</p>
                        <p>Tipos: Planta y Veneno</p>
                    </article>

                    <article>
                        <h4>Charmander</h4>
                        <img src="img/charmander-tarjeta.webp" alt="Imagen de Charmander, Pokémon número 004 de la Pokédex">
                        <p>N.º: 004</p>
                        <p>Tipo: Fuego</p>
                    </article>

                    <article>
                        <h4>Squirtle</h4>
                        <img src="img/squirtle-tarjeta.webp" alt="Imagen de Squirtle, Pokémon número 007 de la Pokédex">
                        <p>N.º: 007</p>
                        <p>Tipo: Agua</p>
                    </article>
                </div>
                <p><em>Próximamente: listado completo, buscador y filtros por tipo.</em></p>
            </section>

            <!-- FUTURO SIMULADOR DE COMBATES -->
            <section id="combates" aria-labelledby="titulo-combates">
                <h2 id="titulo-combates">Simulador de combates</h2>
                <p>
                    En una futura fase del proyecto se intentará desarrollar un sistema
                    para enfrentar Pokémon de la primera generación, teniendo en cuenta
                    sus tipos y estadísticas originales.
                </p>
                <img src="img/simulacion-combate-index.webp" alt="Ilustración de un combate entre dos Pokémon de la primera generación">
                <p><strong>Estado:</strong> Funcionalidad prevista para una fase posterior.</p>
            </section>

            <!-- INFORMACIÓN SOBRE EL PROYECTO -->
            <section id="acerca-de" aria-labelledby="titulo-acerca">
                <h2 id="titulo-acerca">Acerca del proyecto</h2>
                <p>
                    Esta aplicación forma parte del Proyecto Final del Ciclo Formativo
                    de Grado Superior en Desarrollo de Aplicaciones Web (DAW).
                </p>
                <p>
                    Para su desarrollo se utilizarán HTML, CSS y JavaScript en el frontend,
                    PHP en el backend y MySQL para almacenar los datos de los Pokémon.
                </p>
            </section>
        </main>

        <!-- BARRA LATERAL: INFORMACIÓN COMPLEMENTARIA -->
        <aside aria-label="Información complementaria">
            <section aria-labelledby="titulo-enlaces">
                <h2 id="titulo-enlaces">Accesos rápidos</h2>
                <ul>
                    <li><a href="#pokedex">Ver la Pokédex</a></li>
                    <li><a href="#combates">Información sobre los combates</a></li>
                    <li><a href="#acerca-de">Conocer el proyecto</a></li>
                </ul>
            </section>

            <section aria-labelledby="titulo-dato">
                <h2 id="titulo-dato">¿Sabías que...?</h2>
                <p>
                    La primera generación introdujo 151 Pokémon y 15 tipos.
                    Por entonces, las estadísticas incluían un único valor de «Especial».
                </p>
                <img src="img/pokeball.webp" alt="Imagen decorativa de una Poké Ball clásica">
            </section>

            <section aria-labelledby="titulo-desarrollo">
                <h2 id="titulo-desarrollo">Estado del desarrollo</h2>
                <ul>
                    <li>Base de datos: preparada.</li>
                    <li>Página principal: estructura HTML inicial.</li>
                    <li>Pokédex interactiva: pendiente.</li>
                    <li>Simulador de combates: previsto.</li>
                </ul>
            </section>
        </aside>
    </div>

    <!-- PIE DE PÁGINA -->
    <footer>
        <p>Proyecto Final de DAW · Pokédex Kanto</p>
        <p>Proyecto académico no oficial, inspirado en el universo Pokémon.</p>
        <p><a href="#inicio">Volver al inicio</a></p>
    </footer>
</body>
</html>
