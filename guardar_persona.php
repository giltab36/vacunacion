<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institución</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./images/logo.png" sizes="16x16">
    <link rel="stylesheet" href="./css/index.css">

</head>

    <!--Barra de navegación-->
    <?php
    include('nav.php');
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<?php

include 'db.php';

$cedula_p = $_POST['cedula_p'];
$nombre_p = $_POST['nombre_p'];
$editar = $_POST['editar'];

$conexiondb = conectardb();

if ($editar == "si") {
    $id_persona = $_POST['id_persona'];
    $query = "UPDATE persona SET nombre_p='" . $nombre_p . "'WHERE cedula ='" . $cedula_p ."'";
} else {
    $query = "INSERT INTO persona (nombre_p, cedula_p) VALUES 
        ('$nombre_p', '$cedula_p')";
}

$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
    if ($editar == "si") {
        $location = "Location: /restaurante/listar_cocinero.php";
        $message = "Se editaron los datos correctamente";
    } else {
        $location = "Location: /hospital/persona.php";
        $message = "Se registraron los datos correctamente";
    }
    setcookie("alert", "alert-success");
} else {
    if ($editar == "si") {
        $message = "Error al editar los datos. Intente nuevamente";
    } else {
        $message = "Error al registrar los datos. Intente nuevamente";
    }
    setcookie("alert", "alert-danger");
}

setcookie("message", $message);
header($location);
exit();

mysqli_close($conexiondb);
