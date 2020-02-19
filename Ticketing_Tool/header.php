<?php session_start(); ?>
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

<header id="header-wrap" class="header">
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                    aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                </button>
                <a href="#" class="navbar-brand"><img src="assets/image/ticketing_TOOL_LOGO.png" style="max-height:70px; max-width:120px;" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
                    <?php 
                    if(!isset($_SESSION['user'])){
                        echo "<li class='nav-item'><a class='nav-link' href='register.php'>Registration</a></li>";
                    }
                    ?>
                    
                </ul>
                <div class="btn-sing float-right">
                    <?php 
                    if(!isset($_SESSION['user'])){
                        echo "<a class='btn btn-border' href='login.php'>Sign In</a>";
                    }else{
                        echo "<a class='btn btn-border' href='user/'>Dashboard</a>";
                    }
                    ?>
                    
                </div>
            </div>
        </div>

        <ul class="mobile-menu navbar-nav">
            <li><a class="page-scroll" href="index.php">Home</a></li>
            <li><a class="page-scroll" href="index.php#services">Services</a></li>
            <li><a class="page-scroll" href="index.php#team">Team</a></li>
            <li><a class="page-scroll" href="index.php#contact">Contact</a></li>
            <li><a class="page-scroll" href="register.php">Registration</a></li>
            <li><a class="page-scroll" href="login.php">Login</a></li>
        </ul>

    </nav>
</header>
 