<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 11/01/2026
*/

require_once 'core/231018libreriaValidacion.php';

require_once  'conf/EDconfDBPDO.php';

//Cargamos la definición de la clase
require_once 'model/Usuario.php'; 
require_once 'model/UsuarioPDO.php';
require_once 'model/DBPDO.php';
require_once 'model/ErrorApp.php';

$controller=[
    'inicioPublico' => 'controller/cInicioPublico.php',
    'login' => 'controller/cLogin.php',
    'inicioPrivado' => 'controller/cInicioPrivado.php',
    'detalle' => 'controller/cDetalle.php',
    'error' => 'controller/cError.php',
    'registro' => 'controller/cRegistro.php'
];

$view=[
    'layout' => 'view/Layout.php',
    'inicioPublico' => 'view/vInicioPublico.php',
    'login' => 'view/vLogin.php',
    'inicioPrivado' => 'view/vInicioPrivado.php',
    'detalle' => 'view/vDetalle.php',
    'error' => 'view/vError.php',
    'registro' => 'view/vRegistro.php'
];

$titulo=[
    'layout' => 'Layout',
    'inicioPublico' => 'Inicio Público',
    'inicioPrivado' => 'Inicio Privado',
    'detalle' => 'Detalle'
];
$textoBotonIniciarSesion = 'Iniciar Sesión';
$estadoBarraNavegacion = 'visible';
?>