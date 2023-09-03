<?php
// Obtiene la vista que se va a mostrar

/**
 * Maneja las vistas
 */
class viewmodel
{

    /**
     * Muestra la vista
     *
     * @param string $view Vista solicitada
     * @return string $contenido de la vista solicitada
     */
    protected function obtenervistamodelo($views)
    {

        if (is_file("./view/content/" . $views . ".php")) {
            $contenido = "./view/content/" . $views . ".php";
        } else {
            $contenido = "404";
        }

        return $contenido;
    }
}