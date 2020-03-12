<?php
namespace DaoXML;
include_once './conexiones/ConexionMysql.php';
include_once './utilidades/EnviarCorreo.php';
include_once './utilidades/TmpsMails.php';
include_once './utilidades/UtilsMysql.php';
include_once './modelo/ModeloXML.php';
use PDO;
class DaoXML {
    private $conn = null;
    private  $conMysql = null;
    private  $mail = null;
    private $utilsMysql = null;
    private $utils = null;
    function __construct() {
        $this->conMysql = new \conexiones\ConexionMysql\ConexionMysql();
        $this->conn = $this->conMysql->conMysql();
        $this->mail = new \utilidades\EnviarCorreo\EnviarCorreo();
        $this->utilsMysql = new \utilidades\UtilsMysql\UtilsMysql();
        $this->utils = new \Utils\Utils();
    }
    public function saveXml(\ModeloXML\ModeloXML $mxml){
        $id = 0;
        $sql = "INSERT INTO uploadxmls "
                . "("
                . "uuid, "
                . "emisorrfc, "
                . "receptorrfc, "
                . "contentxml, "
                . "iduser, "
                . "estatus, "
                . "typecfdi "
                . ") "
                . "values(?,?,?,?,?,?,?)";
        try {
            $modeloSession = new \ModeloUser\ModeloUser();
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $modeloSession = unserialize($_SESSION["ModeloUser"]);
            $iduser = $modeloSession->getIduser();
            if((int)$iduser > 0){
                $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $mxml->getComplementoTFUUID(), \PDO::PARAM_STR);
                $stmt->bindvalue(2, $mxml->getEmisorRfc(), \PDO::PARAM_STR);
                $stmt->bindvalue(3, $mxml->getReceptorRfc(), \PDO::PARAM_STR);
                $stmt->bindvalue(4, $mxml->getContentXML(), \PDO::PARAM_STR);
                $stmt->bindvalue(5, $iduser, \PDO::PARAM_INT);
                $stmt->bindvalue(6, 0, \PDO::PARAM_INT);            
                $stmt->bindvalue(7, $mxml->getComplementoAtribTipoDeComprobante(), \PDO::PARAM_STR);
                $stmt->execute();
                $id = $this->conn->lastInsertId();   
            }            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } catch (\PDOException $ex) {
            echo "Error al guardar curso: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $id;
    }
    public function getUuid($uuid){        
        $count = 0;
        $sql = "SELECT count(uuid) AS t FROM uploadxmls WHERE uuid = ? and estatus in (1,2) ";
        try {
            
            $stmt = $this->conn->prepare($sql);                    
            $stmt->bindvalue(1, $uuid, \PDO::PARAM_STR);            
            $stmt->execute();
            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            //echo "<pre>";print_r($row);die($uuid);
            if(is_array($row) && count($row) > 0){
                foreach ($row as $key => $value) {
                    $count = $value["t"];
                    break;
                }
            }
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } catch (\PDOException $ex) {
            echo "Error al obtener si existe el UUID: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $count;
    }
    public function updateEstatusXML($uuid){
        $flag = false;
        $sql = "update uploadxmls set estatus = 1 where uuid = ?";
        try {
            $stmt = $this->conn->prepare($sql);                    
            $stmt->bindvalue(1, $uuid, \PDO::PARAM_STR);            
            $flag = $stmt->execute() ? true: false;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } catch (\PDOException $ex) {
            echo "Error al actualizar el estatus con el uuid: ".$uuid.": ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $flag;
    }
    public function deleteUploadFilesNoActivos(){
        $flag = FALSE;
        $sql = "delete FROM uploadxmls WHERE estatus = 0 and iduser= ? ";
        try {
            $modeloSession = new \ModeloUser\ModeloUser();
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $modeloSession = unserialize($_SESSION["ModeloUser"]);
            $iduser = $modeloSession->getIduser();
            if((int)$iduser > 0){
                $stmt = $this->conn->prepare($sql);                    
                $stmt->bindvalue(1, $iduser, \PDO::PARAM_INT);            
                $flag = $stmt->execute() ? TRUE : FALSE;
            }
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } catch (\PDOException $ex) {
            echo "deleteUploadFilesNoActivos. Error al eliminar los archivos subidos: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $flag;
    }
    public function deleteUploadFilesByID($id){
        $flag = FALSE;
        $sql = "delete FROM uploadxmls WHERE idxml = ? and estatus != 1 and copiadotofm = 0";
        try {
            $stmt = $this->conn->prepare($sql);                    
            $stmt->bindvalue(1, $id, \PDO::PARAM_STR);
            $flag = $stmt->execute() ? TRUE : FALSE;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } catch (\PDOException $ex) {
            echo "deleteUploadFilesByUuid. Error al eliminar file by ID: ".$id." ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $flag;
    }
    public function getXMLS($param){        
        extract($param);
        $xmls = array();
        $sql = "select idxml, uuid, emisorrfc, receptorrfc, contentxml, iduser, estatus, fechacreacion, fechamodificacion "
                . "FROM uploadxmls "
                . "WHERE estatus IN (1,2) AND typecfdi = 'I'";
        $sql .= (isset($iduser) && (int)$iduser > 0 ? "and iduser = ? " : "");
        $sql .= "order by fechacreacion desc, receptorrfc";
        
        try {
            $stmt = $this->conn->prepare($sql);
            if ((int) $iduser > 0) {
                $stmt->bindvalue(1, $iduser, \PDO::PARAM_INT);
            }            
            $stmt->execute();
            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            foreach ($row as $key => $value) {
                $aux = new \ModeloXML\ModeloXML();
                $aux->setIdxml($value["idxml"]);
                $aux->setComplementoTFUUID($value["uuid"]);
                $aux->setEmisorRfc($value["emisorrfc"]);
                $aux->setReceptorRfc($value["receptorrfc"]);
                $aux->setContentXML($value["contentxml"]);
                $aux->setIduser($value["iduser"]);
                $aux->setFechaCreacion($value["fechacreacion"]);
                $aux->setFechaModificacion($value["fechamodificacion"]);
                $aux->setEstatus($value["estatus"]);
                array_push($xmls, $aux);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } catch (\PDOException $ex) {
            echo "getXMLS. Error al obtener xmls: <br/>" . $ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $xmls;
    }
    public function getUploadFiles($param){        
        extract($param);
        $xmls = array();
        $sql = "select idxml, uuid, emisorrfc, receptorrfc, contentxml, iduser, estatus, fechacreacion, fechamodificacion,typecfdi  "
                . "FROM uploadxmls "
                . "WHERE estatus = 1 "                
                . "order by fechacreacion desc, receptorrfc "
                . "limit 100"
                . "";
        try {
            $stmt = $this->conn->prepare($sql);
//            $stmt->bindvalue(1, $iduser, \PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);            
            foreach ($row as $key => $value) {
                $aux = array();
                $aux["idxml"] = $value["idxml"];
                $aux["uuid"] = $value["uuid"];
                $aux["emisorrfc"] = $value["emisorrfc"];
                $aux["receptorrfc"] = $value["receptorrfc"];
                $aux["contentxml"] = $value["contentxml"];
                $aux["iduser"] = $value["iduser"];
                $aux["fechacreacion"] = $value["fechacreacion"];
                $aux["fechamodificacion"] = $value["fechamodificacion"];
                $aux["typecfdi"] = $value["typecfdi"];
                array_push($xmls, $aux);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } catch (\PDOException $ex) {
            echo "getXMLS. Error al obtener xmls para el webservices: <br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $xmls;
    }
    public function updatexmlsImportadosToFM($ids){        
        $flag = false;
        $arr = explode(",", $ids);
        if(count($arr) > 0){
            $param = "";
            for ($i = 0; $i < count($arr); $i++) {
//                echo "id: " . $arr[$i] . "<br>";
                $param .= "?,";
            }
            $param = substr($param, 0, -1);
            $sql = "update uploadxmls set estatus = 2 where idxml IN (".$param.")";
            try {
                $stmt = $this->conn->prepare($sql);
                $n = 0;
                for ($i = 0; $i < count($arr); $i++) {
                    $n++;
                    $stmt->bindvalue($n, $arr[$i], \PDO::PARAM_INT);
                }                
                $flag = $stmt->execute() ? true: false;
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            } catch (\PDOException $ex) {
                echo "Error updatexmlsImportadosToFM al actualizar el estatus : ".$sql."<br/>".$ex->getMessage();
            } finally {
                $this->conMysql->closeMysql();
            }   
        }        
        return $flag;
    }
    public function getTotalFilesByUsers(){                
        $data = array();
        $sql = "SELECT
                users.iduser,
                COUNT(DISTINCT uploadxmls.idxml) as t
                FROM
                users
                INNER JOIN uploadxmls ON users.iduser = uploadxmls.iduser
                WHERE users.estatus = 1 and uploadxmls.estatus = 1
                GROUP BY users.iduser";
        try {
            $stmt = $this->conn->prepare($sql);
//            $stmt->bindvalue(1, $iduser, \PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);            
            foreach ($row as $key => $value) {
                $aux = array();
                $aux["iduser"] = $value["iduser"];
                $aux["t"] = $value["t"];
                array_push($data, $aux);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } catch (\PDOException $ex) {
            echo "Error getTotalFilesByUsers<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $data;
    }
}
