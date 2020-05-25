<?php
require 'views/header.view.php';
if (isset($_SESSION['usuario'])) {
    header ('Location: index.php');
    die();
}

$errores = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING); 
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    try {
        $conexion = conexion();
    } catch (PDOException $e) {
        echo "Error:" . $se->getMessage();
    }

    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password');
    $statement->execute(array(':usuario' => $usuario, ':password' => $password));

    $resultado = $statement->fetch();

    //var_dump($resultado);

    if ($resultado !== false) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
    } else {
        $errores .= '<li>Usuario o el password incorrectos</li>';
    }
}    

require 'views/login.view.php';

require 'views/footer.view.php';

?>