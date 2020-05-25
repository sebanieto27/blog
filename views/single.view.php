
<title>Lectura</title>
  <body>
    <div class="jumbotron">
      <div class=" container">
          <h1 class="display-3"><?php echo $post['titulo']; ?></h1>
          <h3><?php echo $post['extracto']; ?></h3>
          <p class="bd-lead"><?php echo fecha($post['fecha']); ?></p>
      </div>
    </div>  
      <div class="container py-5 ">
        <div class="row">
          <div class="col-12 py-4">    
          <img width="100%" height="197px" background="#55595c" color="#eceeef" class="card-img-top" text="Thumbnail" src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb-articulo'];?>" alt=""></div>
          
          <div class="col-12">
              <div class="">
                <h3><?php echo $post['categoria']; ?></h3>    
                <p><?php echo nl2br($post['texto']); ?></p>
              </div>
          </div>
        </div>
      </div>
<?php require 'views/footer.view.php'; ?>