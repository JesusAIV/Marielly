<?php
if ($xhr) {
    require_once "../config/connection.php";
    require_once "../model/mainModel.php";
} else {
    require_once "./config/connection.php";
    require_once "./model/mainModel.php";
}

class loginModel extends mainModel
{
    protected function iniciar_sesion($datos)
    {
        // try {
        $conn = new Connection();
        $conexion = $conn->connect();
        $usuario = $datos['usuario'];
        $pass = $datos['passw'];

        // Llamada al Stored Procedure
        $sql = "CALL sp_login(:usuario, :passw)";
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $consulta->bindParam(':passw', $pass, PDO::PARAM_STR);
        $consulta->execute();

        return $consulta;

        // } catch (Exception $e) {
        //     $respuesta = "error";
        //     return $respuesta;
        // }
    }
}
