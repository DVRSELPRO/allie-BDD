<?php require 'includes/header_start.php'; ?>

        <!-- ION Slider -->
        <link href="plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/ion-rangeslider/ion.rangeSlider.skinModern.css" rel="stylesheet" type="text/css"/>

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
                                    <h4 class="page-title">Range Sliders </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Range Sliders</li>
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
                        <div class="col-12">

                            <div class="card-box">

                                <h4 class="header-title m-t-0">Modern skin</h4>

                                <p class="text-muted m-b-30 font-13">
                                    Cool, comfortable, responsive and easily customizable range slider
                                </p>

                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="range_01" class="col-lg-2 control-label"><b>Default</b><span class="font-13 d-block text-muted clearfix">Start without params</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_01">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_02" class="col-lg-2 control-label"><b>Min-Max</b><span class=" font-13 d-block text-muted clearfix">Set min value, max value and start point</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_02">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_03" class="col-lg-2 control-label"><b>Prefix</b><span class="font-13 d-block text-muted clearfix">showing grid and adding prefix "$"</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_03">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_04" class="col-lg-2 control-label"><b>Range</b><span class="d-block font-13 text-muted clearfix">Set up range with negative values</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_04">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_05" class="col-lg-2 control-label"><b>Step</b><span class="d-block font-13 text-muted clearfix">Using step 250</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_05">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_06" class="col-lg-2 control-label"><b>Custom Values</b><span class="d-block font-13 text-muted clearfix">Using any strings as values</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_06">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_07" class="col-lg-2 control-label"><b>Prettify Numbers</b><span class="d-block font-13 text-muted clearfix">Prettify enabled. Much better!</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_07">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_08" class="col-lg-2 control-label"><b>Disabled</b><span class="d-block font-13 text-muted clearfix">Lock slider by using disable option</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_08">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_09" class="col-lg-2 control-label"><b>Extra Example</b><span class="d-block font-13 text-muted clearfix">Whant to show that max number is not the biggest one?</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_09">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_10" class="col-lg-2 control-label"><b>Use decorate_both option</b><span class="d-block font-13 text-muted clearfix">Use decorate_both option</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_10">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_11" class="col-lg-2 control-label"><b>Postfixes</b><span class="d-block font-13 text-muted clearfix">Using postfixes</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_11">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_12" class="col-lg-2 control-label"><b>Hide</b><span class="d-block font-13 text-muted clearfix">Or hide any part you wish</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" id="range_12">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end col -->
                    </div><!-- Row -->


        <?php require 'includes/footer_start.php' ?>
        
        <!-- Range slider js -->
        <script src="plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
        <script src="assets/pages/jquery.range-sliders.js"></script>

        <?php require 'includes/footer_end.php' ?>