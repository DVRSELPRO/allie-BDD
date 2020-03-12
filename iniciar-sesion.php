<?php require 'includes/header_account.php'; ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION["ModeloUser"])){
    header("location: index.php");
}
include_once './controller/ControllerUser.php';
$response = array("mensaje"=> "");
if(isset($_POST["btnAceptar"])){    
    $controllerUser = new ControllerUser();
    $response = $controllerUser->loginMysql($_POST["mail"], md5($_POST["password"]));
//    echo '<pre>';print_r($response); echo '</pre>';die();
}
?>

    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" id="bg-lef">
            <div class="height100">
                <div class="text-vertical-center">
                    <h2>DIBAX SYSTEMS COMPANY MÉXICO</h2>
                    <h5>SISTEMAS Y PRODUCTOS DE DESINFECCIÓN NO TÓXICA</h5>
                </div>
            </div>
        </div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.php" class="text-success">
                                    <span><img src="assets/images/logo/logo.webp" alt="Crear una cuenta" style="width: 160px;"></span>
                                </a>
                            </h2>
                            <div class="row">
                                <div class="col-12 mx-auto">
                                    <div class="alert alert-info alert-border-left alert-close alert-dismissible fade show div_mensajes" role="alert" style="display: <?php echo isset($response["estatus"]) && $response["estatus"] == 0 ? "block" : "none"; ?>">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button><strong>Aviso</strong> 
                                        <span class="msj"><?php echo $response["mensaje"]?> </span>
                                    </div>
                                </div>
                            </div>
                            <form class="" action="iniciar-sesion.php" method="POST">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="mail">Correo electrónico</label>
                                        <input class="form-control" type="email" id="mail" required="" placeholder="" name="mail" value="<?php echo (isset($response["estatus"]) ? $_POST["mail"] : "")?>">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="recuperar-password.php" class="text-muted float-right"><small>¿Olvidaste tu contraseña?</small></a>
                                        <label for="password">Contraseña</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="" name="password" value="<?php echo (isset($response["estatus"]) ? $_POST["password"] : "")?>">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Recordar mi contraseña
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name="btnAceptar">Inicar sesión</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">¿No tienes una cuenta? <a href="crear-cuenta.php" class="text-dark m-l-5"><b>Registrarse</b></a></p>
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
        <link rel="stylesheet" href="assets/css/style-iniciar-sesion.css">
        <script type="text/javascript" src="assets/js/iniciar-sesion.js"></script>
        <?php require 'includes/footer_end.php' ?>        

