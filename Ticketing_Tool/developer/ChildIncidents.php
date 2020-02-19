<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
                
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                <div class="panel panel-info">
                <div class="panel-heading">
                        <div class="panel-title"><center><strong>Create Child Incident</div></strong>
                    </div>  
                </div>
           
                   <form class="well form-horizontal">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Incident Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="IncidentNumber" name="IncidentNumber" placeholder="Incident Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                        
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Team Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="Caller Name" name="Caller Name" placeholder="Caller Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         
                         <div class="form-group">
                            <label class="col-md-4 control-label">Team Member</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="Business Service" name="Business Service" placeholder="Business Service" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                       
                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">Short Description</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><textarea id="Short Description" name="Assignment Group" placeholder="Short Description" class="form-control" required="true" value="" type="textarea"></textarea></div>
                            </div>
                         </div>
                         <div class="col-auto" ">
                                       <center> <button class="btn btn-lg btn-success" type="submit">Create</button>
                                       <button class="btn btn-lg btn-success" type="submit">Reset</button>
                                    </div>

                         
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div> 
</body>
</html>
