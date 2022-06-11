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

require 'db.php';

$conexiondb = conectardb();
//$cedula = $_GET['cedula'];
$query = "DELETE FROM cocinero WHERE cedula ='" . $cedula . "'";
$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
    $location = "Location: /wep_app/listar_docente.php";
    $message = "Datos eliminada correctamente";
    setcookie("alert", "alert-success");
} else {
    $message = "Error al eliminar los datos. Intente nuevamente";
    setcookie("alert", "alert-danger");
}
setcookie("message", $message);
header($location);
exit();

mysqli_close($conexiondb);
