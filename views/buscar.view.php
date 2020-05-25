<body>
<div class="container">
  <div class="row mb-2">
    <div class=" col-12 my-5"><h2><?php echo $titulo; ?></h2></div>
    <?php foreach($resultados_buscar as $post):    ?>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php echo $post['categoria']; ?></strong>
          <h3 class="mb-0"><?php echo $post['titulo']; ?></h3>
          <div class="mb-1 text-muted"><?php echo fecha($post['fecha']); ?></div>
          <p class="card-text"><?php $texto = $post ['texto']; echo substr($texto,0,100) . '...'; ?></p>
          <a href="single.php?id=<?php echo $post['id']; ?>" class="stretched-link">Continuar leyendo</a>
        </div>
        <div class="col-auto d-none d-lg-block ">
          <p><img class="bd-placeholder-img" width="200" height="250" src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb'];?>" alt=""></p>
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="100%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<?php require "paginacion.php"; ?>

    </div><!-- /.blog-main -->

  </div><!-- /.row -->

</main><!-- /.container -->

<?php require 'views/footer.view.php'; ?>
