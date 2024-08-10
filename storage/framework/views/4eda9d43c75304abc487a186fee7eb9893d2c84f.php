<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?php echo e($set->name); ?></title>

  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/alert/css/alertify.min.css" />
	<link rel="stylesheet" href="<?php echo e(url('/')); ?>/alert/css/themes/default.min.css" />
	<script src="<?php echo e(url('/')); ?>/alert/alertify.min.js"></script>
	
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/asset/css/style.css">
</head>

<body class="dashboard">

<div id="preloader">
    <i>.</i>
    <i>.</i>
    <i>.</i>
</div>

<div id="main-wrapper">


    <div class="header">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="header-content">
                <div class="header-left">
                   <div class="brand-logo"><a class="mini-logo" href="<?php echo e(url('/')); ?>"><img src="images/logoi.png" alt="" width="40"></a></div>
                   <div class="search">
                      <form action="#">
                         <div class="input-group"><input type="text" class="form-control" placeholder="Search Here"><span class="input-group-text"><i class="ri-search-line"></i></span></div>
                      </form>
                   </div>
                </div>
                <div class="header-right">
                   <div class="dark-light-toggle"><span class="dark"><i class="ri-moon-line"></i></span><span class="light"><i class="ri-sun-line"></i></span></div>
                   
                   <div class="dropdown profile_log dropdown">
                      <div data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                         <div class="user icon-menu active"><span><i class="ri-user-line"></i></span></div>
                      </div>
                      <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu dropdown-menu-right">
                         <div class="user-email">
                            <div class="user">
                               <span class="thumb"><img src="<?php echo e(url('/')); ?>/asset/images/profile/3.png" alt=""></span>
                               <div class="user-info">
                                  <h5><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></h5>
                                  <span><?php echo e($user->email); ?></span>
                               </div>
                            </div>
                         </div>
                         <a class="dropdown-item" href="<?php echo e(route('user.profile')); ?>"><span><i class="ri-user-line"></i></span>Profile</a>
                         <a class="dropdown-item" href="<?php echo e(route('user.settings')); ?>"><span><i class="ri-settings-3-line"></i></span>Settings</a>
                         <a class="dropdown-item logout" href="<?php echo e(route('user.logout')); ?>"><i class="ri-logout-circle-line"></i>Logout</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

    <div class="sidebar">
    <div class="brand-logo"><a class="full-logo" href="<?php echo e(url('/')); ?>"><img src="images/logoi.png" alt="" width="30"></a></div>
    <div class="menu">
        <ul>
            <li><a href="<?php echo e(route('user.dashboard')); ?>">
                    <span><i class="ri-home-5-line"></i></span>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="#deposit" data-toggle="modal" data-target="#deposit">
                    <span><i class="ri-wallet-line"></i></span>
                    <span class="nav-text">Wallet</span>
                </a>
            </li>
            <li><a href="<?php echo e(route('user.bills')); ?>">
                    <span><i class="ri-secure-payment-line"></i></span>
                    <span class="nav-text">Bills</span>
                </a>
            </li>
            <li><a href="<?php echo e(route('user.transactions')); ?>">
                    <span><i class="ri-file-copy-2-line"></i></span>
                    <span class="nav-text">Transactions</span>
                </a>
            </li>
            <li><a href="<?php echo e(route('user.settings')); ?>">
                    <span><i class="ri-settings-3-line"></i></span>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
            <li class="logout"><a href="<?php echo e(route('user.logout')); ?>">
                    <span><i class="ri-logout-circle-line"></i></span>
                    <span class="nav-text">Signout</span>
                </a>
            </li>
        </ul>
    </div>
</div>


<div class="modal" id="deposit" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">My Account Details</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6> Use the following Account Details to fund your wallet </h6>
            </div>
            
        </div>
    </div>
</div>
<?php echo $__env->yieldContent('content'); ?>


</div>




<script src="<?php echo e(url('/')); ?>/asset/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo e(url('/')); ?>/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="<?php echo e(url('/')); ?>/asset/vendor/chartjs/chartjs.js"></script>



