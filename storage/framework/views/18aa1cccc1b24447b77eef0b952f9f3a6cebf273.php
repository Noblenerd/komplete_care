<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registration</title>
  <!-- plugins:css -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/alert/css/alertify.min.css" />
	<link rel="stylesheet" href="<?php echo e(url('/')); ?>/alert/css/themes/default.min.css" />
	<script src="<?php echo e(url('/')); ?>/alert/alertify.min.js"></script>
	
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/style.css">
</head>

<body class="@class">


<div class="authincation">
  <div class="container-fluid mx-0">
      <div class="row">
      <div class="col-md-6" style="background-image:url('<?php echo e(url('/')); ?>/asset/images/bg/6.jpg');background-position:center center;background-size:cover;background-repeat:no-repeat;height:100vh;">

        </div>
          <div class="col-md-5 order-first order-md-1">
        
              <div class="mini-logo text-center my-4">
                  <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('/')); ?>/asset/images/logo.png" alt=""></a>
                  <h4 class="card-title mt-2">Create your account</h4>
              </div>
              <div class="auth-form card">
                  <div class="card-body">
                    <form class="" method="post" action="<?php echo e(route('register.submit')); ?>">
                      <?php echo csrf_field(); ?>
                          <div class="col-12 mb-3">
                              <label class="form-label">First Name</label>
                              <input type="text" class="form-control form-control-lg" name="first_name" id="exampleInputEmail1" placeholder="First Name">
                          </div>
                          <div class="col-12 mb-3">
                              <label class="form-label">Last Name</label>
                              <input type="text" class="form-control form-control-lg" name="last_name" id="exampleInputEmail1" placeholder="Last Name">
                          </div>
                          <div class="col-12 mb-3">
                              <label class="form-label">Email Address</label>
                              <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email Address">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Phone Number</label>
                              <input type="tel" class="form-control form-control-lg" name="phone" id="exampleInputEmail1" placeholder="Phone Number">
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label class="form-label">BVN</label>
                              <input type="number" max="11" class="form-control form-control-lg" name="bvn" id="exampleInputEmail1" placeholder="Bank Verification Number">
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label class="form-label">Username</label>
                              <input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Password</label>
                              <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                          <div class="col-12 mb-4">
                              <div class="form-check form-switch">
                                  <input class="form-check-input" name="terms" type="checkbox" id="flexSwitchCheckDefault">
                                  <label class="form-check-label" for="flexSwitchCheckDefault">
                                      I certify that I am 18 years of age or older, and agree to the <a href="#"
                                          class="text-primary">User Agreement</a> and <a href="#"
                                          class="text-primary">Privacy Policy</a>.
                                  </label>
                              </div>
                          </div>

                          <div class="d-grid gap-2">
                              <button type="submit" class="btn btn-primary">Create account</button>
                          </div>
                      </form>
                      <div class="text-center">
                          <p class="mt-3 mb-0"> <a class="text-primary" href="<?php echo e(route('login')); ?>">Sign in</a> to your
                              account</p>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>
</div>


<script src="<?php echo e(url('/')); ?>/asset/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo e(url('/')); ?>/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>






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
<?php /**PATH C:\wamp64\www\myprojects\gurupay\resources\views//auth/register.blade.php ENDPATH**/ ?>