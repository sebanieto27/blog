
<title>Inicio administracion</title>
  <body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-3 card-deck card v justify-content-center">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST" class="form-signin" name="login">
                <!--img class="mb-4" src="" alt="" width="72" height="72">-->
                <h1 class="h3 mb-3 font-weight-normal mr-1">Acceso administracion</h1>
                <label for="inputUsuario"></label>
                <input type="text" class="form-control" name="usuario" placeholder="Usuario">         
                <label for="inputPassword4"> </label>
                <input type="password" class="form-control" name="password" placeholder="Password">
                <label for=""> </label>           
                <button class="btn btn-lg btn-primary btn-block mb-3" type="submit">Ingresa</button>
                <?php if(!empty($errores)): ?>
                <div>
                <ul>
                <?php echo $errores; ?>
                </ul>
                </div>
                <?php endif;?>
                <a href="registro.php"><p class></p></a>
        </form>
        </div>
        </div>
    </div>
<?php require 'views/footer.view.php'; ?>