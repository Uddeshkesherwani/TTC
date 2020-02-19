<?php
session_start();
if(!isset($_SESSION['user'])){
    echo "<script>window.location = '../index.php'; </script>";
}
else if($_SESSION['type'] == 'developer'){
    echo "<script>
    alert('you are developer !!!');
    window.location = '../developer/'; 
    </script>";
}
?>
<!doctype html>
<html lang="en">
<head>
<title>Ticketing Tool</title>
<meta charset="utf-8">

<link rel="stylesheet" href="../assets2/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets2/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets2/vendor/animate-css/vivify.min.css">

<link rel="stylesheet" href="../assets2/vendor/c3/c3.min.css"/>
<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="../assets2/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="../assets2/vendor/jvectormap/jquery-jvectormap-2.0.3.css">

<link rel="stylesheet" href="../html/assets/css/site.min.css">
<link rel="stylesheet" href="../assets/vendor/morrisjs/morris.css" />
    
    <style>
        body{
            user-select: none;
        }
    </style>
    
</head>
<body class="theme-cyan font-montserrat light_version">

<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>

<div id="wrapper">
    <nav class="navbar top-navbar">
        <div class="container-fluid">

            <div class="navbar-left">
                        <div class="navbar-btn">
                    <a href="index.php"><img src="../assets/image/ticketing_TOOL_LOGO.png" alt="Ticketing Tool" class="img-fluid logo" style="max-height:100px; max-width:100px;"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                        <ul class="nav navbar-nav">
                            <li><h4 style="margin:20px; font-weight:bolder;">User Portal</h4></li>
                            
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <i class="icon-envelope"></i>
                                        <span class="notification-dot bg-green">4</span>
                                    </a>
                                    <ul class="dropdown-menu right_chat email vivify fadeIn">
                                        <li class="header green">You have 4 New eMail</li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="avtar-pic w35 bg-red"><span>FC</span></div>
                                                    <div class="media-body">
                                                        <span class="name">James Wert <small class="float-right text-muted">Just now</small></span>
                                                        <span class="message">Update GitHub</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="avtar-pic w35 bg-indigo"><span>FC</span></div>
                                                    <div class="media-body">
                                                        <span class="name">Folisise Chosielie <small class="float-right text-muted">12min ago</small></span>
                                                        <span class="message">New Messages</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Louis Henry <small class="float-right text-muted">38min ago</small></span>
                                                        <span class="message">Design bug fix</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media mb-0">
                                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Debra Stewart <small class="float-right text-muted">2hr ago</small></span>
                                                        <span class="message">Fix Bug</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="icon-bell"></i>
                                    <span class="notification-dot bg-azura">4</span>
                                    </a>
                                    <ul class="dropdown-menu feeds_widget vivify fadeIn">
                                        <li class="header blue">You have 4 New Notifications</li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="feeds-left bg-red"><i class="fa fa- check"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">9:10 AM</small></h4>
                                                    <small>WE have fix all Design bug with Responsive</small>
                                                </div>
                                            </a>
                                        </li>                               
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="feeds-left bg-info"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-info">New User <small     class="float-right text-muted">9:15 AM</small></h4>
                                                <small>I feel great! Thanks team</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="feeds-left bg-orange"><i    class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small class="float-right     text-muted">9:17 AM</small></h4>
                                                <small>Your connection is not private</small>
                                            </div>
                                        </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="feeds-left bg-green"><i class="fa fa-thumbs-o-up"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-success">2 New Feedback <small class="float-right text-muted">9:22 AM</small></h4>
                                                    <small>It will give a smart finishing to your site</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                     
                        </ul>
                    </div>
            
            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="logout.php" class="icon-menu">Logout <i class="icon-power"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
    </nav>
       
     <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="index.php"><img src="../assets/image/ticketing_TOOL_LOGO.png" alt="Ticketing Tool" style="max-width:100%;" class="img-fluid"></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="../assets2/images/user.png" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Satyam Agrawal</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                        <li><a href="?profile"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="?message"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="?setting"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>                
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    
                    <li>
                        <a href="index.php" class="a"><i class="icon-pie-chart"></i><span>Dashboard</span></a>
                    </li>
                    
                    <li class="header">Features</li>
                    
                    <li>
                        <a href="" class="has-arrow"><i class="icon-pie-chart"></i><span>Request</span></a>
                        <ul>
                            <li><a href="?request">Create new request</a></li>
                            <li><a href="?urequest">update existing request</a></li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="" class="has-arrow"><i class="icon-pie-chart"></i><span>Help</span></a>
                        <ul>
                            <li><a href="?create_new_incident">Create New Incident</a></li>
<!--                            <li><a href="">Create New Problem </a></li>-->
                        </ul>
                    </li>
                   
                    <li>
                        <a href="" class="has-arrow"><i class="icon-pie-chart"></i><span>Status</span></a>
                        <ul>
                            <li><a href="?status_incident">My Open Incident</a></li>
                            <li><a href="?status_request">My Open Request </a></li>
                            <li><a href="?status_list">All History</a></li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="" class="has-arrow"><i class="icon-pie-chart"></i><span>My Approval</span></a>
                        <ul>
                            <li><a href="?pending_approval">Pending  <span class="notification bg-azura">2</span> </a> </li>
                            <li><a href="?all_approval">History</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>     
        </div>
    </div>
    <?php
    if(isset($_GET[''])){ require "dashboard.php"; } 
    else if(isset($_GET['all_approval'])){ require "his_app.php"; } 
    else if(isset($_GET['pending_approval'])){ require "my_approvals.php"; } 
    else if(isset($_GET['profile'])){ require "page-profile.php"; } 
    else if(isset($_GET['setting'])){ require "setting.php"; } 
    else if(isset($_GET['status_list'])){ require "current_status.php"; } 
    else if(isset($_GET['status_incident'])){ require "my_open_incident.php"; } 
    else if(isset($_GET['status_request'])){ require "my_open_request.php"; } 
    else if(isset($_GET['create_new_incident'])){ require "create_new_incident.php"; } 
    else if(isset($_GET['message'])){ require "message.php"; } 
    else if(isset($_GET['request'])){ require "create_request.php"; } 
    else if(isset($_GET['urequest'])){ require "create_new_request_update.php"; } 
//    else if(isset($_GET[''])){ require ".php"; } 
//    else if(isset($_GET[''])){ require ".php"; } 
//    else if(isset($_GET[''])){ require ".php"; } 
    else { require "dashboard.php"; } 
    ?>
    </div>
    </body>
            

<script src="../html/assets/bundles/libscripts.bundle.js"></script>
<script src="../html/assets/bundles/vendorscripts.bundle.js"></script>
<script src="../html/assets/bundles/c3.bundle.js"></script>
<script src="../html/assets/bundles/mainscripts.bundle.js"></script>
    <script src="../assets/bundles/knob.bundle.js"></script>
    <script src="../assets/js/index6.js"></script>
        
<script src="../assets/js/index6.js"></script>