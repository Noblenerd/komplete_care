<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
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
          <div class="col-md-1 align-self-center"></div>
            
            <div class="col-md-4 align-self-center order-first order-md-1">
  
              <div class="mini-logo text-center my-4">
                  <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('/')); ?>/asset/images/logo.png" alt=""></a>
                  <h4 class="card-title mt-5">Login to your account</h4>
              </div>
              <div class="auth-form card">
                  <div class="card-body">
                    <form class="" method="post" action="<?php echo e(route('login.submit')); ?>">
                      <?php echo csrf_field(); ?>
                          
                      <div class="col-12 mb-3">
                          <label class="form-label">Email Address</label>
                          
                              <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email Address">
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label class="form-label">Password</label>
                                
                              <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                          

                          <div class="d-grid gap-2">
                              <button type="submit" class="btn btn-primary">Login</button>
                          </div>
                      </form>
                      <div class="text-center">
                          <p class="mt-3 mb-0"> <a class="text-primary" href="<?php echo e(route('register')); ?>">Sign Up</a> for your
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
<?php /**PATH C:\wamp64\www\myprojects\gurupay\resources\views//auth/login.blade.php ENDPATH**/ ?>