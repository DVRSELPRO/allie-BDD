<?php
namespace UtilsReadXML;
require_once 'utilidades/xml2php.php';
class UtilsReadXML {

    
    public function __construct() {        
        
    }
    public static function convertXMLToString($xmlName) {
        $array = array();
        if(trim($xmlName) != ""){
            try {
                $path = PATH_FILES . "xmls/".$xmlName;
                $xmlsString = "";
                if ($file = fopen($path, "r")) {
                    while (!feof($file)) {
                        $xmlsString .= fgets($file);
                    }
                    fclose($file);
                }
                if(trim($xmlsString) != ""){
                    $array = \XML2Array::createArray($xmlsString);
                    
                }
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        }
        return $array;
    }

}
