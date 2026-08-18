<?php
include_once $_SERVER['DOCUMENT_ROOT']  . '/WebCS_G6_CasoEstudio2/Model/UtilModel.php';

function ConsultarCasasDisponiblesModel()
{
    $conn = OpenDB();

    $sql = "CALL sp_ConsultarCasasDisponibles()";

    $result = $conn->query($sql);

    $casas = [];

    while ($row = $result->fetch_assoc()) {
        $casas[] = $row;
    }

    $result->free();

    CloseDB($conn);

    return $casas;
}

function AlquilarCasaModel($idCasa, $usuarioAlquiler)
{
    $conn = OpenDB();

    $stmt = $conn->prepare(
        "CALL sp_AlquilarCasas(?, ?)"
    );

    $stmt->bind_param(
        "is",
        $idCasa,
        $usuarioAlquiler
    );

    $stmt->execute();

    $stmt->close();

    CloseDB($conn);

    return true;
}

function ConsultarCasasModel()
{
    $conn = OpenDB();

    $sql = "CALL sp_ConsultarCasas()";

    $result = $conn->query($sql);

    $casas = [];

    while ($row = $result->fetch_assoc()) {
        $casas[] = $row;
    }

    $result->free();

    CloseDB($conn);

    return $casas;

}