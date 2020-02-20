<style>
    .knob{
        user-select: none;
        cursor:pointer;
        transition-delay: 2m;
        z-index: auto;
        
    }
</style>
<div id="main-content">
    <div class="container mt-5">  
        <div class="row clearfix">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="body">
                            <div>My Request</div>
                            <div class="py-4 m-0 text-center h1 text-success">
                                
                                <?php
                                include "../connection.php";
                                $req = mysqli_query($con, "select count(*) as c from request where user_id='".$_SESSION['user']."'");
                                $res = mysqli_fetch_array($req);
                                echo $res['c'];
                                mysqli_close($con);
                                ?>
                                
                            </div>
<!--
                            <div class="d-flex">
                                <small class="text-muted">Previous Month</small>
                                <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4.00%</div>
                            </div>
-->
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <div>My Incident</div>
                            <div class="py-4 m-0 text-center h1 text-info">
                                 <?php
                                include "../connection.php";
                                $req1 = mysqli_query($con, "select count(*) as c from incident where user_id='".$_SESSION['user']."'");
                                $res1 = mysqli_fetch_array($req1);
                                echo $res1['c'];
                                mysqli_close($con);
                                ?>
                            </div>
<!--
                            <div class="d-flex">
                                <small class="text-muted">Previous Month</small>
                                <div class="ml-auto"><i class="fa fa-caret-down text-success"></i>0.5%</div>
                            </div>
-->
                        </div>
                    </div>
                </div>                
                <div class="col-lg-5 col-md-6">
                    <div class="card">
                        <div class="body">
                            <div>Solutiom Rate</div>
                            <div class="mt-4 text-center">
                                 <?php
                                $rate = 0;
                                $rate1 = 0;
                                include "../connection.php";
                                $req = mysqli_query($con, "select count(*) as c from request where user_id='".$_SESSION['user']."' and state != 'close' ");
                                $res = mysqli_fetch_array($req);
                                $rate += $res['c'];
                                
                                $req1 = mysqli_query($con, "select count(*) as r from incident where user_id='".$_SESSION['user']."' ");
                                $res1 = mysqli_fetch_array($req1);
                                $rate += $res1['r'];
                                
                                $req2 = mysqli_query($con, "select count(*) as c from request where user_id='".$_SESSION['user']."' ");
                                $res2 = mysqli_fetch_array($req2);
                                $rate1 += $res2['c'];
                                
                                $req3 = mysqli_query($con, "select count(*) as r from incident where user_id='".$_SESSION['user']."' and state = 'close' ");
                                $res3 = mysqli_fetch_array($req3);
                                $rate1 += $res3['r'];
                                
                                mysqli_close($con);
                                if($rate == 0){
                                    $per =ceil(99.99);
                                }else{
                                    $per = ceil(($rate1/$rate)*100);
                                }
                                ?>
                                
                                <input type="text" class="knob" value="<?php echo $per; ?>" data-width="147" data-height="147" data-thickness="0.07" data-bgColor="red" data-fgColor="#000078" disabled>
                            </div>
                            <br>
                            <br>
<!--                            <h3 class="mb-0 mt-3 font300">20 <span class="text-green font-15">+3.7%</span></h3>-->
                            <small>Its your request and help count </small>
                            <div class="mt-4 text-center">
                                <span class="chart_3">1,2,5,0,1,2,5,4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">

                            <div class="card">
                                <div class="body top_counter">
                                    <div class="icon bg-success text-white"><i class="fa fa-area-chart"></i> </div>
                                    <div class="content">
                                        <span>Approval Approved</span>
                                        <h5 class="number mb-0">1</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="body top_counter">
                                    <div class="icon bg-warning text-white"><i class="fa fa-building"></i> </div>
                                    <div class="content">
                                        <span>Approval Pending</span>
                                        <h5 class="number mb-0">0</h5>
                                    </div>
                                </div>                        
                            </div>
                            <div class="card">
                                <div class="body top_counter">
                                    <div class="icon bg-danger text-white"><i class="fa fa-building"></i> </div>
                                    <div class="content">
                                        <span>Approval Reject</span>
                                        <h5 class="number mb-0">0</h5>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

