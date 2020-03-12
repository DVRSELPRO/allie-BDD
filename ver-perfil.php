<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
extract($_GET);
//includes class
include_once './utilidades/Utils.php';
$utils = new Utils\Utils();
//include_once './controller/ControllerDireccion.php';
//$cDir = new ControllerDireccion();
include_once './controller/ControllerUser.php';
$cUser = new ControllerUser();
include_once './modelo/ModeloUser.php';
$mUser = new ModeloUser\ModeloUser();

//$actions JSON
extract($_REQUEST);
$action = (isset($action) ? $action : "");
$mSesion = new ModeloUser\ModeloUser();
$mSesion = $utils->getDataSesion();
//echo '<pre>postxxx: ';print_r($mSesion);die();
$iduser = isset($iduser) ? $iduser : $mSesion->getIduser();
if((int)$iduser <= 0){
    header("location: index.php");
}
switch ($action) {    
    case "updateDatosPersonales":
        $cUser->updateUser($_POST);
        break;
    case "updateSoloPassword":
        $cUser->updateSoloPassword($_REQUEST);
        break;
    case "deleteUser":
        $cUser->deleteUser($_REQUEST);
        break;
    default:
        break;
}
$idRol = 3;

if ($mSesion->getId_rol() == 1) {
    if (!isset($_GET["iduser"])) {
        $idRol = $mSesion->getId_rol();
    }
}
$arrEmp = $cUser->getUsers($iduser, 1, $idRol); //is un array 
if (is_array($arrEmp) && count($arrEmp) > 0) {
    foreach ($arrEmp as $key => $valueObj) {
        $mUser = $valueObj;
    }
} else {
    die("no hay datos");
}


//includes html
include_once "./validarSesion.php";
include_once 'includes/header_start.php';
include_once 'includes/header_end.php';
include_once 'includes/leftbar.php';
include_once 'includes/topbar.php';
?>

<ul class="list-inline menu-left mb-0">
    <li class="float-left">
        <button class="button-menu-mobile open-left">
            <i class="dripicons-menu"></i>
        </button>
    </li>
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Mi cuenta </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Mi perfil</li>
            </ol>
        </div>
    </li>

</ul>
</nav>

</div>
<!-- Top Bar End http://ventasdibax.wixsite.com/dibaxsystems/servicios -->



