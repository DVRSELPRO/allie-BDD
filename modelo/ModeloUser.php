<?php
namespace ModeloUser;

/**
 * Description of ModeloUser
 *
 * @author Josglow
 */
class ModeloUser {

    private $iduser;
    private $idcliente;
    private $nombreempleado;
    private $apellidopaterno;
    private $apellidomaterno;
    private $estatus;
    private $id_rol;
    private $mail;
    private $password;
    private $nss;
    private $rfc;
    private $curp;    
    private $path_pic_perfil;
    private $tipo_persona;
    private $razon_social;    
    private $iduserPadre;
    private $celular;
    private $tipoCorredor;
    private $validado;
    private $fechacreacion;
    private $fechamodificacion;
    private $arrAccess = array();
    private $idempleadoModificacion;
    private $txml;
    
    public function ModeloUser() {
        
    }
    function getTxml() {
        return $this->txml;
    }

    function setTxml($txml) {
        $this->txml = $txml;
    }

        function getIdempleadoModificacion() {
        return $this->idempleadoModificacion;
    }

    function setIdempleadoModificacion($idempleadoModificacion) {
        $this->idempleadoModificacion = $idempleadoModificacion;
    }

        function getIduser() {
        return $this->iduser;
    }

    function getIdcliente() {
        return $this->idcliente;
    }

    function getNombreempleado() {
        return $this->nombreempleado;
    }

    function getApellidopaterno() {
        return $this->apellidopaterno;
    }

    function getApellidomaterno() {
        return $this->apellidomaterno;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function getId_rol() {
        return $this->id_rol;
    }

    function getMail() {
        return $this->mail;
    }

    function getPassword() {
        return $this->password;
    }

    function getNss() {
        return $this->nss;
    }

    function getRfc() {
        return $this->rfc;
    }

    function getCurp() {
        return $this->curp;
    }   

    function getPath_pic_perfil() {
        return $this->path_pic_perfil;
    }

    function getTipo_persona() {
        return $this->tipo_persona;
    }

    function getRazon_social() {
        return $this->razon_social;
    }

    function setIduser($iduser) {
        $this->iduser = $iduser;
    }

    function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

    function setNombreempleado($nombreempleado) {
        $this->nombreempleado = $nombreempleado;
    }

    function setApellidopaterno($apellidopaterno) {
        $this->apellidopaterno = $apellidopaterno;
    }

    function setApellidomaterno($apellidomaterno) {
        $this->apellidomaterno = $apellidomaterno;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    function setId_rol($id_rol) {
        $this->id_rol = $id_rol;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNss($nss) {
        $this->nss = $nss;
    }

    function setRfc($rfc) {
        $this->rfc = $rfc;
    }

    function setCurp($curp) {
        $this->curp = $curp;
    }


    function setPath_pic_perfil($path_pic_perfil) {
        $this->path_pic_perfil = $path_pic_perfil;
    }

    function setTipo_persona($tipo_persona) {
        $this->tipo_persona = $tipo_persona;
    }

    function setRazon_social($razon_social) {
        $this->razon_social = $razon_social;
    }
    
    function getIduserPadre() {
        return $this->iduserPadre;
    }

    function setIduserPadre($iduserPadre) {
        $this->iduserPadre = $iduserPadre;
    }
    function getCelular() {
        return $this->celular;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }
    function getTipoCorredor() {
        return $this->tipoCorredor;
    }

    function setTipoCorredor($tipoCorredor) {
        $this->tipoCorredor = $tipoCorredor;
    }
    function getValidado() {
        return $this->validado;
    }

    function setValidado($validado) {
        $this->validado = $validado;
    }
    function getFechamodificacion() {
        return $this->fechamodificacion;
    }

    function setFechamodificacion($fechamodificacion) {
        $this->fechamodificacion = $fechamodificacion;
    }

        function getFechacreacion() {
        return $this->fechacreacion;
    }

    function setFechacreacion($fechacreacion) {
        $this->fechacreacion = $fechacreacion;
    }
    function getArrAccess() {
        return $this->arrAccess;
    }

    function setArrAccess($arrAccess) {
        $this->arrAccess = $arrAccess;
    }

    
    
}
