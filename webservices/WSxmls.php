<?php
include_once './dao/DaoXML.php';
include_once './modelo/ModeloXML.php';
include_once './modelo/ModeloUser.php';
class WSxmls {
    private $daoxmls;
    public function __construct() {
        $this->daoxmls = new \DaoXML\DaoXML();
    }
    public function getXMLs(){       
        $json = array();
        $arrxmls = $this->daoxmls->getUploadFiles(array());
        if (count($arrxmls) > 0) {
            $json["estatus"] = 1;
            $json["mensaje"] = "Se han encontrado: ". count($arrxmls)." archivos para importar";
            $json["data"] = $arrxmls;
        }else{
            $json["estatus"] = 0;
            $json["mensaje"] = "No se han encontrado archivos: ". count($arrxmls);
        }
        header('Content-type: application/json; charset=utf-8');        
        die(json_encode($json, JSON_UNESCAPED_UNICODE));
    }
    public function updatexmlsImportadosToFM($params){
        extract($params);
//        echo "ids: ".$ids;
        if(isset($ids)){
            if($this->daoxmls->updatexmlsImportadosToFM($ids)){
               echo "OK";
            }else{
                echo "Error";
            }
        }        
    }
}
