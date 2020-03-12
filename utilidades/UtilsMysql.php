<?php
namespace utilidades\UtilsMysql;
include_once './conexiones/ConexionMysql.php';
//ini_set('display_errors', 1); error_reporting(E_ALL);
class UtilsMysql {
    private $conn = null;
    private  $conMysql = null;
    function __construct() {
        $this->conMysql = new \conexiones\ConexionMysql\ConexionMysql();
        $this->conn = $this->conMysql->conMysql();
    }
    public function saveToken($param) {
        extract($param);
        $flag = false;
        $sql = "INSERT INTO tokens ("
                . "token, "
                . "estatus, "
                . "mail, "
                . "creado "
                . ") VALUES(?,?,?,?)";
        try {            
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $token, \PDO::PARAM_STR);
                $stmt->bindvalue(2, 0, \PDO::PARAM_INT);
                $stmt->bindvalue(3, $mail, \PDO::PARAM_STR);
                $stmt->bindvalue(4, date("Y-m-d H:i:s"), \PDO::PARAM_STR);
                $flag = $stmt->execute() ? true: false;
        } catch (\PDOException $ex) {
            echo "Error al guardar token: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $flag;
    }
    public function existeToken($token) {
        $flag = false;
        $sql = "SELECT count(token) as t FROM tokens "
                . "WHERE token = ? and estatus = ? ";
//        echo $sql." token: ".$token;
        try {            
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $token, \PDO::PARAM_STR);
                $stmt->bindvalue(2, 0, \PDO::PARAM_INT);
                $stmt->execute();
                $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                foreach ($row as $key => $value) {
                    if((int)$value["t"] > 0){
                        $flag = true;
                    }
                }
        } catch (\PDOException $ex) {
            echo "Error al existe token: ".$sql." token: ".$token."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $flag;
    }
    public function existeTokenByMail($mail) {
        $flag = false;
        $sql = "SELECT count(token) as t FROM tokens "
                . "WHERE mail = ? and estatus = ? ";
        try {            
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $mail, \PDO::PARAM_STR);
                $stmt->bindvalue(2, 1, \PDO::PARAM_INT);
                $stmt->execute();
                $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                foreach ($row as $key => $value) {
                    if((int)$value["t"] > 0){
                        $flag = true;
                    }
                }
        } catch (\PDOException $ex) {
            echo "Error existe token by mail: ".$sql." token: ".$mail."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $flag;
    }
    public function updateToken($token) {
        $flag = false;
        $sql = "UPDATE tokens set "
                . "estatus = ? "
                . "WHERE "
                . "token = ? and "
                . "estatus = ? "
                . "";
//        echo $sql." ".$token;
        try {            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindvalue(1, 1, \PDO::PARAM_INT);
            $stmt->bindvalue(2, $token, \PDO::PARAM_STR);
            $stmt->bindvalue(3, 0, \PDO::PARAM_INT);
            $flag = $stmt->execute() ? true: false;
        } catch (\PDOException $ex) {
            echo "Error al update token: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $flag;
    }
    public function getMailByToken($token) {
        $flag = "";
        $sql = "SELECT mail FROM tokens "
                . "WHERE token = ? and estatus = ? ";
//        die($sql." token: ". $token);
        try {            
            $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $token, \PDO::PARAM_STR);
                $stmt->bindvalue(2, 0, \PDO::PARAM_INT);
                $stmt->execute();
                $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                foreach ($row as $key => $value) {
                    $flag = $value["mail"];
                }
        } catch (\PDOException $ex) {
            echo "Error get mail by token: ".$sql." token: ".$token."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $flag;
    }
    public function getRoles() {
        $arrRoles = "";
        $sql = "SELECT id_rol, rol FROM rol WHERE estatus = 1 ";
//        die($sql." token: ". $token);
        try {            
            $stmt = $this->conn->prepare($sql);
//                $stmt->bindvalue(1, $token, \PDO::PARAM_STR);
                $stmt->execute();
                $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                if(count($row) > 0){
                    foreach ($row as $key => $value) {
                        $arrRoles[$value["id_rol"]] = $value["rol"];
                    }
                }
        } catch (\PDOException $ex) {
            echo "Error get mail by token: ".$sql." token: ".$token."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $arrRoles;
    }
    public function getAccessByIdRol($idRol = 0) {        
        $arrAccess = array();
        $sql = "SELECT "
                . "rol.id_rol, "
                . "rol.rol, "
                . "accesos.id_acceso, "
                . "accesos.vista_menu, "
                . "accesos.submenu, "
                . "accesos.pagina, "
                . "accesos.icono, "
                . "accesos.icono_padre, "
                . "accesos.estatus "
                . "FROM rol "
                . "INNER JOIN accesos ON rol.id_rol = accesos.id_rol "
                . "WHERE 1=1 and accesos.estatus = 1 ";
        $sql .= ((int)$idRol > 0 ? " and rol.id_rol = ? " : "");
        $sql .= "ORDER BY accesos.ordensubmenus ASC";
        try {
//die("xx: ".$sql);
            $stmt = $this->conn->prepare($sql);
            if((int)$idRol > 0 ){
                $stmt->bindValue(1, $idRol, \PDO::PARAM_INT);   
            }
            $stmt->execute();
            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);            
            if(is_array($row) && count($row) > 0){
                foreach ($row as $key => $value) {
                    $aux = array();
                    $aux[$value["vista_menu"]]["id_rol"] = $value["id_rol"];
                    $aux[$value["vista_menu"]]["rol"] = $value["rol"];
                    $aux[$value["vista_menu"]]["id_acceso"] = $value["id_acceso"];
                    $aux[$value["vista_menu"]]["vista_menu"] = $value["vista_menu"];
                    $aux[$value["vista_menu"]]["submenu"] = $value["submenu"];
                    $aux[$value["vista_menu"]]["pagina"] = $value["pagina"];
                    $aux[$value["vista_menu"]]["icono"] = $value["icono"];
                    $aux[$value["vista_menu"]]["icono_padre"] = $value["icono_padre"];
                    $aux[$value["vista_menu"]]["estatus"] = $value["estatus"];
                    array_push($arrAccess, $aux);
                }
            }
        } catch (\PDOException $exc) {
            echo "Error getAccessByIdRol: ".$exc->getMessage();
        } finally {
            $this->conMysql->closeMysql();
            $stmt = NULL;
            $row = NULL;
        }
        return $arrAccess;
    }
   
}
