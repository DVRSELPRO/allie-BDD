<?php
include_once './modelo/ModeloUser.php';
include_once './dao/DaoUser.php';
include_once './dao/DaoDireccion.php';
include_once './utilidades/EnviarCorreo.php';
include_once './utilidades/TmpsMails.php';
include_once './utilidades/UtilsMysql.php';
include_once './utilidades/varsGlobal.php';
include_once './controller/ControllerXML.php';
/**
 * Description of controllerUser
 *
 * @author Josglow
 */
class ControllerUser {
    private $daoUser = null;
    private $daoDir = null;
    private $mail = null;
    private $utils = null;
    function __construct() {
        $this->daoUser = new dao\DaoUser\DaoUser();
        $this->daoDir = new \dao\DaoDireccion\DaoDireccion();
        $this->mail = new \utilidades\EnviarCorreo\EnviarCorreo();
        $this->utils = new \utilidades\UtilsMysql\UtilsMysql();
    }
    public function loginMysql($mail, $password) {
        $arrProcess = array();        
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            if(strlen($password) > 4 && $password != ""){                
                if($this->utils->existeTokenByMail($mail)){                    
                    if($this->daoUser->loginMysql($mail, $password)){
                        $arrProcess['estatus'] = 1;
                        $arrProcess['mensaje'] = "Ha iniciado sesión correctamente";   
                    }else{
                        $arrProcess['estatus'] = 0;
                        $arrProcess['mensaje'] = "Correo o contraseña inválida.";
                    }
                }else{
                    $arrProcess['estatus'] = 0;
                    $arrProcess['mensaje'] = "Para iniciar sesión, debes primero confirmar su cuenta. Gracias.";
                }
            }else{
                $arrProcess['estatus'] = 0;
                $arrProcess['mensaje'] = "Contraseña inválida";
            }
        }else{
            $arrProcess['estatus'] = 0;
            $arrProcess['mensaje'] = "Correo electrónico inválido";
        }   
        return $arrProcess;
    }
    public function closeSesion() {
        if (isset($_SESSION["ModeloUser"])) {
            unset($_SESSION["ModeloUser"]);
            unset($_SESSION["arrModeloXmls"]);
            header("location: index.php");
        }        
    }
    public function getDireccionByIdUser($id) {
        return $this->daoDir->getDireccionByIdUser($id);
    }
    public function getDirByCP($cp) {
        $json = array();
        try {            
            $json = $this->daoDir->getDirByCP($cp);            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        header('Content-type: application/json; charset=utf-8');
        die(json_encode($json));
    }
    public function updateUser($post){
        extract($post);
        $json = array();
        $flag = TRUE;
        $cad = "";
        $nombreempleado = (isset($nombreempleado) && $nombreempleado != "" ? $nombreempleado : NULL);
        $apellidopaterno = (isset($apellidopaterno) && $apellidopaterno != "" ? $apellidopaterno : NULL);
        $apellidomaterno = (isset($apellidomaterno) && $apellidomaterno != "" ? $apellidomaterno : NULL);
        $rfc = (isset($rfc) && $rfc != "" ? $rfc : NULL);
        $telefonoCelular = (isset($telefonoCelular) && $telefonoCelular != "" ? $telefonoCelular : NULL);
        $rolID = (isset($rolID) ? $rolID : "");
        //validaciones
        if(strlen($nombreempleado) <=2){$cad .= "El nombre es inválido <br/>"; $flag = false;}
        if(strlen($apellidopaterno) <=2){$cad .= "El apellido paterno es inválido <br/>"; $flag = false;}
        if(strlen($apellidomaterno) <=2){$cad .= "El apellido materno es inválido <br/>"; $flag = false;}
        if($rfc == "" || strlen($rfc) < 12 || strlen($rfc) > 13){$cad .= "El RFC es inválido [12 o 13 dígitos] <br/>"; $flag = false;}
        if($email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)){$cad .= "El correo electrónico es inválido <br/>"; $flag = false;}
        $domain = explode("@", $email);
        if (isset($domain[1])) {if (!checkdnsrr($domain[1], "MX")) {$cad .= "El dominio del correo {$email} es inválido.<br/>"; $flag = false;}}else{$cad .= "No se pudo obtener el dominio <br/>"; $flag = false;}
        if($telefonoCelular == "" || strlen($telefonoCelular) < 10){$cad .= "El número de celular deben ser 10 dígitos <br/>"; $flag = false;}
        $utils = new Utils\Utils();        
        //obtiene el id de empleado quien modifica los datos
        $session = new ModeloUser\ModeloUser();
        $session = $utils->getDataSesion();
        if($session == NULL){
            $cad .= "Ha caducado la sesión, favor de <a class='' onclick='location.reload();'>volver a iniciar sesión.</a><br/>";
            $flag = false;
        }
        
        if ($rolID == "") {
            $id_rol = 3;
        } else {
            $rol_ID = 0;
            $rol_ID = $utils->getRolMD5($this->getRoles(), $rolID);
            if ($rol_ID == 1) {
                $id_rol = 1;
            } else if ($rol_ID == 2) {
                $id_rol = 2;
            } else if ($rol_ID == 0) {
                $id_rol = 3;
            } else {
                $id_rol = 3;
            }
        }
        //existe rfc, nss y curp?
        if($this->daoUser->existeUserByRFC($rfc, $idEmpleado)){
            $cad .= $nombreempleado." ya se encuentra dado de alta en el sistema.";
            $flag = false;
        }        
        if($flag){

            $user = new ModeloUser\ModeloUser();
            $user->setIduser($idEmpleado);
            $user->setNombreempleado($nombreempleado);
            $user->setApellidopaterno($apellidopaterno);
            $user->setApellidomaterno($apellidomaterno);
            $user->setEstatus(1);
            $user->setId_rol($id_rol);
            $user->setMail($email);            
            $user->setRfc($rfc);
//            $user->setPathPicPerfil(NULL);
            $user->setTipo_persona((strlen($rfc) == 12 ? "Moral" : (strlen($rfc) == 13 ? "Fisica" : "")));
//                $user->setRazon_social($razonsocial);
            $user->setCelular($telefonoCelular);
            $user->setIdempleadoModificacion($session->getIduser());
            if(isset($idEmpleado) && (int)$idEmpleado > 0){
                if($this->daoUser->updateUser($user)){
                    $json["estatus"] = 1;
                    $json["mensaje"] = "Se actualizó correctamente";
                    $json["post"] = $post;
//                    $_SESSION["ModeloUser"] = serialize($user);   
                }else{
                    $json["estatus"] = 0;
                    $json["mensaje"] = "Error al actualizar los datos del perfil";
                }
            } else {
                die("nuevo no soport");
                $id = $this->daoUser->saveUser($user);
                if((int)$id > 0){
                    //se guarda direccion
                    $dir->setIdUser($id);
                    if($this->daoDir->saveDir($dir)){
                        $json["estatus"] = 1;
                        $json["mensaje"] = "Se guardado correctamente";
                        $json["id"] = $id;
                    }else{
                        $json["estatus"] = 0;
                        $json["mensaje"] = "Error al guardar sus datos";
                    }
                }else{
                    $json["estatus"] = 0;
                    $json["mensaje"] = "Error al guardar los datos";
                }
            }
        }else{
            $json["estatus"] = 0;
            $json["mensaje"] = $cad;
        }
        header('Content-type: application/json; charset=utf-8');
//        echo '<pre>';print_r($json);
        die(json_encode($json, JSON_UNESCAPED_UNICODE));
    }    
    
    public function registroUser($post) {
        extract($post);
        $json = array();        
        $user = new ModeloUser\ModeloUser();
        $flag = TRUE;
        $cad = "";
        if($rfc == "" || strlen($rfc) < 12 || strlen($rfc) > 13){$cad .= "El RFC es inválido [12 o 13 dígitos] <br/>"; $flag = false;}
        if(strlen($rfc) == 12){
            if($razonsocial == "" || strlen($razonsocial) <= 3){$cad .= "La razon social es obligatorio <br/>"; $flag = false;}   
            $nombreempleado = "";
            $apellidopaterno = "";
            $apellidomaterno = "";
        } else if(strlen($rfc) == 13){
            if($nombreempleado == "" || strlen($nombreempleado) <= 3){$cad .= "El nombre es obligatorio <br/>"; $flag = false;}   
            if($apellidopaterno == "" || strlen($apellidopaterno) <= 3){$cad .= "El Apellido paterno es obligatorio <br/>"; $flag = false;}   
            if($apellidomaterno == "" || strlen($apellidomaterno) <= 3){$cad .= "El Apellido materno es obligatorio <br/>"; $flag = false;}   
            $razonsocial = "";
        }
        if($mail == "" || !filter_var($mail, FILTER_VALIDATE_EMAIL)){$cad .= "El correo electrónico es inválido <br/>"; $flag = false;}
        if($mail == "" || !filter_var($mail, FILTER_VALIDATE_EMAIL)){$cad .= "El correo electrónico es inválido <br/>"; $flag = false;}
        $domain = explode("@", $mail);
        if (isset($domain[1])) {if (!checkdnsrr($domain[1], "MX")) {$cad .= "El dominio del correo {$mail} es inválido.<br/>"; $flag = false;}}else{$cad .= "No se pudo obtener el dominio <br/>"; $flag = false;}
        if($password == "" || strlen($password) <= 5){$cad .= "La contraseña es inválida <br/>"; $flag = false;}
        if($password != $password2){$cad .= "La contraseña no coincide <br/>"; $flag = false;}
        if($celular == "" || strlen($celular) < 10){$cad .= "Debes teclear el numero de teléfono [10 dígitos] <br/>"; $flag = false;}
        
        $id_rol = 3;
        if($flag){
            if(!$this->daoUser->existeUserByRFC($rfc)){
                if(!$this->daoUser->existeUser($mail)){            
    //              $user->setIduser($iduser);        
                    $user->setIdcliente(0);
                    $user->setNombreempleado($nombreempleado);
                    $user->setApellidopaterno($apellidopaterno);
                    $user->setApellidomaterno($apellidomaterno);
                    $user->setEstatus(1);
                    $user->setId_rol($id_rol);
                    $user->setMail($mail);
                    $user->setPassword(md5($password));   
                    $user->setNss(NULL);
                    $user->setRfc($rfc);
                    $user->setCurp(NULL);
                    $user->setPath_pic_perfil(NULL);
                    $user->setTipo_persona((strlen($rfc) == 12 ? "Moral" : (strlen($rfc) == 13 ? "Fisica" : "")));
                    $user->setRazon_social($razonsocial);
                    $user->setCelular($celular);
                    if((int)$this->daoUser->saveUser($user) > 0){
                        //notificar por correo
                        //obtner template mail
                        $token = bin2hex(openssl_random_pseudo_bytes(16)) . '' . date('dmYHis');
                        $body = "<p>Para validar su cuenta, favor de hacer click en el <a href='http://".HOST_URL."/".PROJECT_NAME."/index.php?token={$token}'>siguiente enlace</a>.</p>"
                        . "<p>Gracias</p>";
                        $tmp = new utilidades\TmpsMails\TmpsMails();
                        $str = $tmp->tmp_bsd_02(array('nombre_destino' => $user->getNombreempleado()." ".$user->getApellidopaterno(), 'body' => $body, 'atentamente_01' => '', 'atentamente_02' => '', 'title_tmp' => 'Bienvenido'));
                        $s = $this->mail->sendMail($user->getMail(), $user->getNombreempleado()." ".$user->getApellidopaterno(), "noreply@dibaxsystems.com", "Dibaxs Systems", $str, "Validar cuenta");
                        if(isset($s["estatus"]) && $s["estatus"] == 1){
                            $json["mensaje"] = "Se ha registrado correctamente, le llegará a su bandeja de correo una notificación de su registro para confirmar su cuenta.";
                            $json["estatus"] = 0;
                            //guardar token
                            $this->utils->saveToken(array("token"=>$token, "mail"=> $user->getMail()));
                            //gurdar log
                        }else if(isset($s["estatus"])){
                            $json["mensaje"] = "Ha ocurrido error al registrarse, favor de comunicarse con sistemas. ".$s["mensaje"];
                            $json["estatus"] = 0;
                        }else{
                            $json["mensaje"] = "Error al enviar correo";
                            $json["estatus"] = 0;
                        }
                    }else{
                        $json["mensaje"] = "Error al registrarse";
                        $json["estatus"] = 0;
                    }
                }else{
                    $json["estatus"] = 0;
                    $json["mensaje"] = "Ya existe una cuenta vinculada con este correo: ".$mail;
                }
            }else{
                $json["estatus"] = 0;
                $json["mensaje"] = "Ya existe una cuenta vinculada con este RFC: ".$rfc;
            }
        }else{
            $json["mensaje"] = $cad;
            $json["estatus"] = 0;
        }
//        echo "<pre>";print_r($json);
            
        return $json;
        
    }
    public function sendMailResetPwd($mail) {
        $s = array();
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $s = $this->daoUser->sendMailResetPwd($mail);   
        }else{
            $s = array("estatus"=>0, "mensaje"=>"Correo invalido");
        }
        return $s;
    }
    public function resetPassword($password, $password_confirm, $token) {
        $json = array();
        if(strlen($password) > 5 && $password == $password_confirm){
            if($token != ""){
                $mail = $this->utils->getMailByToken($token);
                if($mail != ""){
                    if($this->daoUser->resetPassword($mail, md5($password))){
                        $json["estatus"] = 1;
                        $json["mensaje"] = "Se ha cambiado su contraseña correctamente";
                        $json["mail"] = $mail;
                    }else{
                        $json["estatus"] = 0;
                        $json["mensaje"] = "Error al cambiar su contraseña";
                    }      
                }else{
                    $json["estatus"] = 0;
                    $json["mensaje"] = "Mail inválido";
                }   
            }else{
                $json["estatus"] = 0;
                $json["mensaje"] = "El token es inválido";
            }
        }else{
            $json["estatus"] = 0;
            $json["mensaje"] = "La contraseña es inválida o no coinciden";
        }
        return $json;
    }
    public function getUsers($id, $estatus = 1, $id_rol = 3){        
        $data = array();
        try {
            
            $arrUsers = $this->daoUser->getUsers($id, $estatus, $id_rol);
            $cxml = new ControllerXML();
            $arrTotalXMLByUsers = $cxml->getTotalFilesByUsers();
            if (count($arrUsers) > 0 && count($arrTotalXMLByUsers) > 0 && (int)$id == 0){
                foreach ($arrUsers as $key => $valObject){
                    $mUser = new \ModeloUser\ModeloUser();
                    $mUser = $valObject;
                    foreach ($arrTotalXMLByUsers as $key => $arrT) {
                        if($arrT['iduser'] == $mUser->getIduser()){
                         $mUser->setTxml($arrT["t"]);
                         break;
                        }
                    }
                    array_push($data, $mUser);
                }
            } else {
                $data = new \ModeloUser\ModeloUser();
                $data = $arrUsers;
            }
            
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $data;
    }
    public function validacion($action, $id) {
        $json = array();
        $flag = false;
        if($action === "aprobar"){
            $flag = $this->daoUser->aprobar($id);
        } else if($action === "rechazar"){
            $flag = $this->daoUser->rechazar($id);
        } else if($action === "porValidar"){
            $flag = $this->daoUser->porValidar($id);
        } else if($action === "eliminar"){
            $flag = $this->daoUser->eliminar($id);
        }
        if($flag){
            $json["estatus"] = 1;
            $json["mensaje"] = "Se ha guardado correctamente";
        }else{
            $json["estatus"] = 0;
            $json["mensaje"] = "Ha ocurrido un error mientras se actualizaba.";
        }
        header('Content-type: application/json; charset=utf-8');
//        echo '<pre>';print_r($json);
        die(json_encode($json));
    } 
    public function getRoles() {
        return $this->utils->getRoles();
    }
    public function saveInstructor($post) {
        extract($post);
        $json = array();        
        $user = new ModeloUser\ModeloUser();
        $flag = TRUE;
        $cad = "";
        if($razonsocial == "" || strlen($razonsocial) <= 3){$cad .= "El nombre es obligatorio <br/>"; $flag = false;}
        if($mail == "" || !filter_var($mail, FILTER_VALIDATE_EMAIL)){$cad .= "El correo electrónico es inválido <br/>"; $flag = false;}
        $tc = 3;//instructor
        $id_rol = 5;//instructor
        if($flag){
            if(!$this->daoUser->existeUser($mail)){
    //            $user->setIduser($iduser);        
                $user->setIdcliente(0);
                $user->setNombreempleado($razonsocial);
                $user->setApellidopaterno($apellidopaterno);
                $user->setApellidomaterno($apellidomaterno);
                $user->setEstatus(1);
                $user->setId_rol($id_rol);
                $user->setMail($mail);
                $user->setTipoCorredor($tc);
                $id = $this->daoUser->saveUser($user);
                if((int)$id > 0){
                    $json["mensaje"] = "Se ha guardado correctamente";
                    $json["estatus"] = 1;
                    $json["nombreempleado"] = $razonsocial;
                    $json["apellidopaterno"] = $apellidopaterno;
                    $json["apellidomaterno"] = $apellidomaterno;
                    $json["id"] = $id;
                }else{
                    $json["mensaje"] = "Error al registrarse";
                    $json["estatus"] = 0;
                }
            }else{
                $json["estatus"] = 0;
                $json["mensaje"] = "Ya existe un instructor vinculado con este correo: ".$mail;
            }
        }else{
            $json["mensaje"] = $cad;
            $json["estatus"] = 0;
        }
            
        return $json;
        
    }
    public function updateSoloPassword($param) {
        extract($param);
        $json = array();
        if($password === $passwordrepetir){
            if(isset($idEmpleado) && (int)$idEmpleado > 0 && $password != ""){
                $flag = $this->daoUser->updateSoloPassword(md5($password), $idEmpleado);
                if($flag){
                    $json["estatus"] = 1;
                    $json["mensaje"] = "Se ha actualizado correctamente";
                }else{
                    $json["estatus"] = 0;
                    $json["mensaje"] = "Ha ocurrido un error al procesar los datos.";
                }    
            }else{
                $json["estatus"] = 0;
                $json["mensaje"] = "ID inválido";
            }
        }else{
            $json["estatus"] = 0;
            $json["mensaje"] = "La contraseña no son iguales";
        }
        
        
        header('Content-type: application/json; charset=utf-8');
//        echo '<pre>';print_r($json);
        die(json_encode($json));
    }
    public function deleteUser($param) {
        extract($param);
        $json = array();
        $flag = $this->daoUser->eliminar($iduser);
        if($flag){
            $json["estatus"] = 1;
            $json["mensaje"] = "Se ha eliminado correctamente";
        }else{
            $json["estatus"] = 0;
            $json["mensaje"] = "Ha ocurrido un error al procesar los datos.";
        }
        header('Content-type: application/json; charset=utf-8');
//        echo '<pre>';print_r($json);
        die(json_encode($json));
    }
}
