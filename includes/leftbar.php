<?php 
include_once './utilidades/Utils.php';
$utils = new \Utils\Utils();
include_once './utilidades/UtilsMysql.php';
$utilsMysql = new utilidades\UtilsMysql\UtilsMysql();
include_once './modelo/ModeloUser.php';
$aux = new ModeloUser\ModeloUser();
$aux = $utils->getDataSesion();
$arrAccess = $arrMenus = array();
//echo '<pre>';print_r($arrAccess);die();
if($aux != null){
    $arrAccess = $utilsMysql->getAccessByIdRol($aux->getId_rol());
    $arrMenus = $utils->getMenuPadre($arrAccess);
//    echo '<pre>';print_r($arrMenus);die();
//    echo '<pre>';print_r($arrAccess);die();
    
}

?>    
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">
                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.php" class="logo">
                            <span>
                                <img src="./assets/images/logo/logo.webp" alt="" width="160">
                            </span>
                            <i>
                                <img src="./assets/images/logo/logo-chico.png" alt="" width="48" height="48">
                            </i>
                        </a>
                    </div>
                    <!-- User box -->
                    <?php if($aux != NULL):?>
                    <div class="user-box">
                        <div class="user-img hidden">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#">
                            <?php
//                            $session = new ModeloUser\ModeloUser();
                            if($aux->getTipo_persona() == "Moral"){
                                echo mb_convert_case(mb_strtolower($aux->getRazon_social(), "utf-8"), MB_CASE_TITLE, 'UTF-8');
                            }else if($aux->getTipo_persona() == "Fisica"){
                                echo mb_convert_case(mb_strtolower($aux->getNombreempleado(), "utf-8"), MB_CASE_TITLE, 'UTF-8');
                            }
                            ?>
                            </a> </h5>
                        <p class="text-muted" style="display: <?php echo $aux->getTipo_persona() == "Moral" ? "none" : "block"?>"><?php echo mb_convert_case(mb_strtolower($aux->getApellidopaterno(), "utf-8"), MB_CASE_TITLE, 'UTF-8') ." ". mb_convert_case(mb_strtolower($aux->getApellidomaterno(), "utf-8"), MB_CASE_TITLE, 'UTF-8');?></p>
                    </div>
                    <?php else:?>
                    <br><br><br><br>
                    <?php endif;?>
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Menú</li>

                            <li>
                                <a href="index.php">
                                    <i class="fa fa-home"></i><span> Inicio </span>
                                </a>
                            </li>
<!--                            <li>
                                <a href="quienes-somos.php">
                                    <i class="fa fa-bank"></i><span> ¿Quiénes somos? </span>
                                </a>
                            </li>-->
                            <?php if($aux == NULL):?>
                            <li>
                                <a href="crear-cuenta.php">
                                    <i class="fa fa-user-plus"></i><span> Crear cuenta</span>
                                </a>
                            </li>
                            <li>
                                <a href="iniciar-sesion.php">
                                    <i class="fa fa-sign-in"></i><span> Iniciar sesión</span>
                                </a>
                            </li>
                            <?php endif;?>
                            <?php if(count($arrMenus) > 0):?>
                            <?php foreach ($arrMenus as $key1=>$menu):?>
                            <li>
                                <a href="javascript: void(0);"><i class="<?php echo $utils->getIconPadre($arrAccess, $menu)?>"></i><span> <?php echo $menu?> </span> <span class="menu-arrow"></span></a>
                                <?php if(count($arrAccess) > 0):?>
                                <ul class="nav-second-level" aria-expanded="false">
                                <?php foreach ($arrAccess as $key2=>$submenu):?>
                                    <?php if(isset($submenu[$menu]["vista_menu"]) && $submenu[$menu]["vista_menu"] == $menu && $submenu[$menu]["estatus"] == 1):?>
                                        <li><a href="<?php echo $submenu[$menu]["pagina"]?>"><i class="<?php echo $submenu[$menu]["icono"]?>"></i><?php echo $submenu[$menu]["submenu"]?></a></li>
                                    <?php endif;?>
                                <?php endforeach;?>
                                </ul>
                                <?php endif;?>
                            </li>
                            <?php endforeach;?>
                            <?php endif;?>
                            
                            

                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">