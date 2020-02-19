<style>
    label{
        font-weight: bold;
    }
</style>
<div id="main-content" align="center">
    <div class="container mt-5"> 
                
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td colspan="1">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3>Create New Incident</h3> <br>
                            </div>  
                        </div>
           
                        <form action="" align>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Incident Number</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="IncidentNumber" name="IncidentNumber" placeholder="IncidentNumber" class="form-control" required="true" value="" type="text"></div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Contact Type</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                        <select class="selectpicker form-control">
                                            <option>Call</option>
                                            <option>Email</option>
                                            <option>SMS</option>
                                            <option>Direct</option>

                                      </select>
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Caller Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="Caller Name" name="Caller Name" placeholder="Caller Name" class="form-control" required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-4 control-label">State</label>
                            <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control">
                                     <option>Open</option>
                                     <option>New</option>
                                     <option>In Process</option>
                                     <option>Complete</option>
                                     <option>Re Open</option>
                                     <option>Hold</option>
                                  </select>
                               </div> 
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Category</label>
                            <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control">
                                     <option>Hardware</option>
                                     <option>Software</option>        
                                  </select>
                               </div> 
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Priority</label>
                            <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control">
                                     <option>P1 – Time Period 0h - 2h</option>
                                     <option>P2 – Time Period 2h – 4h</option>
                                     <option>P3 – Time Period 4h – 6h</option>
                                     <option>P4 – Time Period 6h – 12h</option>
                                     <option>P5 – Time Period 12h – 24h</option>
                                     <option>P6 – Time Period after 24h</option>
                                  </select>
                               </div> 
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Assign group</label>
                            <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control">
                                     <option>Backend</option>
                                     <option>Frontend</option>
                                     <option>Digital Marketing</option>
                                     <option>Planning</option>
                                     <option>Python</option>
                                     <option>Android App Development</option>
                                     <option>Program Manager</option>
                                     <option>Leadership team</option>
                                  </select>
                               </div> 
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Business Service</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="Business Service" name="Business Service" placeholder="Business Service" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                       
                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">Short Description</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><textarea id="Short Description" name="Assignment Group" placeholder="Short Description" class="form-control" required="true" value="" type="textarea"></textarea></div>
                            </div>
                         </div>
                         <div class="form-group"> 
                                    <div class="aab controls col-md-4 "></div>
                                    <div class="controls col-md-8 ">
                                        <input type="submit" name="Submit" value="Submit" class="btn btn-primary btn btn-info" id="submit" />
                                    </div>
                                </div> 
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
        </div></div>