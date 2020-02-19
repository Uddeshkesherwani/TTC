<style>
    .form-control{
        background-color: white;
        box-shadow: 0 0px 0px 1px ;
        color: black;
    }
    button{
        padding: 10px;
        background-color: red;
        color: white;
        font-weight: bolder;
        margin-left: 30px;
        margin-right: 30px;
        border: solid;
    }
    label {
        cursor: pointer;
        /* Style as you please, it will become the visible UI component. */
        width: 150px;
        height: 150px;
        border: 1px solid;
        background-color: white;
        font-weight: bolder;
        float: left;
        padding: 20px;
        margin-right: 10px;
    }
    label2 {
        /* Style as you please, it will become the visible UI component. */
        width: 150px;
        height: 150px;
        border: 1px solid;
        background-color: white;
        font-weight: bolder;
        float: left;
        padding: 20px;
        margin-right: 10px;
    }

    #upload-photo {
        opacity: 0;
        position: absolute;
        z-index: -1;
    }
</style>
<div id="main-content">
    <div class="container mt-5">  
        <h6>Create New Incident</h6>
        <hr> 
        <div class="row">
            <div class="col-12 col-lg-5 m-2">
                <input type="text" class="form-control" style="background-color:white;" placeholder="Number">
            </div>
           
            <div class="col-12 col-lg-2 m-2">
                <select class="form-control" style="background-color:white;">
                    <option value="">Contact Type</option>
                    <option value="call">Call</option>
                    <option value="Email">Email</option>
                    <option value="SMS">SMS</option>
                    <option value="Direct">Direct</option>
                </select>
            </div>
           
            <div class="col-12 col-lg-4 m-2">
                <input type="text" class="form-control" style="background-color:white;" placeholder="Caller Name">
            </div>
           
            <div class="col-12 col-lg-3 m-2">
                <select class="form-control" style="background-color:white;" disabled>
<!--                    <option value="Open">Open</option>-->
                    <option value="New">New</option>
<!--
                    <option value="In Process">In Process</option>
                    <option value="Complete">Complete</option>
                    <option value="Re-open">Re-open</option>
                    <option value="Hold">Hold</option>
-->
                </select>
            </div>
            
            <div class="col-12 col-lg-2 m-2">
               <select class="form-control">
                   <option value="">Category</option>
                   <option value="Hardware">Hardware</option>
                   <option value="Mobile">Software</option>
                </select>    
            </div>
           
            <div class="col-12 col-lg-3 m-2">
               <input type="text" class="form-control" style="background-color:white;" placeholder="Business Service">
            </div>
           
            
            <div class="col-12 col-lg-2 m-2">
                <select class="form-control" style="background-color:white;">
                    <option value="">Select Team</option>
                    <option value="Backend">Backend</option>
                    <option value="Frontend">Frontend</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="Planning">Planning</option>
                    <option value="Python">Python</option>
                    <option value="Android App Development">Android App Development</option>
                    <option value="Program Manager">Program Manager</option>
                    <option value="Leadership Team">Leadership Team</option>
                </select>
            </div>
            
            <div class="col-12 col-lg-11 m-2">
                <textarea rows="5" placeholder="Short Description" class="form-control" style="background-color:white;"></textarea>
            </div>
            <div class="col-12 col-lg-11 m-2 ml-4">
                <label for="upload-photo" class="fprm-control" align="center">
                    <h1>+</h1>Screenshot</label>
                <label2 class="fprm-control">Images</label2>
                <label2 class="fprm-control">Images</label2>
                <label2 class="fprm-control">Images</label2>
                
                <input type="file" name="photo" id="upload-photo" />
            </div>
            
            <div class="col-12 col-lg-12 m-2" align="center">
                <button>Create a Incident</button>
            </div>
        </div>
    </div>
</div>

