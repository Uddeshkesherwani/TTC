<?php

include "../connection.php";
$query2 = mysqli_query($con, "select * from user_account where type='".$_SESSION['type']."' and mobile='".$_SESSION['user']."'");
$row2 = mysqli_fetch_array($query2);

mysqli_close($con);

?>
<div id="main-content">
    <div class="container">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12"><h2>User Profile</h2> </div> 
            </div>
        </div>
        <div class="row clearfix">  
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="card">
                        <div class="body">
                            <small class="text-muted">Address: </small>
                            <p>
                                <?php echo $row2['adr']; ?>
                                <?php echo $row2['state']; ?>
                                <?php echo $row2['country']; ?>
                            </p>
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p>
                                <?php echo $row2['email']; ?>
                                <?php echo $row2['email-2']; ?>
                            </p>                            
                            <hr>
                            <small class="text-muted">Mobile: </small>
                            <p>
                                <?php echo $row2['mobile']; ?>
                                <?php echo $row2['mobile-2']; ?>
                            </p>
                            <hr>
                            <small class="text-muted">Birth Date: </small>
                            <p class="m-b-0"><a href=""><i class="fa fa-calendar"></i> <?php echo $row2['dob']; ?></a></p>
                            <hr>
                            <small class="text-muted">Social: </small>
                            <p><i class="fa fa-twitter m-r-5"></i> <?php echo $row2['twiter']; ?></p>
                            <p><i class="fa fa-facebook  m-r-5"></i> <?php echo $row2['fb']; ?></p>
                            <p><i class="fa fa-github m-r-5"></i> <?php echo $row2['github']; ?></p>
                            <p><i class="fa fa-instagram m-r-5"></i> <?php echo $row2['insta']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-7">
                    <form method="post">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-12">                                            
                                    <div class="form-group">                     
                                        <input type="text" class="form-control" value="PROID00<?php echo $row2['profile_id']; ?>" disabled placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" value="<?php echo $row2['email']; ?>" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number" value="<?php echo $row2['mobile']; ?>" name="mobile">
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-12">
                                    
                                    <div class="form-group">                         <input type="text" class="form-control" placeholder="First Name" value="<?php echo $row2['fname']; ?>" name="fname">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">                                                
                                        <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $row2['lname']; ?>" name="lname">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" name="gender">
                                            <option value="">-- Select Gender --</option>
                                            <option value="Male" <?php if($row2['gender']==='Male') echo 'selected="selected"';?>>Male</option>
                                            <option value="Female" <?php if($row2['gender']==='Female') echo 'selected="selected"';?>>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar"></i></span>
                                            </div>
                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Birthdate" value="<?php echo $row2['dob']; ?>" name="dob">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-globe"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="http://" value="<?php echo $row2['website']; ?>" name="website">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="State/Province" value="<?php echo $row2['country']; ?>" name="country">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="State/Province" value="<?php echo $row2['state']; ?>" name="state">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="City" value="<?php echo $row2['city']; ?>" name="city">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">                                                
                                        <textarea rows="1" type="text" class="form-control" placeholder="Company Name" name="company"><?php echo $row2['company']; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">                                                
                                        <textarea rows="3" type="text" class="form-control" placeholder="Address" name="adr"><?php echo $row2['adr']; ?></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">                                                
                                        <textarea rows="5" type="text" class="form-control" placeholder="Short Description" name="sdes"><?php echo $row2['short_desc']; ?></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <button type="submit" name="myform1" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;
                        </div>
                    </div>
                    </form>
                    <div class="card">
                        <div class="header">
                            <h2>Account Data</h2>
                        </div>
                        <div class="body">
                            <form method="post">
                            <div class="row clearfix">                       
                                <div class="col-lg-12 col-md-12">
                                    <hr>
                                    <h6>Change Password</h6>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Current Password" name="cpass" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="New Password" name="npass" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm New Password" name="rpass" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-round btn-primary" name="myform2">Update</button> &nbsp;&nbsp;
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
if(isset($_POST['myform1'])){
    include "../connection.php";

if(mysqli_query($con, "UPDATE `user_account` SET `fname`='".$_POST['fname']."',`lname`='".$_POST['lname']."',`gender`='".$_POST['gender']."',`dob`='".$_POST['dob']."',`email`='".$_POST['email']."',`mobile`='".$_POST['mobile']."',`website`='".$_POST['website']."',`company`='".$_POST['company']."',`country`='".$_POST['country']."',`state`='".$_POST['state']."',`city`='".$_POST['city']."',`adr`='".$_POST['adr']."',`short_desc`='".$_POST['sdes']."' where mobile='".$_SESSION['user']."' and type='".$_SESSION['type']."' "))
    echo "<script>window.location = 'index.php?profile'; </script>";

mysqli_close($con);
}

if(isset($_POST['myform2'])){
     
    if($_POST['npass'] == $_POST['rpass']){
        include "../connection.php";
        $password1 = md5(md5($_POST['cpass']));
        $password = md5(md5($_POST['npass']));
        $req = "UPDATE `user_account` SET password='".$password."' where mobile='".$_SESSION['user']."' and type='".$_SESSION['type']."' and password='".$password1."' ";
        
        if ($con->query($req) === TRUE) {
            echo "<script>alert('Record updated successfully');</script>";
            echo "<script>window.location = 'index.php?profile'; </script>";
        }
        else{
            echo "<script>alert('Something went wrong!!!');</script>";
        }
        mysqli_close($con);
        
    }else{
        echo "<script>alert('Invalid New Password = Confirm Password');</script>";
    }
}
?>