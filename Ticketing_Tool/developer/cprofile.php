<div id="main-content" align="center">
    <div class="container mt-5">
        <div class="auth-main particles_js">
            <div class="auth_div vivify popIn">
                
        <div class="card" style="margin-top:-100px;">
            <div class="body">
                <p class="lead">Create an Account</p>
                <form class="form-auth-small m-t-20" method="post" autocomplete="off">
                    <div class="form-group">
                        <select name="team" class="form-control">
                            <option value="">---Select Team---</option>
                            <option value="Backend"> Backend</option>
                            <option value="Frontend"> Frontend</option>
        	
                            <option value="Digital Marketing"> Digital Marketing</option>
                            <option value="Planning">Planning </option>
                            <option value="Python">Python</option>
                            <option value="Andriod Developement"> Andriod Developement</option>
                            <option value="Program Manager"> Program Manager</option>
                            <option value="Leadership team">Leadership team </option>
                        </select>
                    </div>
                     <div class="form-group">
                         <select name="post" class="form-control">
                            <option value="Member">Member</option>
                            <option value="Leader">Leader</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Full Name</label>
                        <input type="text" class="form-control round" id="signin-email" placeholder="First Name" name="fname">
                    </div>
                    
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Email Id</label>
                        <input type="email" class="form-control round" id="signin-email" placeholder="Email Id" name="email1" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Mobile Number</label>
                        <input type="text" class="form-control round" id="signin-email" name="mobile1" placeholder="Mobile Number" required>
                    </div>                    
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Web Link</label>
                        <input type="email" class="form-control round" id="signin-email" name="weblink" placeholder="Web Link">
                    </div>
                
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Password</label>
                        <input type="password" class="form-control round" id="signin-email" name="pass" placeholder="Password" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-round btn-block" name="create">Create</button>
                   
                </form>
            </div>
        </div>
        
    </div>
    <div id="particles-js"></div>
</div>

<?php
if(isset($_POST['create'])){
    include "../connection.php";
    $i = 0;
    if(preg_match("/^([a-zA-Z']+)$/",$_POST['fname'])){
        $fname = $_POST['fname'];
    } else{
        $i += 1;
    }
    
    if(strlen($_POST['mobile1'])==10){
        $mobile1 = $_POST['mobile1'];
    }else{
        $i += 1;
    }
    
    $weblink = $_POST['weblink'];
    
    if(strlen($_POST['pass'])>=6 || strlen($_POST['pass'])<=24){
        $password = md5(md5($_POST['pass']));
    }else{
        $i += 1;
    }
    
    
    if($i == 0){
        if($row = mysqli_query($con, "insert into user_account (`type`, `fname`, post, `email`, `mobile`, `website`,  `password`) values('developer','$fname','".$_POST['post']."','$email1','$mobile1','$weblink','$password')")or die(mysql_error())){
            mysqli_query($con, "INSERT INTO `developer_profile`(`user_id`, `Team`, `Post`) VALUES ('$mobile1','".$_POST['team']."','".$_POST['post']."')");
            echo "<script> alert('Sucessfully register'); </script>";
      
        }else{
            echo "<script> alert('Something went wrong!!!'); </script>";    
        
        }
    
        echo "<script>window.location = '?create_profile'; </script>";
    
        unset($_POST);
    }else{
        echo "<script> alert('Please provide correct details!!!'); </script>";    
    }
    
    mysqli_close($con);
}
?>
