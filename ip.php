<?php
include_once './controller/ControllerIP.php';
$cip = new ControllerIP();
extract($_REQUEST);
$time = date("G:i:s");
$date = date("d-m:Y");
$file = __DIR__ . "/logs/log.txt";
$open = fopen($file, "a");
$ip = isset($ip) ? $ip: "No existe ip";
//$data = json_encode($_REQUEST);
if ($open) {
    fwrite($open, date("G:i:s|") . date("d:m:Y") . ' IP Publica: '.$ip . PHP_EOL);
//    fwrite($open, $data . PHP_EOL);
    fclose($open);
    
}else{
    die('no se pudo abrir ' . $file);
}
if($ip != null){
    $arr = explode(".", $ip);
    //echo "count: ".count($arr)."<pre>";print_r($arr);
    if(count($arr) == 4){
        if($cip->getTotalIP($ip) == 0){
            $cip->updateEstatuIP();
            $id = $cip->saveIP($ip);
            
        }
    }
   
}
