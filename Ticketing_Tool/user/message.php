<div id="main-content">
    <div class="container mt-5">    
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Message</h2>
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
                                            <th style="background-color:red; color:white; font-weight:bold;">Person</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Priority</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Created Date</th>
                                            <th style="background-color:red; color:white; font-weight:bold;">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        
                                        for($i=0;$i<5;$i++){
                                            echo "<tr>
                                            <td><a href='?open_un&id=INC000078".$i."'>INC000078".$i."</a></td>
                                            <td>Satyam Agrawal</td>
                                            <td>New</td>
                                            <td>Software</td>
                                            <td>Backend Team</td>
                                            <td>Satyam</td>
                                            <td>P1</td>
                                            <td>14/02/2020</td>
                                            <td><button onclick='openForm()'>Chat</button></td>
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

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

    .chat-popup {
        display: none;
        bottom: 0px;
        right: 5%;
        position: fixed;
        border: 1px solid red;
        border-bottom: 0px;
        height: 70%;
        width: 300px;
        background-color: white;
    }

    .box{
        width: 100%;
        height: 400px;
        overflow-y: scroll;
    }
</style>
</head>
<div class="chat-popup" id="myForm"> 
    
    <div class="row ml-0 mr-0">
        <div class="col-8 p-1" style="background-color:red; color:white;">   
            <h6>How can i help you...?</h6> 
        </div>
        <div class="col-4" style="background-color:red; color:white;">   
            <button class="btn cancel" onclick="closeForm()" style="float: right; color:white;"><i class="fa fa-close"></i></button> 
        </div>
        <div class="col-12">   
            <div class="box">
            </div>
        </div>
        <div class="col-12">   
            <input type="text" class="form-control" placeholder="Message"> 
        </div>
    </div>
    
  <form class="form-container">
      
      
       
      <hr>
      
      <label for="msg"><b></b></label>
      

    
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
