<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 15/12/2025
*/
?>

<nav>
    <a href="./indexLoginLogoff.php"><img src="webroot/media/images/logo.png" alt="logo"></a>
    <h2>Inicio público</h2>
    <!-- <form action="" method="post">
        <button type="submit" name="idioma" value="ES" id="ES" 
        style="background-color:<?php echo $_COOKIE["idioma"]=="ES"? '#c2bcb9' : 'white';?>">
            <img src="webroot/media/images/banderaEs.png" alt="es">
        </button>
        <button type="submit" name="idioma" value="EN" id="EN"
        style="background-color:<?php echo $_COOKIE["idioma"]=="EN"? '#c2bcb9' : 'white';?>">
            <img src="webroot/media/images/banderaGb.png" alt="en">
        </button>
        <button type="submit" name="idioma" value="FR" id="FR"
        style="background-color:<?php echo $_COOKIE["idioma"]=="FR"? '#c2bcb9' : 'white';?>">
            <img src="webroot/media/images/banderaFr.png" alt="fr">
        </button>
    </form> -->
    <form action="" method="post">
        <button name="iniciarSesion" class="boton">
            <!-- <span><?php echo $textoBotonIniciarSesion; ?></span> -->
        </button>
    </form>
</nav>
<main>
    <img src="webroot/media/images/arbol.png" alt="arbol de aplicación">
</main>