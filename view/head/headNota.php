<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 
    echo (empty($_GET['idNota'])) 
    ? ((strpos($_SERVER['REQUEST_URI'],'create')) ? "Añadir nueva nota " :"Index") 
    : ((strpos($_SERVER['REQUEST_URI'],'show')) ? "Detalle de la nota ".$_GET['idNota'] :"Actualizar nota ".$_GET['idNota']) ;
    ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid bg-dark p-2 mb-3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/RepasoNov/indexNota.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Notas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/RepasoNov/view/username/indexNota.php">Notas</a></li>
            <li><a class="dropdown-item" href="/RepasoNov/view/username/createNota.php">Añadir nuevas notas</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="container-fluid">
