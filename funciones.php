<?php
// Conexion a base de datos
function conexion() {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=base_datos_blog' , 'root' , '');
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}
// Funcion para limpiar datos
function limpiarDatos($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

  

//-----------------------------------------------------------Calculo para traer cantidad de articulos por pagina y paginacion

$conexion_Paginacion = conexion();

$statement = $conexion_Paginacion->prepare ("SELECT * FROM articulos");
$statement->execute();
$articulo = $statement->fetchAll();

// Contar articulos en base de datos
$total_articulos_bbdd = $statement-> rowCount();

$paginas = ceil($total_articulos_bbdd / $blog_config['post_por_pagina']);
if (isset($_GET['pagina']) && ($_GET['pagina'] >$paginas || $_GET['pagina']<=0)) {
    header ('Location: index.php?pagina=1');
}

//echo $paginas;

//Calculo para traer cantidad de articulos por pagina

$iniciar = ($_GET['pagina']-1) * $blog_config['post_por_pagina'];

$sentencia_articulos = $conexion_Paginacion->prepare ("SELECT * FROM articulos LIMIT :iniciar, :articulos_por_pagina");
$sentencia_articulos->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
$sentencia_articulos->bindParam(':articulos_por_pagina', $blog_config['post_por_pagina'], PDO::PARAM_INT);
$sentencia_articulos->execute();
$resultado_articulos = $sentencia_articulos->fetchAll();


//-----------------------------------------------------------Fin de cantidad de articulos por pagina y paginacion

//Funcion para limiar datos de url
function id_articulo($id) {
    return (int) limpiarDatos($id);
}  
//funcion para traer id de articulos
function obtener_post_por_id($conexion, $id) {
    $resultado_art_post = $conexion->query ("SELECT * FROM articulos WHERE id = $id LIMIT 1");
    $resultado_art_post = $resultado_art_post->fetchAll();
    return ($resultado_art_post) ? $resultado_art_post : false;
}

# Funcion para traducir la fecha de formato timestamp a español.
# Return: La fecha en español.
function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = $dia . ' de ' . $meses[$mes] . ' del ' . $year;
	return $fecha;
}

?>