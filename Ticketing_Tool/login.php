<head>
    <title>Ticketing Tool | Login</title>

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

<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">

        <div class="card">
            <div class="body">
                <p class="lead">Login to your account</p>
                <form class="form-auth-small m-t-20" method="post">
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Email</label>
                        <input type="text" name="user_id" class="form-control round" id="signin-email" placeholder="User Id" required value="<?php if(isset($_COOKIE['user_id'])) { echo $_COOKIE['user_id']; } ?>">
                    </div>
                    <div class="form-group">
                        <label for="signin-password" class="control-label sr-only">Password</label>
                        <input type="password" name="password" class="form-control round" id="signin-password" placeholder="Password" required>
                    </div>
                    <div class="form-group clearfix">
                        <label class="fancy-checkbox element-left">
                            <input type="checkbox" name="remember">
                            <span>Remember me</span>
                        </label>								
                    </div>
                    <button type="submit" class="btn btn-primary btn-round btn-block" name="login">LOGIN</button>
                    <div class="bottom">
                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="forget/index.php">Forgot password?</a></span>
                        <span>Don't have an account? <a href="register.php">Register</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>

<?php require"footer.php"; ?>

<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>


<?php
if(isset($_SESSION['user'])){
    echo "<script>window.location = 'user/'; </script>";
}
if(isset($_POST['login'])){
    include "connection.php";
    
    if(isset($_POST['remember'])){
        setcookie('user_id', $_POST['user_id'], time() + (86400), "/");
    }
    $user_id = $_POST['user_id'];
    $password = md5(md5($_POST['password']));
    
    $my_res = mysqli_query($con, "select count(*) as user from user_account where mobile='$user_id' and password='$password' and type='user' ");
    
    $fetch = mysqli_fetch_array($my_res);
    
    if($fetch['user'] == 1){
        $_SESSION['user'] = $user_id;
        $_SESSION['type'] = 'user';
        echo "<script>window.location = 'user/'; </script>";
    }else{
        echo "<script> alert('Invalid Detail !!! '); </script>";
    }
    
    mysqli_close($con);
}
?>
