<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">
      <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']-1 ?>">Anterior</a>
    </li>

    <?php for ($i=0;$i<$paginas;$i++): ?>
    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"><a class="page-link" href="index.php?pagina=<?php echo $i+1 ?>"><?php echo$i+1 ?></a></li>
    <?php endfor ?>

    <li class="page-item" <?php echo isset($_GET['pagina'])>=$paginas ? 'disabled' : '' ?>><a class="page-link" href="index.php?pagina=<?php echo  $_GET['pagina']+1 ?>">Siguiente</a></li>
  </ul>
</nav>