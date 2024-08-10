<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Login</title>
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <!-- endinject -->
  <link rel="shortcut icon" href="images/fav.png" />
  <link rel="stylesheet" href="alert/css/alertify.min.css" />
	<link rel="stylesheet" href="alert/css/themes/default.min.css" />
	<script src="alert/alertify.min.js"></script>
	
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>

<body>
  <div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image:url('images/carousel/banner_11.jpg');background-repeat:no-repeat;background-size:cover;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.png" alt="logo">
              </div>
              <h4 align="center"> Login to your Dashboard </h4>
              <h6 align="center" class="font-weight-light">Sign in to your dashboard</h6>
              <form class="pt-3" method="post" action="<?php echo e(route('login.submit')); ?>">
                    <?php echo csrf_field(); ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <!--<a href="#" class="auth-link text-black">Forgot password?</a>-->
                </div>
                <div class="mb-2">
                  
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <?php if(session('success')): ?>
    <script>
     alertify.success("<?php echo e(session('success')); ?>");
      //toastr.success("<?php echo e(session('success')); ?>");
    </script>    
<?php endif; ?>

<?php if(session('alert')): ?>
    <script>
     alertify.error("<?php echo e(session('alert')); ?>");
      toastr.warning("<?php echo e(session('alert')); ?>");
    </script>
<?php endif; ?>
</body>

</html>
<?php /**PATH C:\wamp64\www\myprojects\hospital\resources\views//auth/login.blade.php ENDPATH**/ ?>