<div id="main-content">
    <div class="container mt-5">    
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>All History</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0 bg-dark">
                                    <thead>
                                       <tr class="bg-">
                                            <th style="background-color:red; color:white; font-weight:bold;">Request Number</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Caller Name</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Priority</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Category</th>
                                           <th style="background-color:red; color:white; font-weight:bold;">Updated</th>
                                            
                                            <th style="background-color:red; color:white; font-weight:bold; max-width:100px;">Group</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Person</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Assigned person</th>
                                            
                                        </tr>
                                    </thead>
                                    <form action="index.php?assign_plan">
                                    <tbody id="List">
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
                                            <td><button type='submit' onclick=updates('a','$obj->id','per".$obj->id."','data".$obj->id."')>Update</button></td>
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
                                            <select style='min-width:100px;max-width:100px;' id='per".$obj->id."' required>
                                            <option value=''>Select Person</option>
                                            </select>
                                            </td>
                                            <td><button type='submit'  onclick=updates('b','$obj->id','per".$obj->id."','data".$obj->id."')>Update</button></td>
                                            </tr>";
        
                                        }
                                        
                                        mysqli_close($con);
                                        echo $data;
                                        ?>
                                    </tbody>
                                    </form>
                                </table>
                            </div>  
                        </div>
                    </div>                    
                </div>
            </div>
    </div>
</div>

<script>
    function updates(t,x,y,z){
        if((x != '') && (y!='')){
            $.ajax({
                url:"plan_method.php",
                type:"post",
                data:{
                    name2:"Ok2", 
                    id:x,
                    t : t,
                    team : document.getElementById(z).value,
                    person : document.getElementById(y).value
                },
                success:function(data){
                    list_update();
                },
                error:function(){
                    alert("Something went wrong");
                }
            });
        }else{
            alert("Please Select the member details");
        }
    }
    
    function list_update(){
        $.ajax({
            url:"plan.php",
            success:function(data){
                $('#List').html(data);
            }
        });
    }
    
    function person(x,y){
        var posts = document.getElementById(y).value;
        $.ajax({
            type:"POST",
            url:"plan_method.php",
            data : { name:"Ok1", posts:posts },
            success:function(data){
                $('#'+x).html(data);
            },
            error:function(){
                alert("Something went wrong !!!");
            }
        });
    }
    
</script>