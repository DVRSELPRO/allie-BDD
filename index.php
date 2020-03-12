<?php 
include_once "./validarSesion.php"; 
include_once "./utilidades/Utils.php"; 
$utils = new Utils\Utils();
include_once "./modelo/ModeloUser.php"; 
$mSesion = new \ModeloUser\ModeloUser();
$mSesion = $utils->getDataSesion();
$iduser = $mSesion->getIduser();
?>

<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>

<?php  require 'includes/leftbar.php'; ?>
<?php require 'includes/topbar.php'; ?>
<?php

include_once './utilidades/UtilsMysql.php';
$token = "";
$token = (isset($_GET["token"]) ? $_GET["token"] : "");
$flag = false;
if($token != ""){
    $util = new \utilidades\UtilsMysql\UtilsMysql();
    if($util->existeToken($token)){
        $util->updateToken($token); 
        $flag = true;
    }
}
?>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dibax Systems </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Desinfección de amplio espectro no tóxica</li>
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
                        <div class="col-12" style="display: <?php echo $token != "" ? "block" : "none"?>">
                            <div class="card-box">
                                <h4 class="header-title mb-4">Validando cuenta</h4>

                                <div class="row">
                                    <div class="col-md-4 mx-auto">
                                        <div class="card m-b-30 text-white bg-info" style="display: <?php echo ($flag ? "block": "none") ?>">
                                            <div class="card-body">
                                                <blockquote class="card-bodyquote">
                                                    <p>Su cuenta se ha validado correctamente</p>
                                                    <footer class="blockquote-footer text-white font-13">
                                                        <a href="iniciar-sesion.php" class="card-link text-white">Iniciar sesión</a>
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="card m-b-30 text-white bg-danger" style="display: <?php echo ($flag ? "none": "block") ?>">
                                            <div class="card-body">
                                                <blockquote class="card-bodyquote">
                                                    <p>El token ya fue utilizado para validar esta cuenta.</p>                                                    
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title mb-4">Envío de XML</h4>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-box mb-0 widget-chart-two">                                            
                                            <h4 class="header-title m-t-0">Factura electrónica</h4>
                                            <!--<p class="text-muted m-b-30">Todo con ácido hipocloroso (HClO)</p>-->
                                            <!--<h5 class="m-t-lg with-border">Misión</h5>-->
                                            <p class="mb-0 text-justify">
                                            Con la finalidad de mejorar la comunicación con usted ofrecemos un nuevo servicio a través de este portal para facilitarle el envío de sus archivos de factura electrónica (XML). Lo invitamos a crear una cuenta y ser parte de esta herramienta interactiva.
                                            </p>
                                            <p class="mb-0 text-right">
                                            <?php if($mSesion == false):?>
                                                <a href="crear-cuenta.php" class="btn btn-custom waves-effect waves-light">Crear una cuenta</a>
                                            <?php endif;?>
                                            <?php if($mSesion == true):?>
                                                <a href="subir-xmls.php" class="btn btn-custom waves-effect waves-light">Subir XML ahora</a>
                                            <?php endif;?>                                                
                                            </p>
                                        </div>
                                    </div> 
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <!-- end row -->



                    

        <?php require 'includes/footer_start.php' ?>
        

        
        <script src="plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <!--<script src="assets/pages/jquery.dashboard.init.js"></script>-->

        <?php require 'includes/footer_end.php' ?>
