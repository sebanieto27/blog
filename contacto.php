<?php
require 'views/header.view.php';

$errores = '';
$enviado = 'Su mensaje fue enviado correctamente';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre)) {
        $nombre = trim ($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa un nombre <br />';
    }
    if (!empty($correo)) {
       $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
       if (!filter_var($correo, FILTER_SANITIZE_EMAIL)) {
           $errores .= 'Por favor imgresa un email correcto <br />';
       }
    } else {
        $errores .= 'Por favor ingresa un email <br />';
    }
    if (!empty($mensaje)){
        $mensaje = htmlspecialchars ($mensaje);
        $mensaje = trim ($mensaje);
        $mensaje = stripslashes ($mensaje);
    } else {
        $errores .= 'Por favor ingresa un mensaje <br/>';
    }
    if (!$errores) {
        $conexion = conexion();
        $statement = $conexion->prepare('INSERT INTO contacto (nombre, correo, mensaje) VALUES (:nombre ,:correo , :mensaje)');
        $statement->execute(array(':nombre' => $nombre, ':correo' =>$correo, ':mensaje' => $mensaje));
        
        $resultado = $statement ->fetch();
    }
}

require 'views/contacto.view.php';

?>
