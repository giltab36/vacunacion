<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro del Docente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./images/logo.png" sizes="16x16">
</head>

<body>

    <?php
    include('nav.php');
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

    <div id="formu">
        <h1 id="titulo_principal" class="text-center">Registrar Persona</h1>

        <div class="col-sm-4 offset-sm-4">
            <br>
            <form action="guardar_persona.php" method="post">

                <div class="mb-2">
                    <th><b><label for="">Cedula:</label></b></th>
                    <th><input class="form-control" type="text" name="cedula_p" id=""></th>
                </div>

                <div class="mb-3">
                    <th><b><label for="">Nombre:</label></b></th>
                    <th><input class="form-control" type="text" name="nombre_p" id=""></th>
                </div>

                <input type="hidden" name="editar" id="" value='no' readonly>
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