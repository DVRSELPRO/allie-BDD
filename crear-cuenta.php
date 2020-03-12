<?php include_once "./validarSesion.php"; ?>
<?php require 'includes/header_account.php'; ?>
<?php 
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
include_once './modelo/ModeloUser.php';
include_once './controller/ControllerUser.php';
$mUser = new ModeloUser\ModeloUser();
$controllerUser = new ControllerUser();
if(isset($_POST["btnAceptar"])){
    $s = $controllerUser->registroUser($_POST);
}        
?>   

    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/images/bg.webp');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5x" style="padding: 3rem 3rem 0rem 3rem !important">
                            <h2 class="text-uppercase text-center pb-4" style="display: none;">
                                <a href="index.php" class="text-success">
                                    <span><img src="assets/images/users/default.png" alt="Crear una cuenta" style="width: 110px;"></span>
                                </a>
                            </h2>
                            <div class="row">
                                <div class="col-12 mx-auto">
                                    <div class="alert alert-info alert-border-left alert-close alert-dismissible fade show div_mensajes" role="alert" style="display: <?php echo isset($s["estatus"]) && $s["estatus"] == 0 ? "block" : "none"; ?>">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button><strong>Aviso</strong> 
                                        <span class="msj"><?php echo (isset($s["estatus"]) ? $s["mensaje"] : "") ?></span>
                                    </div>
                                </div>
                            </div>                            
                            <form class="form-horizontal frmCrearCuenta" action="crear-cuenta.php" method="POST" id="frmCrearCuenta" name="frmCrearCuenta">
                                <div class="form-group row m-b-20">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label for="rfc">Teclee su RFC</label>
                                        <input class="form-control" type="text" id="rfc" required="" placeholder="" minlength="12" maxlength="13" name="rfc" value="<?php echo (isset($s["estatus"]) ? $_POST["rfc"] : "") ?>">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label for="" style="visibility: hidden;">nomos</label>
                                        <button class="btn btn-block btn-custom waves-effect waves-light btnContinuar" type="button" onclick="fnc_crearCuenta.typePersonByRFC()">Continuar</button>
                                    </div>
                                </div>
                                
                                <div class="form-group row m-b-20 div_moral" style="display: none;">
                                    <div class="col-12">
                                        <label for="razonsocial">Nombre o Razón Social</label>
                                        <input class="form-control" type="text" id="razonsocial" placeholder="" name="razonsocial" value="<?php echo (isset($s["estatus"]) ? $_POST["razonsocial"] : "") ?>">
                                    </div>
                                </div>
                                <div class="form-group row m-b-20 div_fisica1" style="display: none;">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label for="nombreempleado">Nombre</label>
                                        <input class="form-control" type="text" id="nombreempleado" placeholder="" name="nombreempleado" value="<?php echo (isset($s["estatus"]) ? $_POST["nombreempleado"] : "") ?>">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label for="apellidopaterno">Apellido paterno</label>
                                        <input class="form-control" type="text" id="apellidopaterno" placeholder="" name="apellidopaterno" value="<?php echo (isset($s["estatus"]) ? $_POST["apellidopaterno"] : "") ?>">
                                    </div>
                                </div>
                                <div class="form-group row m-b-20 div_fisica2" style="display: none;">
                                    <div class="col-12">
                                        <label for="apellidomaterno">Apellido materno</label>
                                        <input class="form-control" type="text" id="apellidomaterno" placeholder="" name="apellidomaterno" value="<?php echo (isset($s["estatus"]) ? $_POST["apellidomaterno"] : "") ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group row m-b-20 hidden">                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label for="celular">Celular</label>
                                        <input class="form-control" type="text" id="celular" required="" placeholder="" minlength="10" maxlength="20" name="celular" value="<?php echo (isset($s["estatus"]) ? $_POST["celular"] : "") ?>">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20 hidden">
                                    <div class="col-12">
                                        <label for="mail">Correo electrónico</label>
                                        <input class="form-control" type="email" id="mail" required="" placeholder="" name="mail" value="<?php echo (isset($s["estatus"]) ? $_POST["mail"] : "") ?>">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20 hidden">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label for="password">Contraseña</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="" name="password">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label for="password2">Repitir contraseña</label>
                                        <input class="form-control" type="password" required="" id="password2" placeholder="" name="password2">
                                    </div>
                                </div>
                                

                                <div class="form-group row m-b-20" style="display: none;">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Yo acepto <a href="#" class="text-custom">Términos y Condiciones</a>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10 hidden">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name="btnAceptar">Aceptar</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">¿Ya tienes una cuenta?  <a href="iniciar-sesion.php" class="text-dark m-l-5"><b>Iniciar sesión</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center strFooter" style="">
                <p class="account-copyright">2018 © DIBAX SA DE CV</p>
            </div>

        </div>

        <?php require 'includes/footer_account.php' ?>               
        <script src="assets/js/crear-cuenta.js"></script>
        </body>
</html>