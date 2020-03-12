<?php

namespace dao\DaoDireccion;
include_once './conexiones/ConexionMysql.php';
include_once './modelo/ModeloDireccion.php';
use PDO;
/**
 * Description of DaoDireccion
 *
 * @author Josglow
 */
class DaoDireccion {
    private $conn = null;
    private  $conMysql = null;
    function __construct() {
        $this->conMysql = new \conexiones\ConexionMysql\ConexionMysql();
        $this->conn = $this->conMysql->conMysql();
    }
    public function getDireccionByIdUser($id) {
        $arrDir = array();
        try {
            $sql = "SELECT "
                    . "iddireccion, "
                    . "iduser, "
                    . "calle, "
                    . "numerointerior, "
                    . "numeroexterior, "
                    . "colonia, "
                    . "cp, "
                    . "ciudad, "
                    . "delegacion, "
                    . "estado, "
                    . "tipodireccion, "
                    . "estatus, "
                    . "pais "                    
                    . "FROM direccion "
                    . "where idUser = ? and estatus = 1 "
                    . "";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $num = 0;
            if (count($rows) > 0) {
                foreach ($rows as $key => $value) {
                    $mDir = new \modelo\ModeloUser\ModeloDireccion();
                    $mDir->setIdUser($value["iduser"]);
                    $mDir->setIddireccion($value["iddireccion"]);
                    $mDir->setCalle($value["calle"]);
                    $mDir->setNumerointerior($value["numerointerior"]);
                    $mDir->setNumeroexterior($value["numeroexterior"]);
                    $mDir->setColonia($value["colonia"]);
                    $mDir->setCp($value["cp"]);
                    $mDir->setCiudad($value["ciudad"]);
                    $mDir->setDelegacion($value["delegacion"]);
                    $mDir->setEstado($value["estado"]);
                    $mDir->setTipodireccion($value["tipodireccion"]);
                    $mDir->setEstatus($value["estatus"]);
                    $mDir->setPais($value["pais"]);
                    array_push($arrDir, $mDir);
                }
            }
        } catch (Exception $exc) {
            echo "Error obtener direcciones: " . $exc->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $arrDir;
    }
    public function getDirByCP($cp) {
        $arrjson = array();
        $str = "";
        $arrjson['estatus'] = 0;
        try {
            $sql = "SELECT "
                    . "idcp, "
                    . "d_codigo, "
                    . "d_asenta, "
                    . "D_mnpio, "
                    . "d_estado, "
                    . "d_ciudad "                
                    . "FROM codigospostales "
                    . "where d_codigo = ? "
                    . "";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $cp, PDO::PARAM_STR);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $num = 0;
            if (count($rows) > 0) {
                $arrjson['estatus'] = 1;
                $str .= "<option value=''>Seleccionar</option>";
                foreach ($rows as $key => $value) {
                    $str .= "<option value='".$value["d_asenta"]."'>{$value["d_asenta"]}</option>";
                    $arrjson["municipio"] = $value["D_mnpio"];
                    $arrjson["estado"] = $value["d_estado"];
                    $arrjson["ciudad"] = $value["d_ciudad"];
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } finally {
            $this->conMysql->closeMysql();
        }
        $arrjson["colonias"] = $str;
        return $arrjson;
    }
    public function existeDir(\modelo\ModeloUser\ModeloDireccion $dir) {
        $iddireccion = 0;
        $sql = "SELECT iddireccion from direccion WHERE idUser = ? ";
        try {            
            $stmt = $this->conn->prepare( $sql );
            $stmt->bindvalue(1, $dir->getIdUser(), \PDO::PARAM_INT);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(count($rows) > 0){
                foreach ($rows as $key => $value) {
                    $iddireccion = $value["iddireccion"];
                }
            }
        } catch (\PDOException $ex) {
            echo "Error al revisar si existe la direccion: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $iddireccion;
    }
    public function saveDir(\modelo\ModeloUser\ModeloDireccion $dir) {
        $flag = false;
        $sql = "INSERT INTO direccion ("
                    . "idUser,"
                    . "calle,"
                    . "numerointerior,"
                    . "numeroexterior,"
                    . "colonia,"
                    . "cp,"
                    . "ciudad,"
                    . "delegacion,"
                    . "estado,"
                    . "tipodireccion,"
                    . "estatus,"
                    . "pais) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
                    . "";
        try {            
            $stmt = $this->conn->prepare( $sql );                    
                    $stmt->bindvalue(1, $dir->getIdUser(), \PDO::PARAM_INT);
                    $stmt->bindvalue(2, $dir->getCalle(), \PDO::PARAM_STR);
                    $stmt->bindvalue(3, $dir->getNumerointerior(), \PDO::PARAM_STR);
                    $stmt->bindvalue(4, $dir->getNumeroexterior(), \PDO::PARAM_STR);
                    $stmt->bindvalue(5, $dir->getColonia(), \PDO::PARAM_STR);
                    $stmt->bindvalue(6, $dir->getCp(), \PDO::PARAM_STR);
                    $stmt->bindvalue(7, $dir->getCiudad(), \PDO::PARAM_STR);
                    $stmt->bindvalue(8, $dir->getDelegacion(), \PDO::PARAM_STR);
                    $stmt->bindvalue(9, $dir->getEstado(), \PDO::PARAM_STR);
                    $stmt->bindvalue(10, $dir->getTipodireccion(), \PDO::PARAM_STR);
                    $stmt->bindvalue(11, $dir->getEstatus(), \PDO::PARAM_STR);
                    $stmt->bindvalue(12, $dir->getPais(), \PDO::PARAM_STR);
                    $flag = $stmt->execute() ? true: false;
        } catch (\PDOException $ex) {
            echo "Error al guardar direccion: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $flag;
    }
    public function updateDir(\modelo\ModeloUser\ModeloDireccion $dir) {
        $flag = false;
        $sql = "UPDATE direccion set "
                . "idUser = ?, "
                . "calle = ?, "
                . "numerointerior = ?, "
                . "numeroexterior = ?, "
                . "colonia = ?, "
                . "cp = ?, "
                . "ciudad = ?, "
                . "delegacion = ?, "
                . "estado = ?, "
                . "tipodireccion = ?, "
                . "estatus = ?, "
                . "pais = ? "
                . "WHERE iddireccion = ? ";
        try {            
            $stmt = $this->conn->prepare( $sql );                    
                    $stmt->bindvalue(1, $dir->getIdUser(), \PDO::PARAM_INT);
                    $stmt->bindvalue(2, $dir->getCalle(), \PDO::PARAM_STR);
                    $stmt->bindvalue(3, $dir->getNumerointerior(), \PDO::PARAM_STR);
                    $stmt->bindvalue(4, $dir->getNumeroexterior(), \PDO::PARAM_STR);
                    $stmt->bindvalue(5, $dir->getColonia(), \PDO::PARAM_STR);
                    $stmt->bindvalue(6, $dir->getCp(), \PDO::PARAM_STR);
                    $stmt->bindvalue(7, $dir->getCiudad(), \PDO::PARAM_STR);
                    $stmt->bindvalue(8, $dir->getDelegacion(), \PDO::PARAM_STR);
                    $stmt->bindvalue(9, $dir->getEstado(), \PDO::PARAM_STR);
                    $stmt->bindvalue(10, $dir->getTipodireccion(), \PDO::PARAM_STR);
                    $stmt->bindvalue(11, $dir->getEstatus(), \PDO::PARAM_STR);
                    $stmt->bindvalue(12, $dir->getPais(), \PDO::PARAM_STR);
                    $stmt->bindvalue(13, $dir->getIddireccion(), \PDO::PARAM_INT);
                    $flag = $stmt->execute() ? true: false;
        } catch (\PDOException $ex) {
            echo "Error al update direccion: ".$sql."<br/>".$ex->getMessage();
        } finally {
            $this->conMysql->closeMysql();
        }
        return $flag;
    }
}
