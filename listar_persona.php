<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Docentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./images/logo.png" sizes="16x16">
</head>

<body>
    <!--Barra de navegación-->
    <?php
    include('nav.php');
    ?>

<?php
include 'db.php';
$conexiondb = conectardb();
$query = "SELECT * FROM persona ";
$resultado = mysqli_query($conexiondb, $query);
mysqli_close($conexiondb);
?>

<!--Alerta de modificacion-->
<div class="row">
    <div class="float-sm-4 mt-3">
        <?php
        if (isset($_COOKIE['message'])) {
            echo "<div class='alert " . $_COOKIE['alert'] . " alert-dismissible fade show' role='alert' style='position:absolute'>";
            echo $_COOKIE['message'];
            echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
            echo "</div>";
            setcookie('message', '', 1);
            setcookie('alert', '', 1);
        }
        ?>
    </div>
</div>


<div id="list" class="col-sm-6 offset-sm-3">
    <h1 class="text-center  mt-5">Listado de Pacientes</h1>

    <table class="table ">
        <thead>
            <tr>
                <th scope="col"><b>N</b></th>
                <th scope="col"><b>Cédula</b></th>
                <th scope="col"><b>Nombre</b></th>
                <th scope="col"><b>Opciones</b></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = 1;
            while ($persona = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<th scope='row'>" . $index++ . "</th>";
                echo "<td><b>" . $persona['cedula_p'] . "</b></td>";
                echo "<td><b>" . $persona['nombre_p'] . "</b></td>";
                echo "<td>";
                echo "<a href='/hospital/editar_persona.php?cedula_p=" . $persona['cedula_p'] . "' class='btn btn-success mx-2 my-2'> <i class='fas fa-pen'></i> </a>";
                echo "<a href='/hospital/eliminar_persona.php?cedula_p=" . $persona['cedula_p'] . "' class='btn btn-danger mx-2 my-2'> <i class='fas fa-trash'></i> </a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>


<link rel="stylesheet" href="./css/index.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

</body>

</html>