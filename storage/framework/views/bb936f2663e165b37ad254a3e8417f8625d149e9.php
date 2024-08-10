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

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/alert/css/alertify.min.css" />
	<link rel="stylesheet" href="<?php echo e(url('/')); ?>/alert/css/themes/default.min.css" />
	<script src="<?php echo e(url('/')); ?>/alert/alertify.min.js"></script>
	
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- Custom styles for this template -->
  <link href="<?php echo e(url('/')); ?>/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo e(url('/')); ?>/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area custom_page-height">
    <!-- header section strats -->
    <section class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container d-lg-none">
          <a class="navbar-brand" href="#">
            <div class="logo-box">
              <img src="<?php echo e(url('/')); ?>/<?php echo e($set->image); ?>" alt="">
              <span>
                <?php echo e($set->name); ?>

              </span>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(url('/')); ?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('about')); ?>"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('services')); ?>"> Service</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('quote')); ?>"> Get Quote </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="<?php echo e(route('contact')); ?>">Contact us</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="header_container ">
          <div class="logo-box">
            <img src="<?php echo e(url('/')); ?>/<?php echo e($set->image); ?>" alt="">
            <span>
              <?php echo e($set->name); ?>

            </span>
          </div>
          <div>
            <div class="header_top">
              <div class="header_top-contact">

                <a href="" class="ml-4">
                  <div>
                    <img src="images/phone.png" alt="" />
                  </div>
                  <span>
                    (+234) <?php echo e($set->phone); ?>

                  </span>
                </a>
                <a href="" class="ml-4">
                  <div>
                    <img src="images/mail.png" alt="" />
                  </div>
                  <span>
                    <?php echo e($set->email); ?>

                  </span>
                </a>
              </div>
              <div class="header_top-social">
                <div>
                  <a href="">
                    <img src="images/fb.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/twitter.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/g-plus.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="header_btm">
              <nav class="navbar navbar-expand-lg custom_nav-container pt-3">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(url('/')); ?>">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('about')); ?>"> About </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('services')); ?>"> Service</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('quote')); ?>"> Get Quote </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link " href="<?php echo e(route('contact')); ?>">Contact us</a>
                      </li>
                    </ul>

                  </div>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

<?php echo $__env->yieldContent('content'); ?>

<!-- info section -->
<section class="info_section ">
  <div class="container ">
    <div class="row  mb-3 pb-4">
      <div class="col-md-3 info_logo">
        <div class="logo-box">
          <img src="<?php echo e(url('/')); ?>/images/logo-white.png" alt="">
          <span>
            <?php echo e($set->name); ?>

          </span>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedconsectetur
        </p>
        <div class="info_social">
          <div>
            <a href="">
              <img src="images/fb.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/twitter.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/g-plus.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/linkedin.png" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3 info_address">
        <h5>
          Address
        </h5>
        <p>
          <?php echo e($set->address); ?>

        </p>
        <p>
          (+234) <?php echo e($set->phone); ?>

        </p>
        
        <p>
          <a href="">
            <?php echo e($set->email); ?>

          </a>
        </p>
      </div>
      <div class="col-md-3 info_links">

        <div class="info_nav ">
          <nav class="">
            <ul>
              <h5>
                Links
              </h5>
              <li>
                <a href="<?php echo e(url('/')); ?>"> Home</a>
              </li>
              <li>
                <a href="<?php echo e(route('about')); ?>">About</a>
              </li>
              <li>
                <a href="<?php echo e(route('services')); ?>"> Service</a>
              </li>
              <li>
                <a href="<?php echo e(route('quote')); ?>"> Get Quote</a>
              </li>
              <li>
                <a href="<?php echo e(route('contact')); ?>">Contact us</a>
              </li>

            </ul>
          </nav>
        </div>
      </div>
      <div class="col-md-3 info_news">
        <h5>
          Newsletter
        </h5>
        <form action="">
          <div>
            <input type="text" placeholder="Your Name">
          </div>
          <div>
            <input type="email" placeholder="Email">
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit">
              Subscribe
            </button>
          </div>
        </form>
      </div>
    </div>


  </div>
</section>
<!-- end info section -->


<section class="container-fluid footer_section">
  <p>
    Copyright &copy; <?php echo e(date('Y')); ?> All Rights Reserved
   
  </p>
</section>
<!-- footer section -->

<script type="text/javascript" src="<?php echo e(url('/')); ?>//jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/')); ?>/js/bootstrap.js"></script>


<script>
  // This example adds a marker to indicate the position of Bondi Beach in Sydney,
  // Australia.
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: {
        lat: 40.645037,
        lng: -73.880224
      },
    });

    var image = 'images/maps-and-flags.png';
    var beachMarker = new google.maps.Marker({
      position: {
        lat: 40.645037,
        lng: -73.880224
      },
      map: map,
      icon: image
    });
  }
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
</script>
<!-- end google map js -->
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

</html><?php /**PATH C:\wamp64\www\myprojects\logistics\resources\views/header.blade.php ENDPATH**/ ?>