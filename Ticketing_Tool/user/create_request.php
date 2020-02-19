<style type="text/css">
	.lbl{
		text-align: right;
	}


	.row{
		margin-top: 3%;
	}
	.container{
		padding: 5%;
		border-left-style: solid;
		border-left-color: red;
		border-left-width: 0.5px;
		border-bottom-style: solid;
		border-bottom-color: red;
		border-bottom-width: 0.5px;
	}



	 #pointer {
      width: 200px;
      height: 40px;
      position: relative;
      background:red ;
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
      border-left: 20px solid red;
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
    }
    input[type=text],select, option, textarea, .form-control{
        background-color: white;
    }
</style>
<div id="main-content">
    <div class="container mt-5">  
        <div class="row clearfix"><h3 id="pointer" style="color: white; text-align: center;">User Request  </h3></div>
        <div class="row">
            <div class="col-lg-3 lbl" ><label>Incident Number</label></div>
            <div class="col-lg-3 "><input type="text" name="" class="form-control"></div>
            <div class="col-lg-3 lbl" ><label>Contact type</label></div>
            <div class="col-lg-3"><select class="form-control" disabled="">
                <option selected="">Direct </option>
                <option> Call</option>
                <option> SMS</option>
                <option> Email</option>
                </select></div>
        </div>

        <div class="row">
            <div class="col-lg-3 lbl" ><label>Caller Name</label></div>
            <div class="col-lg-3"><input type="text" name="" class="form-control" placeholder="caller name"></input></div>
            <div class="col-lg-3 lbl"><label>State</label></div>
        <div class="col-lg-3"><select class="form-control" >
            <option selected="">Open </option>
        	<option> New</option>
        	<option> In Process</option>
        	<option> Complete</option>
        	<option>Reopen</option>
        	<option>Hold</option>
        </select></div>
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
        <div class="col-lg-3"><input placeholder="Service" type="text" name="" class="form-control"></div>
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
        </select></div>
    </div>

<div class="row">
        <div class="col-lg-3 lbl"><label>Description</label></div>
        <div class="col-lg-3"><textarea cols="35" class="form-control" placeholder="Description"></textarea></div>
</div>
