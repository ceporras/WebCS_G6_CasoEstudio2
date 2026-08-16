<?php

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebCS_G6_CasoEstudio2/Controller/CasasController.php';

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebCS_G6_CasoEstudio2/View/Layout.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        CasaFácil | Sistema de Alquiler de Casas
    </title>

    <?php ImportCSS(); ?>

</head>


<body>


<?php MostrarHeader(); ?>


<main class="main">



    <section class="hero">


        <div class="hero-texto-contenedor">


            <div class="hero-etiqueta">

                <span class="hero-etiqueta-punto"></span>

                Encuentra tu próximo hogar

            </div>


            <h1>

                Encuentra la casa ideal
                <span>de forma fácil y rápida.</span>

            </h1>


            <p class="hero-texto">

                Consulta las casas registradas en el sistema,
                conoce su precio mensual y disponibilidad,
                y realiza el alquiler de una casa desde un
                mismo lugar.

            </p>


            <div class="hero-botones">

                <a
                    href="/WebCS_G6_CasoEstudio2/View/ConsultaCasas.php"
                    class="btn btn-principal"
                >
                    Consultar casas
                </a>


                <a
                    href="/WebCS_G6_CasoEstudio2/View/AlquilerCasas.php"
                    class="btn btn-secundario"
                >
                    Alquilar una casa
                </a>

            </div>


        </div>


        <div class="hero-panel">


            <div class="panel-principal">


                <div class="panel-header">

                    <div>

                        <span class="panel-mini-titulo">
                            Propiedad destacada
                        </span>

                        <h3>
                            Casa en Heredia
                        </h3>

                    </div>


                    <span class="panel-estado">
                        Disponible
                    </span>

                </div>


                <div class="casa-visual">

                    <div class="casa-icono">
                        🏠
                    </div>

                    <div class="casa-visual-texto">

                        <span>
                            Precio mensual
                        </span>

                        <strong>
                            ₡122,000
                        </strong>

                    </div>

                </div>


                <div class="panel-datos">


                    <div class="dato">

                        <span>
                            Estado
                        </span>

                        <strong class="texto-disponible">
                            Disponible
                        </strong>

                    </div>


                    <div class="dato">

                        <span>
                            Modalidad
                        </span>

                        <strong>
                            Alquiler
                        </strong>

                    </div>


                    <div class="dato">

                        <span>
                            Ubicación
                        </span>

                        <strong>
                            Heredia
                        </strong>

                    </div>


                    <div class="dato">

                        <span>
                            Pago
                        </span>

                        <strong>
                            Mensual
                        </strong>

                    </div>


                </div>


                <a
                    href="/WebCS_G6_CasoEstudio2/View/AlquilerCasas.php"
                    class="panel-boton"
                >
                    Ver casas disponibles
                    <span>→</span>
                </a>


            </div>


        </div>


    </section>



    <section class="funcionalidades">


        <div class="funcionalidades-contenedor">


            <div class="seccion-encabezado">


                <p class="seccion-mini-titulo">
                    Funcionalidades
                </p>


                <h2>
                    Todo lo que necesitas para encontrar tu hogar
                </h2>


                <p>

                    CasaFácil simplifica el proceso de consulta
                    y alquiler de casas ofreciendo la información
                    necesaria de una manera clara y sencilla.

                </p>


            </div>



            <div class="tarjetas">


                <!-- CONSULTA -->

                <article class="tarjeta">


                    <div class="tarjeta-icono">
                        ⌕
                    </div>


                    <h3>
                        Consulta de casas
                    </h3>


                    <p>

                        Consulta las propiedades registradas en el
                        sistema, revisa su precio mensual, usuario,
                        fecha de alquiler y conoce cuáles están
                        disponibles o reservadas.

                    </p>


                    <a
                        href="/WebCS_G6_CasoEstudio2/View/ConsultaCasas.php"
                        class="tarjeta-enlace"
                    >

                        Ver todas las casas

                        <span>→</span>

                    </a>


                </article>




                <article class="tarjeta">


                    <div class="tarjeta-icono">
                        ♡
                    </div>


                    <h3>
                        Alquiler de casas
                    </h3>


                    <p>

                        Selecciona una de las casas que se encuentre
                        disponible, consulta automáticamente su precio
                        mensual y registra el usuario que realizará
                        el alquiler.

                    </p>


                    <a
                        href="/WebCS_G6_CasoEstudio2/View/AlquilerCasas.php"
                        class="tarjeta-enlace"
                    >

                        Alquilar una casa

                        <span>→</span>

                    </a>


                </article>


            </div>


        </div>


    </section>



    <section class="informacion">


        <div class="informacion-contenedor">


            <div class="informacion-texto">


                <p class="seccion-mini-titulo">
                    Proceso sencillo
                </p>


                <h2>
                    Encontrar una casa no tiene que ser complicado
                </h2>


                <p>

                    Nuestro sistema permite consultar rápidamente
                    la información de las propiedades y realizar
                    el alquiler de aquellas casas que todavía
                    se encuentren disponibles.

                </p>


                <a
                    href="/WebCS_G6_CasoEstudio2/View/ConsultaCasas.php"
                    class="informacion-enlace"
                >
                    Explorar propiedades →
                </a>


            </div>



            <div class="pasos">


                <div class="paso">

                    <div class="paso-numero">
                        1
                    </div>

                    <div class="paso-texto">

                        <strong>
                            Consulta las casas
                        </strong>

                        <span>
                            Revisa las propiedades registradas
                            y su disponibilidad.
                        </span>

                    </div>

                </div>



                <div class="paso">

                    <div class="paso-numero">
                        2
                    </div>

                    <div class="paso-texto">

                        <strong>
                            Selecciona una propiedad
                        </strong>

                        <span>
                            Escoge una de las casas que todavía
                            se encuentre disponible.
                        </span>

                    </div>

                </div>



                <div class="paso">

                    <div class="paso-numero">
                        3
                    </div>

                    <div class="paso-texto">

                        <strong>
                            Realiza el alquiler
                        </strong>

                        <span>
                            Ingresa el nombre del usuario y confirma
                            el alquiler de la propiedad.
                        </span>

                    </div>

                </div>


            </div>


        </div>


    </section>


</main>


<?php MostrarFooter(); ?>


</body>

</html>