<?php

if(isset($_POST['name'])){
    include "../connection.php";

    $row = "select fname, lname, mobile from user_account LEFT JOIN developer_profile on developer_profile.user_id=user_account.mobile WHERE developer_profile.Team = '".$_POST['posts']."' and user_account.type='developer'";

    $row = $con->query($row);
    $option = "<option value=''>---Select---</option>";

    while ($obj = $row -> fetch_object()) {
    
        $option .= "<option value='$obj->mobile'>$obj->fname $obj->lname</option>";
    
    }

    mysqli_close($con);

    print_r($option);
}

if(isset($_POST['name2'])){
    include "../connection.php";
    if($_POST['t'] == 'a')
        $row = "UPDATE incident set assign_grp='".$_POST['team']."', assign_person='".$_POST['person']."' where id='".$_POST['id']."'";
    else if($_POST['t'] == 'b')
        $row = "UPDATE request set assign_grp='".$_POST['team']."', assign_name='".$_POST['person']."' where id='".$_POST['id']."'";
    
    $row = $con->query($row);
    
    mysqli_close($con);
}

?>