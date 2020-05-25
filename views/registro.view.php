  <head>
    <title>Registro</title>
  </head>
  <body>
    <div class="jumbotron">
        <div class=" container">
          <h1 class="display-3 ">Registrate</h1>
          <p class="bd-lead">Registrate para poder disfrutar del contenido que ofrece nuestra web</p>
        </div>
    </div> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12 card-deck card justify-content-center">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
                  <h1 class="h3 mb-3 font-weight-normal text-center mt-2">Ingresa tus datos</h1>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <!--<label for="nombre">Nombre</label>-->
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-6">
                    <!--<label for="inputApellido">Apellido</label>-->
                       <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                    </div>
                </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <!--<label for="inputUsuario">Usuario</label>-->
      <input type="text" class="form-control" name="usuario" placeholder="Usuario">
    </div>
    <div class="form-group col-md-6">
      <!--<label for="inputEmail4">Email</label>-->
      <input type="text" class="form-control" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <!--<label for="inputPassword4"> Password</label>-->
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <!--<label for="inputPassword4-b">Repetir Password</label>-->
      <input type="password" class="form-control" name="password2" placeholder="Repetir Password">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-12">
    <!--<label for="inputAddress">Direccion</label>-->
    <input type="text" class="form-control" name="direccion" placeholder="Dirección">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <!--<label for="inputCity">Ciudad</label>-->
      <input type="text" class="form-control" name="ciudad" placeholder="Ciudad">
    </div>
    <div class="form-group col-md-6">
      <!--<label for="inputState">Provincia</label>-->
      <input type="text" class="form-control" name="provincia" placeholder="Provincia">
    </div>
    <div class="form-group col-md-2">
      <!--<label for="inputZip">Zip</label>-->
      <input type="text" class="form-control" name="zip" placeholder="Zip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-lg btn-primary btn-block mb-3">Registrate</button>

<?php if(!empty($errores)): ?>
    <div>
        <ul>
        <?php echo $errores; ?>
        </ul>
    </div>
<?php endif;?>

</form>
    <div class="text-center py-2">
        <p>Ya tienes cuenta?</p>
        <a href="login.php">Ingresa</a>
    </div>
    </div>
    </div>
    <div><br /></div>
    </div>
  </body>
</html>