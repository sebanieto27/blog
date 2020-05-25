<body>
<div class="container">
   
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <?php foreach($resultado_articulos as $post):    ?>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php echo $post['categoria']; ?></strong>
          <h3 class="mb-0"><?php echo $post['titulo']; ?></h3>
          <div class="mb-1 text-muted"><?php echo fecha($post['fecha']); ?></div>
          <p class="card-text"><?php $texto = $post ['texto']; echo substr($texto,0,100) . '...'; ?></p>
          <a href="single.php?id=<?php echo $post['id']; ?>" class="stretched-link">Continuar leyendo</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <p><img class="bd-placeholder-img" width="200" height="250" src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb'];?>" alt=""></p>
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