<script src="<?php echo e(url('/')); ?>/asset/js/plugins/chartjs-line-init.js"></script>




<script src="<?php echo e(url('/')); ?>/asset/js/plugins/chartjs-donut.js"></script>






<script src="<?php echo e(url('/')); ?>/asset/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo e(url('/')); ?>/asset/js/plugins/perfect-scrollbar-init.js"></script>



<script src="<?php echo e(url('/')); ?>/asset/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo e(url('/')); ?>/asset/js/plugins/circle-progress-init.js"></script>







<script src="<?php echo e(url('/')); ?>/asset/js/scripts.js"></script>

<script>
function getPlan(str, stp) {
        if(stp == 'data') {
          var tpp = str + '-data';
        }
        var tx = stp + '_full';
        da = {
          'type' : tpp, 
          _token: '<?php echo csrf_token(); ?>',
        };
        $.post(
            "<?php echo e(route('get.plan')); ?>",
            da,
            function(data) {
                console.log(data);
                
                var ty = '<div class="form-group mb-3"><select id="" size="1" class="form-control" required name="plan" onchange="getDataPrice('+str+',this.value)"><option> Select Data Plan </option>';
                if(data.length >0) {
                for(i=0; i<data.length; i++) {
                   ty += '<option value="'+data[i]['variation_code']+'"> '+data[i]['name']+' </option>';
                }
                }
                
                ty += '</select></div>';
                $('.'+tx).html(ty);
            }
            );
    }

    function getCableCard(str) {
        var stp = $('.cabletype').val();
        
        da = {
          'type' : stp,
          'card' : str, 
          _token: '<?php echo csrf_token(); ?>',
        };
        $.post(
            "<?php echo e(route('get.merchant')); ?>",
            da,
            function(data) {
                console.log(data);
                if(data.code == '000') {
                  $('.ecc').html('');
                  $('.ecp').html(data.content.Customer_Name);
                  $('.cablecard').val('');
                }
                else {
                  $('.ecp').html('');
                  $('.ecc').html('Invalid Card Number');
                }
                
                
            }
            );
    }

    function getElecCard(str) {
        var stp = $('.edisco').val();
        var stt = $('.metertype').val();
        
        da = {
          'type' : stp,
          'card' : str,
          'clas' : stt, 
          _token: '<?php echo csrf_token(); ?>',
        };
        $.post(
            "<?php echo e(route('get.elec.merchant')); ?>",
            da,
            function(data) {
                console.log(data);
                if(data.code == '000') {
                  $('.mecc').html('');
                  $('.mecp').html(data.content.Customer_Name + " - " + data.content.Address);
                  $('.metercard').val('');
                }
                else {
                  $('.mecp').html('');
                  $('.mecc').html('Invalid Meter Number');
                }
                
                
            }
            );
    }

    function getDataPrice(str, stp) {
      var tpp = str + '-data';
        
        var tx = stp + '_half';
        da = {
          'type' : tpp, 
          _token: '<?php echo csrf_token(); ?>',
        };
        
        $.post(
            "<?php echo e(route('get.plan')); ?>",
            da,
            function(data) {
                console.log(data);
                
                
                if(data.length >0) {
                for(i=0; i<data.length; i++) {
                    if(data[i]['variation_code'] == stp) {
                        var ty = '<div class="form-group mb-3"><input type="text" name="amount" value="'+datc+'" class="form-control" readonly required>';
                    ty += '</div>';
                
                    }
                   
                }
                }
                $('.'+tx).html(ty);
            }
            );
    }
  </script>
<?php if(session('success')): ?>
      <script>
      alertify.success("<?php echo e(session('success')); ?>");
        //toastr.success("<?php echo e(session('success')); ?>");
      </script>    
  <?php endif; ?>

  <?php if(session('alert')): ?>
      <script>
      alertify.error("<?php echo e(session('alert')); ?>");
        //toastr.warning("<?php echo e(session('alert')); ?>");
      </script>
  <?php endif; ?>
</body>

</html><?php /**PATH C:\wamp64\www\myprojects\gurupay\resources\views/header.blade.php ENDPATH**/ ?>