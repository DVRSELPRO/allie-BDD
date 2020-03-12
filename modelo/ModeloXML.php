<?php
namespace ModeloXML;
class ModeloXML {    
    private $idxml;
    private $iduser;
    private $emisorNombre;
    private $emisorRegimenFiscal;
    private $emisorRfc;
    
    private $receptorNombre;
    private $receptorRfc;
    private $receptorUsoCFDI;
    //arr conceptos
    private $arrConceptos = array();
    
    //conceptos atributos
    private $arrAtributos = array();    
    //impuestos
    private $impuestoImpuesto;
    private $impuestoTipoFactor;
    private $impuestoTasaOCuota;
    private $impuestoImporte;
    private $totalImpuesto;
    //Datos fiscales
    private $complementoTFschemaLocation;
    private $complementoTFVersion;
    private $complementoTFUUID;
    private $complementoTFFechaTimbrado;
    private $complementoTFRfcProvCertif;
    private $complementoTFSelloCFD;
    private $complementoTFNoCertificadoSAT;
    private $complementoTFSelloSAT;
    //datos fiscales->atributos
    private $complementoAtribschemaLocation;
    private $complementoAtribVersion;
    private $complementoAtribSerie;
    private $complementoAtribFolio;
    private $complementoAtribFecha;
    private $complementoAtribSello;
    private $complementoAtribFormaPago;
    private $complementoAtribNoCertificado;
    private $complementoAtribCertificado;
    private $complementoAtribSubTotal;
    private $complementoAtribMoneda;
    private $complementoAtribTotal;
    private $complementoAtribTipoDeComprobante;
    private $complementoAtribMetodoPago;
    private $complementoAtribLugarExpedicion;
    private $contentXML;
    private $fechaCreacion;
    private $fechaModificacion;
    private $estatus;
    //pago10:Pagos
    private $DocIdDocumento;
    private $DocSerie;
    private $DocFolio;
    private $DocMonedaDR;
    private $DocMetodoDePagoDR;
    private $DocNumParcialidad;
    private $DocImpSaldoAnt;
    private $DocImpPagado;
    private $DocImpSaldoInsoluto;
    private $DocFechaPago;
    private $DocFormaDePagoP;
    private $DocMonedaP;
    private $DocMonto;
    private $DocNumOperacion;
    private $DocVersion;
    private $CfdiRelacionadoTipoRelacion;
    private $CfdiRelacionadoUUID;
    
    function getEmisorNombre() {
        return $this->emisorNombre;
    }

    function getEmisorRegimenFiscal() {
        return $this->emisorRegimenFiscal;
    }

    function getEmisorRfc() {
        return $this->emisorRfc;
    }

    function getReceptorNombre() {
        return $this->receptorNombre;
    }

    function getReceptorRfc() {
        return $this->receptorRfc;
    }

    function getReceptorUsoCFDI() {
        return $this->receptorUsoCFDI;
    }

    function getArrConceptos() {
        return $this->arrConceptos;
    }

    function getArrAtributos() {
        return $this->arrAtributos;
    }

    function getImpuestoImpuesto() {
        return $this->impuestoImpuesto;
    }

    function getImpuestoTipoFactor() {
        return $this->impuestoTipoFactor;
    }

    function getImpuestoTasaOCuota() {
        return $this->impuestoTasaOCuota;
    }

    function getImpuestoImporte() {
        return $this->impuestoImporte;
    }

    function getTotalImpuesto() {
        return $this->totalImpuesto;
    }

    function getComplementoTFschemaLocation() {
        return $this->complementoTFschemaLocation;
    }

    function getComplementoTFVersion() {
        return $this->complementoTFVersion;
    }

    function getComplementoTFUUID() {
        return $this->complementoTFUUID;
    }

    function getComplementoTFFechaTimbrado() {
        return $this->complementoTFFechaTimbrado;
    }

    function getComplementoTFRfcProvCertif() {
        return $this->complementoTFRfcProvCertif;
    }

    function getComplementoTFSelloCFD() {
        return $this->complementoTFSelloCFD;
    }

    function getComplementoTFNoCertificadoSAT() {
        return $this->complementoTFNoCertificadoSAT;
    }

    function getComplementoTFSelloSAT() {
        return $this->complementoTFSelloSAT;
    }

    function getComplementoAtribschemaLocation() {
        return $this->complementoAtribschemaLocation;
    }

    function getComplementoAtribVersion() {
        return $this->complementoAtribVersion;
    }

    function getComplementoAtribSerie() {
        return $this->complementoAtribSerie;
    }

    function getComplementoAtribFolio() {
        return $this->complementoAtribFolio;
    }

    function getComplementoAtribFecha() {
        return $this->complementoAtribFecha;
    }

    function getComplementoAtribSello() {
        return $this->complementoAtribSello;
    }

    function getComplementoAtribFormaPago() {
        return $this->complementoAtribFormaPago;
    }

    function getComplementoAtribNoCertificado() {
        return $this->complementoAtribNoCertificado;
    }

    function getComplementoAtribCertificado() {
        return $this->complementoAtribCertificado;
    }

