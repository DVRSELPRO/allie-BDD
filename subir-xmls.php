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

<!-- Bootstrap fileupload css -->
<link href="plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />

<!-- Dropzone css -->
<link href="plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />

<?php require 'includes/header_end.php'; ?>

<?php require 'includes/leftbar.php'; ?>
<?php require 'includes/topbar.php'; ?>
<?php 
include_once './controller/ControllerXML.php';
$c = new ControllerXML();
$c->deleteUploadFilesNoActivos();
?>
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Subir XML </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Subir XML</a></li>
                                        <li class="breadcrumb-item"><a href="#">Seleccionar archivos</a></li>
                                        <!--<li class="breadcrumb-item active">File Uploads</li>-->
                                    </ol>
                                </div>
                            </li>
                        </ul>
                </nav>

            </div>
            <!-- Top Bar End -->



            <!-- Start Page content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-right divBtnFinalizar" style="display: none;">
                            <a href="#" class="btn btn-custom waves-effect waves-light mb-4 btnheaderCancelar" data-animation="fadein" data-overlaySpeed="200" data-overlayColor="#ef3d58" onclick="fnc_subirXml.btnCancelar();"><i class="mdi mdi-delete"></i> Cancelar</a>
                            <a href="#" class="btn btn-custom waves-effect waves-light mb-4 btnheaderGuardar" data-animation="fadein" data-overlaySpeed="200" data-overlayColor="#36404a" onclick="fnc_subirXml.btnFinalizarUplods();"><i class="mdi mdi-upload"></i> Finalizar</a>
                            <a href="subir-xmls.php" class="btn btn-custom waves-effect waves-light mb-4 btnheaderSubirFiles" data-animation="fadein"  data-overlayspeed="200" data-overlaycolor="#36404a" style="display: none;"><i class="mdi mdi-plus"></i> Subir XML</a>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
                    
                    <div class="row divUploadFiles">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title m-t-0">Arrastrar y soltar XMLS</h4>
                                <p class="text-muted font-14 m-b-10">
                                    Podrás subir hasta <b>10</b> archivos a la vez
                                </p>
                                <div class="alert alert-info alert-dismissible bg-info text-white border-0 fade show div_mensajes" role="alert" style="display: none;">
                                    <button type="button" class="close" data-dismiss="alertx" aria-label="Closex" onclick="fnc_subirXml.closeDivAlert()">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <span class="mensaje"></span>
                                </div>
                                <form action="#" class="dropzone" id="dropzone" method="POST" enctype="multipart/form-data">                                    
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                    
                                </form>   
                                <div class="clearfix text-right mt-3">
                                    <button type="button" class="btn btn-custom waves-effect waves-light btnAceptar" id="btnAceptar" style="display: none;" onclick="fnc_subirXml.btnContinuar();">Continuar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row filesXML" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="alert alert-info alert-dismissible bg-info text-white border-0 fade show div_mensajesFiles" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alertx" aria-label="Closex" onclick="fnc_subirXml.closeDivAlert()">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <span class="mensaje"></span>
                            </div>
                        </div>                        
                        <div class="col-lg-3 col-md-3 col-sm-3 col-12" style="display: none;">
                            <div class="text-center card-box">
                                <div class="member-card pt-2 pb-2">
                                    <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                        <img src="assets/images/file_icons/xml.svg" class="rounded-circle img-thumbnail" alt="">
                                    </div>
                                    <div class="">
                                        <h4 class="m-b-5">GIN150407TE0</h4>
                                        <p class="text-muted"><span> <a href="#" class="text-pink">GRUPO INTEL - BATH, S.A. DE C.V.</a> </span></p>
                                    </div>
                                    <button type="button" class="btn btn-success m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Guardar</button>
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div class="mt-3">
                                                    <h6 class="m-b-5">$664.40</h6>
                                                    <p class="mb-0 text-muted">SubTotal</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div class="mt-3">
                                                    <h6 class="m-b-5">$6,952.00</h6>
                                                    <p class="mb-0 text-muted">IVA</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div class="mt-3">
                                                    <h6 class="m-b-5">$11,125.00</h6>
                                                    <p class="mb-0 text-muted">Total</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- end row -->

        <?php require 'includes/footer_start.php' ?>
        <!-- Modal-Effect -->
        <script src="plugins/custombox/js/custombox.min.js"></script>
        <script src="plugins/custombox/js/legacy.min.js"></script>
        
        <!-- Bootstrap fileupload js -->
        <script src="plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

        <!-- Dropzone js -->
        <script src="plugins/dropzone/dropzone.js"></script>
        <script src="assets/js/subir-xmls.js"></script>

        <?php require 'includes/footer_end.php' ?>        
       