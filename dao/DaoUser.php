<?php
namespace dao\DaoUser;
include_once './conexiones/ConexionMysql.php';
include_once './modelo/ModeloUser.php';
include_once './utilidades/EnviarCorreo.php';
include_once './utilidades/TmpsMails.php';
include_once './utilidades/UtilsMysql.php';
use PDO;
/**
 * Description of DaoUser
 *
 * @author Josglow
 */
class DaoUser {
    private $conn = null;
    private  $conMysql = null;
    private  $mail = null;
    private $utils = null;
    function __construct() {
        $this->conMysql = new \conexiones\ConexionMysql\ConexionMysql();
        $this->conn = $this->conMysql->conMysql();
        $this->mail = new \utilidades\EnviarCorreo\EnviarCorreo();
        $this->utils = new \utilidades\UtilsMysql\UtilsMysql();
    }
    public function loginMysql($mail, $password) {
        $flag = false;
        try {
            $stmt = $this->conn->prepare("SELECT "
                    . "iduser, "
                    . "idcliente, "
                    . "nombreempleado, "
                    . "apellidopaterno, "
                    . "apellidomaterno, "
                    . "estatus, "
                    . "id_rol, "
                    . "mail, "
                    . "nss, "
                    . "rfc, "
                    . "curp, "
                    . "path_pic_perfil, "
                    . "tipo_persona, "
                    . "razon_social, "
                    . "celular "
                    . "FROM users "
                    . "where mail = ? and password = ? and estatus = 1"
                    . "");
            $stmt->bindValue(1, $mail, PDO::PARAM_STR);
            $stmt->bindValue(2, $password, PDO::PARAM_STR);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $num = 0;
            if (count($rows) > 0) {
                $flag = true;
                foreach ($rows as $key => $value) {
                    $mUser = new \ModeloUser\ModeloUser();
                    $mUser->setIduser($value["iduser"]);
                    $mUser->setNombreempleado($value["nombreempleado"]);
                    $mUser->setApellidopaterno($value["apellidopaterno"]);
                    $mUser->setApellidomaterno($value["apellidomaterno"]);
                    $mUser->setEstatus($value["estatus"]);
                    $mUser->setId_rol($value["id_rol"]);
                    $mUser->setMail($value["mail"]);
                    $mUser->setNss($value["nss"]);
                    $mUser->setRfc($value["rfc"]);
                    $mUser->setCurp($value["curp"]);
                    $mUser->setPath_pic_perfil($value["path_pic_perfil"]);
                    $mUser->setTipo_persona($value["tipo_persona"]);
                    $mUser->setRazon_social($value["razon_social"]);
                    $mUser->setCelular($value["celular"]);
                    $mUser->setArrAccess($this->utils->getAccessByIdRol($mUser->getId_rol()));
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION["ModeloUser"] = serialize($mUser);
                    header("location: index.php");
                }
            }
        } catch (\PDOException $exc) {
            echo "Error login: " . $exc->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
            $rows = NULL;
        }
        return $flag;
    }
    public function updateUser(\ModeloUser\ModeloUser $user) {
//        echo '<pre>user: ';print_r($user);
        $flag = false;
        $sql = "UPDATE users SET "
//                    . "iduser = ?, "
                    . "idcliente = ?, "
                    . "nombreempleado = ?, "
                    . "apellidopaterno = ?, "
                    . "apellidomaterno = ?, "
                    . "estatus = ?, "
                    . "id_rol = ?, "
                    . "mail = ?, "                    
                    . "rfc = ?, "
                    . "tipo_persona = ?, "
                    . "celular = ? "
                    . "WHERE iduser = ? "
                    . "";
//                    echo "SQLxx".$sql." ".$user->getCelular()." ".$user->getIduser();
        try {            
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $user->getIdcliente(), \PDO::PARAM_INT);
                $stmt->bindvalue(2, $user->getNombreempleado(), \PDO::PARAM_STR);
                $stmt->bindvalue(3, $user->getApellidopaterno(), \PDO::PARAM_STR);
                $stmt->bindvalue(4, $user->getApellidomaterno(), \PDO::PARAM_STR);
                $stmt->bindvalue(5, $user->getEstatus(), \PDO::PARAM_INT);
                $stmt->bindvalue(6, $user->getId_rol(), \PDO::PARAM_INT);
                $stmt->bindvalue(7, $user->getMail(), \PDO::PARAM_STR);
                $stmt->bindvalue((8), $user->getRfc(), \PDO::PARAM_STR);
                $stmt->bindvalue((9), $user->getTipo_persona(), \PDO::PARAM_STR);
                $stmt->bindvalue((10), $user->getCelular(), \PDO::PARAM_STR);
                //id_user = ? -> $user->getIduser()
                $stmt->bindvalue((11), $user->getIduser(), \PDO::PARAM_INT);
                $flag = $stmt->execute() ? true: false;
        } catch (\PDOException $ex) {
            echo "Error al actualizar user: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;            
        }
        return $flag;
    }   
    public function saveUser(\ModeloUser\ModeloUser $user) {
//        echo "<pre>";print_r($user);die();
        $id = 0;
        $sql = "INSERT INTO users ("
                . "idcliente, "
                . "nombreempleado, "
                . "apellidopaterno, "
                . "apellidomaterno, "
                . "estatus, "
                . "id_rol, "
                . "mail, "
                . "password, "
                . "nss, "
                . "rfc, "
                . "curp, "
                . "path_pic_perfil, "
                . "tipo_persona, "
                . "razon_social, "
                . "celular "
                . ") VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) "
                    . "";
        try {            
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $user->getIdcliente(), \PDO::PARAM_INT);
                $stmt->bindvalue(2, $user->getNombreempleado(), \PDO::PARAM_STR);
                $stmt->bindvalue(3, $user->getApellidopaterno(), \PDO::PARAM_STR);
                $stmt->bindvalue(4, $user->getApellidomaterno(), \PDO::PARAM_STR);
                $stmt->bindvalue(5, $user->getEstatus(), \PDO::PARAM_INT);
                $stmt->bindvalue(6, $user->getId_rol(), \PDO::PARAM_INT);
                $stmt->bindvalue(7, $user->getMail(), \PDO::PARAM_STR);
                $stmt->bindvalue(8, $user->getPassword(), \PDO::PARAM_STR);
                $stmt->bindvalue((9),$user->getNss(), \PDO::PARAM_STR);
                $stmt->bindvalue((10), $user->getRfc(), \PDO::PARAM_STR);
                $stmt->bindvalue((11), $user->getCurp(), \PDO::PARAM_STR);
                $stmt->bindvalue((12), $user->getPath_pic_perfil(), \PDO::PARAM_STR);
                $stmt->bindvalue((13), $user->getTipo_persona(), \PDO::PARAM_STR);
                $stmt->bindvalue((14), $user->getRazon_social(), \PDO::PARAM_STR);                
                $stmt->bindvalue((15), $user->getCelular(), \PDO::PARAM_STR);
                $stmt->execute();
                $id = $this->conn->lastInsertId();
        } catch (\PDOException $ex) {
            echo "Error al guardar usuario: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
        }
        return $id;
    }    
    public function existeUser($mail) {
        $flag = false;
        $sql = "SELECT count(iduser) as t FROM users WHERE mail = ? limit 1";
        try {            
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $mail, \PDO::PARAM_STR);
                $stmt->execute();
                $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                foreach ($row as $key => $value) {
                    if((int)$value["t"] > 0){
                        $flag = true;
                    }
                }
        } catch (\PDOException $ex) {
            echo "Error al validar si existe el usuario: ".$sql." mail: ".$mail."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
            $row = NULL;
        }
        return $flag;
    }
    public function existeUserByRFC($rfc, $idEmpleado = 0) {
        $flag = false;
        $sql = "SELECT count(iduser) as t FROM users WHERE rfc = ? ";        
        $sql .= ($idEmpleado > 0 ? "and iduser != ?" : "");
        try {            
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $rfc, \PDO::PARAM_STR);
                if($idEmpleado > 0){
                    $stmt->bindvalue(2, $idEmpleado, \PDO::PARAM_INT);   
                }
                $stmt->execute();
                $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                foreach ($row as $key => $value) {
                    if((int)$value["t"] > 0){
                        $flag = true;
                    }
                }
        } catch (\PDOException $ex) {
            echo "Error existeUserByRFC: ".$sql . "<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
            $row = NULL;
        }
        return $flag;
    }
    public function sendMailResetPwd($mail) {
        $json = array();
        if($this->existeUser($mail)) {
            //notificar por correo
            //obtner template mail
            $token = bin2hex(openssl_random_pseudo_bytes(16)) . '' . date('dmYHis');
            $body = "<p>Con el <a href='http://" . HOST_URL . "/" . PROJECT_NAME . "/new-password.php?token={$token}'>siguiente enlace</a> podrá restablecer su contraseña.</p>";
            $tmp = new \utilidades\TmpsMails\TmpsMails();
            $str = $tmp->tmp_bsd_02(array('nombre_destino' => "", 'body' => $body, 'atentamente_01' => '', 'atentamente_02' => '', 'title_tmp' => 'Bienvenido'));
            $s = $this->mail->sendMail($mail, "", "noreply@dibaxsystems.com", "Dibax Systems", $str, "Cambiar contraseña");
            if (isset($s["estatus"]) && $s["estatus"] == 1) {
                $json["mensaje"] = "Se ha enviado un enlace a su correo electrónico. Favor de revisarlo.";
                $json["estatus"] = 1;
                $json["mail"] = $mail;
                //guardar token
                $this->utils->saveToken(array("token" => $token, "mail" => $mail));
                //gurdar log
            } else if (isset($s["estatus"])) {
                $json["mensaje"] = "Ha ocurrido error al intentar enviar un correo para cambiar su contraseña. " . $s["mensaje"];
                $json["estatus"] = 0;
            } else {
                $json["mensaje"] = "Error al enviar correo";
                $json["estatus"] = 0;
            }
        }else{
            $json["mensaje"] = "El correo {$mail} no está vinculado a nínguna cuenta. Favor de teclear un correo válido.";
            $json["estatus"] = 0;
        }
        return $json;
    }
    public function resetPassword($mail, $password) {
        $flag = false;
        $sql = "UPDATE users SET "
                    . "password = ? "                    
                    . "WHERE mail = ? and estatus = ?"
                    . "";
        try {            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindvalue(1, $password, \PDO::PARAM_STR);
            $stmt->bindvalue(2, $mail, \PDO::PARAM_STR);
            $stmt->bindvalue(3, 1, \PDO::PARAM_INT);
            $flag = $stmt->execute() ? true: false;
        } catch (\PDOException $ex) {
            echo "Error al actualizar user: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
        }
        return $flag;
    }
    public function getUsers($id = 0, $estatus = 1, $id_rol = 3) {
        $arrUsers = array();
        $sql = "SELECT iduser, idcliente, nombreempleado, apellidopaterno, apellidomaterno, estatus, id_rol, mail, password, nss, rfc, curp, "
                . "fechamodificacion, path_pic_perfil, tipo_persona, "
                . "razon_social, celular, validado, fechacreacion "
                . "FROM users where 1=1 and estatus = ?  and id_rol = ? ";
        if($id > 0){
            $sql .= " and iduser = ?";
        }
        try {
            $stmt = $this->conn->prepare($sql);  
            $stmt->bindvalue(1, $estatus, \PDO::PARAM_STR);
            $stmt->bindvalue(2, $id_rol, \PDO::PARAM_STR);
            if($id > 0){
                $stmt->bindvalue(3, $id, \PDO::PARAM_INT);    
            }
            $stmt->execute();
            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);            
            if(is_array($row) && count($row) > 0){
                foreach ($row as $key => $value) {
                    $aux = new \ModeloUser\ModeloUser();
                    $aux->setIduser($value["iduser"]);
                    $aux->setIdcliente($value["idcliente"]);
                    $aux->setNombreempleado($value["nombreempleado"]);
                    $aux->setApellidopaterno($value["apellidopaterno"]);
                    $aux->setApellidomaterno($value["apellidomaterno"]);
                    $aux->setEstatus($value["estatus"]);
                    $aux->setId_rol($value["id_rol"]);
                    $aux->setMail($value["mail"]);
                    $aux->setPassword($value["password"]);
                    $aux->setNss($value["nss"]);
                    $aux->setRfc($value["rfc"]);
                    $aux->setCurp($value["curp"]);
                    $aux->setFechamodificacion($value["fechamodificacion"]);
                    $aux->setPath_pic_perfil($value["path_pic_perfil"]);
                    $aux->setTipo_persona($value["tipo_persona"]);
                    $aux->setRazon_social($value["razon_social"]);
                    $aux->setCelular($value["celular"]);
                    $aux->setValidado($value["validado"]);
                    $aux->setFechacreacion($value["fechacreacion"]);
                    array_push($arrUsers, $aux);
                }
            }
        } catch (\PDOException $exc) {
            echo "Error al obtener los usuarios: ".$exc->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
            $row = NULL;
        }
        return $arrUsers;
    }
    public function aprobar($id) {
        $flag = false;        
        $sql = "UPDATE users SET validado = 1  WHERE iduser = ? ";
        try {
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $id, \PDO::PARAM_INT);
                $flag = $stmt->execute() ? true: false;
        } catch (\PDOException $ex) {
            echo "Error al aprbar user: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
        }
        return $flag;
    }
    public function rechazar($id) {
        $flag = false;        
        $sql = "UPDATE users SET validado = 2  WHERE iduser = ? ";
        try {
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $id, \PDO::PARAM_INT);
                $flag = $stmt->execute() ? true: false;
        } catch (\PDOException $ex) {
            echo "Error al rechazar user: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
        }
        return $flag;
    }
    public function porValidar($id) {
        $flag = false;        
        $sql = "UPDATE users SET validado = 0  WHERE iduser = ? ";
        try {
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $id, \PDO::PARAM_INT);
                $flag = $stmt->execute() ? true: false;
        } catch (\PDOException $ex) {
            echo "Error al por validar user: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
        }
        return $flag;
    }
    public function eliminar($id) {
        $flag = false;        
        $sql = "delete from users WHERE iduser = ? ";
        try {
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $id, \PDO::PARAM_INT);
                $flag = $stmt->execute() ? true: false;
        } catch (\PDOException $ex) {
            echo "Error al eliminar user: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
        }
        return $flag;
    }
    
    public function getUsersByArrayIds($arrIds) {
        $arrUsers = array();
        $sql = "SELECT iduser, idcliente, nombreempleado, apellidopaterno, apellidomaterno, estatus, id_rol, mail, password, nss, rfc, curp, fechamodificacion, path_pic_perfil, tipo_persona, razon_social, iduserPadre, celular, validado, fechacreacion "
                . "FROM users where 1=1 ";
        if(count($arrIds) > 0){
            $param = implode(",", $arrIds);
            $sql .= " and iduser in ({$param})";
        }        
        try {
//            echo $sql." ". explode(",", $arrIds);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);            
            if(is_array($row) && count($row) > 0){
                foreach ($row as $key => $value) {
                    $aux = new \ModeloUser\ModeloUser();
                    $aux->setIduser($value["iduser"]);
                    $aux->setIdcliente($value["idcliente"]);
                    $aux->setNombreempleado($value["nombreempleado"]);
                    $aux->setApellidopaterno($value["apellidopaterno"]);
                    $aux->setApellidomaterno($value["apellidomaterno"]);
                    $aux->setEstatus($value["estatus"]);
                    $aux->setId_rol($value["id_rol"]);
                    $aux->setMail($value["mail"]);
                    $aux->setPassword($value["password"]);
                    $aux->setNss($value["nss"]);
                    $aux->setRfc($value["rfc"]);
                    $aux->setCurp($value["curp"]);
                    $aux->setFechamodificacion($value["fechamodificacion"]);
                    $aux->setPath_pic_perfil($value["path_pic_perfil"]);
                    $aux->setTipo_persona($value["tipo_persona"]);
                    $aux->setRazon_social($value["razon_social"]);
                    $aux->setTipoCorredor($value["tipoCorredor"]);
                    $aux->setIduserPadre($value["iduserPadre"]);
                    $aux->setCelular($value["celular"]);
                    $aux->setValidado($value["validado"]);
                    $aux->setFechacreacion($value["fechacreacion"]);
                    array_push($arrUsers, $aux);
                }
            }
        } catch (\PDOException $exc) {
            echo "Error al obtener los usuarios por arrays ids: ".$exc->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
            $row = NULL;
        }
        return $arrUsers;
    }
    public function updateSoloPassword($password, $idEmpleado) {
//        echo '<pre>user: ';print_r($user);
        $flag = false;
        $sql = "UPDATE users SET "
                    . "`password` = ? "
                    . "WHERE iduser = ? "
                    . "";
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->bindvalue(1, $password, \PDO::PARAM_STR);
            $stmt->bindvalue((2), $idEmpleado, \PDO::PARAM_INT);
            $flag = $stmt->execute() ? true: false;
        } catch (\PDOException $ex) {
            echo "Error updateSoloPassword: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;            
        }
        return $flag;
    }
}
