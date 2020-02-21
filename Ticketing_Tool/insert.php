<?php

if(isset($_POST['name'])){
    
    include "connection.php";
    
    $sql = "insert into contact_us (Name,Email,Subject,Your_message,date) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['msg_subject']."','".$_POST['message']."','".date("Y-m-d h:i:s")."')";
    
//    $con -> query($sql);
    
    if(mysqli_query($con,$sql)){
        echo "Seccessfully Record Saved!!";
    }else{
        echo "Something went wrong";
    }
    
    mysqli_close($con);
   
    
}

?>