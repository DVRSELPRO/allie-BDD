<?php
extract($_REQUEST);
include_once './modelo/ModeloXML.php';
include_once './controller/ControllerXML.php';
$mUser = new ModeloXML\ModeloXML();
$controllerXml = new ControllerXML();
//echo "<pre>xxx: ";print_r($_FILES);die();
//1324
$action = isset($action) ? $action : "";
if(isset($_FILES) && count($_FILES) > 0){   
    $s = $controllerXml->saveXml($_FILES);
}
if($action == "btnFinalizarUplods"){
    $controllerXml->finalizarUploadXML($_REQUEST);
} else if ($action == "deleteUploadFileByID"){
    $controllerXml->deleteUploadFilesByID($id);
} else if($action == "deleteUploadFilesNoActivos"){
    $controllerXml->deleteUploadFilesNoActivos();
}