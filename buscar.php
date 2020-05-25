<?php
require 'views/header.view.php';

$conexion = conexion();
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);

    $statement_buscar = $conexion->prepare('SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda');

    $statement_buscar-> execute(array(':busqueda' => "%$busqueda%"));
    $resultados_buscar = $statement_buscar->fetchAll();

    if (empty($resultados_buscar)) {
            $titulo = 'No se encontraron articulos con el resultado: ' . $busqueda;
        } else {
            $titulo = 'Resultados de la busqueda: ' . $busqueda;
        }        
} else {
    header('Location: ' . RUTA . '/error.php');
}
require 'views/buscar.view.php';
?>