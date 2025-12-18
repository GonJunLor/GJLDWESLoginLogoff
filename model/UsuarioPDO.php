<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 18/12/2025
*/

final class UsuarioPDO {
    public static function validarUsuario($codUsuario, $password){
        $
        $sql = <<<CONSULTASQL
            SELECT * FROM T01_Usuario
            WHERE T01_CodUsuario = :usuario
            AND T01_Password = SHA2(:contras,256)
        CONSULTASQL;
        
        $parametros = [
            ':usuario' => $codUsuario,
            ':contras' => $codUsuario.$password
        ];

        $consulta = DBPDO::ejecutarConsulta($sql,$parametros);
        $usuarioBD = $consulta->fetchObject();
        if ($usuarioBD) {
            
        }

        return 
    }

    public static function altaUsuario(){
        
    }
    public static function modificarUsuario(){
        
    }
    public static function borrarUsuario(){
        
    }
    public static function validarCodNoExiste(){
        
    }
}
