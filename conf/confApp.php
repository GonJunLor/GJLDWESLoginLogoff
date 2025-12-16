<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 15/12/2025
*/

require_once 'core/231018libreriaValidacion.php';

$controller=[
    'inicioPublico' => 'controller/cInicioPublico.php',
    'login' => 'controller/cLogin.php',
    'inicioPrivado' => 'controller/cInicioPrivado.php',
    'detalles' => 'controller/cDetalles.php'
];

$view=[
    'layout' => 'view/Layout.php',
    'inicioPublico' => 'view/vInicioPublico.php',
    'login' => 'view/vLogin.php',
    'inicioPrivado' => 'view/vInicioPrivado.php',
    'detalles' => 'view/vDetalles.php'
];
?>