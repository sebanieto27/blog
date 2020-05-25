<?php
if (!$_GET) {
    header ('Location: index.php?pagina=1');
  }
require 'views/header.view.php';

require 'views/index.view.php';


?>
