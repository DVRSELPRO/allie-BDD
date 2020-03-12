<?php 
require 'includes/header_account.php'; 
include_once './controller/ControllerUser.php';
$controllerUser = new ControllerUser();
if(isset($_POST["btnAceptar"])){
    $s = $controllerUser->sendMailResetPwd($_POST["mail"]);
    //echo "<pre>";print_r($s);
}        
?>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/images/bg.webp');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4" style="display: <?php echo (isset($s["estatus"]) && $s["estatus"] == 1 ? "none" : "block")?>">
                                <a href="index.php" class="text-success">
                                    <span><img src="assets/images/users/default.png" alt="Crear una cuenta" style="width: 110px;"></span>
                                </a>
                            </h2>
                            <div class="account-content text-center" style="display: <?php echo (isset($s["estatus"]) && $s["estatus"] == 1 ? "block" : "none")?>">
                                <svg version="1.1" xmlns:x="&amp;ns_extend;" xmlns:i="&amp;ns_ai;" xmlns:graph="&amp;ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 98 98" style="height: 120px;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:#FFFFFF;}
                                        .st1{fill:#02a8b5;}
                                        .st2{fill:#FFFFFF;stroke:#02a8b5;stroke-width:2;stroke-miterlimit:10;}
                                        .st3{fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;}
                                    </style>
                                    <g i:extraneous="self">
                                        <circle id="XMLID_50_" class="st0" cx="49" cy="49" r="49"></circle>
                                        <g id="XMLID_4_">
                                            <path id="XMLID_49_" class="st1" d="M77.3,42.7V77c0,0.6-0.4,1-1,1H21.7c-0.5,0-1-0.5-1-1V42.7c0-0.3,0.1-0.6,0.4-0.8l27.3-21.7
                                                  c0.3-0.3,0.8-0.3,1.2,0l27.3,21.7C77.1,42.1,77.3,42.4,77.3,42.7z"></path>
                                            <path id="XMLID_48_" class="st2" d="M66.5,69.5h-35c-1.1,0-2-0.9-2-2V26.8c0-1.1,0.9-2,2-2h35c1.1,0,2,0.9,2,2v40.7
                                                  C68.5,68.6,67.6,69.5,66.5,69.5z"></path>
                                            <path id="XMLID_47_" class="st1" d="M62.9,33.4H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                  c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,33,63.4,33.4,62.9,33.4z"></path>
                                            <path id="XMLID_46_" class="st1" d="M62.9,40.3H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                  c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,39.9,63.4,40.3,62.9,40.3z"></path>
                                            <path id="XMLID_45_" class="st1" d="M62.9,47.2H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                  c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,46.8,63.4,47.2,62.9,47.2z"></path>
                                            <path id="XMLID_44_" class="st1" d="M62.9,54.1H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                  c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,53.7,63.4,54.1,62.9,54.1z"></path>
                                            <path id="XMLID_43_" class="st2" d="M41.6,40.1h-5.8c-0.6,0-1-0.4-1-1v-6.7c0-0.6,0.4-1,1-1h5.8c0.6,0,1,0.4,1,1v6.7
                                                  C42.6,39.7,42.2,40.1,41.6,40.1z"></path>
                                            <path id="XMLID_42_" class="st2" d="M41.6,54.2h-5.8c-0.6,0-1-0.4-1-1v-6.7c0-0.6,0.4-1,1-1h5.8c0.6,0,1,0.4,1,1v6.7
                                                  C42.6,53.8,42.2,54.2,41.6,54.2z"></path>
                                            <path id="XMLID_41_" class="st1" d="M23.4,46.2l25,17.8c0.3,0.2,0.7,0.2,1.1,0l26.8-19.8l-3.3,30.9H27.7L23.4,46.2z"></path>
                                            <path id="XMLID_40_" class="st3" d="M74.9,45.2L49.5,63.5c-0.3,0.2-0.7,0.2-1.1,0L23.2,45.2"></path>
                                        </g>
                                    </g>
                                </svg>

                                <p class="text-muted font-14 mt-2"> 
                                    Se ha enviado un correo electrónico a <b><?php echo $s["mail"]?></b>. Favor de revisar en su bandeja de correo electrónico y haga clic en el enlace para restablecer su contraseña.
                                </p>

                                <a href="iniciar-sesion.php" class="btn btn-md btn-block btn-custom waves-effect waves-light mt-3">Iniciar sesión</a>
                            </div>

                            <div class="text-center m-b-20" style="display: <?php echo (isset($s["estatus"]) && $s["estatus"] == 1 ? "none" : "block")?>">
                                <p class="text-muted m-b-0">Teclea tu correo electrónico y te enviaremos a tu correo las instrucciones para cambiar tu contraseña.  </p>
                            </div>

                            <form class="form-horizontal" action="recuperar-password.php" method="POST" style="display: <?php echo (isset($s["estatus"]) && $s["estatus"] == 1 ? "none" : "block")?>">

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="correo">Correo electrónico</label>
                                        <input class="form-control mail" type="email" id="mail" required="" placeholder="" name="mail">
                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name="btnAceptar">Recuperar contraseña</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50" style="display: <?php echo (isset($s["estatus"]) && $s["estatus"] == 1 ? "none" : "block")?>">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Regresar <a href="iniciar-sesion.php" class="text-dark m-l-5"><b>Iniciar sesión</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © DIBAX SA DE CV</p>
            </div>

        </div>



        <?php require 'includes/footer_account.php' ?>