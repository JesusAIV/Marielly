<section class="section_login">
    <div class="form-box">
        <img src="<?php $configC->rutaImage("company/logo1.png") ?>" alt="" class="avatar">
        <div class="form-value">
            <form action="" method="POST">
                <h2 class="title_login">Login</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="usuario" id="inputusuarios">
                    <label for="">Usuario</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="clave" id="inputcontraseña">
                    <label for="">Contraseña</label>
                </div>
                <button class="btn_login" name="btnIngresar" type="submit" value="Ingresar">Ingresar</button>
            </form>
        </div>
    </div>
</section>
<?php
    if (isset($_POST['usuario']) && isset($_POST['clave'])) {
        require_once "./controller/loginController.php";
        $login = new LoginController();
        echo $login->iniciar_sesion_controlador();
    }
?>