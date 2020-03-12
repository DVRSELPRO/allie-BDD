var fnc_verPerfil = new function () {
    this.options = {
        mensaje_success: '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alertx" aria-hidden="true" onclick="fnc_verPerfil.closeDivAlert();">×</button><span class="mensaje"></span></div>',
        mensaje_danger: '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alertx" aria-hidden="true" onclick="fnc_verPerfil.closeDivAlert();">×</button><span class="mensaje"></span></div>',
        mensaje_primary: '<div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alertx" aria-hidden="true" onclick="fnc_verPerfil.closeDivAlert();">×</button><span class="mensaje"></span></div>',
        mensaje_custom: '<div class="alert alert-custom alert-dismissible bg-custom text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alertx" aria-hidden="true" onclick="fnc_verPerfil.closeDivAlert();">×</button><span class="mensaje"></span></div>',
        mensaje_info: '<div class="alert alert-info alert-dismissible bg-info text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alertx" aria-hidden="true" onclick="fnc_verPerfil.closeDivAlert();">×</button><span class="mensaje"></span></div>',
        arrIdsFile: new Array(),
    };    
    this.closeDivAlert = function () {        
        $("div.div-mensajes").fadeOut("fast");
        $("div.div-mensajes").html("");
    };    
    this.showFormDatosPersonales = function () {
        if($("div.datos-personales-content ul").is(":visible")){
            $("div.datos-personales-form").show("slow");
            $("div.datos-personales-content i.edit-block").removeClass("icon-pencil").addClass(" icon-arrow-left-circle");
            $("div.datos-personales-content ul").hide("fast");
        }else {
            $("div.datos-personales-form").hide("fast");
            $("div.datos-personales-content ul").show("slow");
            $("div.datos-personales-content i.edit-block").removeClass(" icon-arrow-left-circle").addClass("icon-pencil");
        }
        
        
    };
    this.updateDatosPersonales = function (form){
        try {
            var data = new Array;
//            data = {action: "deleteUploadFileByID", "id": id}
            $.ajax({
                url: './ver-perfil.php',
                data: form.serialize(),
                type: 'POST',
                //dataType: "jsonp",
                success: function (json) {
                    if (json) {
                        console.log(json);
                        if (json.estatus === 1) {
                            //setter los nuevos valoes                            
                            fnc_verPerfil.showFormDatosPersonales();                            
                            setTimeout(function(){
                                $("ul.datos-en-li li span").fadeOut("fast");
                                $("ul.datos-en-li li span").fadeIn("slow");
                                $("ul.datos-en-li li span.span_nombreempleado").text(json["post"].nombreempleado);
                                $("ul.datos-en-li li span.span_Apellidomaterno").text(json["post"].apellidomaterno);
                                $("ul.datos-en-li li span.span_Apellidopaterno").text(json["post"].apellidopaterno);                                
                                $("ul.datos-en-li li span.span_email").text(json["post"].email);
                                $("ul.datos-en-li li span.span_idEmpleado").text(json["post"].idEmpleado);
                                $("ul.datos-en-li li span.span_rfc").text(json["post"].rfc);
                                $("ul.datos-en-li li span.span_telefonoCelular").text(json["post"].telefonoCelular);
                            }, 500);
                            fnc_verPerfil.goPositionScroll("frmDatosPersonales", -100);
                        } else if (json.estatus === 0) {
                            $("div.datos-personales-form div.div-mensajes").html(fnc_verPerfil.options.mensaje_danger).show("slow");
                            $("div.datos-personales-form div.div-mensajes span.mensaje").html(json.mensaje);                            
                        }
                    } else {
                        console.log('Error al ejecutar los datos');
                    }
                    $("div.datos-personales-form button.btnUpdate span").html("Guardar");
                }
            });        
        } catch (e) {
            console.log('Inconvenientes: ' + e.message);
        }
    };
    this.isNumber = function (evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    };
    this.goPositionScroll = function(go, extra){
        var position = $($("#"+go)).offset().top;        
        $("body, html").animate({
            scrollTop: position + extra
        } /* speed */);
    };    
    this.updateSoloPassword = function (content) {
        try {
            $.ajax({
                url: './ver-perfil.php',
                data: $(content + " form").serialize(),
                type: 'POST',
                //dataType: "jsonp",
                success: function (json) {
                    if (json) {
                        if (json.estatus === 1) {
                            $(content + " div.div-mensajes").html(fnc_verPerfil.options.mensaje_success).show("slow");
                            $(content + " div.div-mensajes span.mensaje").html(json.mensaje);
                            $(content + " form")[0].reset();
                            $(content + " button.btnAddExperienciaLaboral span").html("Guardar");                            
                        } else if (json.estatus === 0) {
                            $(content + " div.div-mensajes").html(fnc_verPerfil.options.mensaje_danger).show("slow");
                            $(content + " div.div-mensajes span.mensaje").html(json.mensaje);
                        }                        
                    } else {
                        console.log('Error al ejecutar los datos');
                    }
                    $(content + " button.btnUpdatePassword span").html("Guardar");
                }
            });   
                       
        } catch (e) {
            console.log('Inconvenientes: ' + e.message);
        }
    };
    this.deleteUser = function (id) {
        try {
            var divContente = "div.datos-personales-form";
            //validar los datos
            if(id != ""){
                var data = new Array;
                data = {
                    action: "deleteUser", 
                    iduser: id, 
                    }
    //            data.push({name: 'action',value: 'save_frm_manager_cursos'});
                $.ajax({
                    url: './ver-perfil.php',
                    data: data,
                    type: 'POST',
                    //dataType: "jsonp",
                    success: function (json) {
                        if (json) {
                            if (json.estatus === 1) {
//                                $(divContente + " div.div-mensajes").html(fnc_verPerfil.options.mensaje_success).show("slow");
//                                $(divContente + " div.div-mensajes span.mensaje").html(json.mensaje);
//                                $("div.changepassword-content").hide();
//                                var form = $("div.datos-personales-update-content");
//                                form.find("input").val("");
//                                form.find("input.action").val("updateDatosPersonales");
                                //provisional
                                $("a.historyBack").click();
                            } else if (json.estatus === 0) {
                                $(divContente + " div.div-mensajes").html(fnc_verPerfil.options.mensaje_danger).show("slow");
                                $(divContente + " div.div-mensajes span.mensaje").html(json.mensaje);
                            }
                        } else {
                            console.log('Error al ejecutar los datos');
                        }
                    }
                });   
            }            
        } catch (e) {
            console.log('Inconvenientes: ' + e.message);
        }
    };
};

