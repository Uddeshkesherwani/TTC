<style>
    .form-control{
        background-color: white;
    }
    .col{
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .task2{
        background-color: white;
        color: red;
        font-weight: bold;
        cursor: pointer;
        padding: 5px;
    }
    .task{
        background-color: white;
        color: red;
        font-weight: bold;
        cursor: pointer;
        padding: 5px;
    }
    .task a:hover{
        color: red;
    }
    .area{
        min-height: 250px;
        background-color: white;
    }
</style>
<div id="main-content">
    <div class="container-fluid mt-4">    
        <div class="row mb-3">
            <div class="col-12 col-lg-8"> <h5>Activity</h5> </div>
            <div class="col-12 col-lg-4"> 
                <button style="width:100px; height:30px; margin:10px;"> Update </button> 
                <button style="width:100px; height:30px; margin:10px;"> Hold </button> 
                <button style="width:100px; height:30px; margin:10px;"> Close </button> 
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col col-4 col-lg-1">
                Number
            </div>
            <div class="col col-8 col-lg-4">
                <input type="text" class="form-control" disabled>
            </div>
            
            <div class="col col-0 col-lg-2"></div>
            
            <div class="col col-4 col-lg-1">
                Contact Type
            </div>
            <div class="col col-8 col-lg-4">
                <input type="text" class="form-control" disabled>
            </div>
            <div class="col col-4 col-lg-1">
                Caller Name
            </div>
            <div class="col col-8 col-lg-4">
                <input type="text" class="form-control" disabled>
            </div>
            
            <div class="col col-0 col-lg-2"></div>
            
            <div class="col col-4 col-lg-1">
                State
            </div>
            <div class="col col-8 col-lg-4">
                
                <select name="" class="form-control">
                    <option value="">State</option>
                    <option value="Open">Open</option>
                    <option value="New">New</option>
                    <option value="In Process">In Process</option>
                    <option value="Complete">Complete</option>
                    <option value="Re-Open">Re-Open</option>
                </select>
                
            </div>
            <div class="col col-4 col-lg-1">
                Category
            </div>
            <div class="col col-8 col-lg-4">
                <input type="text" class="form-control" disabled>
            </div>
            
            <div class="col col-0 col-lg-2"></div>
            
            <div class="col col-4 col-lg-1">
                Priority
            </div>
            <div class="col col-8 col-lg-4">
                <input type="text" class="form-control" disabled>
            </div>
            
            <div class="col col-4 col-lg-1">
                Business Service
            </div>
            <div class="col col-8 col-lg-4">
                <input type="text" class="form-control" disabled>
            </div>
            
            <div class="col col-0 col-lg-2"></div>
            
            <div class="col col-4 col-lg-1">
                Assignment Group
            </div>
            <div class="col col-8 col-lg-4">
                <input type="text" class="form-control" disabled>
            </div>
            <div class="col col-4 col-lg-1">
                Assignment Person
            </div>
            <div class="col col-8 col-lg-4">
                <input type="text" class="form-control" disabled>
            </div>
            
            <div class="col col-0 col-lg-2"></div>
            
            <div class="col col-4 col-lg-1">
                Short Description
            </div>
            <div class="col col-8 col-lg-4">
                <textarea rows="3" class="form-control" disabled></textarea>
            </div>
        </div>
        
        <div class="row mt-3 task2">
            <div class="col-2 col-lg-1 task"> <a href="">Notes </a> </div>
            <div class="col-2 col-lg-2 task"> <a href="">Related Records </a> </div>
            <div class="col-2 col-lg-1 task"> <a href="">Closure </a> </div>
            <div class="col-2 col-lg-1 task"> <a href="">Task SLA </a> </div>
            <div class="col-2 col-lg-2 task"> <a href="">Create Child </a> </div>
        </div>
        
        <div class="row mt-3 mb-3">
            <div class="col-12 area">Hello</div>
        </div>
    </div>
</div>