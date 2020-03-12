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
                                    <h4 class="page-title">Google Charts </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                        <li class="breadcrumb-item active">Google Charts</li>
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
                                <h4 class="header-title">Line chart</h4>

                                <div class="chart mt-4" id="line-chart"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="header-title">Area Chart</h4>

                                <div class="chart mt-4" id="area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="header-title">Column Chart</h4>

                                <div class="chart mt-4" id="column-chart"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="header-title">Bar Charts</h4>

                                <div class="chart mt-4" id="bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="header-title">Stacked column charts</h4>

                                <div class="chart mt-4" id="column-stacked-chart"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="header-title">Stacked bar charts</h4>

                                <div class="chart mt-4" id="bar-stacked-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->



                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="header-title">Pie Chart</h4>

                                <div class="google-chart text-center">
                                    <div class="chart mt-4" id="pie-chart"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="header-title">Donut Chart</h4>

                                <div class="google-chart text-center">
                                    <div class="chart mt-4" id="donut-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->



                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="header-title">3D Pie Chart</h4>

                                <div class="google-chart text-center">
                                    <div class="chart mt-4" id="pie-3d-chart"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="header-title">Exploding a Slice</h4>

                                <div class="google-chart text-center">
                                    <div class="chart mt-4" id="3d-exploded-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

        <?php require 'includes/footer_start.php' ?>
        
        <!-- Google Charts js -->
        <script src="https://www.google.com/jsapi"></script>
        <!-- Init -->
        <script src="assets/pages/jquery.google-charts.init.js"></script>

        <?php require 'includes/footer_end.php' ?>