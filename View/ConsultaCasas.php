<?php

include_once $_SERVER['DOCUMENT_ROOT']  . '/WebCS_G6_CasoEstudio2/Controller/CasasController.php';
include_once $_SERVER['DOCUMENT_ROOT']  . '/WebCS_G6_CasoEstudio2/View/Layout.php';
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Consulta de Casas</title>
    <?php ImportCSS(); ?>
</head>

<body>
    <?php Navbar(); ?>
    <main class="container py-5" style="margin-top: 90px; min-height: 70vh;">
        <div>
            <h1>Consulta de casas</h1>
        </div>
    </main>
</body>

</html>