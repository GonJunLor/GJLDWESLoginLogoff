<?php
/**
* @author: Gonzalo Junquera Lorenzo
* @since: 11/01/2026
*/

final class UsuarioPDO {

    /**
     * Valida las credenciales de un usuario y devuelve un objeto Usuario si son correctas
     * @param string $codUsuario Código del usuario
     * @param string $password Contraseña sin encriptar
     * @return Usuario|null Objeto Usuario si las credenciales son correctas, null si no
     */
    public static function validarUsuario($codUsuario, $password){
        $oUsuario = null;

        $sql = <<<SQL
            SELECT * FROM T01_Usuario
            WHERE T01_CodUsuario = :usuario
            AND T01_Password = SHA2(:contras,256)
        SQL;
        
        $parametros = [
            ':usuario' => $codUsuario,
            ':contras' => $codUsuario.$password
        ];

        $consulta = DBPDO::ejecutarConsulta($sql,$parametros);
        $usuarioBD = $consulta->fetchObject();

        // si encuentra el usuario en la BBDD creamos el objeto usuario
        if ($usuarioBD) {
            // Se convierte la fecha en datetime
            $fechaBD = $usuarioBD->T01_FechaHoraUltimaConexion;
            $oFechaValida = ($fechaBD) ? new DateTime($fechaBD) : null;

            $oUsuario = new Usuario(
                $usuarioBD->T01_CodUsuario,
                $usuarioBD->T01_Password,
                $usuarioBD->T01_DescUsuario,
                $usuarioBD->T01_NumConexiones + 1,
                new DateTime(),
                $oFechaValida, // ultima conexión anterior que viene de la BBDD
                $usuarioBD->T01_Perfil
            );

            // SQL para actualizar los datos de conexión
            $sql = <<<SQL
                UPDATE T01_Usuario SET
                    T01_FechaHoraUltimaConexion = NOW(),
                    T01_NumConexiones = T01_NumConexiones + 1
                WHERE T01_CodUsuario = :usuario
            SQL;

            // Ejecutar la actualización en la BD
            DBPDO::ejecutarConsulta($sql, [
                ':usuario' => $usuarioBD->T01_CodUsuario
            ]);
        }

        return $oUsuario;
    }

    public static function altaUsuario($codUsuario, $password, $descUsuario){
        $oUsuario = null;

        // SQL para insertar el nuevo registro
        // El perfil por defecto debe ser 'usuario'
        $sql = <<<SQL
            INSERT INTO T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_Perfil) 
            VALUES (:usuario, SHA2(:password, 256), :descripcion, 'usuario')
        SQL;

        $consulta = DBPDO::ejecutarConsulta($sql, [
            ':usuario' => $codUsuario,
            ':password' => $codUsuario . $password,
            ':descripcion' => $descUsuario
        ]);

        if ($consulta) {
            // Si la inserción tiene éxito, se valida al usuario para obtener el objeto completo
            // (y se rellena las fechas iniciales y el número de conexiones)
            $oUsuario = self::validarUsuario($codUsuario, $password);
        }

        return $oUsuario;
    }
    public static function modificarUsuario(){
        
    }
    public static function borrarUsuario(){
        
    }
    public static function validarCodNoExiste(){
        
    }
}
