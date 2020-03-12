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
                                    <h4 class="page-title">Chartjs Chart</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                        <li class="breadcrumb-item active">Chartjs Chart</li>
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
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Line Chart</h4>

                                <canvas id="lineChart" height="350" class="mt-4"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Bar Chart</h4>

                                <canvas id="bar" height="350" class="mt-4"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Pie Chart</h4>

                                <canvas id="pie" height="350" class="mt-4"></canvas>

                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="card-box">
                                <h4 class="header-title">Donut Chart</h4>

                                <canvas id="doughnut" height="350" class="mt-4"></canvas>

                            </div>
                        </div>

                    </div>
                    <!-- end row -->


                    <div class="row">

                        <div class="col-lg-6">

                            <div class="card-box">
                                <h4 class="header-title">Polar area Chart</h4>

                                <canvas id="polarArea" height="350" class="mt-4"> </canvas>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Radar Chart</h4>

                                <canvas id="radar" height="350" class="mt-4"></canvas>

                            </div>
                        </div>

                    </div>
                    <!-- end row -->

        <?php require 'includes/footer_start.php' ?>
        
        <!-- Chart JS -->
        <script src="plugins/chart.js/chart.bundle.js"></script>
        <script src="assets/pages/jquery.chartjs.init.js"></script>

        <?php require 'includes/footer_end.php' ?>