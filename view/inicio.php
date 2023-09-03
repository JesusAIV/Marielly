<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$xhr = false;
require_once "./config/constantes.php";
require_once "./controller/configController.php";
require_once "controller/gestionController.php";

$gestion = new gestionController();
$configC = new configController();

$viewUrl = $configC->viewUrl();
$titulo = $configC->titleWeb();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Marielly es una tienda virtual encargada de confecionar y vender carteras al por mayor y menor, realizadas con cuero y tela de buena calidad, para el buen servicio de los clientes la tienda está en uso las 24 horas los 7 días de la semana para poder realizar compras online de manera segura.">
    <meta name="keywords" content="carteras,bolsos,mochilas,morrales">
    <meta name="Resource-type" content="Catalog">
    <meta name="author" content="Jesús Isique Vásquez">
    <meta name="copyright" content="Marielly">
    <meta name="robots" content="index, follow">
    <title><?php echo $titulo ?></title>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- JS -->
    <?php require_once "links/jsh.php"; ?>
    <!-- CSS -->
    <?php require_once "links/css.php"; ?>
</head>

<body>

    <?php
    $xhr = false;
    require_once "./controller/viewcontroller.php";
    $view = new viewcontroller();
    $vistas = $view->obtenervistacontrolador();

    if ($vistas == "404") {
        $vistas =  "./view/content/404.php";
    }
    ?>

    <?php include "layouts/header.php"; ?>

    <div class="main">
        <?php require_once $vistas; ?>
    </div>

    <?php
    ?>

    <?php include "layouts/footer.php"; ?>
    <?php require_once "links/jsf.php"; ?>
</body>

</html>