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
                                    <h4 class="page-title">Jquery Knob </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                        <li class="breadcrumb-item active">Jquery Knob</li>
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
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="card-box">
                                <input data-plugin="knob" data-width="150" data-height="150" data-bgColor="#ebeff2"
                                        data-fgColor="#188ae2" data-displayInput=false value="35"/>

                                <h6 class="text-muted mt-3">Disable display input</h6>
                            </div>
                        </div><!-- end col-->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="card-box">
                                <input data-plugin="knob" data-width="150" data-height="150" data-cursor=true
                                        data-fgColor="#4bd396" value="29"  data-knob-icon="icon-dollar"/>

                                <h6 class="text-muted mt-3">Cursor mode</h6>
                            </div>
                        </div><!-- end col-->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="card-box">
                                <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                        data-fgColor="#3ac9d6" data-displayPrevious=true value="44"/>

                                <h6 class="text-muted mt-3">Display previous value</h6>
                            </div>
                        </div><!-- end col-->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="card-box">
                                <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                        data-fgColor="#f9c851" data-displayPrevious=true data-angleOffset=-125
                                        data-angleArc=250 value="44"/>

                                <h6 class="text-muted mt-3">Angle offset and arc</h6>
                            </div>
                        </div><!-- end col-->
                    </div><!-- end row -->

                    <div class="row">

                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="card-box">
                                <input data-plugin="knob" data-width="150" data-height="150"
                                        data-angleOffset="90" data-linecap="round" data-fgColor="#f5707a"
                                        value="35"/>

                                <h6 class="text-muted mt-3">Angle offset</h6>
                            </div>
                        </div><!-- end col-->

                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="card-box">
                                <input data-plugin="knob" data-width="150" data-height="150" data-min="-15000"
                                        data-displayPrevious=true data-max="15000" data-step="1000"
                                        value="-11000" data-fgColor="#3b3e47"/>

                                <h6 class="text-muted mt-3">5-digit values, step 1000</h6>
                            </div>
                        </div><!-- end col-->

                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="card-box">
                                <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round
                                        data-fgColor="#6b5fb5" value="80" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".1"/>

                                <h6 class="text-muted mt-3">Readonly</h6>
                            </div>
                        </div><!-- end col-->

                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="card-box">
                                <input data-plugin="knob" data-width="150" data-height="150"
                                        data-displayPrevious=true data-fgColor="#f06292" data-skin="tron"
                                        data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125
                                        data-angleArc=250 />

                                <h6 class="text-muted mt-3">Angle offset and arc</h6>
                            </div>
                        </div><!-- end col-->

                    </div><!-- end row-->

        <?php require 'includes/footer_start.php' ?>
        
        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="plugins/jquery-knob/jquery.knob.js"></script>

        <?php require 'includes/footer_end.php' ?>