    function getComplementoAtribSubTotal() {
        return $this->complementoAtribSubTotal;
    }

    function getComplementoAtribMoneda() {
        return $this->complementoAtribMoneda;
    }

    function getComplementoAtribTotal() {
        return $this->complementoAtribTotal;
    }

    function getComplementoAtribTipoDeComprobante() {
        return $this->complementoAtribTipoDeComprobante;
    }

    function getComplementoAtribMetodoPago() {
        return $this->complementoAtribMetodoPago;
    }

    function getComplementoAtribLugarExpedicion() {
        return $this->complementoAtribLugarExpedicion;
    }

    function setEmisorNombre($emisorNombre) {
        $this->emisorNombre = $emisorNombre;
    }

    function setEmisorRegimenFiscal($emisorRegimenFiscal) {
        $this->emisorRegimenFiscal = $emisorRegimenFiscal;
    }

    function setEmisorRfc($emisorRfc) {
        $this->emisorRfc = $emisorRfc;
    }

    function setReceptorNombre($receptorNombre) {
        $this->receptorNombre = $receptorNombre;
    }

    function setReceptorRfc($receptorRfc) {
        $this->receptorRfc = $receptorRfc;
    }

    function setReceptorUsoCFDI($receptorUsoCFDI) {
        $this->receptorUsoCFDI = $receptorUsoCFDI;
    }

    function setArrConceptos($arrConceptos) {
        $this->arrConceptos = $arrConceptos;
    }

    function setArrAtributos($arrAtributos) {
        $this->arrAtributos = $arrAtributos;
    }

    function setImpuestoImpuesto($impuestoImpuesto) {
        $this->impuestoImpuesto = $impuestoImpuesto;
    }

    function setImpuestoTipoFactor($impuestoTipoFactor) {
        $this->impuestoTipoFactor = $impuestoTipoFactor;
    }

    function setImpuestoTasaOCuota($impuestoTasaOCuota) {
        $this->impuestoTasaOCuota = $impuestoTasaOCuota;
    }

    function setImpuestoImporte($impuestoImporte) {
        $this->impuestoImporte = $impuestoImporte;
    }

    function setTotalImpuesto($totalImpuesto) {
        $this->totalImpuesto = $totalImpuesto;
    }

    function setComplementoTFschemaLocation($complementoTFschemaLocation) {
        $this->complementoTFschemaLocation = $complementoTFschemaLocation;
    }

    function setComplementoTFVersion($complementoTFVersion) {
        $this->complementoTFVersion = $complementoTFVersion;
    }

    function setComplementoTFUUID($complementoTFUUID) {
        $this->complementoTFUUID = $complementoTFUUID;
    }

    function setComplementoTFFechaTimbrado($complementoTFFechaTimbrado) {
        $this->complementoTFFechaTimbrado = $complementoTFFechaTimbrado;
    }

    function setComplementoTFRfcProvCertif($complementoTFRfcProvCertif) {
        $this->complementoTFRfcProvCertif = $complementoTFRfcProvCertif;
    }

    function setComplementoTFSelloCFD($complementoTFSelloCFD) {
        $this->complementoTFSelloCFD = $complementoTFSelloCFD;
    }

    function setComplementoTFNoCertificadoSAT($complementoTFNoCertificadoSAT) {
        $this->complementoTFNoCertificadoSAT = $complementoTFNoCertificadoSAT;
    }

    function setComplementoTFSelloSAT($complementoTFSelloSAT) {
        $this->complementoTFSelloSAT = $complementoTFSelloSAT;
    }

    function setComplementoAtribschemaLocation($complementoAtribschemaLocation) {
        $this->complementoAtribschemaLocation = $complementoAtribschemaLocation;
    }

    function setComplementoAtribVersion($complementoAtribVersion) {
        $this->complementoAtribVersion = $complementoAtribVersion;
    }

    function setComplementoAtribSerie($complementoAtribSerie) {
        $this->complementoAtribSerie = $complementoAtribSerie;
    }

    function setComplementoAtribFolio($complementoAtribFolio) {
        $this->complementoAtribFolio = $complementoAtribFolio;
    }

    function setComplementoAtribFecha($complementoAtribFecha) {
        $this->complementoAtribFecha = $complementoAtribFecha;
    }

    function setComplementoAtribSello($complementoAtribSello) {
        $this->complementoAtribSello = $complementoAtribSello;
    }

    function setComplementoAtribFormaPago($complementoAtribFormaPago) {
        $this->complementoAtribFormaPago = $complementoAtribFormaPago;
    }

    function setComplementoAtribNoCertificado($complementoAtribNoCertificado) {
        $this->complementoAtribNoCertificado = $complementoAtribNoCertificado;
    }

    function setComplementoAtribCertificado($complementoAtribCertificado) {
        $this->complementoAtribCertificado = $complementoAtribCertificado;
    }

    function setComplementoAtribSubTotal($complementoAtribSubTotal) {
        $this->complementoAtribSubTotal = $complementoAtribSubTotal;
    }

    function setComplementoAtribMoneda($complementoAtribMoneda) {
        $this->complementoAtribMoneda = $complementoAtribMoneda;
    }

