<?php
require_once  "./model/viewmodel.php";

class viewcontroller extends viewmodel
{

    /**
     * Redirige a la vista principal
     *
     * @return void Retorna el archivo de la vista principal
     */
    public function obtenersistema()
    {
        return require_once "./view/inicio.php";
    }

    /**
     * Obtiene el parametro views por GET que está configurado en el archivo .htaccess
     *
     * @return string devuelve la vista
     */
    public function obtenervistacontrolador()
    {
        if (isset($_GET['views'])) {
            $ruta = explode("/", $_GET['views']);
            $rutaCompleta = implode("/", $ruta); // Convierte el arreglo de ruta en una cadena
            $respuesta = viewmodel::obtenervistamodelo($rutaCompleta);
        } else {
            $respuesta = "404";
        }
        return $respuesta;
    }
}
