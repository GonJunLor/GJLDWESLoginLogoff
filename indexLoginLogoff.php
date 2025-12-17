<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 15/12/2025
*/

// cargamos los archivos de configuración
require_once  'conf/confApp.php';
require_once  'conf/confDBPDO.php';

// iniciacmos session
session_start();

// si no esta la página en curso en la sesión la creamos con inicio público
if (!isset($_SESSION['paginaEnCurso'])) {
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
}

$textoBotonIniciarSesion = 'Iniciar Sesión';
$estadoBotonInicarSesion = 'visible';

// comprobamos que existe la sesion para este usuario para cambiar el texto del boton de iniciar sesión
if (isset($_SESSION["usuarioDAW205AppLoginLogoff"])) {
    $textoBotonIniciarSesion = 'Hola '.$_SESSION["usuarioDAW205AppLoginLogoff"]['CodUsuario'];

    // si está la sesión iniciada redirigimos directamente al inicio privado
    if (isset($_REQUEST['iniciarSesion'])) {
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
    }
}

if (isset($_REQUEST['iniciarSesion'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'login';
    $estadoBotonInicarSesion = 'oculto';
}

if (isset($_REQUEST['inicio'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
}

// cargamos el controlador de la pagina en curso
require_once $controller[$_SESSION['paginaEnCurso']];

