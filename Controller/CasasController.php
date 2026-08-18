<?php
include_once $_SERVER['DOCUMENT_ROOT']  . '/WebCS_G6_CasoEstudio2/Model/CasasModel.php';

function ConsultarCasasDisponibles()
{
    return ConsultarCasasDisponiblesModel();
}

function AlquilarCasa ($idCasa, $usuarioAlquiler)
{
     return AlquilarCasaModel(
        $idCasa,
        $usuarioAlquiler
    );
}

function ConsultarCasas()
{
    return ConsultarCasasModel();
}

   