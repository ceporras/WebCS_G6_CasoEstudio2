<?php

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebCS_G6_CasoEstudio2/Controller/CasasController.php';

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebCS_G6_CasoEstudio2/View/Layout.php';


$casas = ConsultarCasas();

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
        Consulta de Casas | CasaFácil
    </title>

    <?php ImportCSS(); ?>


    <style>

        .consulta-main {
            min-height: calc(100vh - 180px);
            background: #f5f7fa;
            padding: 65px 20px 80px;
        }


        .consulta-contenedor {
            width: 100%;
            max-width: 1150px;
            margin: 0 auto;
        }


        .consulta-encabezado {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 30px;
            margin-bottom: 30px;
        }


        .consulta-etiqueta {
            display: inline-block;
            margin-bottom: 8px;
            color: #16a34a;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }


        .consulta-encabezado h1 {
            margin: 0 0 10px;
            color: #0f172a;
            font-size: 36px;
            font-weight: 700;
        }


        .consulta-encabezado p {
            margin: 0;
            color: #64748b;
            font-size: 15px;
            line-height: 1.7;
        }


        .btn-nuevo-alquiler {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            padding: 12px 18px;
            background: #16a34a;
            border-radius: 9px;
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
            transition: all 0.2s ease;
        }


        .btn-nuevo-alquiler:hover {
            background: #15803d;
            transform: translateY(-1px);
        }


        .tabla-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            overflow: hidden;
            box-shadow:
                0 10px 30px rgba(15, 23, 42, 0.07);
        }


        .tabla-responsive {
            width: 100%;
            overflow-x: auto;
        }


        .tabla-casas {
            width: 100%;
            border-collapse: collapse;
        }


        .tabla-casas thead {
            background: #f8fafc;
        }


        .tabla-casas th {
            padding: 16px 18px;
            border-bottom: 1px solid #e2e8f0;
            color: #475569;
            font-size: 12px;
            font-weight: 700;
            text-align: left;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            white-space: nowrap;
        }


        .tabla-casas td {
            padding: 18px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
            font-size: 14px;
            vertical-align: middle;
        }


        .tabla-casas tbody tr:last-child td {
            border-bottom: none;
        }


        .tabla-casas tbody tr {
            transition: background 0.2s ease;
        }


        .tabla-casas tbody tr:hover {
            background: #f8fafc;
        }


        .casa-descripcion {
            color: #0f172a;
            font-weight: 700;
        }


        .precio-casa {
            color: #0f172a;
            font-weight: 600;
        }


        .texto-secundario {
            color: #64748b;
        }


        .estado {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px 11px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }


        .estado-disponible {
            background: #dcfce7;
            color: #15803d;
        }


        .estado-alquilada {
            background: #fee2e2;
            color: #b91c1c;
        }


        .sin-resultados {
            padding: 45px 20px;
            color: #64748b;
            text-align: center;
        }


        @media (max-width: 800px) {

            .consulta-main {
                padding: 40px 16px 60px;
            }


            .consulta-encabezado {
                flex-direction: column;
                align-items: flex-start;
            }


            .consulta-encabezado h1 {
                font-size: 30px;
            }


            .btn-nuevo-alquiler {
                width: 100%;
            }

        }

    </style>

</head>


<body>


<?php MostrarHeader(); ?>


<main class="consulta-main">


    <div class="consulta-contenedor">


        <div class="consulta-encabezado">


            <div>

                <span class="consulta-etiqueta">
                    Propiedades
                </span>


                <h1>
                    Consulta de casas
                </h1>


                <p>
                    Consulte las propiedades registradas,
                    su precio mensual y el estado actual
                    del alquiler.
                </p>

            </div>


            <a
                href="/WebCS_G6_CasoEstudio2/View/AlquilerCasas.php"
                class="btn-nuevo-alquiler"
            >
                Alquilar casa
            </a>


        </div>



        <div class="tabla-card">


            <div class="tabla-responsive">


                <table class="tabla-casas">


                    <thead>

                        <tr>

                            <th>
                                Descripción
                            </th>

                            <th>
                                Precio mensual
                            </th>

                            <th>
                                Usuario
                            </th>

                            <th>
                                Fecha de alquiler
                            </th>

                            <th>
                                Estado
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <?php if (empty($casas)) { ?>


                            <tr>

                                <td
                                    colspan="5"
                                    class="sin-resultados"
                                >

                                    No existen casas para mostrar.

                                </td>

                            </tr>


                        <?php } else { ?>


                            <?php foreach ($casas as $casa) { ?>


                                <tr>


                                    <td>

                                        <span class="casa-descripcion">

                                            <?php
                                            echo htmlspecialchars(
                                                $casa["DescripcionCasa"]
                                            );
                                            ?>

                                        </span>

                                    </td>



                                    <td>

                                        <span class="precio-casa">

                                            ₡<?php
                                            echo number_format(
                                                $casa["PrecioCasa"],
                                                0,
                                                ",",
                                                "."
                                            );
                                            ?>

                                        </span>

                                    </td>



                                    <td>

                                        <?php

                                        if (
                                            empty(
                                                $casa["UsuarioAlquiler"]
                                            )
                                        ) {

                                            echo '<span class="texto-secundario">-</span>';

                                        } else {

                                            echo htmlspecialchars(
                                                $casa["UsuarioAlquiler"]
                                            );
                                        }

                                        ?>

                                    </td>



                                    <td>

                                        <?php

                                        if (
                                            empty(
                                                $casa["FechaAlquiler"]
                                            )
                                        ) {

                                            echo '<span class="texto-secundario">-</span>';

                                        } else {
                                                $fecha = date('d/m/Y', strtotime($casa["FechaAlquiler"]));
                                            echo htmlspecialchars(
                                                $fecha
                                            );
                                        }

                                        ?>

                                    </td>



                                    <td>


                                        <?php

                                        if (
                                            empty(
                                                $casa["UsuarioAlquiler"]
                                            )
                                        ) {
                                        ?>

                                            <span
                                                class="
                                                    estado
                                                    estado-disponible
                                                "
                                            >
                                                Disponible
                                            </span>

                                        <?php
                                        } else {
                                        ?>

                                            <span
                                                class="
                                                    estado
                                                    estado-alquilada
                                                "
                                            >
                                                Alquilada
                                            </span>

                                        <?php
                                        }
                                        ?>


                                    </td>


                                </tr>


                            <?php } ?>


                        <?php } ?>


                    </tbody>


                </table>


            </div>


        </div>


    </div>


</main>


<?php MostrarFooter(); ?>


</body>

</html>