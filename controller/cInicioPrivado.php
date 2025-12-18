<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 16/12/2025
*/

// vamos a la página detalle
if (isset($_REQUEST['detalle'])) {
    $_SESSION['paginaEnCurso'] = 'detalle';
    header('Location: indexLoginLogoff.php');
    exit;
}

// cargamos el layout principal, ya éste cargará cada página a parte de la estructura principal de la web
require_once $view['layout'];