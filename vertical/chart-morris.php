<?php require 'includes/header_start.php'; ?>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="plugins/morris/morris.css">

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
                                    <h4 class="page-title">Morris Chart </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                        <li class="breadcrumb-item active">Morris Chart</li>
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
                                <h4 class="header-title">Stacked Bar Chart</h4>

                                <div id="morris-bar-stacked" style="height: 350px;" class="mt-4"></div>

                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="card-box">
                                <h4 class="header-title">Area Chart</h4>

                                <div id="morris-area-example" style="height: 350px;" class="mt-4"></div>

                            </div>
                        </div>

                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-6">

                            <div class="card-box">
                                <h4 class="header-title">Line Chart</h4>

                                <div id="morris-line-example" style="height: 350px;" class="mt-4"></div>

                            </div> <!-- card-box -->

                        </div> <!-- end row -->

                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Bar Chart</h4>

                                <div id="morris-bar-example" style="height: 350px;" class="mt-4"></div>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">

                        <div class="col-lg-6">

                            <div class="card-box">
                                <h4 class="header-title">Area Chart with Point</h4>

                                <div id="morris-area-with-dotted" style="height: 350px;" class="mt-4"></div>

                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="card-box">
                                <h4 class="header-title m-t-0">Donut Chart</h4>

                                <div id="morris-donut-example" style="height: 350px;" class="mt-4"></div>

                            </div>
                        </div>

                    </div>
                    <!-- end row -->

        <?php require 'includes/footer_start.php' ?>
        
        <!--Morris Chart-->
        <script src="plugins/morris/morris.min.js"></script>
        <script src="plugins/raphael/raphael-min.js"></script>
        <script src="assets/pages/jquery.morris.init.js"></script>

        <?php require 'includes/footer_end.php' ?>