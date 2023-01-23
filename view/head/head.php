<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 
    echo (empty($_GET['idAlumno'])) 
    ? ((strpos($_SERVER['REQUEST_URI'],'create')) ? "Añadir nuevos alumnos" :"Index") 
    : ((strpos($_SERVER['REQUEST_URI'],'show')) ? "Detalles del registro ".$_GET['idAlumno'] :"Actualizar registro ".$_GET['idAlumno']) ;
    ?></title>
    <style>.staticId{font-weight: bold;text-align: center;}</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid bg-dark p-2 mb-3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/RepasoNov/index.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alumnos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/RepasoNov/view/username/index.php">Alumnos</a></li>
            <li><a class="dropdown-item" href="/RepasoNov/view/username/create.php">Añadir nuevos alumnos</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="container w-25">
        <input class="form-control me-2 light-table-filter" type="text" placeholder="Buscar"
         name="buscar_1" id="buscar_1" onkeyup="buscar_ahora($('buscar_1').val());">
         <div id="datos_buscador" class="container pl-5 pr-5"></div>
  </div>
  </div>
</nav>
</div>
<div class="container-fluid">
