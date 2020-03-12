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
                                    <h4 class="page-title">Google Maps </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Maps</a></li>
                                        <li class="breadcrumb-item active">Google Maps</li>
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
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="mb-3 header-title">Basic</h4>

                                <div id="gmaps-basic" class="gmaps"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="mb-3 header-title">Markers</h4>

                                <div id="gmaps-markers" class="gmaps"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="mb-3 header-title">Polygons</h4>

                                <div id="gmaps-polygons" class="gmaps"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="mb-3 header-title">Overlays</h4>

                                <div id="gmaps-overlay" class="gmaps"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="mb-3 header-title">Street View Panoramas</h4>

                                <div id="panorama" class="gmaps-panaroma"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="mb-3 header-title">Routes</h4>

                                <div id="gmaps-route" class="gmaps"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="mb-3 header-title">Map Types</h4>

                                <div id="gmaps-types" class="gmaps"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="mb-3 header-title">Context menu (right click on map)</h4>

                                <div id="gmaps-menu" class="gmaps"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


        <?php require 'includes/footer_start.php' ?>
        
        <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

        <!-- main file -->
        <script src="plugins/gmaps/gmaps.min.js"></script>

        <!--  Init -->
        <script src="assets/pages/jquery.gmaps.js"></script>

        <?php require 'includes/footer_end.php' ?>