<?php
if ($xhr) {
    require_once "../config/connection.php";
    require_once "../model/loginModel.php";
} else {
    require_once "./config/connection.php";
    require_once "./model/loginModel.php";
}

class LoginController extends loginModel
{
    public function iniciar_sesion_controlador()
    {
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

        // $clave = mainModel::encryption($clave);

        $datosLogin = [
            "usuario" => $usuario,
            "passw" => $clave
        ];

        $datosCuenta = loginModel::iniciar_sesion($datosLogin);

        $rowCount = $datosCuenta->rowCount();
        $row = $datosCuenta->fetch(PDO::FETCH_ASSOC);

        if (empty($usuario) || empty($clave)) {
            $this->logout();
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Campos vacíos",
                "Texto" => "Debe ingresar sus datos",
                "Tipo" => "error"
            ];
            return MainModel::sweet_alert($alerta);
        } else {
            if ($rowCount == 1) {
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['usuario'] = $row['usuario'];
                $url = SERVERURL . "sesion/inicio";

                echo '<script> window.location="' . $url . '"</script>';
            } else {
                $this->logout();
                $alerta = [
                    "Alerta" => "simple",
                    "Titulo" => "Ocurrió un error inesperado",
                    "Texto" => "Datos incorrectos",
                    "Tipo" => "error"
                ];
                return MainModel::sweet_alert($alerta);
            }
        }
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Finalmente, destruir la sesión.
        session_destroy();
    }
}

?>
