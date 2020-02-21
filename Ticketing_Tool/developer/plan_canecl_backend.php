<?php

if(isset($_POST['name'])){
    include "../connection.php";
    if($_POST['t'] == 'a')
        $row = "DELETE FROM `incident` where id='".$_POST['id']."'";
    else if($_POST['t'] == 'b')
        $row = "DELETE FROM `request` where id='".$_POST['id']."'";
    
    $row = $con->query($row);
    
    mysqli_close($con);
}

if(isset($_POST['name2'])){
    include "../connection.php";
    $data = "";
    $row = $con->query("select * from incident where assign_person = ''");
                                            
    while ($obj = $row -> fetch_object()) {
        
        $data .= " <tr>
        <td><a href='?xy&id=$obj->id'>INC000$obj->id</a></td>
        <td>$obj->contact_name</td>
        <td>$obj->priority</td>
        <td>$obj->category</td>
        <td>$obj->date</td>
        <td>$obj->assign_grp</td>
        <td>$obj->assign_person</td>
        <td><button style='background-color:grey; color:white; border:1px; padding:10px; font-weight:bolder;' onclick=canCels('a','$obj->id')>Cancel Task</button></td>
        </tr>";
            
    }
                                            
    $row = $con->query("select * from request where assign_name = ''");
    while ($obj = $row -> fetch_object()) {
        
        $data .= " <tr>
        <td><a href='?xy&id=$obj->id'>REQ000$obj->id</a></td>
        <td>$obj->contact_name</td>
        <td>$obj->priority</td>
        <td>$obj->category</td>
        <td>$obj->date</td>
        <td>$obj->assign_grp</td>
        <td>$obj->assign_name</td>
        <td><button style='background-color:grey; color:white; border:1px; padding:10px; font-weight:bolder;' onclick=canCels('b','$obj->id')>Cancel Task</button></td></tr>";
            
    }
                                            
    mysqli_close($con);
    echo $data;
}