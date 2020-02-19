<head>
    <title>Ticketing Tool | Registration</title>

    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/animate-css/vivify.min.css">

    <link rel="stylesheet" href="assets/css/site.min.css">
</head>
<?php require"header.php"; ?>
<style>
    .navbar{
        background-color: white;
    }
</style>

<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>

<div class="pattern">
    <span class="red"></span>
    <span class="indigo"></span>
    <span class="blue"></span>
    <span class="green"></span>
    <span class="orange"></span>
</div>

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <br><br> <br><br>
            <div class="card">
                <div class="body">
                    <p class="lead">Create an Account</p>
                    <form class="form-auth-small m-t-20" autocomplete="off" method="post">
                        
                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <input type="text" class="form-control" placeholder="First Name **" name="fname" required >
                            </div>
                            <div class="col-6 col-lg-3">
                                <input type="text" class="form-control" placeholder="Last Name" name="lname">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="text" class="form-control" placeholder="Email Id **" name="email1" required>
                            </div>
                            <div class="col-6 col-lg-3">
                                <select class="form-control" name="gender" required>
                                    <option value="">Gender **</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-2 col-lg-1">
                                <h6 style="font-size:14px;">Date of birth</h6>
                            </div>
                            <div class="col-4 col-lg-2">
                                <input type="date" class="form-control" placeholder="Date of birth" name="dob">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="text" class="form-control" placeholder="Mobile Number**" name="mobile1" required>
                            </div>
                            
                            <div class="col-12 col-lg-6">
                                <input type="text" class="form-control" placeholder="Alternate Email Id" name="email2">
                            </div>
                            
                            <div class="col-12 col-lg-6">
                                <input type="text" class="form-control" placeholder="Alternate Mobile Number" name="mobile2">
                            </div>
                            
                            
                            <div class="col-12 col-lg-6">
                                <input type="url" class="form-control" placeholder="Website Link" name="weblink">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="url" class="form-control" placeholder="fb link" name="fblink">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="text" class="form-control" placeholder="twiter link" name="tlink">
                            </div>
                            
                            <div class="col-12 col-lg-6">
                                <input type="url" class="form-control" placeholder="insta link" name="Ilink">
                            </div>
                            
                            <div class="col-12 col-lg-6">
                                <input type="url" class="form-control" placeholder="github link" name="glink">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="password" class="form-control" placeholder="Password**" name="pass" required minlength="6" maxlength="24">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="text" class="form-control" placeholder="Company Name**" name="cname" required>
                            </div>
                            <div class="col-6 col-lg-3">
                                <input type="text" class="form-control" placeholder="Country**" name="cntry" required>
                            </div>
                            <div class="col-6 col-lg-3">
                                <input type="text" class="form-control" placeholder="State**" name="state" required>
                            </div>
                            <div class="col-12 col-lg-6">
                                <textarea rows="4" class="form-control" placeholder="Address**" name="adr" required></textarea>
                            </div>
                            <div class="col-12 col-lg-6">
                                <textarea rows="4" class="form-control" placeholder="Short Description" name="sdes"></textarea>
                            </div>
                            <div class="col-12 col-lg-12" align="center">
                                <div class="row" align="center">
                                    <div class="col-0 col-lg-4"></div>
                                    <div class="col-12 col-lg-4" align="center">
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-round btn-block" name="create">Create</button>
                                        <div class="bottom">
                                            <span>I have an account? <a href="login.php">Login</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                    </form>
                    
                </div>
                <div id="particles-js"></div>
            </div>
            
        </div>
    </div>
    
</div>

<br><br><br>
<?php require"footer.php"; ?>

<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>

<?php
if(isset($_SESSION['user'])){
    echo "<script>window.location = 'user/'; </script>";
}
if(isset($_POST['create'])){
    include "connection.php";
    $i = 0;
    if(preg_match("/^([a-zA-Z']+)$/",$_POST['fname'])){
        $fname = $_POST['fname'];
    } else{
        $i += 1;
    }
    
    if(preg_match("/^([a-zA-Z']+)$/",$_POST['lname'])){
        $lname = $_POST['lname'];
    } else{
        $i += 1;
    }
    
    if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$_POST['email1'])){
       $email1 = $_POST['email1'];
    } else{
        $i += 1;
    }
    
    $email2 = $_POST['email2'];
    if(strlen($_POST['mobile1'])==10){
        $mobile1 = $_POST['mobile1'];
    }else{
        $i += 1;
    }
    
    $mobile2 = $_POST['mobile2'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $weblink = $_POST['weblink'];
    $fblink = $_POST['fblink'];
    $ilink = $_POST['Ilink'];
    $tlink = $_POST['tlink'];
    $github = $_POST['glink'];
    if(strlen($_POST['pass'])>=6 || strlen($_POST['pass'])<=24){
        $password = md5(md5($_POST['pass']));
    }else{
        $i += 1;
    }
    
    $cmpy = $_POST['cname'];
    $cntry = $_POST['cntry'];
    $state = $_POST['state'];
    $adr = $_POST['adr'];
    $sdes = $_POST['sdes'];
    $age =0;
    
    if($i == 0){
        if($row = mysqli_query($con, "insert into user_account (`type`, `fname`, `lname`, `gender`, `age`, `dob`, `email`, `email-2`, `mobile`, `mobile-2`, `website`, `company`, `country`, `state`, `adr`, `short_desc`, `twiter`, `fb`, `github`, `insta`, `password`) values('user','$fname','$lname','$gender','$age','$dob','$email1','$email2','$mobile1','$mobile2','$weblink','$cmpy','$cntry','$state','$adr','$sdes','$tlink','$fblink','$github','$ilink','$password')")or die(mysql_error())){

            echo "<script> alert('Sucessfully register'); </script>";
      
        }else{
            echo "<script> alert('Something went wrong!!!'); </script>";    
        
        }
    
        echo "<script>window.location = 'register.php'; </script>";
    
        unset($_POST);
    }else{
        echo "<script> alert('Please provide correct details!!!'); </script>";    
    }
    
    mysqli_close($con);
}
?>
