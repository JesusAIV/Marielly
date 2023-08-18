<?php

if ($xhr){
    require_once "../../config/connection.php";
    require_once "../../controller/mainController.php";
} else {
    require_once "./config/connection.php";
    require_once "./controller/mainController.php";
}

/**
 * Clase controlador para la gestion general del sistema
 */
class gestionController extends mainController
{

}