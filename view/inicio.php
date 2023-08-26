<?php
    session_start();
    require_once "./view/core/constantes.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Confecciones Vasquez es una tienda virtual encargada de confecionar y vender carteras al por mayor y menor, realizadas con cuero y tela de buena calidad, para el buen servicio de los clientes la tienda está en uso las 24 horas los 7 días de la semana para poder realizar compras online de manera segura.">
    <meta name="keywords" content="carteras,bolsos,mochilas,morrales">
    <meta name="Resource-type" content="Catalog">
    <meta name="author" content="Jesús Isique Vásquez">
    <meta name="copyright" content="Confecciones Vasquez">
    <meta name="robots" content="index, follow">
    <title>
        <?php
            if(empty($_GET['views'])){
                $NomTitle = "Confecciones Vasquez - Tienda de carteras";
                echo $NomTitle;
            } else {
                $text = $_GET['views'];
                $Title = explode("/", $_GET['views']);
                $NomTitle = ucfirst($Title[0]);

                if ($NomTitle == 'Categoria' || $NomTitle == 'ProductoDetalle'){
                    $NomTitle = ucfirst($Title[1]);
                }else{
                    $NomTitle = ucfirst($Title[0]);
                }
                echo $NomTitle;
            }
        ?>
    </title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo SERVERURL ?>view/img/jpg/bolso.ico" type="image/x-icon">
    <!-- CSS -->
    <?php require_once "links/css.php"; ?>
    <!-- JAVA SCRIPT -->
    <?php require_once "links/jsh.php"; ?>
</head>
<body>


    <?php
        $Ajax = false;
        require_once "./controller/viewcontroller.php";
        $view = new viewcontroller();
        $vistas = $view -> obtenervistacontrolador();

        if($vistas == "login"){
            $vistas = "./view/content/login.php";
        }
    ?>

    <?php
        if(isset($_SESSION["idrol"])){
            if($NomTitle == "Inventario" || $NomTitle ==  "Productos"){
                include "modulos/contenido.php";
                $clasemain = "main-inventario";
            }else{
                include "modulos/header.php";
                $clasemain = "main";
            }
        }else{
            include "modulos/header.php";
            $clasemain = "main";
        }
    ?>

    <div class="<?php echo $clasemain ?>">
        <?php require_once "./view/content/login.php";?>
    </div>

    <?php
    ?>

    <?php include "modulos/footer.php"; ?>
    <?php require_once "links/jsf.php"; ?>
</body>
</html>