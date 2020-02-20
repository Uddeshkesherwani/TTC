harshil
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Ticketing Tool</title>
<link rel="icon" href="assets/image/ticketing_TOOL_LOGO.png" type="image/x-icon">

<!-- Core css file -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<!-- Plugins CSS file -->
<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">

<!-- Project css with  Responsive-->
<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>
<body>
<header id="header-wrap">
   <?php require "header.php"; ?>
    <div id="hero-area" class="hero-area-bg particles_js">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="contents text-center">
                        <h2 class="head-title wow fadeInUp">Awesome App for Your Modern Lifestyle<br>
                            For Business Task Handling</h2>
                        <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                            <?php
                            if(!isset($_SESSION['user'])){
                                echo "<a href='register.php' class='btn btn-common'>Registration</a>
                                <a href='login.php' class='btn btn-common blush'>Login</a>";
                            }else{
                                if($_SESSION['type'] == 'user'){
                                    echo "<a href='user/' class='btn btn-common blush'>Dashboard</a>";
                                }
                                if($_SESSION['type'] == 'developer'){
                                    echo "<a href='developer' class='btn btn-common blush'>Dashboard</a>";
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                    <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                        <img class="img-fluid" src="assets/image/hero-1.png" alt="Display">
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
    <!-- Hero Area End -->

</header>
    
<section id="services" class="section-padding">
    <div class="container">
        <div class="section-header text-center wow fadeInDown" data-wow-delay="0.3s">
            <h2 class="section-title">Our Services</h2>
            <p>Its our services</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon">
                        <i class="lni-pencil-alt"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="user/?request">Oreder Something</a></h3>
                        <p>Get your required services</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="icon">
                        <i class="lni-layers"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="user/index.php?status_list">Knowledge Base</a></h3>
                        <p>You can access your current request.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInUp" data-wow-delay="0.9s">
                    <div class="icon">
                        <i class="lni-cog"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="user/index.php?create_new_incident">Get Help</a></h3>
                        <p>Create your ticket</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInUp" data-wow-delay="1.2s">
                    <div class="icon">
                        <i class="lni-pencil"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#">Community</a></h3>
                        <p>Read blogs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInUp" data-wow-delay="1.5s">
                    <div class="icon">
                        <i class="lni-briefcase"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="user/index.php?pending_approval">My Approvals</a></h3>
                        <p>Your approval is very important to us.</p>
                    </div>
                </div>
            </div>            
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInUp" data-wow-delay="1.8s">
                    <div class="icon">
                        <i class="lni-bar-chart"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="user/index.php?status_list">Current Status</a></h3>
                        <p>you can check your request status.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<?php require "team.php"; ?>
    
<div id="clients" class="section-padding">
    <div class="container">
        <div class="row text-align-">
            <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="client-item-wrapper">
                    <img class="img-fluid" src="assets/img/clients/img1.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                <div class="client-item-wrapper">
                    <img class="img-fluid" src="assets/img/clients/img2.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
                <div class="client-item-wrapper">
                    <img class="img-fluid" src="assets/img/clients/img3.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
                <div class="client-item-wrapper">
                    <img class="img-fluid" src="assets/img/clients/img4.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php 
    require "conatct_us.php"; 
    require "footer.php"; 
?>
    
<a href="#" class="back-to-top"><i class="lni-arrow-up"></i></a>

<div id="preloader">
    <div class="loader">
        <img src="assets2/images/icon.svg" width="40" height="40" alt="Oculux">
        <p>Please wait...</p>
    </div>
</div>
    
<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/scrolling-nav.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.nav.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/particlesjs.js"></script>
</body>
</html>