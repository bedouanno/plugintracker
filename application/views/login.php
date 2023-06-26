<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================
* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assetsv2/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assetsv2/img/favicon.png">
  <title>Plugin Tracker 2</title>

  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="<?php echo base_url(); ?>assetsv2/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assetsv2/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->


  <link id="pagestyle" href="<?php echo base_url(); ?>assetsv2/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />

    <style>
    body{font-size: 14px !important}
    </style>



  </head>
  <body class="g-sidenav-show  bg-gray-100">

  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                  <div class="row mt-3">
                    <div class="col-12 text-center px-1">
                      <a class="btn btn-link px-3" href="<?php echo base_url(); ?>">
                        <span class="text-white btn btn-lg btn-warning mb-0"><i class="fa fa-home text-white text-sm"></i> Back to Home Page </span>
                      </a>
                    </div>
                </div>
              </div>
              <div class="card-body">
                        <?php if(!empty(validation_errors())): ?>
                            <div class="alert alert-dismissible alert-primary">
                            <!--  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>-->
                                <strong><?php echo validation_errors(); ?></strong>
                                
                            </div>
                            <?php endif; ?>

                            <?php if(!empty($errors)): ?>
                                <div class="alert alert-dismissible alert-primary">
                                <strong><?php echo $errors['error_message']; ?></strong>
                                
                                </div>
                        <?php endif; ?>
                <?php echo form_open('login'); ?>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Username</label>
                    <input class="form-control" type="text" name="username">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input  class="form-control" type="password" name="password">
                  </div>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <!-- <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button> -->
                    <input type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2" value="sign in" name="login">
                  </div>
                  <!-- <p class="mt-4 text-sm text-center">
                    Don't have an account?
                    <a href="../pages/sign-up.html" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>assetsv2/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assetsv2/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assetsv2/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>assetsv2/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>assetsv2/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>