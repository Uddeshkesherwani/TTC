<style>
    td{
        font-weight: bold;
    }
</style>

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
                                            <th style="background-color:red; color:white; font-weight:bold;">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
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
                                            <td>$obj->assign_grp</td>
                                            <td>$obj->assign_person</td>
                                           
                                            <td><button style='background-color:grey; color:white; border:1px; padding:10px; font-weight:bolder;' onclick=canCels('a','$obj->id')>Cancel Task</button></td>
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
                                            <td>$obj->assign_grp</td>
                                            <td>$obj->assign_name</td>
                                            
                                            <td><button style='background-color:grey; color:white; border:1px; padding:10px; font-weight:bolder;' onclick=canCels('b','$obj->id')>Cancel Task</button></td></tr>";
        
                                        }
                                        
                                        mysqli_close($con);
                                        echo $data;
                                        ?>
                                    </tbody>
                                </table>
                            </div>  
                        </div>
                    </div>                    
                </div>
            </div>
    </div>
</div>

<script>
    function canCels(a,b){
        $.ajax({
            url:"plan_canecl_backend.php",
            type:"post",
            data:{
                name : "Ok",
                t : a,
                id : b
            },
            success:function(){
                update_List();
            }
        });
    }
    function update_List(){
        $.ajax({
            url:"plan_canecl_backend.php",
            type:"post",
            data:{
                name2 : "Ok",
            },
            success:function(data){
                $('#List').html(data);
            }
        });
    }
</script>