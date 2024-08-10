<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo e($set->name); ?></title>

<link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/slick.min.css" />
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/font-awesome-all.min.css" />
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/charts.min.css" />
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/datatables.min.css" />
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/fancy-box.min.css" />
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/nice-select.min.css" />
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/pikaday.min.css" />
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/css/style.css" />
  </head>
  <body id="crancy-dark-light">
    <div class="body-bg">
      <section class="crancy-wc crancy-wc__full crancy-bg-cover">
        <div class="crancy-wc__form">
          <!-- Welcome Banner -->
          <div class="crancy-wc__form--middle">
            <div class="crancy-wc__form-inner">
              <div class="crancy-wc__logo">
                <a href="<?php echo e(url('/')); ?>"><img src="img/logo.png" alt="#" /></a>
              </div>
              <div class="crancy-wc__form-inside">
                <div class="crancy-wc__form-middle">
                  <div class="crancy-wc__form-top">
                    <div class="crancy-wc__heading pd-btm-20">
                      <h3
                        class="crancy-wc__form-title crancy-wc__form-title__one m-0"
                      >
                        Login to your account
                      </h3>
                    </div>
                    <!-- Sign in Form -->
                    <form method="post" action="<?php echo e(route('login.submit')); ?>" id="contact-form">
                      <?php echo csrf_field(); ?>
                      <!-- Form Group -->
                      <div class="form-group">
                        <div class="form-group__input">
                          <input
                            class="crancy-wc__form-input"
                            type="email"
                            name="email"
                            placeholder="Email"
                            required="required"
                          />
                        </div>
                      </div>
                      <!-- Form Group -->
                      <div class="form-group">
                        <div class="form-group__input">
                          <input
                            class="crancy-wc__form-input"
                            placeholder="Password"
                            id="password-field"
                            type="password"
                            name="password"
                            required="required"
                          />
                          <span class="crancy-wc__toggle"
                            ><i class="fas fa-eye" id="toggle-icon"></i
                          ></span>
                        </div>
                      </div>
                      <!-- Form Group -->
                      <div class="form-group">
                        <div class="crancy-wc__check-inline">
                          <div class="crancy-wc__checkbox">
                            <input
                              class="crancy-wc__form-check"
                              id="checkbox"
                              name="checkbox"
                              type="checkbox"
                            />
                            <label for="checkbox">Remember Me</label>
                          </div>
                          
                        </div>
                      </div>
                      <!-- Form Group -->
                      <div class="form-group mg-top-30">
                        <div class="crancy-wc__button">
                          <button class="ntfmax-wc__btn" type="submit">
                            Sign in 
                          </button>
                        </div>
                        
                      </div>
                      <!-- Form Group -->
                      <div class="form-group form-mg-top30">
                        <div class="crancy-wc__bottom">
                          <p class="crancy-wc__text">
                            Dont’t have an account ?
                            <a href="<?php echo e(route('register')); ?>">Get Started</a>
                          </p>
                        </div>
                      </div>
                    </form>
                    <!-- End Sign in Form -->
                  </div>
                  
                </div>
              </div>
            </div>
            <div
              class="crancy-wc__banner crancy-bg-cover"
              style="background-image: url('img/welcome-vector-shape.png')"
            >
              <div class="crancy-wc__banner--img">
                <img src="img/welcome-vector.png" alt="#" />
              </div>
              <div class="crancy-wc__slider">
                <!-- Sinlge Slider -->
                <div class="single-slider">
                  <div class="crancy-wc__slider--single">
                    <div class="crancy-wc__slider--content">
                      <h4 class="crancy-wc__slider--title">
                        The Easiest Way to Transport <br />
                        your Items
                      </h4>
                      <p class="crancy-wc__slider--text">
                        The easiest and most seamless means of movement
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Sinlge Slider -->
                <div class="single-slider">
                  <div class="crancy-wc__slider--single">
                    <div class="crancy-wc__slider--content">
                      <h4 class="crancy-wc__slider--title">
                        Sign in & Get the Access of a lifetime
                      </h4>
                      <p class="crancy-wc__slider--text">
                        The easiest and most seamless means of movement
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Sinlge Slider -->
                <div class="single-slider">
                  <div class="crancy-wc__slider--single">
                    <div class="crancy-wc__slider--content">
                      <h4 class="crancy-wc__slider--title">
                        The Easiest Way to Build <br />
                        your Own Business
                      </h4>
                      <p class="crancy-wc__slider--text">
                        The easiest and most seamless means of movement
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Welcome Banner -->
        </div>
      </section>
    </div>

    <!--  Scripts -->
    <script src="<?php echo e(url('/')); ?>/js/jquery.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/js/jquery-migrate.js"></script>
    <script src="<?php echo e(url('/')); ?>/js/popper.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/js/slick.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/js/charts.js"></script>
    <script src="<?php echo e(url('/')); ?>/js/final-countdown.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/js/fancy-box.min.js"></script>
    <!-- <script src="js/datatables.min.js"></script> -->
    <script src="<?php echo e(url('/')); ?>/js/circle-progress.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/js/nice-select.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/js/pikaday.min.js"></script>
    <script src="<?php echo e(url('/')); ?>/js/main.js"></script>

    <script>
      var crancyWCSlider = jQuery(".crancy-wc__slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        fade: true,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
      });
    </script>


              
               
<?php /**PATH C:\wamp64\www\myprojects\3xp\resources\views//auth/login.blade.php ENDPATH**/ ?>