<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <a nohref onclick="window.history.back();" class="btn btn-custom waves-effect waves-light mb-4 float-right historyBack" data-animation="fadein"><i class="mdi mdi-arrow-left-bold"></i> Regresar</a>
            </div><!-- end col -->
        </div>
        <div class="row">
            <!-- Right Sidebar -->
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="inbox-rightbarx">
                        <div class="text-right" role="toolbar">
                            <?php if($mSesion->getId_rol() == 1):?>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal font-18 vertical-middle"></i> Más
                                </button>
                                <div class="dropdown-menu">
                                    <span class="dropdown-header">Opciones:</span>
                                    <a class="dropdown-item" href="ver-xmls-subidos.php?iduser=<?php echo $mUser->getIduser()?>">Ver XML</a>
                                    <a class="dropdown-item" href="javascript: fnc_verPerfil.deleteUser(<?php echo $mUser->getIduser()?>);"">Eliminar</a>
                                </div>
                            </div>
                            <?php endif;?>
                        </div>
                        <div class="mt-4">
                            <h5>Mi perfil</h5>
                            <hr/>
                            <div class="media mb-4 mt-1">
                                <img class="d-flex mr-3 rounded-circle thumb-sm" src="assets/images/users/default.png" alt="">
                                <div class="media-body">
                                    <!--<span class="float-right">años</span>-->
                                    <h6 class="m-0"><?php echo $mUser->getNombreempleado() . " " . $mUser->getApellidopaterno() ?></h6>
                                    <small class="text-muted"><?php echo $mUser->getMail() ?></small>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">                        
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="card m-b-30 datos-personales-content">
                                        <div class="card-body">
                                            <i class="icon-pencil float-right edit-block" onclick="fnc_verPerfil.showFormDatosPersonales();"></i>
                                            <h5 class="card-title">Datos personales</h5>
                                            <p class="card-text"></p>
                                        </div>
                                        <ul class="list-group list-group-flush datos-en-li">
                                            <li class="list-group-item bold"><?php echo "<span class='span_idEmpleado'>" . $iduser . "</span> <span class='span_nombreempleado'>" . $utils->uppersTitles($mUser->getNombreempleado() . "</span> <span class='span_apellidopaterno'>" . $mUser->getApellidopaterno() . "</span> <span class='span_apellidomaterno'>" . $mUser->getApellidomaterno() . "</span>") ?></li>
                                            <li class="list-group-item"><b>RFC</b> <?php echo "<span class='span_rfc'>" . $mUser->getRfc() . "</span>" ?></li>
                                            <li class="list-group-item"><b>Celular</b> <?php echo "<span class='span_telefonoCelular'>" . $mUser->getCelular() . "</span>" ?></li>
                                            <li class="list-group-item"><b>E-mail</b> <?php echo "<span class='span_email'>" . $mUser->getMail() . "</span>" ?></li>
                                        </ul>
                                        <div class="card-body datos-personales-form" style="display: none;">
                                            <form method="POST" id="frmDatosPersonales" class="frmDatosPersonales" name="frmDatosPersonales">
                                                <input type="hidden" name="action" value="updateDatosPersonales" class="action"/>
                                                <input type="hidden" name="idEmpleado" value="<?php echo $mUser->getIduser() ?>" class="idEmpleado" id="idEmpleado"/>
                                                <input type="hidden" name="rolID" value="<?php echo md5($mUser->getId_rol()) ?>"/>
                                                <div class="form-group row m-b-20">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                                                        <label for="nombreempleado">Nombre</label>
                                                        <input class="form-control nombreempleado" type="text" required="" id="nombreempleado" name="nombreempleado" value="<?php echo $mUser->getNombreempleado() ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row m-b-20">                                                    
                                                    <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                                                        <label for="apellidopaterno">Apellido paterno</label>
                                                        <input class="form-control apellidopaterno" type="text" required="" id="apellidopaterno" name="apellidopaterno" value="<?php echo $mUser->getApellidopaterno() ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row m-b-20">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                                                        <label for="apellidomaterno">Apellido materno</label>
                                                        <input class="form-control apellidomaterno" type="text" required="" id="apellidomaterno" name="apellidomaterno" value="<?php echo $mUser->getApellidomaterno() ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row m-b-20">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                                                        <label for="rfc">RFC</label>
                                                        <input class="form-control rfc" type="text" id="rfc" name="rfc" maxlength="13" value="<?php echo $mUser->getRfc() ?>">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row m-b-20">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <label for="telefonoCelular">Celular</label>
                                                        <input class="form-control telefonoCelular" type="tel" id="telefonoCelular" name="telefonoCelular" maxlength="10" onkeypress="return fnc_verPerfil.isNumber(event)" value="<?php echo $mUser->getCelular() ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row m-b-20">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                                                        <label for="email">Correo electrónico</label>
                                                        <input class="form-control email" type="email" required="" id="email" name="email" value="<?php echo $mUser->getMail() ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-right m-b-30">
                                                    <div class="heading-underline h3-line">
                                                        <h3 class="mb-15"></h3>
                                                    </div>
                                                    <button type="submit" class="btn btn-success waves-effect waves-light btnUpdate" name="btnUpdate"> <i class="fa fa-save"></i> <span>Guardar</span> </button>
                                                </div>
                                            </form>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 div-mensajes" style="display: none;"></div>
                                        </div><!--/END FORM-->
                                    </div>
                                    <div class="card m-b-30 changepassword-content">
                                        <div class="card-body">
                                            <h5 class="card-title">Cambiar contraseña</h5>
                                            <p class="card-text text-muted"><a href="https://howsecureismypassword.net/" target="_blank">¿Tu contraseña es segura?</a></p>
                                        </div>
                                        <div class="card-body changepassword-form">
                                            <form method="POST" id="frmfrmUpdatePassword" class="frmfrmUpdatePassword" name="frmfrmUpdatePassword" >
                                                <input type="hidden" name="action" value="updateSoloPassword">
                                                <input type="hidden" name="idEmpleado" class="idEmpleado" value="<?php echo $iduser ?>">
                                                <div class="form-group row m-b-20">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-20">
                                                        <label for="password">Nueva contraseña</label>
                                                        <input class="form-control password" type="password" required="" id="password" name="password">
                                                    </div>
                                                </div>
                                                <div class="form-group row m-b-20">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-20">
                                                        <label for="passwordrepetir">Repetir contraseña</label>
                                                        <input class="form-control passwordrepetir" type="password" required="" id="passwordrepetir" name="passwordrepetir">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-right m-b-30">
                                                    <div class="heading-underline h3-line">
                                                        <h3 class="mb-15"></h3>
                                                    </div>
                                                    <button type="submit" class="btn btn-success waves-effect waves-light btnUpdatePassword" name="btnUpdatePassword"> <i class="fa fa-edit"></i> <span>Guardar</span> </button>
                                                </div>
                                            </form>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 div-mensajes" style="display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->

                        </div> <!-- card-box -->
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> <!-- end Col -->
        </div><!-- End row -->


        <?php require 'includes/footer_start.php' ?>



        <script src="plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <!--<script src="assets/pages/jquery.dashboard.init.js"></script>-->
        <link href="assets/css/style-detalle-empleado.css" type="text/css" rel="stylesheet"/>
        <script src="assets/js/detalle-empleado.js"></script>
        <!--start upload files-->
        <!-- Dropzone css -->
        <link href="plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap fileupload js -->
        <script src="plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
        <!-- Dropzone js -->
        <script src="plugins/dropzone/dropzone.js"></script>
        <!--end upload files-->
        <?php require 'includes/footer_end.php' ?>