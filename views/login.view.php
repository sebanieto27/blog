  <head>
    <title>Login</title>
  </head>

  <body>
    <div class="jumbotron">
      <div class=" container">
          
          <h1 class="display-3">Iniciar Sesion</h1>
          <p class="bd-lead">Inicia sesion para poder disfrutar del contenido que ofrece nuestra web</p>
      </div>
    </div> 
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-3 card-deck card justify-content-center">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST" class="form-signin" name="login">
                <!--img class="mb-4" src="" alt="" width="72" height="72">-->
                <h1 class="h5 mb-3 font-weight-normal mr-1 text-center mt-2">Por favor logueate</h1>
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
                <a class="text-center" href="registro.php"><p class>Aun no posees cuenta?</p></a>
        </form>
        </div>
        </div>
    </div>
  </body>
</html>