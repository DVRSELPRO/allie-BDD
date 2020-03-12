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
                                    <h4 class="page-title">Progress Bars </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Progress Bars</li>
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
                                <h4 class="m-t-0 header-title">Basic Example</h4>

                                <p class="text-muted font-13 m-b-30">
                                    Default progress bar.
                                </p>

                                <div class="progress m-b-20">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-0">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">Contextual alternatives</h4>

                                <p class="text-muted font-13 m-b-30">
                                    Progress bars use some of the same button and alert classes for consistent styles.
                                </p>

                                <div class="progress m-b-20">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-0">
                                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">Striped example</h4>

                                <p class="text-muted font-13 m-b-30">
                                    Uses a gradient to create a striped effect.
                                </p>

                                <div class="progress m-b-20">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-0">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">Size example</h4>

                                <p class="text-muted font-13 m-b-30">
                                    Your awesome text goes here.
                                </p>

                                <div class="progress m-b-20" style="height: 1px;">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-sm m-b-20">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs m-b-20">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">Progressbar Vertical</h4>

                                <p class="text-muted font-13 m-b-30">
                                    Use class <code>.progress-vertical</code>.
                                </p>

                                <div class="progress progress-sm progress-vertical">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="height: 89%;">
                                        <span class="sr-only">89% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="height: 77%;">
                                        <span class="sr-only">77% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-md progress-vertical">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="height: 45%;">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-lg progress-vertical m-b-5">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="height: 67%;">
                                        <span class="sr-only">67% Complete</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">Progressbar Vertical Bottom</h4>

                                <p class="text-muted font-13 m-b-30">
                                    Use class <code>.progress-vertical-bottom</code>.
                                </p>

                                <div class="progress progress-sm progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="height: 89%;">
                                        <span class="sr-only">89% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="height: 77%;">
                                        <span class="sr-only">77% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-md progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="height: 45%;">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-lg progress-vertical-bottom m-b-5">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="height: 67%;">
                                        <span class="sr-only">67% Complete</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end row -->


        <?php require 'includes/footer_start.php' ?>
        

        <?php require 'includes/footer_end.php' ?>