    function setComplementoAtribTotal($complementoAtribTotal) {
        $this->complementoAtribTotal = $complementoAtribTotal;
    }

    function setComplementoAtribTipoDeComprobante($complementoAtribTipoDeComprobante) {
        $this->complementoAtribTipoDeComprobante = $complementoAtribTipoDeComprobante;
    }

    function setComplementoAtribMetodoPago($complementoAtribMetodoPago) {
        $this->complementoAtribMetodoPago = $complementoAtribMetodoPago;
    }

    function setComplementoAtribLugarExpedicion($complementoAtribLugarExpedicion) {
        $this->complementoAtribLugarExpedicion = $complementoAtribLugarExpedicion;
    }
    function getContentXML() {
        return $this->contentXML;
    }

    function setContentXML($contentXML) {
        $this->contentXML = $contentXML;
    }
    function getIdxml() {
        return $this->idxml;
    }

    function setIdxml($idxml) {
        $this->idxml = $idxml;
    }
    function getIduser() {
        return $this->iduser;
    }

    function setIduser($iduser) {
        $this->iduser = $iduser;
    }
    function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    function getFechaModificacion() {
        return $this->fechaModificacion;
    }

    function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
    }

    function setFechaModificacion($fechaModificacion) {
        $this->fechaModificacion = $fechaModificacion;
    }
    function getEstatus() {
        return $this->estatus;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    function getDocIdDocumento() {
        return $this->DocIdDocumento;
    }

    function getDocSerie() {
        return $this->DocSerie;
    }

    function getDocFolio() {
        return $this->DocFolio;
    }

    function getDocMonedaDR() {
        return $this->DocMonedaDR;
    }

    function getDocMetodoDePagoDR() {
        return $this->DocMetodoDePagoDR;
    }

    function getDocNumParcialidad() {
        return $this->DocNumParcialidad;
    }

    function getDocImpSaldoAnt() {
        return $this->DocImpSaldoAnt;
    }

    function getDocImpPagado() {
        return $this->DocImpPagado;
    }

    function getDocImpSaldoInsoluto() {
        return $this->DocImpSaldoInsoluto;
    }

    function getDocFechaPago() {
        return $this->DocFechaPago;
    }

    function getDocFormaDePagoP() {
        return $this->DocFormaDePagoP;
    }

    function getDocMonedaP() {
        return $this->DocMonedaP;
    }

    function getDocMonto() {
        return $this->DocMonto;
    }

    function getDocNumOperacion() {
        return $this->DocNumOperacion;
    }

    function getDocVersion() {
        return $this->DocVersion;
    }

    function setDocIdDocumento($DocIdDocumento) {
        $this->DocIdDocumento = $DocIdDocumento;
    }

    function setDocSerie($DocSerie) {
        $this->DocSerie = $DocSerie;
    }

    function setDocFolio($DocFolio) {
        $this->DocFolio = $DocFolio;
    }

    function setDocMonedaDR($DocMonedaDR) {
        $this->DocMonedaDR = $DocMonedaDR;
    }

    function setDocMetodoDePagoDR($DocMetodoDePagoDR) {
        $this->DocMetodoDePagoDR = $DocMetodoDePagoDR;
    }

    function setDocNumParcialidad($DocNumParcialidad) {
        $this->DocNumParcialidad = $DocNumParcialidad;
    }

    function setDocImpSaldoAnt($DocImpSaldoAnt) {
        $this->DocImpSaldoAnt = $DocImpSaldoAnt;
    }

    function setDocImpPagado($DocImpPagado) {
        $this->DocImpPagado = $DocImpPagado;
    }

    function setDocImpSaldoInsoluto($DocImpSaldoInsoluto) {
        $this->DocImpSaldoInsoluto = $DocImpSaldoInsoluto;
    }

    function setDocFechaPago($DocFechaPago) {
        $this->DocFechaPago = $DocFechaPago;
    }

    function setDocFormaDePagoP($DocFormaDePagoP) {
        $this->DocFormaDePagoP = $DocFormaDePagoP;
    }

    function setDocMonedaP($DocMonedaP) {
        $this->DocMonedaP = $DocMonedaP;
    }

    function setDocMonto($DocMonto) {
        $this->DocMonto = $DocMonto;
    }

    function setDocNumOperacion($DocNumOperacion) {
        $this->DocNumOperacion = $DocNumOperacion;
    }

    function setDocVersion($DocVersion) {
        $this->DocVersion = $DocVersion;
    }
    function getCfdiRelacionadoTipoRelacion() {
        return $this->CfdiRelacionadoTipoRelacion;
    }

    function getCfdiRelacionadoUUID() {
        return $this->CfdiRelacionadoUUID;
    }

    function setCfdiRelacionadoTipoRelacion($CfdiRelacionadoTipoRelacion) {
        $this->CfdiRelacionadoTipoRelacion = $CfdiRelacionadoTipoRelacion;
    }

    function setCfdiRelacionadoUUID($CfdiRelacionadoUUID) {
        $this->CfdiRelacionadoUUID = $CfdiRelacionadoUUID;
    }










}
