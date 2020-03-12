<?php

namespace Utils;

class Utils {

    public static function recursive_array_search($needle, $haystack, $currentKey = '') {
        foreach ($haystack as $key => $value) {
            if (is_array($value)) {
                $nextKey = $this->recursive_array_search($needle, $value, $currentKey . '[' . $key . ']');
                if ($nextKey) {
                    return $nextKey;
                }
            } else if ($value == $needle) {
                return is_numeric($key) ? $currentKey . '[' . $key . ']' : $currentKey;
            }
        }
        return false;
    }

    /* check a strings encoded value */

    public static function checkEncoding($string, $string_encoding) {
        $fs = $string_encoding == 'UTF-8' ? 'UTF-32' : $string_encoding;

        $ts = $string_encoding == 'UTF-32' ? 'UTF-8' : $string_encoding;

        return $string === mb_convert_encoding(mb_convert_encoding($string, $fs, $ts), $ts, $fs);
    }
    public static function convertMontoToDecimal($monto, $decimal){
        $n = 0;
        try {            
         if($monto != null && $monto != "" && $decimal != ""){
            $n = number_format($monto, $decimal);
        }           
        } catch (Exception $ex) {
            throw "Error: ".$monto."<br>";
        }        
        return $n;
    }
    public static function getEdad($fecha_nacimiento) {
        $dia = date("d");
        $mes = date("m");
        $ano = date("Y");


        $dianaz = date("d", strtotime($fecha_nacimiento));
        $mesnaz = date("m", strtotime($fecha_nacimiento));
        $anonaz = date("Y", strtotime($fecha_nacimiento));


//si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

        if (($mesnaz == $mes) && ($dianaz > $dia)) {
            $ano = ($ano - 1);
        }

//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual

        if ($mesnaz > $mes) {
            $ano = ($ano - 1);
        }

        //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad

        $edad = ($ano - $anonaz);


        return $edad;
    }
    public static function uppersTitles($x) {
        return mb_convert_case(mb_strtolower($x, "utf-8"), MB_CASE_TITLE, 'UTF-8');
    }
    public static function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    public static function removeAccents($str){
        $unwanted_array = array('Å ' => 'S', 'Å¡' => 's', 'Å½' => 'Z', 'Å¾' => 'z', 'Ã€' => 'A', 'Ã�' => 'A', 'Ã‚' => 'A', 'Ãƒ' => 'A', 'Ã„' => 'A', 'Ã…' => 'A', 'Ã†' => 'A', 'Ã‡' => 'C', 'Ãˆ' => 'E', 'Ã‰' => 'E',
            'ÃŠ' => 'E', 'Ã‹' => 'E', 'ÃŒ' => 'I', 'Ã�' => 'I', 'ÃŽ' => 'I', 'Ã�' => 'I', 'Ã‘' => 'N', 'Ã’' => 'O', 'Ã“' => 'O', 'Ã”' => 'O', 'Ã•' => 'O', 'Ã–' => 'O', 'Ã˜' => 'O', 'Ã™' => 'U',
            'Ãš' => 'U', 'Ã›' => 'U', 'Ãœ' => 'U', 'Ã�' => 'Y', 'Ãž' => 'B', 'ÃŸ' => 'Ss', 'Ã ' => 'a', 'Ã¡' => 'a', 'Ã¢' => 'a', 'Ã£' => 'a', 'Ã¤' => 'a', 'Ã¥' => 'a', 'Ã¦' => 'a', 'Ã§' => 'c',
            'Ã¨' => 'e', 'Ã©' => 'e', 'Ãª' => 'e', 'Ã«' => 'e', 'Ã¬' => 'i', 'Ã­' => 'i', 'Ã®' => 'i', 'Ã¯' => 'i', 'Ã°' => 'o', 'Ã±' => 'n', 'Ã²' => 'o', 'Ã³' => 'o', 'Ã´' => 'o', 'Ãµ' => 'o',
            'Ã¶' => 'o', 'Ã¸' => 'o', 'Ã¹' => 'u', 'Ãº' => 'u', 'Ã»' => 'u', 'Ã½' => 'y', 'Ã¾' => 'b', 'Ã¿' => 'y');
        return strtr($str, $unwanted_array);
    }
    public function convertMesIntTOString($mesInt){
        $mesInt = (int)$mesInt;
        if($mesInt > 0){
            $meses = array(
                "1"=> "Enero",
                "2"=> "Febrero",
                "3"=> "Marzo",
                "4"=> "Abril",
                "5"=> "Mayo",
                "6"=> "Junio",
                "7"=> "Julio",
                "8"=> "Agosto",
                "9"=> "Septiembre",
                "10"=> "Octubre",
                "11"=> "Noviembre",
                "12"=> "Diciembre"
            );
            return strtr($mesInt, $meses);
        }                
    }
    public static function getDataSesion() {
        $aux = NULL;
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION["ModeloUser"])){
            $aux = unserialize($_SESSION["ModeloUser"]);
        }else{
            header("location: ./iniciar-sesion.php");
        }
        return $aux;
    }
    public static function getMenuPadre($arrAccess) {
        $arrMenus = array();
        if(is_array($arrAccess) && count($arrAccess) > 0){
            $utils = new Utils();
            foreach ($arrAccess as $key => $valMenus) {
                foreach ($valMenus as $key2 => $valMenu) {                    
                    if ($utils->recursive_array_search($key2, $arrMenus) == "") {
//                        $aux = array();
//                        $aux["menu"] = $key2;
//                        $aux["icono_padre"] = $valMenu["icono_padre"];
                        array_push($arrMenus, $key2);
                    }
                }
            }   
        }        
        return $arrMenus;
    }
    public static function getIconPadre($arrAccess, $keySearch) {
        $flag = false;
        $x = "";
        if (is_array($arrAccess) && count($arrAccess) > 0) {
            foreach ($arrAccess as $key => $valMenus) {
                if (!$flag) {
                    foreach ($valMenus as $key2 => $valMenu) {
                        if ($key2 == $keySearch) {
                            $x = $valMenu["icono_padre"];
                            $flag = TRUE;
                            break;
                        }
                    }
                }
            }
        }
        return $x;
    }
    public static function getRolMD5($arrRoles, $token) {
        $x = 0;
        try {
            if(count($arrRoles) > 0){
                foreach ($arrRoles as $key => $value) {
                    if(md5($key) == $token){                        
                        $x = $key;
                        break;
                    }
                    
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        return $x;
    }
    public static function getEstatusString($estatus) {
        $x = "";
        try {            
            if ($estatus == 1) {
                $x = "Activo";
            } else if ($estatus == 0) {
                $x = "Inactivo";
            } else if ($estatus == "") {
                $x = "Sin estatus";
            }
        } catch (Exception $ex) {
            
        }
        return $x;
    }

}
