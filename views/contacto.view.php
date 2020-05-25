<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Contacto</title>
    <style>
        
    </style>
</head>

<body>
<div class="jumbotron">
      <div class=" container">
          <h1 class="display-3 ">Formulario de contacto</h1>
          <p class="bd-lead">Deja tus comentarios abajo y nos contactaremos con usted</p>  
      </div>
    </div>  
<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-6 shadow-sm">
            <div class="card-header">
            <h4 class="text-muted">Ingresa tus datos para poder contactarnos</h4>   
            </div>
            <div class="needs-validation card-body">
                <form  action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method='post'>
                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre:" id="nombre" value= '<?php if (!$enviado && isset ($nombre)) echo $nombre ?>'>
                <input type="text" class="form-control mb-3" name="correo" placeholder="Correo:" id="correo" value= '<?php if (!$enviado && isset ($correo)) echo $correo ?>'>
                <textarea name="mensaje" id="" class="form-control mb-3" placeholder="Mensaje:" value= '<?php if (!$enviado && isset ($mensaje)) echo $mensaje ?>'></textarea>
                <?php if (!empty($errores)): ?>
                    <div class="alert error">
                     <?php  echo $errores; ?>
                     </div>
                <?php elseif ($enviado): ?>
                <div class="alert success">
                <?php echo $enviado; ?>
                </div>
                <?php endif ?>
                <input type="submit" name="submit" value="Enviar Correo" class="btn btn-primary">
            </form>
        </div> 
            
        </div>
    </div>
</div>    
</body>

</html>