var fnc_subirXml = new function () {
    this.options = {
        arrUUIDS: new Array(),
        arrElmentsCards: new Array(),
        arrModeloxmls: new Array()
    };    
    this.closeDivAlert = function () {        
        $("div.div_mensajes, div.div_mensajesFiles").fadeOut("fast");
        $("div.div_mensajes span.mensaje").html("");
    };      
    this.createBox = function (rfc, razonsocial, subtotal, iva, total, uuid, idxml, fecha){        
    var cad =''
        cad +='<div class="col-lg-3 col-md-3 col-sm-3 col-12 '+idxml+'" id="'+uuid+'">';
        cad +='<div class="text-center card-box">';
        cad +='<div class="member-card pt-2 pb-2">';
        cad +='<div class="thumb-lg member-thumb m-b-10 mx-auto">';
        cad +='<img src="assets/images/file_icons/xml.svg" class="rounded-circle img-thumbnail" alt="">';
        cad +='</div>';
        cad +='<div class="">';
        cad +='<h4 class="m-b-5">'+fecha+'</h4>';
        cad +='<p class="text-muted"><span> <a href="#" class="text-pink">'+razonsocial+' <br/>'+rfc+'</a> </span></p>';
        cad +='</div>';
        cad +='<button type="button" class="btn btn-info m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light btnBoxCancelar" onclick="fnc_subirXml.checkSaveCancelar(\''+uuid+'\', '+idxml+')">Cancelar</button>';
        cad +='<button type="button" class="btn btn-icon waves-effect waves-light btn-success btnBoxSaved" style="display:none"> <i class="fa fa-check-circle"></i> </button>';
        cad +='<div class="mt-4">';
        cad +='<div class="row">';
        cad +='<div class="col-lg-4 col-md-4 col-sm-4 col-12">';
        cad +='<div class="mt-3">';
        cad +='<h6 class="m-b-5">$'+subtotal+'</h6>';
        cad +='<p class="mb-0 text-muted">SubTotal</p>';
        cad +='</div>';
        cad +='</div>';
        cad +='<div class="col-lg-4 col-md-4 col-sm-4 col-12">';
        cad +='<div class="mt-3">';
        cad +='<h6 class="m-b-5">$'+iva+'</h6>';
        cad +='<p class="mb-0 text-muted">IVA</p>';
        cad +='</div>';
        cad +='</div>';
        cad +='<div class="col-lg-4 col-md-4 col-sm-4 col-12">';
        cad +='<div class="mt-3">';
        cad +='<h6 class="m-b-5">$'+total+'</h6>';
        cad +='<p class="mb-0 text-muted">Total</p>';
        cad +='</div>';
        cad +='</div>';
        cad +='</div>';
        cad +='</div>';
        cad +='</div>';
        cad +='</div>';
        cad +='</div>';
    return cad;
    };
    this.checkSaveCancelar = function (uuid, id){
        $("div."+id).remove();
        fnc_subirXml.deleteUploadFileByUuid(id);
    };
    this.btnContinuar = function (){
        $("div.divUploadFiles").hide();
        $("div.filesXML, div.divBtnFinalizar").fadeIn("slow")        
    };
    this.btnCancelar = function (){
        fnc_subirXml.deleteUploadFilesNoActivos();
        window.location.href = "subir-xmls.php";
    };
    this.btnFinalizarUplods = function () {
        try {
            var arr = fnc_subirXml.options.arrUUIDS;
            if(arr.length > 0){
                var data = new Array;
                data = {action: "btnFinalizarUplods", "uuids": arr}
    //            data.push({name: 'action',value: 'save_frm_manager_cursos'});
                $.ajax({
                    url: './uploadFiles.php',
                    data: data,
                    type: 'POST',
                    //dataType: "jsonp",
                    success: function (json) {
                        if (json) {
                            console.log(json);
                            if (json.estatus === 1) {
                                $("div.div_mensajesFiles").show();            
                                $("div.div_mensajesFiles span.mensaje").html(json.mensaje);
                                $(".btnBoxCancelar, .btnheaderCancelar, .btnheaderGuardar").fadeOut("fast")
                                $(".btnBoxSaved, .btnheaderSubirFiles").show();
                            } else if (json.estatus === 0) {
                                $("div.div_mensajesFiles").show();            
                                $("div.div_mensajesFiles span.mensaje").html(json.mensaje);
                            }
                        } else {
                            console.log('Error al ejecutar los datos');
                        }
                    }
                });   
            }else{
                alert("No hay nada en el array");
            }            
        } catch (e) {
            console.log('Inconvenientes: ' + e.message);
        }
    };  
    this.deleteUploadFileByUuid = function (id) {
        try {
            var data = new Array;
            data = {action: "deleteUploadFileByID", "id": id}
//            data.push({name: 'action',value: 'save_frm_manager_cursos'});
            $.ajax({
                url: './uploadFiles.php',
                data: data,
                type: 'POST',
                //dataType: "jsonp",
                success: function (json) {
                    if (json) {
                        console.log(json);
                        if (json.estatus === 1) {
                            
                        } else if (json.estatus === 0) {
                            alert(json.mensaje);
                        }
                    } else {
                        console.log('Error al ejecutar los datos');
                    }
                }
            });        
        } catch (e) {
            console.log('Inconvenientes: ' + e.message);
        }
    };  
    this.deleteUploadFilesNoActivos = function () {
        try {
            var data = new Array;
            data = {action: "deleteUploadFilesNoActivos"}
//            data.push({name: 'action',value: 'save_frm_manager_cursos'});
            $.ajax({
                url: './uploadFiles.php',
                data: data,
                type: 'POST',
                //dataType: "jsonp",
                success: function (json) {
                    if (json) {
                        console.log(json);
                        if (json.estatus === 1) {
                            
                        } else if (json.estatus === 0) {
                            alert(json.mensaje);
                        }
                    } else {
                        console.log('Error al ejecutar los datos');
                    }
                }
            });        
        } catch (e) {
            console.log('Inconvenientes: ' + e.message);
        }
    };      
    this.filterCards = function () {
        var inputsearch = $("input.search");

        var arrCards = new Array();
        arrCards = fnc_subirXml.options.arrElmentsCards;
        var cadbox = $("div.div-card-box");
        var content = $("div.filesXML");
        $("div.no-encontrado").remove();
        content.html("");
        $("div.divFactura").hide("fast");
        var tencontrados = 0;
        if(arrCards.length > 0){
            if(inputsearch.val() != ""){                
                var search = inputsearch.val();
                var arrFiltrando = new Array();
                arrCards.forEach(function (item) {
//                    console.log("buscando: "+item+" la coincidencia: "+search);
                    if (item.toLowerCase().indexOf(search.toLowerCase()) >= 0) {
                        arrFiltrando.push(item);
                        tencontrados++;
                    }
                });
                if(arrFiltrando.length){
                    arrFiltrando.forEach(function (item) {
//                        console.log("elemento encontrado-append: "+item);
                        content.append(item);
                    });
                }else{
                    var cad = '';
                        cad += '<div class="col-lg-12 col-md-12 col-sm-12 col-12 no-encontrado">';
                        cad += '<div class="card-box text-center">';
                        cad += '<h4 class="m-t-0 header-title">No encontrado '+inputsearch.val()+'</h4>';
                        cad += '<p class="text-muted m-b-30 font-14">Vuelva a intentarlo por favor.</p>';
                        cad += '</div>';
                        cad += '</div>';
                    content.html(cad);
                }
            }else{
                //regresando toos los elemento a su contenedor
                arrCards.forEach(function (item) {
                    content.append(item);
                    tencontrados++;
                });
            }
            $("p.total-encontrados").html("<b>"+tencontrados+"</b> encontrados");
            content.fadeIn("slow");
        }        

        


    };
    this.createFactura = function (id) {
        try {            
            var data = new Object();            
            var tr = '';
            var data = fnc_subirXml.options.arrModeloxmls;
            $.each(data, function (i, xml) {
//                console.log("data[i]: " + i);
                if(i == id){
                    $("div.filesXML").hide("fast");
                    $("div.divFactura").show("slow");
                    $("div.totales span.subtotal").html(xml.SubTotal);
                    $("div.totales span.iva").html(xml.TotalImpuestosTrasladados);
                    $("div.totales span.tasa").html((xml.TasaOCuota * 100)+"%");
                    $("div.totales span.total").html("$ "+xml.Total);
                    //sellos
//                    $("small span.SelloCFD").html(xml.SelloCFD);
//                    $("small span.SelloSAT").html(xml.SelloSAT);
//                    $("small span.Sello").html(xml.Sello);
                    $("small span.NoCertificado").html(xml.NoCertificado);
                    
                    $("small.emisor_Rfc").html(xml.emisor_Rfc);
                    $("small.emisor_Nombre").html(xml.emisor_Nombre);
                    $("small.emisor_RegimenFiscal").html(xml.emisor_RegimenFiscal);
                    
                    $("small.receptor_Rfc").html(xml.receptor_Rfc);
                    $("small.receptor_Nombre").html(xml.receptor_Nombre);
                    $("small.receptor_UsoCFDI").html(xml.receptor_UsoCFDI);
                    
                    $("span.FechaTimbrado").html(xml.FechaTimbrado);
                    $("span.NoCertificadoSAT").html(xml.NoCertificadoSAT);
                    $("span.FormaPago").html(xml.FormaPago);
                    $("span.MetodoPago").html(xml.MetodoPago);
                    $("p.UUID").html(xml.UUID);
                    
                    
                    
                    $.each(this, function (k1, val) {
//                        console.log(k1 + '=> ' + xml);
                        if(k1 == "conceptos"){
                            /*
                            [Base] => 5166.66
                            [Impuesto] => 002
                            [TipoFactor] => Tasa
                            [TasaOCuota] => 0.160000
                            [Importe] => 826.67
                            */
                            $.each(this, function (k2, c) {
                                console.log("Base: "+c.Base);
                                /*$.each(this, function (k2, v2) {
                                    console.log("conceptos: " + k2 + '=> ' + v2);
                                });*/
                            });
                        }
                        if(k1 == "atributos"){
                            /*
                            [Base] => 5166.66
                            [Impuesto] => 002
                            [TipoFactor] => Tasa
                            [TasaOCuota] => 0.160000
                            [Importe] => 5166.66
                            [ClaveProdServ] => 86101700
                            [Cantidad] => 1.00
                            [ClaveUnidad] => E48
                            [Unidad] => SERVICIO
                            [Descripcion] => DESARROLLO Y ADMINISTRACIÓN DE PROGRAMA BECARIOS , Becario: MIRANDA GUTIERREZ PABLO
                            [ValorUnitario] => 5166.66
                             */
                            $.each(this, function (k2, att) {
                                console.log("Importe: "+att.Importe);
                                /*$.each(this, function (k2, v2) {
                                    console.log("atributos: "+k2 + '=> ' + v2);
                                });*/                                
                                tr += '<tr>';
                                    tr += '<td>'+ (k2+1) +'</td>';
                                    tr += '<td>';
                                        tr += '<b>CVE. PROD. SERV.: </b> <span>'+att.ClaveProdServ.replace(",", "").replace(",", "").replace(".00", "")+'</span><br/>';
                                        tr += '<b>CVE. UNIDAD: </b> <span>'+att.ClaveUnidad+'</span><br/>';
                                        tr += '<b>UNIDAD: </b> <span>'+att.Unidad+'</span><br/>';
                                        tr += '<b>DESCRIPCIÓN: </b> <span>'+att.Descripcion+'</span>';
                                    tr += '</td>';
                                    tr += '<td class="text-right align-middle">'+att.Cantidad+'</td>';
                                    tr += '<td class="text-right align-middle">$'+att.ValorUnitario+'</td>';
                                    tr += '<td class="text-right align-middle">$'+att.Importe+'</td>';
                                tr += '</tr>';
                                
                                
                                
                            });
                        }
                    });   
                }                
            });
            console.log(tr);
            $("tbody.body-trs").html(tr);
        } catch (e) {
            console.log('Inconvenientes: ' + e.message);
        }
    };  
    this.facturaToCards = function () {
        $("div.divFactura").hide("fast");
        $("div.filesXML").show("slow");        
    };
};

/*INICIO CODIGO JQUERY*/
$(function () {
    setInterval(function(){
        var arr = fnc_subirXml.options.arrUUIDS;
        if(arr.length > 0){
            $("div button.btnAceptar").show();
        }else{
            $("div button.btnAceptar").hide();
        }
    },1000);
    var wt = fnc_subirXml.options.arrElmentsCards;
    if(wt.length == 0){
        $("div.div-card-box").each(function (index) {
            var card = '<div class="col-sm-6 col-md-4 col-xl-3 item-cad">';
            card += $(this).html();
            card += "</div>";
            wt.push(card);
        });
        fnc_subirXml.options.arrElmentsCards = wt;        
    }
});
/*FIN CODIGO JQUERY*/



