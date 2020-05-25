<?php

require 'views/header.view.php';


//Traemos con la funcion de "id_articulo" para limpiar en caso de que quieran insertar codigo en url 
$id_articulo = id_articulo($_GET['id']);
if (empty($id_articulo)) {
    header ('Location: index.php');
}
$conexion = conexion();
$post = obtener_post_por_id($conexion, $id_articulo);

if (!$post) {
    header ('Location: index.php');
}
$post = $post[0];




require 'views/single.view.php';






?>