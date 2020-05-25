<?php
require 'views/header.view.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);
    if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']) {
        $_SESSION['admin'] = $blog_admin['admin'];
        header('Location:' . RUTA . '/administracion');
    }
} else {
    echo "error";
}


require 'views/login-admin.view.php';
?>