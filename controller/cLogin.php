<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 16/12/2025
*/

// volvemos al index principal al dar a cancelar
if (isset($_REQUEST['cancelar'])) {
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
}

// entramos al inicio privado al dar a entrar
if (isset($_REQUEST['entrar'])) {
    $_SESSION['paginaEnCurso'] = 'inicioPrivado';
}

// cargamos el layout principal, ya éste cargará cada página a parte de la estructura principal de la web
require_once $view['layout'];