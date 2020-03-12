<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
require_once './utilidades/varsGlobal.php';
require_once './utilidades/UtilsReadXML.php';
require_once './controller/ControllerXML.php';
$c = new ControllerXML();
$utilsReadXML = new \UtilsReadXML\UtilsReadXML();
//$array = $utilsReadXML->convertXMLToString("FFT_IVariosConceptos.xml");
//$array = $utilsReadXML->convertXMLToString("ECO_Ingresos.xml");
$array = $utilsReadXML->convertXMLToString("2ND-1Pagos.xml");
//$array = $utilsReadXML->convertXMLToString("data.xml");
$c->saveXml($array);
echo "<pre>";
print_r($array);
?>
 
<div class="col-lg-3 col-md-3 col-sm-3 col-12">
<div class="text-center card-box">
<div class="member-card pt-2 pb-2">
<div class="thumb-lg member-thumb m-b-10 mx-auto">
<img src="assets/images/file_icons/xml.svg" class="rounded-circle img-thumbnail" alt="">
</div>
<div class="">
<h4 class="m-b-5">GIN150407TE0</h4>
<p class="text-muted"><span> <a href="#" class="text-pink">GRUPO INTEL - BATH, S.A. DE C.V.</a> </span></p>
</div>
    <button type="button" class="btn btn-success m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light" onclick="fnc_subirXml.checkSaveCancelar(uuid, id)">Guardar</button>
    <button type="button" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-check-circle"></i> </button>
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