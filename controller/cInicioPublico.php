<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 15/12/2025
*/

// comprobamos que existe la sesion para este usuario para cambiar el texto del boton de iniciar sesión
if (isset($_SESSION["usuarioDAW205AppLoginLogoff"])) {
    $textoBotonIniciarSesion = 'Hola '.$_SESSION["usuarioDAW205AppLoginLogoff"]['CodUsuario'];

    // si está la sesión iniciada redirigimos directamente al inicio privado
    if (isset($_REQUEST['iniciarSesion'])) {
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header('Location: indexLoginLogoff.php');
        exit;
    }
}

if (isset($_REQUEST['iniciarSesion'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'login';
    $estadoBotonInicarSesion = 'oculto';
    header('Location: indexLoginLogoff.php');
    exit;
}

if (isset($_REQUEST['inicio'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
    header('Location: indexLoginLogoff.php');
    exit;
}

// cargamos el layout principal, ya éste cargará cada página a parte de la estructura principal de la web
require_once $view['layout'];