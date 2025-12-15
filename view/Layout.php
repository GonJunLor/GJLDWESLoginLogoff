<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 15/12/2025
*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="webroot/media/images/logo.png">
    <link rel="stylesheet" href="webroot/css/fonts.css">
    <link rel="stylesheet" href="webroot/css/estilos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" type="text/css" rel="stylesheet">
    <title>Gonzalo Junquera Lorenzo</title>
</head>
<body>
    <div id="aviso">Login Logoff</div>
    <?php require_once $view[$_SESSION['paginaEnCurso']]; ?>
    <footer id="pie">
        <div>
            <a href="https://github.com/GonJunLor/GJLDWESLoginLogoff.git" target="_blank">
                <i class="fa-brands fa-github"></i>
            </a>
        </div>
        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados. 
        <div>
            <a href="https://gonzalojunlor.ieslossauces.es/" target="_blank">
            <address style="display: inline;">Gonzalo Junquera Lorenzo</address>
            </a>
            <time datetime="2025-12-15">15-12-2025.</time>
            <a href="https://mogutable.com/" id="webImitada" target="_blank">Web imitada</a>
        </div>
    </footer>
</body>
</html>