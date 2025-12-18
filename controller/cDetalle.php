<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 16/12/2025
*/

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = 'inicioPrivado';
    header('Location: indexLoginLogoff.php');
    exit;
}

// cargamos el layout principal, ya éste cargará cada página a parte de la estructura principal de la web
require_once $view['layout'];