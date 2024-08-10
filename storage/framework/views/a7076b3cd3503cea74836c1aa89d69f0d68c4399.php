<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registration</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="alert/css/alertify.min.css" />
	<link rel="stylesheet" href="alert/css/themes/default.min.css" />
	<script src="alert/alertify.min.js"></script>
	
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image:url('images/carousel/banner_10.jpg');background-repeat:no-repeat;background-size:cover;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 my-5 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="" alt="logo">
              </div>
              <h4 align="center">Hello! let's get started</h4>
              <h6 align="center" class="font-weight-light">Sign up to continue.</h6>
              <form class="pt-3" method="post" action="<?php echo e(route('register.submit')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="first_name" id="exampleInputEmail1" placeholder="First Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="last_name" id="exampleInputEmail1" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <select size="1" class="form-control form-control-lg" name="gender" id="exampleInputEmail1" placeholder="Gender">
                        <option> Select Gender </option>
                        <option> Male </option>
                        <option> Female </option>
                    </select>
                </div>
                    <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control form-control-lg" name="phone" id="exampleInputEmail1" placeholder="Phone Number">
                </div>
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>
                
                <div class="mb-2">
                  
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?php echo e(route('login')); ?>" class="text-primary">Sign IN</a>
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
<?php /**PATH C:\wamp64\www\myprojects\hospital\resources\views//auth/register.blade.php ENDPATH**/ ?>