<?php
include_once './webservices/WSxmls.php';
extract($_GET);
$action = (isset($action) ? $action : "");
$ws = new WSxmls();
switch ($action){
    case "getxmls":
        $ws->getXMLs();        
        break;
    case "sendids":
        $ws->updatexmlsImportadosToFM($_GET);
        break;
default :
    noAction($action);
}
function noAction($action){
    echo "Error: ".$action;
}