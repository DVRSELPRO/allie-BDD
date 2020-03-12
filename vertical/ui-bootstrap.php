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
                                    <h4 class="page-title">Bootstrap UI </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Bootstrap UI</li>
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
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="card-box">
                                        <h4 class="header-title">Badges</h4>
                                        <p class="text-muted m-b-20 font-13">
                                            Badges scale to match the size of the immediate parent element by using relative font sizing and <code class="highlighter-rouge">em</code> units.
                                        </p>

                                        <span class="badge badge-custom">Custom</span>
                                        <span class="badge badge-primary">Primary</span>
                                        <span class="badge badge-secondary">Secondary</span>
                                        <span class="badge badge-success">Success</span>
                                        <span class="badge badge-danger">Danger</span>
                                        <span class="badge badge-warning">Warning</span>
                                        <span class="badge badge-info">Info</span>
                                        <span class="badge badge-light">Light</span>
                                        <span class="badge badge-dark">Dark</span>
                                        <span class="badge badge-pink">Pink</span>
                                        <span class="badge badge-purple">Purple</span>
                                    </div>

                                </div>

                                <div class="col-md-6 mt-md-30">
                                    <div class="card-box">
                                        <h4 class="header-title">Pill Badges</h4>
                                        <p class="text-muted m-b-20 font-13">
                                            Use the <code class="highlighter-rouge">.badge-pill</code> modifier class to make badges more rounded (with a larger <code class="highlighter-rouge">border-radius</code> and additional horizontal <code class="highlighter-rouge">padding</code>). Useful if you miss the badges from v3
                                        </p>

                                        <span class="badge badge-custom badge-pill">Custom</span>
                                        <span class="badge badge-primary badge-pill">Primary</span>
                                        <span class="badge badge-secondary badge-pill">Secondary</span>
                                        <span class="badge badge-success badge-pill">Success</span>
                                        <span class="badge badge-danger badge-pill">Danger</span>
                                        <span class="badge badge-warning badge-pill">Warning</span>
                                        <span class="badge badge-info badge-pill">Info</span>
                                        <span class="badge badge-light badge-pill">Light</span>
                                        <span class="badge badge-dark badge-pill">Dark</span>
                                        <span class="badge badge-pink badge-pill">Pink</span>
                                        <span class="badge badge-purple badge-pill">Purple</span>
                                    </div>

                                </div>

                            </div>
                            <!-- end row -->


                            <div class="card-box">
                                <h4 class="header-title">Dropdowns</h4>
                                <p class="text-muted m-b-20 font-13">
                                    Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin.
                                </p>

                                <div class="row">
                                    <div class="col-md-6">

                                        <p class="mb-1 font-bold">Single button dropdowns</p>
                                        <p class="text-muted font-13">
                                            Any single <code
                                                class="highlighter-rouge">.btn</code> can be turned into a dropdown
                                            toggle with some markup changes. Here’s how you can put them to work
                                            with either <code class="highlighter-rouge">&lt;button&gt;</code>
                                            elements:
                                        </p>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="dropdown">
                                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown button
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown mt-3">
                                                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Animated Dropdown
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-animated" aria-labelledby="">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="dropdown">
                                                    <a class="btn btn-light dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown link
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <p class="mb-1 mt-5 font-bold">Variant</p>
                                        <p class="text-muted font-13">
                                            The best part is you can do this with any button variant, too:
                                        </p>

                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->


                                        <p class="mb-1 mt-5 font-bold">Dropright variation</p>
                                        <p class="text-muted font-13">
                                            Trigger dropdown menus at the right of the elements by adding <code>.dropright</code> to the parent element.
                                        </p>

                                        <!-- Default dropright button -->
                                        <div class="btn-group mb-2 dropright">
                                            <button type="button" class="btn btn-custom waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropright
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>

                                        <!-- Split dropright button -->
                                        <div class="btn-group mb-2 dropright">
                                            <button type="button" class="btn btn-custom waves-effect waves-light">
                                                Split dropright
                                            </button>
                                            <button type="button" class="btn btn-custom waves-effect waves-light dropdown-toggle-split dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropright</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>


                                        <p class="mb-1 mt-5 font-bold">Dropup variation</p>
                                        <p class="text-muted font-13">
                                            Trigger dropdown menus above elements
                                            by adding <code class="highlighter-rouge">.dropup</code> to the parent
                                            element.
                                        </p>

                                        <!-- Default dropup button -->
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>

                                        <!-- Split dropup button -->
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-light">
                                                Split dropup
                                            </button>
                                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6 mt-md-30">
                                        <p class="mb-1 font-bold">Split button dropdowns</p>
                                        <p class="text-muted font-13">
                                            Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of <code class="highlighter-rouge">.dropdown-toggle-split</code> for proper spacing around the dropdown caret.
                                        </p>


                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-primary">Primary</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-light">Secondary</button>
                                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-success">Success</button>
                                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-info">Info</button>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-warning">Warning</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-danger">Danger</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->

                                        <p class="mb-1 font-bold mt-5">Sizing</p>
                                        <p class="text-muted font-13">
                                            Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.
                                        </p>


                                        <!-- Large button groups (default and split) -->
                                        <div class="btn-group mb-2">
                                            <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Large button
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button class="btn btn-light btn-lg" type="button">
                                                Large button
                                            </button>
                                            <button type="button" class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>

                                        <!-- Small button groups (default and split) -->
                                        <div class="btn-group mb-2">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Small button
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button class="btn btn-light btn-sm" type="button">
                                                Small button
                                            </button>
                                            <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>


                                        <p class="mb-1 mt-5 font-bold">Dropleft variation</p>
                                        <p class="text-muted font-13">
                                            Trigger dropdown menus at the right of the elements by adding <code>.dropleft</code> to the parent element.
                                        </p>

                                        <!-- Default dropright button -->
                                        <div class="btn-group mb-2 dropleft">
                                            <button type="button" class="btn btn-custom waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropleft
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>

                                        <!-- Split dropright button -->
                                        <div class="btn-group mb-2 dropleft">
                                            <button type="button" class="btn btn-custom waves-effect waves-light dropdown-toggle-split dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropleft</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                            <button type="button" class="btn btn-custom waves-effect waves-light">
                                                Split Dropleft
                                            </button>
                                        </div>


                                        <p class="mb-1 font-bold mt-5">Menu alignment</p>
                                        <p class="text-muted font-13">
                                            Add <code class="highlighter-rouge">.dropdown-menu-right</code>
                                            to a <code class="highlighter-rouge">.dropdown-menu</code> to right
                                            align the dropdown menu.
                                        </p>


                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                This dropdown's menu is right-aligned
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- end row -->

                            </div>


                            <div class="card-box">

                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="header-title">Pagination</h4>
                                        <p class="text-muted m-b-20 font-13">
                                            Provide pagination links for your site or app with the multi-page pagination component.
                                        </p>

                                        <p class="mb-1 font-bold">Default Pagination</p>
                                        <p class="text-muted font-13">
                                            Simple pagination inspired by Rdio, great for apps and search results.
                                        </p>

                                        <nav>
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <p class="mb-1 font-bold">Split Pagination</p>
                                        <p class="text-muted font-13">
                                            Links are split to each other by adding a class of <code>
                                            .pagination-split</code>
                                        </p>

                                        <nav>
                                            <ul class="pagination pagination-split">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <p class="mb-1 font-bold">Sizing</p>
                                        <p class="text-muted font-13">
                                            Add <code>
                                            .pagination-lg</code>
                                            or <code>
                                            .pagination-sm</code>
                                            for additional sizes.
                                        </p>

                                        <nav>
                                            <ul class="pagination pagination-lg m-b-0">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <p class="mb-1 font-bold">Sizing</p>
                                        <p class="text-muted font-13">
                                            Change the alignment of pagination components with flexbox utilities.
                                        </p>

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-end">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>

                                    </div>

                                    <div class="col-md-6 mt-md-30">
                                        <h4 class="header-title">Breadcrumb</h4>
                                        <p class="text-muted m-b-20 font-13">
                                            Indicate the current page’s location within a navigational hierarchy.
                                        </p>

                                        <ol class="breadcrumb m-b-20">
                                            <li class="breadcrumb-item active">Home</li>
                                        </ol>
                                        <ol class="breadcrumb m-b-20">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active">Library</li>
                                        </ol>
                                        <ol class="breadcrumb m-b-20">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                                            <li class="breadcrumb-item active">Data</li>
                                        </ol>

                                    </div>

                                </div>
                                <!-- end row -->

                            </div>

                        </div>
                    </div>
                    <!-- end row -->


        <?php require 'includes/footer_start.php' ?>
        

        <?php require 'includes/footer_end.php' ?>