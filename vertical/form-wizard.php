<?php require 'includes/header_start.php'; ?>

        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="plugins/jquery.steps/css/jquery.steps.css" />

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
                                    <h4 class="page-title">Form Wizard </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Wizard</li>
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

                    <!-- Basic Form Wizard -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">Basic Form Wizard</h4>
                                <p class="text-muted m-b-30 font-13">
                                    Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                                </p>

                                <div class="pull-in">
                                    <form id="basic-form" action="#">
                                        <div>
                                            <h3>Account</h3>
                                            <section>
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="userName">User name *</label>
                                                    <div class="">
                                                        <input class="form-control required" id="userName" name="userName" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="password"> Password *</label>
                                                    <div class="">
                                                        <input id="password" name="password" type="text" class="required form-control">

                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="confirm">Confirm Password *</label>
                                                    <div class="">
                                                        <input id="confirm" name="confirm" type="text" class="required form-control">
                                                    </div>
                                                </div>

                                            </section>
                                            <h3>Profile</h3>
                                            <section>
                                                <div class="form-group clearfix">

                                                    <label class="control-label" for="name"> First name *</label>
                                                    <div class="">
                                                        <input id="name" name="name" type="text" class="required form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="surname"> Last name *</label>
                                                    <div class="">
                                                        <input id="surname" name="surname" type="text" class="required form-control">

                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="email">Email *</label>
                                                    <div class="">
                                                        <input id="email" name="email" type="text" class="required email form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="address">Address *</label>
                                                    <div class="">
                                                        <input id="address" name="address" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="control-label ">(*) Mandatory</label>
                                                </div>

                                            </section>
                                            <h3>Hints</h3>
                                            <section>
                                                <div class="form-group clearfix">
                                                    <div class="col-lg-12">
                                                        <ul class="list-unstyled w-list">
                                                            <li><b>First Name :</b> Jonathan </li>
                                                            <li><b>Last Name :</b> Smith </li>
                                                            <li><b>Emial:</b> jonathan@smith.com</li>
                                                            <li><b>Address:</b> 123 Your City, Cityname. </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                            <h3>Finish</h3>
                                            <section>
                                                <div class="form-group clearfix">
                                                    <div class="col-lg-12">
                                                        <div class="checkbox checkbox-primary">
                                                            <input id="checkbox-h" type="checkbox">
                                                            <label for="checkbox-h">
                                                                I agree with the Terms and Conditions.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- End row -->


                    <!-- Vertical Steps Example -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">Vertical Steps Example</h4>
                                <p class="text-muted m-b-30 font-13">
                                    Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                                </p>

                                <form id="wizard-vertical">
                                    <h3>Account</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="control-label " for="userName1">User name *</label>
                                            <div class="">
                                                <input class="form-control required" id="userName1" name="userName" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="control-label " for="password1"> Password *</label>
                                            <div class="">
                                                <input id="password1" name="password" type="text" class="required form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="control-label " for="confirm1">Confirm Password *</label>
                                            <div class="">
                                                <input id="confirm1" name="confirm" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="control-label ">(*) Mandatory</label>
                                        </div>
                                    </section>
                                    <h3>Profile</h3>
                                    <section>
                                        <div class="form-group clearfix">

                                            <label class="control-label" for="name1"> First name *</label>
                                            <div class="">
                                                <input id="name1" name="name" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="control-label " for="surname1"> Last name *</label>
                                            <div class="">
                                                <input id="surname1" name="surname" type="text" class="required form-control">

                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="control-label " for="email1">Email *</label>
                                            <div class="">
                                                <input id="email1" name="email" type="text" class="required email form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="control-label " for="address1">Address *</label>
                                            <div class="">
                                                <input id="address1" name="address" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                        </div>

                                    </section>
                                    <h3>Hints</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12">
                                                <ul class="list-unstyled w-list">
                                                    <li><b>First Name :</b> Jonathan </li>
                                                    <li><b>Last Name :</b> Smith </li>
                                                    <li><b>Emial:</b> jonathan@smith.com</li>
                                                    <li><b>Address:</b> 123 Your City, Cityname. </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>Finish</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox-v" type="checkbox">
                                                    <label for="checkbox-v"> I agree with the Terms and Conditions. </label>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                                <!-- End #wizard-vertical -->
                            </div>
                        </div>
                    </div><!-- End row -->

        <?php require 'includes/footer_start.php' ?>
        
        <!--Form Wizard-->
        <script src="plugins/jquery.steps/js/jquery.steps.min.js"></script>

        <!--wizard initialization-->
        <script src="assets/pages/jquery.wizard-init.js"></script>

        <?php require 'includes/footer_end.php' ?>