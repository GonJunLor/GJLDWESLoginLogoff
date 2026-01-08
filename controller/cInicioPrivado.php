<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 16/12/2025
*/

// vamos a la página detalle
if (isset($_REQUEST['detalle'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'detalle';
    header('Location: indexLoginLogoff.php');
    exit;
}

// Volvemos al índice general destruyendo la sesión
if (isset($_REQUEST['cerrarSesion'])) {
    $_SESSION['paginaAnterior'] = '';
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
    // Destruye la sesión
    session_destroy();
    header('Location: indexLoginLogoff.php');
    exit;
}

if (isset($_REQUEST['inicio'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
    header('Location: indexLoginLogoff.php');
    exit;
}

// comprueba si se ha pulsado cualquier botón de idioma y pone en la cookie su valor para establecer el idioma
if (isset($_REQUEST['idioma'])) {
    setcookie("idioma", $_REQUEST['idioma'], time()+604.800); // caducidad 1 semana
    header('Location: ./indexLoginLogoff.php');
    exit;
}

//Se crea un array con los datos del usuario para pasarlos a la vista
$avInicioPrivado=[
    'descUsuario' => $_SESSION['usuarioGJLDWESLoginLogoff']->getDescUsuario(),
    'numConexiones' => $_SESSION['usuarioGJLDWESLoginLogoff']->getNumAccesos(),
    'fechaAnterior' => $_SESSION['usuarioGJLDWESLoginLogoff']->getFechaHoraUltimaConexionAnterior()
];

// cargamos el layout principal, ya éste cargará cada página a parte de la estructura principal de la web
require_once $view['layout'];