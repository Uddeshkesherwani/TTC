 <?php 
                                           
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
    <td>
    <select style='max-width:100px;' onchange=person('per".$obj->id."','data".$obj->id."') id='data".$obj->id."' required>
    <option value=>Select Team</option>
    <option value='Backend'>Backend</option>
    <option value='Frontend'>Frontend</option>
    <option value='Digital Marketing'>Digital Marketing</option>
    <option value='Planning'>Planning</option>
    <option value='Python'>Python</option>
    <option value='Android App Development'>Android App Development</option>
    <option value='Program Manager'>Program Manager</option>
    <option value='Leadership Team'>Leadership Team</option>
    </select>
    </td>
    <td>
    <select style='min-width:100px;max-width:100px;' id='per".$obj->id."' required>
    <option value=''>Select Person</option>
    </select>
    </td>
    <td><button type='submit' onclick=updates('$obj->id','per".$obj->id."','data".$obj->id."')>Update</button></td>
    </tr>";

}

mysqli_close($con);
echo $data;
?>
                                        
<?php 

include "../connection.php";
$data = "";
$row = $con->query("select * from request where assign_name = ''");

while ($obj = $row -> fetch_object()) {
    $data .= " <tr>
    <td><a href='?xy&id=$obj->id'>REQ000$obj->id</a></td>
    <td>$obj->contact_name</td>
    <td>$obj->priority</td>
    <td>$obj->category</td>
    <td>$obj->date</td>
    <td>
    <select style='max-width:100px;' onchange=person('per".$obj->id."','data".$obj->id."') id='data".$obj->id."' required>
    <option value=>Select Team</option>
    <option value='Backend'>Backend</option>
    <option value='Frontend'>Frontend</option>
    <option value='Digital Marketing'>Digital Marketing</option>
    <option value='Planning'>Planning</option>
    <option value='Python'>Python</option>
    <option value='Android App Development'>Android App Development</option>
    <option value='Program Manager'>Program Manager</option>
    <option value='Leadership Team'>Leadership Team</option>
    </select>
    </td>
    <td>
    <select style='min-width:100px;max-width:100px;' id='per".$obj->id."'   required>
    <option value=''>Select Person</option>
    </select>
    </td>
    <td><button type='submit' onclick=updates('$obj->id','per".$obj->id."','data".$obj->id."')>Update</button></td>
    </tr>";       
}

mysqli_close($con);
echo $data;
?>  