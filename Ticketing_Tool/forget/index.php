<head>
    <title>Ticketing Tool | Login</title>

    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/animate-css/vivify.min.css">

    <link rel="stylesheet" href="../assets/css/site.min.css">
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
                <p class="lead">Forget Password</p>
                <form class="form-auth-small m-t-20" action="index.html">
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Email</label>
                        <input type="email" class="form-control round" id="signin-email" placeholder="User Id">
                    </div>
                    <button type="submit" class="btn btn-primary btn-round btn-block">Forget Password</button>
                    <div class="bottom">
                        <span>Don't have an account? <a href="../register.php">Register</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>

<?php require"footer.php"; ?>

<script src="../assets/bundles/libscripts.bundle.js"></script>    
<script src="../assets/bundles/vendorscripts.bundle.js"></script>
<script src="../assets/bundles/mainscripts.bundle.js"></script>
