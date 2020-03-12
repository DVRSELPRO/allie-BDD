<?php require 'includes/header_account.php'; ?>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/bg-2.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.php" class="text-success">
                                    <span><img src="assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <div class="text-center">
                                <div class="mb-3">
                                    <img src="assets/images/users/avatar-5.jpg" class="rounded-circle img-thumbnail thumb-lg" alt="thumbnail">
                                </div>

                                <p class="text-muted m-b-0 font-14">Enter your password to access the admin. </p>
                            </div>

                            <form class="form-horizontal" action="#">

                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group row text-center">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom  waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Not you? return<a href="page-login.php" class="text-dark ml-2"><b>Sign In</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © Highdmin. - Coderthemes.com</p>
            </div>

        </div>


        <?php require 'includes/footer_account.php' ?>