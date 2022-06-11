<?php
$menu = <<<END
<script src="./js/bootstrap.bundle.min.js"></script>
<link href="./css/bootstrap.min.css" rel="stylesheet">

<div id="navegacion">
  <nav class="navbar navbar-expand-lg bg-light">
   <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">
        <img src="./images/logo.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
        Clinicas
      </a>      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Registrar Vacunas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./persona.php">Registrar Personas</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="./vacuna_persona.php">Vacunación</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Listados
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="./listar_vacuna.php">Vacunas</a></li>
              <li><a class="dropdown-item" href="./listar_persona.php">Pacientes</a></li>
              <li><a class="dropdown-item" href="./listar_vp.php">Vacunaiones</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reportes
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="reporte_c.php">Cocineros</a></li>
              <li><a class="dropdown-item" href="reporte_i.php">Ingredientes</a></li>
              <li><a class="dropdown-item" href="reporte_r.php">Recetas</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

END;

echo ($menu);
