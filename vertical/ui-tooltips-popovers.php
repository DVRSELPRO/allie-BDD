<?php require 'includes/header_start.php'; ?>

        <!-- Tooltipster css -->
        <link rel="stylesheet" href="plugins/tooltipster/tooltipster.bundle.min.css">

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
                                    <h4 class="page-title">Tooltips & Popovers </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Tooltips & Popovers</li>
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
                                <h4 class="header-title m-t-0">Popovers</h4>
                                <p class="text-muted m-b-25 font-13">Add small overlays of content, like those on
                                    the iPad, to any element for housing secondary information.</p>


                                <div class="button-list m-t-20">
                                    <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                        Popover on top
                                    </button>

                                    <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                                    sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                        Popover on bottom
                                    </button>

                                    <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                        Popover on right
                                    </button>

                                    <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover title">
                                        Popover on left
                                    </button>

                                    <button type="button" tabindex="0" class="btn btn-custom" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">
                                        Dismissible popover
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->



                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title m-t-0">Tooltips</h4>
                                <p class="text-muted m-b-25 font-13">Four options are available: top, right, bottom,
                                    and left aligned.</p>

                                <div class="button-list m-t-20">

                                    <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Tooltip on top</button>

                                    <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</button>

                                    <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>

                                    <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Tooltip on right</button>
                                </div>


                                <h4 class="header-title m-t-50">Animated Tooltips</h4>
                                <p class="text-muted m-b-25 font-13">Four options are available: top, right, bottom,
                                    and left aligned.</p>

                                <div class="row">
                                    <div class="col-lg-8 col-md-10">

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th style="min-width:50%;">Examples</th>
                                                <th>Demo</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="vertical-middle">Basic Example</td>
                                                <td>
                                                    <button type="button" id="tooltip-hover" class="btn btn-primary" title="This is my span's tooltip message!">Hover Me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="vertical-middle">Custom open/close triggers</td>
                                                <td>
                                                    <button type="button" id="tooltip-events" class="btn btn-info" title="Press any key on your keyboard or click anywhere in the page to close this">Click Me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vertical-middle">HTML, side, fixed size</td>
                                                <td>
                                                    <button type="button" id="tooltip-html" class="btn btn-custom" title="Press any key on your keyboard or click anywhere in the page to close this">Hover Me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vertical-middle">Mouse, touch & hybrid devices
                                                </td>
                                                <td>
                                                    <button type="button" id="tooltip-touch" class="btn btn-purple" title="I would have never been born on a touch device :'(">Hover Me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vertical-middle">Animations
                                                </td>
                                                <td>
                                                    <button type="button" id="tooltip-animation" class="btn btn-success" title="Build CSS powered animations!">Hover Me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vertical-middle">Interaction with tooltips</td>
                                                <td>
                                                    <button type="button" id="tooltip-interaction" class="btn btn-dark" title="Try clicking &lt;a class='text-white font-600' href='http://google.com/' target='_blank'&gt;this link&lt;/a&gt;">Hover Me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vertical-middle">Multiple tooltips on a single element</td>
                                                <td>
                                                    <button type="button" id="tooltip-multiple" class="btn btn-light">Hover Me</button>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

        <?php require 'includes/footer_start.php' ?>

        <!-- Tooltipster js -->
        <script src="plugins/tooltipster/tooltipster.bundle.min.js"></script>
        <script src="assets/pages/jquery.tooltipster.js"></script>
        
        <?php require 'includes/footer_end.php' ?>