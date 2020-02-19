<style type="text/css">
	.lbl{
		text-align: right;
	}
    .form-control{
        background-color: white;
    }
	.row{
		margin-top: 3%;
	}
	.container{
		padding: 5%;
		border-left-style: solid;
		border-left-color: #64eb34;
		border-left-width: 0.5px;
		border-bottom-style: solid;
		border-bottom-color: #64eb34;
		border-bottom-width: 0.5px;
	}



	 #pointer {
      width: 200px;
      height: 40px;
      position: relative;
      background:#64eb34 ;
    }
    #pointer:after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0;
      height: 0;
      border-left: 20px solid white;
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
    }
    #pointer:before {
      content: "";
      position: absolute;
      right: -20px;
      bottom: 0;
      width: 0;
      height: 0;
      border-left: 20px solid #64eb34;
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
    }
  
</style>

<body onload="format();">
<div class="container">
    <div class="row">
        <div class="col-lg-3 lbl" ><label>Request Number</label></div>
        <div class="col-lg-3 "><input type="text" name="" class="form-control"></input></div>
        <div class="col-lg-3 lbl" ><label>Contact type</label></div>
        <div class="col-lg-3"><select class="form-control" disabled="">
        	<option selected="">Direct </option>
        	<option> Call</option>
        	<option> SMS</option>
        	<option> Email</option>
        </select></div>
    </div>

<div class="row">
        <div class="col-lg-3 lbl" ><label>Contact Name</label></div>
        <div class="col-lg-3"><input type="text" name="" class="form-control" placeholder="caller name"></input></div>
        <div class="col-lg-3 lbl"><label>Current State</label></div>
        <div class="col-lg-3"><select class="form-control" >
        	<option selected="">Open </option>
        	<option> New</option>
        	<option> In Process</option>
        	<option> Complete</option>
        	<option>Reopen</option>
        	<option>Hold</option>
        </select></input></div>
    </div>

<div class="row">
        <div class="col-lg-3 lbl" ><label>Category</label></div>
        <div class="col-lg-3"><select class="form-control" >
        	
        	<option>Select Category</option>
        </select></div>
        <div class="col-lg-3 lbl"><LABEL>Priority</LABEL></div>
        <div class="col-lg-3"><select  class="form-control">
        	
        	<option> P1 (0h-2h)</option>
        	<option> P2 (2h-4h)</option>
        	<option> P3 (4h-6h)</option>
        	<option> P4 (6h-12h)</option>
        	<option> P5 (12h-24h)</option>
        	<option >P6 (after 24h) </option>
        </select></div>
    </div>

<div class="row">
        <div class="col-lg-3 lbl"><label>Service</label></div>
        <div class="col-lg-3"><input placeholder="Service" type="text" name="" class="form-control"></input></div>
        <div class="col-lg-3 lbl"><label>Assigned Group</label></div>
        <div class="col-lg-3"><select class="form-control">
        	<option> Backend</option>
        	<option> Frontend</option>
        	
        	<option> Digital Marketing</option>
        	<option> Planning</option>
        	<option>Python</option>
        	<option> Andriod Developement</option>
        	<option> Program Manager</option>
        	<option >Leadership team </option>
        </select></div></div>
<div class="row">
<div class="col-lg-3 lbl"><label>Created Date</label></div>   
<div class="col-lg-3"><input placeholder="Created Date" type="date" name="" class="form-control"></input></div>
<div class="col-lg-3 lbl"><label>Closure</label></div>   
<div class="col-lg-3"><input placeholder="Closure" type="text" name="" class="form-control"></input></div> 
</div>

<div class="row">
        <div class="col-lg-3 lbl"><label>Description</label></div>
        <div class="col-lg-3"><textarea cols="35" class="form-control" placeholder="Description"></textarea></input></div>
        <div class="col-lg-3 lbl"><label>Note</label></div>
        <div class="col-lg-3"><textarea cols="35" class="form-control" placeholder="Note"></textarea></input></div>
        </div>
<div class="row">
       
        <div class="col-lg-3 lbl"><label>Upload</label></div>
        <div class="col-lg-3"><input type="file" name="" class="form-control"></input></div>
        
        </div>



</div>
</body>
</html>