<?php require 'includes/header_account.php'; ?>
<?php
extract($_REQUEST);
include_once './utilidades/UtilsMysql.php';
include_once './controller/ControllerUser.php';
$controllerUser = new ControllerUser();
$util = new \utilidades\UtilsMysql\UtilsMysql();
$flag = FALSE;
$token = (isset($token) ? $token : "");
$mensaje = "";
//    echo '<pre>';print_r($_POST);


if (isset($_POST["btnAceptar"])) {
    $s = $controllerUser->resetPassword($_POST["new_password"], $_POST["new_password_confirm"], $_POST["token"]);
    if (isset($s["estatus"]) && $s["estatus"] == 1) {
        $util->updateToken($token);
        $mensaje = "Su contrase se ha restablecido correctamente. <a href='iniciar-sesion.php'>Favor de hacer click aquí</a>";
        $flag = TRUE;
    } else {
        $mensaje = $s["mensaje"];
    }
//        echo '<pre>';print_r($s);
} else if (isset($_POST["btnRedirect"])) {
//        header("location: index.php");
} else if ($token != "") {
    if (!$util->existeToken($token)) {
        $mensaje = "El token es inválido, favor recuperar nuevamente su contraseña. <a href='recuperar-password.php'>Volver a intentarlo</a>";
        $token = "";
    }
} else {
    $mensaje = "El token es inválido, favor recuperar nuevamente su contraseña. <a href='recuperar-password.php'>Volver a intentarlo</a>";
}
?>

    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/images/bg.webp');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.php" class="text-success">
                                    <span><img src="assets/images/users/default.png" alt="Crear una cuenta" style="width: 110px;"></span>
                                </a>
                            </h2>
                            <div class="row">
                                <div class="col-12 mx-auto">
                                    <div class="alert alert-info alert-border-left alert-close alert-dismissible fade show div_mensajes" role="alert" style="display: <?php echo ($mensaje != "" ? "block" : "none") ?>">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button><strong>Aviso</strong> 
                                        <span class="msj"><?php echo $mensaje?> </span>
                                    </div>
                                </div>
                            </div>
                            <form class="" action="new-password.php" method="POST" style="display: <?php echo ($flag ? "none" : "block")?>">
                                <input type="hidden" name="token" value="<?php echo $token?>"/>                                
                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="new_password">Nueva contraseña</label>
                                        <input class="form-control new_password" type="password" id="new_password" required="" placeholder="" name="new_password" value="<?php echo isset($_POST["new_password"]) ? $_POST["new_password"] : ""?>">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="new_password_confirm">Confirmar contraseña</label>
                                        <input class="form-control new_password_confirm" type="password" required="" id="new_password_confirm" placeholder="" name="new_password_confirm" value="<?php echo isset($_POST["new_password"]) ? $_POST["new_password_confirm"] : ""?>">
                                    </div>
                                </div>                                

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name="btnAceptar">Recuperar contraseña</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted"><a href="iniciar-sesion.php" class="text-dark m-l-5"><b>Iniciar sesión</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © DIBAX SA DE CV</p>
            </div>

        </div>




        <?php require 'includes/footer_account.php' ?>