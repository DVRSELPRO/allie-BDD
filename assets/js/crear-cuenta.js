var fnc_crearCuenta = new function () {
    this.options = {
        gv_id_facebook: '',
        gv_email: '',
        gv_quien_cometio: '',
        _id_carrera_by_id_areas: '',
        _id_municipio_id_estados: ''
    };
    this.show_alert = function(mensaje, tipo){
        global_vars.validar_form($('form.frm_regitro_mejora'), 'alert', mensaje, tipo);
    };    
    this.close_session = function () {
        try {
            $(function () {
                $.ajax({
                    url: global_vars.options.url + '/class/actions.php',
                    data: {action: 'close_session'},
                    type: 'POST',
                    success: function (json) {
                        if (json) {
                            if (json.estatus == 'ok') {
                                console.log(json.mensaje);
                                //$(".overlay").fadeOut('fast');
                                global_vars.validar_form($('input').first(), 'alert', 'Cerrando sesión...', 'success');
                                window.location = 'index.php';                                
                            }
                        } else {
                            console.log('Error al ejecutar los datos');
                            global_vars.validar_form($(' input.path_current'), 'alert', 'Ha ocurido inconvenientes al guardar su información.', 'error');
                            $(".overlay").fadeOut('fast');
                        }
                    }
                });
            });
        } catch (e) {
            console.log('Inconvenientes: ' + e.message);
        }
    };  
    this.check_perfil = function () {        
        try {
            jQuery.ajax({
                data: {"action": "check_perfil"},
                type: "POST",
                dataType: "json",
                url: "./class/actions.php",                
                success: function (json) {
                    if (json) {
                        if (json.estatus == 'ok') {                            
                            console.log(json.mensaje);                            
                            localStorage.setItem("check_perfil", JSON.stringify(json.arr_user));
                            //set msj bienvenida:
                            if(localStorage.getItem("bienvenida") == 'ok'){
                                //global_vars.validar_form($('form.frm_regitro_mejora'), 'alert', "Bienvenido (a) "+json.arr_user.nombre_completo, 'success');
                                //fnc_cpanel.msj_timer('div.str_mensajes', 8000);
                                localStorage.setItem("bienvenida", "no");
                            }
                            if(json.mensaje_nivel != undefined){
                                global_vars.validar_form($('form.frm_regitro_mejora'), 'alert', json.mensaje_nivel, 'success');
                            }
                            if(json.arr_user.rol_usuario == 'sistemas'){
                                //alert(json.arr_user['nombre_completo']);
                                $('ul.nav li.config-admin').fadeIn(600);
                            }else if(json.rol_usuario == 'director'){
                                
                            }else if(json.rol_usuario == 'rh'){
                                
                            }else if(json.rol_usuario == 'empleados'){
                            }
                        } else if (json.estatus == 'noOk') {
                            console.log(json.mensaje);
                            window.location = 'index.php';
                        }                        
                    } else {
                        console.log('Error al ejecutar los datos');
                    }
                }
            });
        } catch (e) {
            console.log('Error al ejecutar el codigo. Des: ' + e.message);
        }
    };
    this.typePersonByRFC = function () {
        var rfc = $('input#rfc').val();
        var st = false;
        try {        
            $("div.div_mensajes").fadeOut("fast");
            if(rfc != ""){
                $("div.div_fisica1, div.div_fisica2, div.div_moral").hide("fast");
                if(rfc.length == 12){
                    $("form.frmCrearCuenta div").removeClass("hidden");
                    $("div.div_moral").show();
                    $("div.div_mensajes").fadeIn("slow");
                    $("div.div_mensajes span.msj").html("Favor de completar sus datos");
                    $("div.strFooter").hide();
                    st = true;
                }else if(rfc.length == 13){
                    $("form.frmCrearCuenta div").removeClass("hidden");
                    $("div.div_fisica1, div.div_fisica2").show();
                    $("div.div_mensajes").fadeIn("slow");
                    $("div.div_mensajes span.msj").html("Favor de completar sus datos");
                    $("div.strFooter").hide();
                    st = true;
                }else{
                    $("div.div_mensajes").fadeIn("slow");
                    $("div.div_mensajes span.msj").html("Su RFC no es válido ["+rfc.length+"]");
                    $("div.strFooter").show();
                }
                if(st){
                    //$("button.btnContinuar").fadeOut("fast");
                }
            }else{
                $("div.div_mensajes").fadeIn("slow");
                $("div.div_mensajes span.msj").html("Su RFC no es válido");
//                $("button.btnContinuar").fadeIn("fast");
            }
            

        } catch (e) {
            console.log('Inconvenientes: ' + e.message);
        }
    };
    
};

/*INICIO CODIGO JQUERY*/
$(function () {     
    
   //check perfil
   
    //Reset formulario
    //$('form.frm_regitro_mejora')[0].reset();
    //onchange update bar progress
    /*
    var form = 'form.frm_regitro_mejora';
    $(form+' input, '+form+' select, '+form+' textarea').change(function(){
        var element = $(this);        
        if (!global_vars.validate_form_dinamyc(element, 'element')) {
            return false;
        }        
    });
    $("form.frm_regitro_mejora").submit(function (e) {
        e.preventDefault();
        var quien_cometio = $('form.frm_regitro_mejora input.quien_cometio');
        
        var btn_regitro_mejora = $('form.frm_regitro_mejora .btn_regitro_mejora');        
        if (!global_vars.validate_form_dinamyc('form.frm_regitro_mejora', 'form')) {
            return false;
        }        
        //agregar el horario
        $('input.hora_error').val($('select.hora_hora').val() + ':' + $('select.hora_min').val());
        btn_regitro_mejora.fadeOut('slow');
        fnc_cpanel.save_frm_regitro_mejora();

    });*/

});
/*FIN CODIGO JQUERY*/



