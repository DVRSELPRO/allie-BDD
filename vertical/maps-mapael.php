<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>

<?php require 'includes/leftbar.php'; ?>
<?php require 'includes/topbar.php'; ?>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Mapael Maps </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Maps</a></li>
                                        <li class="breadcrumb-item active">Mapael Maps</li>
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
                        <div class="col-md-12">
                            <div class="card-box">
                                <h4 class="m-t-0 m-b-30 header-title">Map with a legend where slices are specified with a fixed value instead of min and max values</h4>
                                <div class="row">
                                    <div class="col-md-6 offset-3">
                                        <div class="map-usa">
                                            <div class="map">
                                                <span>Alternative content for the map</span>
                                            </div>
                                            <div class="plotLegend">
                                                <span>Alternative content for the legend</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-box">
                                <h4 class="m-t-0 m-b-30 header-title">Map with links between the plotted cities</h4>
                                <div class="mapcontainer">
                                    <div class="map">
                                        <span>Alternative content for the map</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- end row -->


        <?php require 'includes/footer_start.php' ?>
        
        <!-- Load page level scripts-->
        <script src="plugins/jquery-mapael/raphael-min.js"></script>
        <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="plugins/jquery-mapael/maps/world_countries.min.js"></script>
        <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <script src="assets/pages/jquery.mapael-map.init.js"></script>

        <?php require 'includes/footer_end.php' ?>