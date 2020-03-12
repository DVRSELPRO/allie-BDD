<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
extract($_GET);
include_once "./validarSesion.php"; 
include_once "./utilidades/Utils.php"; 
$utils = new Utils\Utils();
include_once "./modelo/ModeloUser.php"; 
$mSesion = new \ModeloUser\ModeloUser();
$mSesion = $utils->getDataSesion();
$iduser = isset($iduser) ? $iduser : $mSesion->getIduser();
if($mSesion->getId_rol() == 1){
    unset($_SESSION["arrModeloXmls"]);
}
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
$arrxmls = $c->getXMLS(array("iduser"=>$iduser));
$arrModelo = array();
//echo "<pre>";print_r($arrxmls);
?>
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Mis XMLS </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Se ha encontrado <?php echo count($arrxmls)?> archivos</a></li>
<!--                                        <li class="breadcrumb-item"><a href="#">Seleccionar archivos</a></li>-->
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
                        <div class="col-sm-12">
                            <a nohref onclick="window.history.back();" class="btn btn-custom waves-effect waves-light mb-4 float-right" data-animation="fadein" data-plugin="custommodal"
                               data-overlaySpeed="200" data-overlayColor="#36404a"><i class="mdi mdi-arrow-left-bold"></i> Regresar</a>
                        </div><!-- end col -->
                    </div>                                   
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">Buscar XML</h4>
                                <div class="p-20">
                                    <div class="form-horizontal">
                                        <div class="form-group row">                                            
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <input type="text" class="search form-control form-control-sm" placeholder="Archivo a buscar" onkeyup="fnc_subirXml.filterCards()"/>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                                                <p class="mb-0 text-muted font-13 total-encontrados"><b><?php echo count($arrxmls)?></b> encontrados</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div>
                    
                    
                    <!-- end row -->                    
                    <!-- end row -->
                    <div class="row filesXML">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="alert alert-info alert-dismissible bg-info text-white border-0 fade show div_mensajesFiles" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alertx" aria-label="Closex" onclick="fnc_subirXml.closeDivAlert()">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <span class="mensaje"></span>
                            </div>
                        </div>
                        <?php if (count($arrxmls) > 0) { ?>                        
                        <?php foreach ($arrxmls as $key => $valObject):?>
                        <?php 
                        $mxml = new ModeloXML\ModeloXML();
                        $mxml = $valObject;                        
                        $xm = $c->convertModeloToArr($mxml, $c->getTipoCFDI($mxml->getContentXML()));
                        $arrModelo[$mxml->getIdxml()] = $xm;
                        ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 <?php echo $mxml->getIdxml()?> div-card-box" id="<?php echo $mxml->getComplementoTFUUID()?>">
                            <div class="text-center card-box">
                                <div class="member-card pt-2 pb-2">
                                    <span class="uuid" style="display: none;"><?php echo $mxml->getComplementoTFUUID()?></span>
                                    <div class="thumb-lg member-thumb m-b-10 mx-auto">
                                        <img src="assets/images/file_icons/xml.svg" class="rounded-circle img-thumbnail" alt="">
                                    </div>
                                    <div class="">
                                        <h4 class="m-b-5"><?php echo date('d/m/Y H:i:s', strtotime($mxml->getComplementoTFFechaTimbrado())) ?></h4>
                                        <p class="text-muted"><span> <a href="javascript:fnc_subirXml.createFactura(<?php echo $mxml->getIdxml()?>)" class="text-pink"><?php echo $mxml->getReceptorNombre() ."<br/>". $mxml->getReceptorRfc()?></a> </span></p>
                                    </div>
                                    <button type="button" onclick="fnc_subirXml.createFactura(<?php echo $mxml->getIdxml()?>)" class="btn btn-icon waves-effect waves-light btn-success btnBoxSaved" title="<?php echo ((int)$mxml->getEstatus() === 1 ? "Se ha guardado correctamente" : "Se ha enviado a procesar")?>" > <i class="fa 
                                       <?php
                                        $cl = "fa fa-times-rectangle";
                                        if((int)$mxml->getEstatus() === 1){
                                            $cl = "fa-check-circle";
                                        } if((int)$mxml->getEstatus() === 2){
                                            $cl = "fa-check-square-o";
                                        } echo $cl; ?> 
                                        " title="<?php echo ((int)$mxml->getEstatus() === 1 ? "Se ha guardado correctamente" : "Se ha enviado a procesar")?>"></i> </button>
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div class="mt-3">
                                                    <h6 class="m-b-5 font-13">$<?php echo $mxml->getComplementoAtribSubTotal()?></h6>
                                                    <p class="mb-0 text-muted font-13">SubTotal</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div class="mt-3">
                                                    <h6 class="m-b-5 font-13">$<?php echo $mxml->getTotalImpuesto()?></h6>
                                                    <p class="mb-0 text-muted font-13">IVA</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div class="mt-3">
                                                    <h6 class="m-b-5 font-13">$<?php echo $mxml->getComplementoAtribTotal()?></h6>
                                                    <p class="mb-0 text-muted font-13">Total</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="mt-3">                                                    
                                                    <p class="mb-0 text-muted font-13">
                                                        CFDI <?php echo $mxml->getComplementoAtribTipoDeComprobante()?><br/>
                                                        Creado <?php echo date('d/m/Y H:i:s', strtotime($mxml->getFechaCreacion())) ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <?php } else{ ?>
                        
                        
                        <div class="col-md-4 center-block">
                            <div class="card m-b-30 card-body">
                                <h5 class="card-title">Aviso</h5>
                                <p class="card-text">No ha envido XMLS</p>
                                <a href="subir-xmls.php" class="btn btn-custom waves-effect waves-light">Subir XML</a>
                            </div>
                        </div>
                                            
                        
                        
                        <?php }?>
                    </div>
                    <!-- end row -->
                    
                    <!-- inicio factura-->
                    <div class="row divFactura" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card-box">
                                <div class="clearfix">
                                    <div class="float-left mb-3">
                                        <!--<img src="assets/images/logo.png" alt="" height="28">-->
                                    </div>
                                    <div class="float-right">
                                        <h4 class="m-0 d-print-none">Rusumén de la factura</h4>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="float-left mt-3">
                                            <p><b>UUID</b></p>
                                            <p class="text-muted UUID"></p>
                                        </div>

                                    </div><!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-right">
                                        <div class="mt-3 float-right">
                                            <p class="m-b-10"><strong>Fecha y hora de certificación: </strong> <span class="FechaTimbrado"></span></p>
                                            <p class="m-b-10"><strong>No. Certificado SAT: </strong> <span class="NoCertificadoSAT"></span></p>
                                            <p class="m-b-10"><strong>Forma pago </strong> <span class="FormaPago"></span></p>
                                            <p class="m-b-10"><strong>Método de pago </strong> <span class="MetodoPago"></span></p>
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row mt-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <h6>Emisor</h6>
                                        <h6 class="text-muted">RFC: <small class="emisor_Rfc"></small></h6>
                                        <h6 class="text-muted">Razón social: <small class="emisor_Nombre"></small></h6>
                                        <h6 class="text-muted">Regimen Físcal: <small class="emisor_RegimenFiscal"></small></h6>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <h6>Receptor</h6>
                                        <h6 class="text-muted">RFC: <small class="receptor_Rfc"></small></h6>
                                        <h6 class="text-muted">Razón social: <small class="receptor_Nombre"></small></h6>
                                        <h6 class="text-muted">Uso de CFDI: <small class="receptor_UsoCFDI"></small></h6>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="table-responsive">
                                            <table class="table mt-4">
                                                <thead>
                                                <tr><th>#</th>
                                                    <th>Descripción</th>
                                                    <th>Cantidad</th>
                                                    <th>Precio</th>
                                                    <th class="text-right">Total</th>
                                                </tr></thead>
                                                <tbody class="body-trs">
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <b>CVE. PROD. SERV.: </b> <span>80101500</span><br/>
                                                        <b>CVE. UNIDAD: </b> <span>E48</span><br/>
                                                        <b>UNIDAD: </b> <span>SERVICIOS</span><br/>
                                                        <b>DESCRIPCIÓN: </b> <span>SERVICIOS DE ASESORÍA EN VENTAS</span>
                                                    </td>
                                                    <td>cantidad</td>
                                                    <td>$Precio</td>
                                                    <td class="text-right">$Total</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="clearfix pt-5">
                                            <h6 class="text-muted">No. Certificado:</h6>

                                            <small> 
                                                <!--Sello CFD: <span class="SelloCFD"></span><br/>-->
                                                <!--<span class="SelloSAT"></span><br/>-->
                                                <!--Sello: <span class="Sello"></span><br/>-->
                                                <span class="NoCertificado"></span><br/>
                                            </small>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="float-right totales text-right">
                                            <p><b>Sub-total: $</b> <span class="subtotal"></span></p>
                                            <p><b>IVA (<span class="tasa"></span>): $ </b> <span class="iva"></span></p>
                                            <h3><span class="total"></span></h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="hidden-print mt-4 mb-4">
                                    <div class="text-right">
                                        <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print m-r-5"></i> Imprimir</a>
                                        <a href="javascript:fnc_subirXml.facturaToCards()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-arrow-left m-r-5"></i> Regresar</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- fin factura -->

        <?php require 'includes/footer_start.php' ?>
        <!-- Modal-Effect -->
        <script src="plugins/custombox/js/custombox.min.js"></script>
        <script src="plugins/custombox/js/legacy.min.js"></script>
        
        <!-- Bootstrap fileupload js -->
        <script src="plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

        <!-- Dropzone js -->
        <script src="plugins/dropzone/dropzone.js"></script>
        <script src="assets/js/subir-xmls.js"></script>
<?php
//echo "<pre>";        print_r($arrModelo); 
echo ""
. ""
. "<script type='text/javascript' language='javascript'>"
. "fnc_subirXml.options.arrModeloxmls = ". json_encode($arrModelo).";"
. "</script>"
. "";
?>
        <?php require 'includes/footer_end.php' ?>        
