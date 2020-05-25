<?php
require 'views/header.view.php';
if (isset($_SESSION['usuario'])) {
    header ('Location: index.php');
    die();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nombre = $_POST ['nombre'];
    $apellido = $_POST ['apellido'];
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $email = $_POST ['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $provincia = $_POST ['provincia'];
    $zip = $_POST['zip'];

    //echo "$nombre . $apellido .$usuario . $email . $password . $password2 . $direccion . $ciudad . $provincia . $zip";

    $errores = "";

    if (empty($usuario) or empty ($apellido) or empty ($usuario) or empty ($email) or empty ($password) or empty ($password2) or empty ($direccion) or empty ($ciudad) or empty ($provincia) or empty ($zip)) {
        $errores .= '<li>Por favor rellena todos los datos correctamente.</li>';
    } else {
        $conexion = conexion();
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario and email = :email limit 1');
        $statement->execute(array(':usuario' => $usuario, ':email' =>$email));
        
        $resultado = $statement ->fetch();

        
        //var_dump($resultado);
        
        if ($resultado != false) {
            $errores .= '<li>El nombre de usuario o el email ya existe.</li>';
        }

        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        if ($password != $password2) {
            $errores .= '<li>Las contraseñas no son iguales</li>';
        }
    } 
    if ($errores == '') {
        $statement = $conexion->prepare ('INSERT INTO usuarios (id, nombre, apellido, usuario, email, password, direccion, ciudad, provincia, zip) VALUES (null, :nombre, :apellido, :usuario, :email, :password, :direccion, :ciudad, :provincia, :zip)');
        $statement->execute(array(':nombre' => $nombre, ':apellido' => $apellido, ':usuario' => $usuario, ':email' => $email, ':password' => $password, ':direccion' => $direccion, ':ciudad' => $ciudad, ':provincia' => $provincia, ':zip' => $zip));
        header ('Location: login.php');
    }
}

require 'views/registro.view.php';

?>