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
    'detalle' => 'controller/cDetalle.php'
];

$view=[
    'layout' => 'view/Layout.php',
    'inicioPublico' => 'view/vInicioPublico.php',
    'login' => 'view/vLogin.php',
    'inicioPrivado' => 'view/vInicioPrivado.php',
    'detalle' => 'view/vDetalle.php'
];

$titulo=[
    'layout' => 'Layout',
    'inicioPublico' => 'Inicio Público',
    'login' => 'Login',
    'inicioPrivado' => 'Inicio Privado',
    'detalle' => 'Detalle'
];
?>