<?php require 'includes/header_start.php'; ?>

        <!-- Summernote css -->
        <link href="plugins/summernote/summernote-bs4.css" rel="stylesheet" />

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
                                    <h4 class="page-title">Summernote </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                        <li class="breadcrumb-item active">Summernote</li>
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
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="header-title m-b-30">Default Editor</h4>
                                <div class="summernote">
                                    <h3>Hello Summernote</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End row -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 m-b-30 header-title">Inline Editor</h4>
                                <div class="inline-editor">

                                    <h3>This is an Air-mode editable area.</h3>
                                    <ul>
                                        <li>
                                            Select a text to reveal the toolbar.
                                        </li>
                                        <li>
                                            Edit rich document on-the-fly, so elastic!
                                        </li>
                                    </ul>
                                    <p>
                                        End of air-mode area
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->

                    

        <?php require 'includes/footer_start.php' ?>
        
        <!--Summernote js-->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>

        <script>
            jQuery(document).ready(function(){
                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });

                $('.inline-editor').summernote({
                    airMode: true
                });
            });
        </script>

        <?php require 'includes/footer_end.php' ?>