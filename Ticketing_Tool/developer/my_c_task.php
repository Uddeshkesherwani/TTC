<div id="main-content">
    <div class="container mt-5">    
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>My Open Incident List</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0 bg-dark">
                                    <thead>
                                       <tr class="bg-">
                                            <th style="background-color:red; color:white; font-weight:bold;">No</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Caller Name</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">State</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Category</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Assigned Group</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Priority</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Created Date</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        
                                        for($i=0;$i<50;$i++){
                                            echo "<tr>
                                            <td><a href='?open_un&id=INC000078".$i."'>INC000078".$i."</a></td>
                                            <td>Satyam Agrawal</td>
                                            <td>New</td>
                                            <td>Software</td>
                                            <td>Backend Team</td>
                                            <td>P1</td>
                                            <td>14/02/2020</td>
                                        </tr>
                                        ";
                                        }
                                        
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