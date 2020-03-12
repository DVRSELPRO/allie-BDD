<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
extract($_GET);
include_once "./validarSesion.php"; 
include_once "./utilidades/Utils.php"; 
$utils = new Utils\Utils();
include_once "./modelo/ModeloUser.php"; 
$mSesion = new \ModeloUser\ModeloUser();
$mSesion = $utils->getDataSesion();
$iduser = isset($iduser) ? $iduser : 0;


?>
<?php require 'includes/header_start.php'; ?>
<!-- Bootstrap fileupload css -->
<link href="plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
<!-- Dropzone css -->
<link href="plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
<!-- DataTables -->
<link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<?php require 'includes/header_end.php'; ?>

<?php require 'includes/leftbar.php'; ?>
<?php require 'includes/topbar.php'; ?>
<?php 
include_once './controller/ControllerUser.php';
$c = new ControllerUser();
$arrUsers = $c->getUsers(0, 1, 3);
$arrModelo = array();
//echo "<pre>";print_r($arrUsers);
?>
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Usuarios registrados</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Se ha encontrado <?php echo count($arrUsers)?> usuarios registrados</a></li>
<!--                                        <li class="breadcrumb-item"><a href="#">Seleccionar archivos</a></li>-->
                                        <!--<li class="breadcrumb-item active">File Uploads</li>-->
                                    </ol>                                    
                                </div>
                            </li>
                        </ul>
                </nav>

            </div>
            <!-- Top Bar End -->



            <!-- Start Page content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <a nohref onclick="window.history.back();" class="btn btn-custom waves-effect waves-light mb-4 float-right" data-animation="fadein" data-plugin="custommodal"
                               data-overlaySpeed="200" data-overlayColor="#36404a"><i class="mdi mdi-arrow-left-bold"></i> Regresar</a>
                        </div><!-- end col -->
                    </div>                 
                    <div class="row justify-content-md-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="alert alert-info alert-dismissible bg-info text-white border-0 fade show div_mensajesFiles" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alertx" aria-label="Closex" onclick="fnc_subirXml.closeDivAlert()">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <span class="mensaje"></span>
                            </div>
                        </div>
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Registrados</h4>
                            <div class="table-responsive">
                                <div class="p-20">
                                    <table class="table table-hover" id="tableUsuarios">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>XML</th>
                                                <th>RFC</th>
                                                <th>Email</th>
                                                <th>Creado</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (count($arrUsers) > 0) { ?>                        
                                                <?php foreach ($arrUsers as $key => $valObject): ?>
                                                    <?php
                                                    $mUser = new \ModeloUser\ModeloUser();
                                                    $mUser = $valObject;
                                                    $iduser = ($mUser->getId_rol() == 1 ? 0 : $mUser->getIduser());
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $mUser->getIduser() ?></td>
                                                        <td>
                                                            <a href="ver-xmls-subidos.php?iduser=<?php echo $iduser ?>">
                                                                <?php
                                                                echo $utils->uppersTitles($mUser->getNombreempleado() . " " . $mUser->getApellidopaterno() . " " . $mUser->getApellidomaterno());
                                                                echo ($mUser->getNombreempleado() != "" ? "<br>" . $utils->uppersTitles($mUser->getRazon_social()) : $utils->uppersTitles($mUser->getRazon_social()));
                                                                ?>                                                    
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-<?php echo ($mUser->getTxml() > 0 ? "custom" : "secondary") ?>">
                                                                <?php echo $mUser->getTxml() > 0 ? number_format($mUser->getTxml()) . " archivos" : "Sin XML" ?>
                                                            </span>
                                                        </td>
                                                        <td><?php echo $mUser->getRfc() ?></td>
                                                        <td><?php echo $mUser->getMail() ?></td>
                                                        <td><?php echo date("d/m/Y", strtotime($mUser->getFechacreacion())) ?></td>
                                                        <td>
                                                            <span class="badge badge-<?php echo ($mUser->getEstatus() == 1 ? "success" : "danger") ?>"><?php echo $utils->getEstatusString($mUser->getEstatus()) ?></span>
                                                        </td>
                                                        <td><a href="ver-perfil.php?iduser=<?php echo $mUser->getIduser() ?>" class="hover"><span class="badge badge-primary">Modificar</span></a></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end card-box -->
                    </div>
                    <!-- end row -->

        <?php require 'includes/footer_start.php' ?>
        <!-- Modal-Effect -->
        <script src="plugins/custombox/js/custombox.min.js"></script>
        <script src="plugins/custombox/js/legacy.min.js"></script>
        
        <!-- Bootstrap fileupload js -->
        <script src="plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

        <!-- Dropzone js -->
        <script src="plugins/dropzone/dropzone.js"></script>
        <script src="assets/js/subir-xmls.js"></script>
        <!-- Required datatable js -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
        

        <script>
            $(document).ready(function () {
                //Buttons examples
                var table = $('#tableUsuarios').DataTable({
                    lengthChange: false,
                    "language": {
                    "sProcessing":    "Procesando...",
                    "sLengthMenu":    "Mostrar _MENU_ registros",
                    "sZeroRecords":   "No se encontraron resultados",
                    "sEmptyTable":    "Ningún dato disponible en esta tabla",
                    "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":   "",
                    "sSearch":        "Buscar:",
                    "sUrl":           "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":    "Último",
                    "sNext":    "Siguiente",
                    "sPrevious": "Anterior"
                    },
                    "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
                });
            });

        </script>
        <?php require 'includes/footer_end.php' ?>        
