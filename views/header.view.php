<?php session_start();
require 'administracion/config.php';
require 'funciones.php';
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/blog.css">
    <style>
        
    </style>
</head>
<div class="container">
  <header class="py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="index.php">Logo</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="index.php">Blog Final</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
      
        <a class="btn btn-sm btn-outline-primary mx-2" href="login.php">Entrar</a>
        <a class="btn btn-sm btn-outline-secondary" href="registro.php">Registrate</a>
      </div>
    </div>
    <div class="py-1 mb-2 row justify-content-between align-items-center" style="border-top: 1px solid #e5e5e5;">
    <div class="col-6">
      <nav>
        <a class="p-2 text-muted" href="#">Facebook</a>
        <a class="p-2 text-muted" href="#"><i class="fas fa-instagram"></i>Instagram</a>
        <a class="p-2 text-muted" href="#">Contacto</a>
      </nav>
    </div>
    <div class="col-6">
      <form class="form-inline mt-2 mt-md-0 justify-content-end">
        <input action="<?php echo RUTA; ?>/buscar.php" method="get" name="busqueda" class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </div>
  </header>
</div> 
