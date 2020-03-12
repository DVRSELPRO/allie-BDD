<?php require 'includes/header_start.php'; ?>

        <!-- Sweet Alert css -->
        <link href="plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="page-title">Sweet Alert </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Sweet Alert</li>
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
                        <div class="col-lg-12">
                            <div class="card-box">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th style="min-width:50%;">Alert Type</th>
                                        <th>Example</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>A basic message</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-basic">Click me</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>A title with a text under</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-title">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A success message!</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-success">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A warning message, with a function attached to the "Confirm"-button...</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-warning">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>By passing a parameter, you can execute something else for "Cancel".</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-params">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A message with custom Image Header</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-image">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A message with auto close timer</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-close">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Custom HTML description and buttons</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="custom-html-alert">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A message with custom width, padding and background</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="custom-padding-width-alert">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ajax request example</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="ajax-alert">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chaining modals (queue) example</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="chaining-alert">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dynamic queue example</td>
                                        <td>
                                            <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="dynamic-alert">Click me</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div> <!-- end card-box -->
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->

        <?php require 'includes/footer_start.php' ?>
        
        <!-- Sweet Alert Js  -->
        <script src="plugins/sweet-alert/sweetalert2.min.js"></script>
        <script src="assets/pages/jquery.sweet-alert.init.js"></script>

        <?php require 'includes/footer_end.php' ?>