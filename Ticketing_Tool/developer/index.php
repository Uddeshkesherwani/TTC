<?php
session_start();
if(!isset($_SESSION['user'])){
    echo "<script>window.location = 'login.php'; </script>";
}
else if($_SESSION['type'] == 'user'){
    echo "<script>
    alert('you are user not developer !!!');
    window.location = '../user/'; 
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
        .metismenu:hover{
            color: red;
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
                            <li><h4 style="margin:20px; font-weight:bolder;">Developer Portal</h4></li>
                            
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
                <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>
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
<!--                                <li><a href="?message"><i class="icon-envelope-open"></i>Messages</a></li>-->
<!--                                <li><a href="?setting.php"><i class="icon-settings"></i>Settings</a></li>-->
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="icon-power"></i>Logout</a></li>
                            </ul>
                        </div>                
                    </div> 
                    
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu">
                            
                            <li>
                                <a href="../index.php" class="a"><i class="icon-pie-chart"></i><span>Index</span></a>
                            </li>
                            
                            <li>
                                <a href="index.php" class="a"><i class="icon-pie-chart"></i><span>Dashboard</span></a>
                            </li>
                    
                            <li class="header">Features</li>
                    
                            <li>
                                <a href="#incident" class="has-arrow"><i class="icon-pencil"></i><span>Incident</span></a>
                                <ul>
                                    <li><a href="?create_new_incident">Create New Incident</a></li>
                                    <li><a href="?create_major_incident">Create Major Incident</a></li>
                                    <li><a href="?assigned_to_me">Assigned to me</a></li>
                                    <li><a href="?my_open_incident">My Open Incident</a></li>
                                    <li><a href="?open_un">Open - unassignment</a></li>
                                    <li><a href="?group_problem">Group problem</a></li>
                                    <li><a href="?activities">Activities</a></li>
                                </ul>
                            </li>
                    
                            <li>
                                <a href="" class="has-arrow"><i class="icon-pencil"></i><span>Request</span></a>
                                <ul>
                                    <li><a href="?create_new_request">Create New    Request</a></li>
                                    <li><a href="?assign">Assigned to me</a></li>
                                    <li><a href="?group_work">Group Work</a></li>
                                    <li><a href="?my_hold">My Hold Task</a></li>
                                    <li><a href="?process_task">In Process Task</a></li>
                                    <li><a href="?my_c_task">My Completed Task</a></li>
                                </ul>
                            </li>
                    
                            <li>
                                <a href="" class="has-arrow"><i class="icon-pencil"></i><span>Planning</span></a>
                                <ul>
                                    <li><a href="?assign_plan">Assign work</a></li>
<!--                                    <li><a href="?team_work">Create a team task</a></li>-->
                                    <li><a href="?cancel_task">Cancel any task</a></li>
                                </ul>
                            </li>
                    
                            <li>
                                <a href="" class="has-arrow"><i class="icon-pencil"></i><span>Configure</span></a>
                                <ul>
                                    <li><a href="?create_profile">Create Developer Profile</a></li>
                                    <li><a href="?block_developer">Block Developer Profile</a></li>
                                    <li><a href="?unblock_developer">Unblock Developer Profile</a></li>
                                </ul>
                            </li>
                    
                        </ul>
                    </nav>     
                </div>
            </div>
    
            <?php
            if(isset($_GET[''])){ require "dashboard.php"; } 
            else if(isset($_GET['create_new_incident'])){ require "CreateIncident.php"; } 
            else if(isset($_GET['create_major_incident'])){ require "major_incident.php"; } 
            else if(isset($_GET['assigned_to_me'])){ require "assign.php"; } 
            else if(isset($_GET['my_open_incident'])){ require "my_open_assign.php"; } 
            else if(isset($_GET['open_un'])){ require "open_unassign.php"; } 
            else if(isset($_GET['group_problem'])){ require "group_task.php"; } 
            else if(isset($_GET['activities'])){ require "all_activity.php"; } 
            else if(isset($_GET['create_new_request'])){ require "create_request.php"; } 
            else if(isset($_GET['assign'])){ require "assign_request.php"; } 
            else if(isset($_GET['group_work'])){ require "group_task_request.php"; } 
            else if(isset($_GET['my_hold'])){ require "my_hold_request.php"; } 
            else if(isset($_GET['process_task'])){ require "in_process_task.php"; } 
            else if(isset($_GET['my_c_task'])){ require "my_c_task.php"; } 
            else if(isset($_GET['assign_plan'])){ require "plan_assign.php"; } 
            else if(isset($_GET['team_work'])){ require ""; } 
            else if(isset($_GET['cancel_task'])){ require "plan_cancel.php"; } 
            else if(isset($_GET['profile'])){ require "profile.php"; } 
            else if(isset($_GET['setting'])){ require "setting.php"; } 
            else if(isset($_GET['create_profile'])){ require "cprofile.php"; } 
            else if(isset($_GET['block_developer'])){ require "dev_list.php"; } 
            else if(isset($_GET['unblock_developer'])){ require "dev_b_list.php"; } 
            else if(isset($_GET['xy'])){ require "open_single.php"; } 
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
</html>