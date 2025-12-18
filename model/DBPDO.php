<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 18/12/2025
*/
final class DBPDO{
    public static function ejecutarConsulta($sentenciaSQL, $parametros){
        try {
            // Conectamos a la base de datos
            $miDB = new PDO(DSN,USERNAME,PASSWORD);

            // Preparamos la consulta
            $consulta = $miDB->prepare($sentenciaSQL);

            // Ejecutamos la consulta
            $consulta->execute($parametros);
            
            // Devuelvemos el resultado de la consulta
            return $consulta;
            
        } catch (PDOException $miExceptionPDO) {
            // temporalmente ponemos estos errores para que se muestren en pantalla
            echo 'Error: '.$miExceptionPDO->getMessage().'con código de error: '.$miExceptionPDO->getCode();
            header('Location: indexLoginLogoff.php');
            exit;
        } finally {
            unset($miDB);
        } 

    } 
}
