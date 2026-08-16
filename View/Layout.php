<?php

function ImportCSS()
{
    echo '
        <link
            rel="stylesheet"
            href="/WebCS_G6_CasoEstudio2/View/assets/css/estilos.css"
        >
    ';
}

function MostrarHeader()
{
    include $_SERVER['DOCUMENT_ROOT']
        . '/WebCS_G6_CasoEstudio2/View/layout/header.php';
}

function MostrarFooter()
{
    include $_SERVER['DOCUMENT_ROOT']
        . '/WebCS_G6_CasoEstudio2/View/layout/footer.php';
}

?>