<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo e($set->name); ?></title>
	<link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/bootstrap-lib/bootstrap.min.css">
    <!-- style sheet of css        -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/style.css">
    <!-- Responsive sheet of css -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/responsive.css">
    <!-- fonts awsome icon link            -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/font-awesome-lib/icon/font-awesome.min.css">
    <!-- slick-slider link css -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/slick.min.css">
    <!-- animation of css -->
	<link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/aos.css">
</head>
<body>
    <div class="site-wrapper">
        <div class="first_nav_hero_about">
            <!-- ======== 1.1. header section ======== -->
            <header>
                <nav class="container navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <!-- site logo -->
                        <a class="nav-logo p-0" href="<?php echo e(url('/')); ?>"><img src="assets/images/Logo.png" alt="logo"></a>
                                <!-- navigation button  -->
                        <button class="navbar-toggle" onclick="openNav()" type="button"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <!-- navigation bar manu  -->
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul
                                class="navbar-nav d-flex justify-content-center align-items-center gap-lg-2 gap-md-2 gap-sm-2 gap-2 mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Feature</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a id="search-bar-bt" class="nav-link" href="#"><i
                                            class="fa-solid fa-magnifying-glass"></i></a>
                                </li>
                                <li class="nav-item header_btn ">
                                    <a class="nav-link nav-hrf btn-hover1" href="#">Create Account</a>
                                </li>
                                <li class="nav-item" onclick="open_right_side()">
                                    <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-bars"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!--============ navigation left slidebar================-->
                <aside>
                    <div id="mySidenav" class="sidenav">
                        <div class="side-nav-logo d-flex justify-content-between align-items-center ps-4 pe-3">
                            <figure class="navbar-brand"><a href="index-2.html"><img src="assets/images/Logo.png" alt="img"
                                class="nav-logo"></a></figure>
                            <div class="closebtn" onclick="closeNav()"><i
                                    class="fa-solid fa-square-xmark side-bar-close-btn"></i></div>
                        </div>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index-2.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="feature.html">Feature</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pricing.html">Pricing</a>
                            </li>
                            
                        </ul>
                    </div>
                </aside>
                <!--================== navigation drop search bar================-->
                <div class="search" id="search-bar">
                    <form class="d-flex nav-search">
                        <input type="text" name="search" placeholder="Enter your text">
                        <button class="btn-hover1" type="submit">Search</button>
                    </form>
                    <button id="remove-btn">
                        <i class="fa-solid fa-square-xmark "></i>
                    </button>
                </div>
                <!--=================navigation Right slidebar==================-->
                <section class="right-sidbar" id="right_side">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- site logo -->
                        <a class="p-0 " href="index-2.html"><img src="assets/images/Logo.png" alt="logo"></a>
                        <button class="close_right_sidebar fa-solid fa-xmark" onclick="close_right_sade()"> </button>
                    </div>
                    <p class="mt-4 pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <a href="#" class="btn-hover1">Discover More</a>
                    <hr>
                    <h5 class="mt-4 mb-4">Connected details:</h5>
                    <ul class="d-flex flex-column gap-3">
                        <li>
                            <a href="#"> <i class="fa-solid fa-phone"></i></a>
                            <a href="#"><?php echo e($set->email); ?></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-envelope"></i></a>
                            <a href="#"><?php echo e($set->phone); ?></a>
                        </li>
                        
                    </ul>
                    <span class="d-flex gap-4 mt-4">
                        <a href="#" class="p-0"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="p-0"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="p-0"><i class="fa-brands fa-twitter"></i></a>
                    </span>
                </section>
			</header>
			
			<?php echo $__env->yieldContent('content'); ?>

			<footer class="position-relative">
				<div class="container">
					<h4 class="text-center">SUBSCRIBE OUR NEWSLETTER</h4>
					<P class="text-center pt-2 pb-3">Get latest News and Updates</P>
					<form class="d-flex align-items-center justify-content-center" id="footer-sub2">
						<!-- form Subscribe massage -->
						<div id="Succes-box2"></div>
						<div class="d-flex footer-search">
							<input type="email" name="search" placeholder="Enter your Email" required>
							<button type="submit" class="btn-hover1">Subscribe</button>
						</div>
					</form>
					<div class="footer-logo text-center pb-lg-4 pb-md-3 pb-sm-2 pb-4">
						<!-- footer logo  -->
						<a href="<?php echo e(url('/')); ?>">
							<figure><img src="assets/images/Logo.png" alt="img"></figure>
						</a>
					</div>
					<ul class="d-flex align-items-center justify-content-center">
						<li>
							<a href="#">Feature</a>
						</li>
						<li>
							<a href="#">Pricing</a>
						</li>
						<li>
							<a href="#">About us</a>
						</li>
						<li>
							<a href="#">Faq</a>
						</li>
					</ul>
					<hr>
					<div class="row footer-nav-icon">
						<!-- footer social icon  -->
						<div class="col-lg-3 col-md-3 d-flex align-items-center justify-content-md-start justify-content-sm-center justify-content-center">
							<div
								class="social-icon d-flex gap-2 justify-content-md-start justify-content-sm-center justify-content-center">
								<a href="#"> <i class="fa-brands fa-facebook-f foot-facebook"></i></a>
								<a href="#"> <i class="fa-brands fa-twitter"></i></a>
								<a href="#"> <i class="fa-brands fa-instagram"></i></a>
							</div>
						</div>
						<!-- footer terms privacy  -->
						<div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center">
							<div class=" d-flex gap-3 p-2">
								<a href="#">Terms & Condition</a>
								<a href="#">Privacy Policy</a>
							</div>
						</div>
						<!-- footer logo slider  -->
						<div class="col-lg-3 col-md-3">
							<div class="footer_ispsum_slider">
								<figure><a href="#"><img src="<?php echo e(url('/')); ?>/assets/images/icon/logoipsum-228.png" alt="qr-code"></a>
								</figure>
								<figure><a href="#"><img src="<?php echo e(url('/')); ?>/assets/images/icon/logoipsum-233.png" alt="qr-code"></a>
								</figure>
								<figure><a href="#"><img src="<?php echo e(url('/')); ?>/assets/images/icon/logoipsum-229.png" alt="qr-code"></a>
								</figure>
								<figure><a href="#"><img src="<?php echo e(url('/')); ?>/assets/images/icon/logoipsum-228.png" alt="qr-code"></a>
								</figure>
								<figure><a href="#"><img src="<?php echo e(url('/')); ?>/assets/images/icon/logoipsum-233.png" alt="qr-code"></a>
								</figure>
								<figure><a href="#"><img src="<?php echo e(url('/')); ?>/assets/images/icon/logoipsum-229.png" alt="qr-code"></a>
								</figure>
							</div>
						</div>
					</div>
					<hr>
					<div class="Copyright d-flex justify-content-between flex-wrap dir">
							<p>Copyright © <?php echo e(date('Y')); ?> <?php echo e($set->name); ?>. All Right Reserved.</p>
							<p>Powered by <?php echo e($set->name); ?></p>
						</div>
					</div>
			</footer>
			<!-- ======== End of 1.13. footer section ========  -->
		</div>
		<!-- end site wrapper -->
		<!-- button back to top -->
		<button onclick="scrollToTop()" id="backToTopBtn"><i class="fa-solid fa-arrow-turn-up"></i></button>
	
		<!-- bootstrap min javascript -->
		<script src="<?php echo e(url('/')); ?>/assets/js/javascript-lib/bootstrap.min.js"></script>
		<!-- j Query -->
		<script src="<?php echo e(url('/')); ?>/assets/js/jquery.js"></script>
		<!-- slick slider js -->
		<script src="<?php echo e(url('/')); ?>/assets/js/slick.min.js"></script>
		<!-- main javascript -->
		<script src="<?php echo e(url('/')); ?>/assets/js/custom.js"></script>
		<!-- counter javascript file -->
		<script src="<?php echo e(url('/')); ?>/assets/js/waypoints.min.js"></script>
		<!-- animation from javascript -->
		<script src="<?php echo e(url('/')); ?>/assets/js/aos.js"></script>
		<script>
			AOS.init({
				once: true,
				duration: 1500,
			});
		  </script>
</body>
</html> 
<?php /**PATH C:\wamp64\www\myprojects\gurupay\resources\views/main.blade.php ENDPATH**/ ?>