<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 15/12/2025
*/

require_once  'conf/confApp.php';
require_once  'conf/confDBPDO.php';

session_start();

if (!isset($_SESSION['paginaEnCurso'])) {
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
}

require_once $controller[$_SESSION['paginaEnCurso']];

