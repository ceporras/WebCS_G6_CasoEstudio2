<?php

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebCS_G6_CasoEstudio2/Controller/CasasController.php';

include_once $_SERVER['DOCUMENT_ROOT']
    . '/WebCS_G6_CasoEstudio2/View/Layout.php';


$casas = ConsultarCasasDisponibles();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idCasa = $_POST["IdCasa"] ?? null;

    $usuarioAlquiler = trim(
        $_POST["UsuarioAlquiler"] ?? ""
    );


    if (
        !empty($idCasa)
        && !empty($usuarioAlquiler)
    ) {

        AlquilarCasa(
            $idCasa,
            $usuarioAlquiler
        );


        header(
            "Location: /WebCS_G6_CasoEstudio2/View/ConsultaCasas.php"
        );

        exit;
    }
}

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
        Alquiler de Casas | CasaFácil
    </title>

    <?php ImportCSS(); ?>


    <style>

        .alquiler-main {
            min-height: calc(100vh - 180px);
            background: #f5f7fa;
            padding: 65px 20px 80px;
        }


        .alquiler-contenedor {
            width: 100%;
            max-width: 650px;
            margin: 0 auto;
        }


        .alquiler-encabezado {
            margin-bottom: 28px;
        }


        .alquiler-etiqueta {
            display: inline-block;
            margin-bottom: 8px;
            color: #16a34a;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }


        .alquiler-encabezado h1 {
            margin: 0 0 10px;
            color: #0f172a;
            font-size: 36px;
            font-weight: 700;
        }


        .alquiler-encabezado p {
            margin: 0;
            max-width: 580px;
            color: #64748b;
            font-size: 15px;
            line-height: 1.7;
        }


        .alquiler-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 32px;
            box-shadow:
                0 10px 30px rgba(15, 23, 42, 0.07);
        }


        .form-grupo {
            display: flex;
            flex-direction: column;
            margin-bottom: 22px;
        }


        .form-grupo label {
            margin-bottom: 8px;
            color: #334155;
            font-size: 14px;
            font-weight: 600;
        }


        .form-control {
            width: 100%;
            height: 48px;
            box-sizing: border-box;
            padding: 0 14px;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 9px;
            color: #0f172a;
            font-family: inherit;
            font-size: 15px;
            transition: all 0.2s ease;
        }


        .form-control:focus {
            outline: none;
            border-color: #16a34a;
            box-shadow:
                0 0 0 3px rgba(22, 163, 74, 0.12);
        }


        .form-control[readonly] {
            background: #f8fafc;
            color: #64748b;
            cursor: not-allowed;
        }


        .form-ayuda {
            display: block;
            margin-top: 7px;
            color: #94a3b8;
            font-size: 12px;
        }


        .btn-alquilar {
            width: 100%;
            min-height: 48px;
            margin-top: 5px;
            padding: 12px 20px;
            background: #16a34a;
            border: none;
            border-radius: 9px;
            color: #ffffff;
            font-family: inherit;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
        }


        .btn-alquilar:hover {
            background: #15803d;
            transform: translateY(-1px);
        }


        .btn-alquilar:active {
            transform: translateY(0);
        }


        .sin-casas {
            padding: 18px;
            margin-bottom: 22px;
            background: #fefce8;
            border: 1px solid #fde68a;
            border-radius: 9px;
            color: #854d0e;
            font-size: 14px;
        }


        @media (max-width: 700px) {

            .alquiler-main {
                padding: 40px 16px 60px;
            }


            .alquiler-encabezado h1 {
                font-size: 30px;
            }


            .alquiler-card {
                padding: 22px;
            }

        }

    </style>

</head>


<body>


<?php MostrarHeader(); ?>


<main class="alquiler-main">


    <div class="alquiler-contenedor">


        <div class="alquiler-encabezado">


            <span class="alquiler-etiqueta">
                Alquiler
            </span>


            <h1>
                Alquilar una casa
            </h1>


            <p>
                Seleccione una casa disponible e ingrese
                la información del usuario que realizará
                el alquiler.
            </p>


        </div>



        <div class="alquiler-card">


            <?php if (empty($casas)) { ?>


                <div class="sin-casas">

                    Actualmente no existen casas disponibles
                    para alquilar.

                </div>


            <?php } ?>


            <form
                method="POST"
                action=""
            >


                <div class="form-grupo">


                    <label for="IdCasa">
                        Casa disponible
                    </label>


                    <select
                        id="IdCasa"
                        name="IdCasa"
                        class="form-control"
                        required
                    >


                        <option
                            value=""
                            data-precio=""
                        >
                            Seleccione una casa
                        </option>


                        <?php foreach ($casas as $casa) { ?>


                            <option
                                value="<?php
                                    echo $casa["IdCasa"];
                                ?>"
                                data-precio="<?php
                                    echo $casa["PrecioCasa"];
                                ?>"
                            >

                                <?php

                                echo htmlspecialchars(
                                    $casa["DescripcionCasa"]
                                );

                                ?>

                            </option>


                        <?php } ?>


                    </select>


                    <span class="form-ayuda">

                        Solo se muestran las casas que
                        actualmente se encuentran disponibles.

                    </span>


                </div>



                <div class="form-grupo">


                    <label for="PrecioCasa">
                        Precio mensual
                    </label>


                    <input
                        type="text"
                        id="PrecioCasa"
                        name="PrecioCasa"
                        class="form-control"
                        placeholder="Seleccione una casa"
                        readonly
                    >


                    <span class="form-ayuda">

                        El precio se carga automáticamente
                        según la casa seleccionada.

                    </span>


                </div>



                <div class="form-grupo">


                    <label for="UsuarioAlquiler">
                        Usuario
                    </label>


                    <input
                        type="text"
                        id="UsuarioAlquiler"
                        name="UsuarioAlquiler"
                        class="form-control"
                        maxlength="30"
                        placeholder="Ingrese el nombre del usuario"
                        required
                    >


                </div>



                <button
                    type="submit"
                    name="btnAlquilar"
                    class="btn-alquilar"
                    <?php
                    if (empty($casas)) {
                        echo "disabled";
                    }
                    ?>
                >

                    Alquilar casa

                </button>


            </form>


        </div>


    </div>


</main>


<?php MostrarFooter(); ?>



<script>

    const casaSelect =
        document.getElementById("IdCasa");

    const precioInput =
        document.getElementById("PrecioCasa");


    casaSelect.addEventListener(
        "change",
        function () {

            const opcion =
                this.options[this.selectedIndex];

            const precio =
                opcion.dataset.precio;


            if (precio) {

                precioInput.value =
                    "₡" +
                    Number(precio)
                        .toLocaleString("es-CR");

            } else {

                precioInput.value = "";

            }

        }
    );

</script>


</body>

</html>