String.prototype.toProperCase = function () {
    return this.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
};

/*INICIO CODIGO JQUERY*/
$(function () {    
//    setInterval(function(){},1000);          
    $("div.datos-personales-form form.frmDatosPersonales").submit(function (e) {
        e.preventDefault();        
        var frm = "#"+$(this).attr("id");
        var nombreempleado = $(frm+" input.nombreempleado");
        var apellidopaterno = $(frm+" input.apellidopaterno");
        var apellidomaterno = $(frm+" input.apellidomaterno");
        var rfc = $(frm+" input.rfc");
        var telefonoCelular = $(frm+" input.telefonoCelular");
        var email = $(frm+" input.email");
        var st = true;
        fnc_verPerfil.closeDivAlert();
        
        //loading ->btnFinalizar
        $(frm+" button.btnGuardar").show("fast");
        $(frm+" button.btnUpdate span").html("Procesando...");
        var p = "";
        if(nombreempleado.val().trim() == ""){
            p += "El nombre es obligatorio.</br>";
            st = false;
        }
        if(apellidopaterno.val().trim() == ""){
            p += "El apellido paterno es obligatorio.</br>";
            st = false;
        }
        if(apellidomaterno.val().trim() == ""){
            p += "El apellido materno es obligatorio.</br>";
            st = false;
        }        
        if(rfc.val().trim() == ""){
            p += "El RFC es obligatorio.</br>";
            st = false;
        }
        if(telefonoCelular.val().trim() == ""){
            p += "El teléfono celular es obligatorio.</br>";
            st = false;
        }
        if(email.val().trim() == ""){
            p += "Debe teclear un correo electrónico.</br>";
            st = false;
        }
        if(email.val().trim() != ""){
            var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            if (!testEmail.test(email.val())) {                
                p += "El correo electrónico es inválido.</br>";
                st = false;
            }
        }
        if(st){
            fnc_verPerfil.updateDatosPersonales($(this));
        }else{
            $("div.datos-personales-form div.div-mensajes").html(fnc_verPerfil.options.mensaje_danger).show("slow");
            $("div.datos-personales-form div.div-mensajes span.mensaje").html(p);
            $("div.datos-personales-form button.btnUpdate span").html("Guardar");
            return false;
        }
        
    });
    $("div.changepassword-form form.frmfrmUpdatePassword").submit(function(e){
        e.preventDefault();        
        var frm = "#"+$(this).attr("id");
        var content = "div.changepassword-content";
        var password = $(frm+" input.password");
        var passwordrepetir = $(frm+" input.passwordrepetir");
        
        var st = true;
        var p = "";
        $(content + " div.div-mensajes").hide("fast");
        $(frm+" button.btnUpdatePassword").show("fast");
        $(frm+" button.btnUpdatePassword span").html("Procesando...");
        if(password.val().trim() == ""){
            p += "Debe escribir una contraseña válida</br>";
            st = false;
        }
        if(passwordrepetir.val().trim() == ""){
            p += "Debe escribir una contraseña válida</br>";
            st = false;
        }        
        if(password.val() != "" && passwordrepetir.val() != ""){
            if(password.val() !== passwordrepetir.val()){
                p += "La contraseña no coincide.</br>";
                st = false;
            }
        }
        
        //div_mensajes -> alert-success alert alert-danger
        if(st){
            fnc_verPerfil.updateSoloPassword(content);
        }else{
            $(content + " div.div-mensajes").html(fnc_verPerfil.options.mensaje_danger).show("slow");
            $(content + " div.div-mensajes span.mensaje").html(p);
            $(content + " button.btnUpdatePassword span").html("Guardar");
            return false;
        }
    });
});
/*FIN CODIGO JQUERY*/



