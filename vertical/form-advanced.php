<?php require 'includes/header_start.php'; ?>

        <!-- Plugins css-->
        <link href="plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="plugins/switchery/switchery.min.css" />


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
                                    <h4 class="page-title">Form Advanced </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Advanced</li>
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
                                <h4 class="header-title m-t-0 m-b-20">Select2</h4>

                                <p class="mb-1 mt-4 font-weight-bold text-muted">Single Select</p>
                                <p class="text-muted font-14">
                                    Select2 can take a regular select box like this...
                                </p>

                                <select class="form-control select2">
                                    <option>Select</option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>

                                <p class="mb-1 mt-4 font-weight-bold text-muted">Multiple Select</p>
                                <p class="text-muted font-14">
                                    Select2 can take a regular select box like this...
                                </p>

                                <select class="select2 form-control select2-multiple" multiple="multiple" multiple data-placeholder="Choose ...">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>

                        </div>


                        <div class="col-md-6">

                            <form class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Auto Complete</h4>

                                <div class="">
                                    <p class="mb-1 mt-4 font-weight-bold text-muted">Ajax Lookup</p>
                                    <p class="text-muted font-14">
                                        Your awesome text goes here
                                    </p>

                                    <input type="text" name="country" id="autocomplete-ajax"
                                            class="form-control">
                                    <input type="text" name="country" id="autocomplete-ajax-x"
                                            disabled="disabled" class="form-control"
                                            style="color: #CCC; position: absolute; background: transparent; z-index: 1;display: none;"/>
                                </div>
                                <div class="">
                                    <p class="mb-1 mt-4 font-weight-bold text-muted">Local Lookup and Grouping</p>
                                    <p class="text-muted font-14">
                                        Your awesome text goes here
                                    </p>
                                    <input type="text" name="country" id="autocomplete"
                                            class="form-control"/>
                                </div>
                            </form>

                        </div> <!-- end col -->

                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Tags Input</h4>

                                <p class="mb-1 mt-4 font-weight-bold text-muted">Input Tags</p>
                                <p class="text-muted font-14">
                                    Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.
                                </p>
                                <div class="tags-default">
                                    <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"/>
                                </div>

                                <p class="mb-1 mt-4 font-weight-bold text-muted">True multi value</p>
                                <p class="text-muted font-14">
                                    Use a <code>&lt;select multiple /&gt;</code> as your input element for a tags input, to gain true multivalue support.
                                    Instead of a comma separated string, the values will be set in an array. Existing <code>&lt;option /&gt;</code>
                                    elements will automatically be set as tags. This makes it also possible to create tags containing a comma.
                                </p>
                                <div class="m-b-0">
                                    <select multiple data-role="tagsinput">
                                        <option value="Amsterdam">Amsterdam</option>
                                        <option value="Washington">Washington</option>
                                        <option value="Sydney">Sydney</option>
                                        <option value="Beijing">Beijing</option>
                                        <option value="Cairo">Cairo</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Switchery</h4>

                                <p class="mb-1 mt-4 font-weight-bold text-muted">Basic</p>
                                <p class="text-muted font-14">
                                    Add an attribute <code>
                                    data-plugin="switchery" data-color="@colors"</code>
                                    to your input element and it will be converted into switch.
                                </p>

                                <div class="switchery-demo">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#039cfd"/>
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#f1b53d"/>
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a"/>
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#ff5d48"/>
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3db9dc"/>
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#2b3d51"/>
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#9261c6"/>
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#ff7aa3"/>
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#98a6ad"/>
                                </div>


                                <p class="mb-1 mt-4 font-weight-bold text-muted">Sizes & Secondary color</p>
                                <p class="text-muted font-14">
                                    Add an attribute <code>
                                    data-size="small",data-size="large"</code>
                                    to your input element and it will be converted into switch.
                                    Add an attribute <code>
                                    data-color="@color" data-secondary-color="@color"</code>
                                    to your input element and it will be converted into switch.
                                </p>

                                <div class="switchery-demo">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#ff7aa3"/>
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#2b3d51" data-size="large"/>
                                    <input type="checkbox" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" />
                                    <input type="checkbox" data-plugin="switchery" data-color="#9261c6"  data-secondary-color="#ff7aa3" checked />
                                </div>
                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div><!-- end row -->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-20">Bootstrap MaxLength</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="">
                                            <p class="mb-1 mt-4 font-weight-bold text-muted">Default usage</p>
                                            <p class="text-muted font-14">
                                                The badge will show up by default when the remaining chars are 10 or less:
                                            </p>
                                            <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />

                                            <div>
                                                <p class="mb-1 mt-4 font-weight-bold text-muted">Threshold value</p>
                                                <p class="text-muted font-14">
                                                    Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option:
                                                </p>
                                                <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                            </div>

                                            <div>
                                                <p class="mb-1 mt-4 font-weight-bold text-muted">All the options</p>
                                                <p class="text-muted m-b-15 font-14">
                                                    Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.
                                                </p>
                                                <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="">

                                            <p class="mb-1 mt-4 font-weight-bold text-muted">Position</p>
                                            <p class="text-muted font-14">
                                                All you need to do is specify the <code>placement</code> option, with one of those strings. If none
                                                is specified, the positioning will be defauted to 'bottom'.
                                            </p>
                                            <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />

                                            <div>
                                                <p class="mb-1 mt-4 font-weight-bold text-muted">textareas</p>
                                                <p class="text-muted font-14">
                                                    Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                                </p>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <!-- Bootstrap-select -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">Bootstrap-select</h4>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="demo-box">
                                            <p class="mb-2 mt-4 font-14">
                                                Create your
                                                <code>
                                                    &lt;select&gt;
                                                </code>
                                                with the
                                                <code>
                                                    .selectpicker
                                                </code>
                                                class.
                                            </p>
                                            <select class="selectpicker" data-style="btn-custom btn-block">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                            <p class="mb-2 mt-4 font-14">
                                                It also works with option groups:
                                            </p>
                                            <select class="selectpicker" data-style="btn-light">
                                                <optgroup label="Picnic">
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </optgroup>
                                                <optgroup label="Camping">
                                                    <option>Tent</option>
                                                    <option>Flashlight</option>
                                                    <option>Toilet Paper</option>
                                                </optgroup>
                                            </select>

                                            <p class="mb-2 mt-4 font-14">
                                                You can also show the tick icon on single <code>select</code> with the <code>show-tick</code> class:
                                            </p>

                                            <select class="selectpicker show-tick" data-style="btn-success">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                            <p class="mb-2 mt-4 font-14">
                                                And with multiple selects:
                                            </p>
                                            <select class="selectpicker" multiple data-style="btn-light">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                            <p class="mb-2 mt-4 font-14">
                                                You can limit the number of elements you are allowed to select via the
                                                <code>
                                                    data-max-option
                                                </code>
                                                attribute. It also works for option groups.
                                            </p>

                                            <select class="selectpicker m-b-0" multiple data-max-options="2" data-style="btn-pink">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="demo-box">
                                            <p class="mb-2 mt-4 font-14">
                                                You can limit the number of elements you are allowed to select via the
                                                <code>
                                                    data-max-option
                                                </code>
                                                attribute. It also works for option groups.
                                            </p>

                                            <select class="selectpicker" data-style="btn-light btn-rounded">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                            <br />
                                            <br />
                                            <select class="selectpicker" data-style="btn-primary btn-bordered">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                            <br />
                                            <br />
                                            <select class="selectpicker" data-style="btn-info">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                            <br />
                                            <br />
                                            <select class="selectpicker" data-style="btn-warning">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                            <br />
                                            <br />
                                            <select class="selectpicker" data-style="btn-danger btn-bordered">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                            <br />
                                            <br />
                                            <select class="selectpicker" data-style="btn-purple">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                            <p class="mb-2 mt-4 font-14">
                                                Add an icon to an option or optgroup with the <code>data-icon</code> attribute:
                                            </p>
                                            <select class="selectpicker m-b-0" data-style="btn-light">
                                                <option data-icon="mdi mdi-account-circle">Mustard</option>
                                                <option data-icon="mdi mdi-airplane">Ketchup</option>
                                                <option data-icon="mdi mdi-airplay">Relish</option>
                                                <option data-icon="mdi mdi-adjust">Mayonnaise</option>
                                                <option data-icon="mdi mdi-apple">Barbecue Sauce</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="demo-box">
                                            <p class="mb-2 mt-4 font-14">
                                                You can add a search input by passing <code>data-live-search="true"</code> attribute:
                                            </p>

                                            <select class="selectpicker" data-live-search="true"  data-style="btn-custom">
                                                <option>Hot Dog, Fries and a Soda</option>
                                                <option>Burger, Shake and a Smile</option>
                                                <option>Sugar, Spice and all things nice</option>
                                            </select>

                                            <p class="mb-2 mt-4 font-14">
                                                You can also use the <code>
                                                title</code> attribute as an alternative to display when the option is
                                                selected:
                                            </p>

                                            <select class="selectpicker" data-live-search="true" data-style="btn-light">
                                                <option title="Combo 1">Hot Dog, Fries and a Soda</option>
                                                <option title="Combo 2">Burger, Shake and a Smile</option>
                                                <option title="Combo 3">Sugar, Spice and all things nice</option>
                                            </select>

                                            <p class="mb-2 mt-4 font-14">
                                                Using the <code>data-selected-text-format</code> attribute on a <code>multiple select</code>
                                                you can specify how the selection is displayed.
                                            </p>

                                            <select class="selectpicker" multiple data-selected-text-format="count" data-style="btn-light">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                            <br/>
                                            <br/>
                                            <select class="selectpicker" multiple data-selected-text-format="count > 3" data-style="btn-light">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                                <option>Onions</option>
                                            </select>

                                            <p class="mb-2 mt-4 font-14">
                                                Add the <code>disabled</code> attribute to the select to apply the <code>disabled</code> class.
                                            </p>
                                            <select class="selectpicker m-b-0" data-style="btn-info" disabled>
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>

                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div>
                            <!-- ed card-box -->

                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">Bootstrap FileStyle</h4>
                                <p class="text-muted mb-0 font-14">
                                    Customization of input html file for Bootstrap 4
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="demo-box">
                                            <form>
                                                <div class="form-group">
                                                    <p class="mb-2 mt-4 font-weight-bold text-muted">Default file input</p>
                                                    <input type="file" class="filestyle" data-btnClass="btn-light">
                                                </div>
                                                <div class="form-group">
                                                    <p class="mb-2 mt-4 font-weight-bold text-muted">File style without input</p>
                                                    <input type="file" class="filestyle" data-input="false" data-btnClass="btn-custom">
                                                </div>
                                                <div class="form-group">
                                                    <p class="mb-2 mt-4 font-weight-bold text-muted">File style with custom text</p>
                                                    <input type="file" class="filestyle" data-buttontext="Select file" data-btnClass="btn-light">
                                                </div>
                                                <div class="form-group m-b-0">
                                                    <p class="mb-2 mt-4 font-weight-bold text-muted">File style with button style</p>
                                                    <input type="file" class="filestyle" data-btnClass="btn-primary">
                                                </div>

                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="demo-box">
                                            <form>
                                                <div class="form-group">
                                                    <p class="mb-2 mt-4 font-weight-bold">Disable file style</p>
                                                    <input type="file" class="filestyle" data-disabled="true" data-btnClass="btn-light">
                                                </div>
                                                <div class="form-group">
                                                    <p class="mb-2 mt-4 font-weight-bold">File style before button</p>
                                                    <input type="file" class="filestyle" data-buttonbefore="true" data-btnClass="btn-light">
                                                </div>

                                                <div class="form-group m-b-0">
                                                    <p class="mb-2 mt-4 font-weight-bold">File style placeholder</p>
                                                    <input type="file" class="filestyle" data-placeholder="No file" data-btnClass="btn-light">
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div> <!-- end row -->
                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

        <?php require 'includes/footer_start.php' ?>
        
        <script src="plugins/switchery/switchery.min.js"></script>
        <script src="plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="plugins/select2/js/select2.min.js"></script>
        <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <script src="plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
        <script src="plugins/bootstrap-maxlength/bootstrap-maxlength.js"></script>

        <script src="plugins/autocomplete/jquery.mockjax.js"></script>
        <script src="plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script src="plugins/autocomplete/countries.js"></script>
        <script src="assets/pages/jquery.autocomplete.init.js"></script>

        <!-- Init Js file -->
        <script src="assets/pages/jquery.form-advanced.init.js"></script>

        <?php require 'includes/footer_end.php' ?>