<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Logo superior de la pagina-->
    <link rel="icon" type="image/png" href="./images/logo.png" sizes="16x16">
</head>

<body style="background: url('./images/fondo.jpg') no-repeat; background-position: center;">

    <!--Barra de navegación-->
    <?php
    include('nav.php');
    ?>

    <!--Conexion a la base de datos-->
    <?php
    include 'db.php';
    $conexiondb = conectardb();
    $cedula_c = $_GET['cedula_c'];
    $query = "SELECT * FROM cocinero WHERE cedula_c ='" . $cedula_c . "'";
    $respuesta = mysqli_query($conexiondb, $query);
    $persona = mysqli_fetch_row($respuesta);
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

    <!--Formulario para editar informacion del docente-->
    <div id="formul">
        <h1 class="text-center">Editar Cocinero</h1>
        <div class="col-sm-4 offset-sm-4">
            <br>
            <form action="guardar_cocinero.php" method="post">
                <table border="0">
                    <tr>
                        <th><b><label class="ed" for="">Cedula:</label></b></th>
                        <th><input type="text" name="cedula_c" id="" value='<?php echo $persona[1]; ?>'></th>
                    </tr>

                    <tr>
                        <th><b><label class="ed" for="">Nombre:</label></b></th>
                        <th><input type="text" name="nombre_c" id="" value='<?php echo $persona[2]; ?>'></th>
                    </tr>

                    <tr>
                        <th><b><label class="ed" for="">Apellido:</label></b></th>
                        <th><input type="text" name="apellido_c" id="" value='<?php echo $persona[3]; ?>'></th>
                    </tr>

                </table>
                <input type="hidden" name="cocinero_id" id="" value='<?php echo $persona[0]; ?>' readonly>
                <input type="hidden" name="editar" id="" value='si' readonly>
                <input class="btn btn-outline-dark" type="submit" value="GUARDAR">
            </form>
        </div>
    </div>


    <link rel="stylesheet" href="./css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>


</body>

</html>