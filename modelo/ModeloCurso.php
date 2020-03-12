<?php
namespace modelo\ModeloCurso;
class ModeloCurso {
    private $idcurso;
    private $nombrecurso;
    private $periodo_inicio;
    private $periodo_fin;
    private $horario;
    private $ubicacion;
    private $notas;
    private $dias;
    private $capacidad;
    private $limite;
    private $curso_presentacion;
    private $curso_perfilingreso;
    private $curso_objetivo;
    private $curso_temario;
    private $curso_perfilegreso;
    private $curso_requisitosacademicos;
    private $duracion;
    private $estatus;
    private $fechamodificacion;
    private $fechacreacion;
    private $puntos;
    private $idinstructor;
    
    function getIdcurso() {
        return $this->idcurso;
    }

    function getNombrecurso() {
        return $this->nombrecurso;
    }

    function getPeriodo_inicio() {
        return $this->periodo_inicio;
    }

    function getPeriodo_fin() {
        return $this->periodo_fin;
    }

    function getHorario() {
        return $this->horario;
    }

    function getUbicacion() {
        return $this->ubicacion;
    }

    function getNotas() {
        return $this->notas;
    }

    function getDias() {
        return $this->dias;
    }
    
    function getLimite() {
        return $this->limite;
    }

    function getCurso_presentacion() {
        return $this->curso_presentacion;
    }

    function getCurso_perfilingreso() {
        return $this->curso_perfilingreso;
    }

    function getCurso_objetivo() {
        return $this->curso_objetivo;
    }

    function getCurso_temario() {
        return $this->curso_temario;
    }

    function getCurso_perfilegreso() {
        return $this->curso_perfilegreso;
    }

    function getCurso_requisitosacademicos() {
        return $this->curso_requisitosacademicos;
    }

    function getDuracion() {
        return $this->duracion;
    }

    function getEstatus() {
        return $this->estatus;
    }


    function setIdcurso($idcurso) {
        $this->idcurso = $idcurso;
    }

    function setNombrecurso($nombrecurso) {
        $this->nombrecurso = $nombrecurso;
    }

    function setPeriodo_inicio($periodo_inicio) {
        $this->periodo_inicio = $periodo_inicio;
    }

    function setPeriodo_fin($periodo_fin) {
        $this->periodo_fin = $periodo_fin;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    function setNotas($notas) {
        $this->notas = $notas;
    }

    function setDias($dias) {
        $this->dias = $dias;
    }

    function setLimite($limite) {
        $this->limite = $limite;
    }

    function setCurso_presentacion($curso_presentacion) {
        $this->curso_presentacion = $curso_presentacion;
    }

    function setCurso_perfilingreso($curso_perfilingreso) {
        $this->curso_perfilingreso = $curso_perfilingreso;
    }

    function setCurso_objetivo($curso_objetivo) {
        $this->curso_objetivo = $curso_objetivo;
    }

    function setCurso_temario($curso_temario) {
        $this->curso_temario = $curso_temario;
    }

    function setCurso_perfilegreso($curso_perfilegreso) {
        $this->curso_perfilegreso = $curso_perfilegreso;
    }

    function setCurso_requisitosacademicos($curso_requisitosacademicos) {
        $this->curso_requisitosacademicos = $curso_requisitosacademicos;
    }

    function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    function getFechamodificacion() {
        return $this->fechamodificacion;
    }

    function getFechacreacion() {
        return $this->fechacreacion;
    }

    function setFechamodificacion($fechamodificacion) {
        $this->fechamodificacion = $fechamodificacion;
    }

    function setFechacreacion($fechacreacion) {
        $this->fechacreacion = $fechacreacion;
    }
    function getPuntos() {
        return $this->puntos;
    }

    function setPuntos($puntos) {
        $this->puntos = $puntos;
    }
    function getCapacidad() {
        return $this->capacidad;
    }

    function setCapacidad($capacidad) {
        $this->capacidad = $capacidad;
    }
    function getIdinstructor() {
        return $this->idinstructor;
    }

    function setIdinstructor($idinstructor) {
        $this->idinstructor = $idinstructor;
    }





}
