<section>
     <form id="formreserver" action="<?=base_url()?>ReserveFacility/store" method="POST">
    <div class = "container">
        <div class = "explore-content">
            <div class = "row">
                <div class = "col-sm-5 explore-info" style="float:none;margin:auto;">
                    <div class = "blueprint bp1">

                            <div class = "explore-title">
                                <i class = "fa fa-institution"></i>
                                <h1>Reserve Facility</h1>
                            </div>

                            <p><?php echo $this -> session -> flashdata('status');?></p>
                            <?php $string=validation_errors();if(!empty($string)):?>
                            <?php echo '<div class="alert" style="width:60%">'.validation_errors().'</div>'?>
                            <?php endif;?>

                            <div class="form-group">
                                <label for="name">Lecturer Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text"  class="form-control" name="subject">
                            </div>

                            
                            <div class="form-group">
                                <label for="facility">Facility</label>
                                <select class="form-control" name="facility" >
                                    <option value="DKP1">DKP-1</option>
                                    <option value="DKP2">DKP-2</option>
                                    <option value="DKP3">DKP-3</option>
                                    <option value="DKP4">DKP-4</option>
                                    <option value="DKP5">DKP-5</option>
                                    <option value="LAB1">LAB-1</option>
                                    <option value="LAB2">LAB-2</option>
                                    <option value="LAB3">LAB-3</option>
                                    <option value="LAB3">LAB-4</option>
                                </select>
                            </div>     

                            <div class="form-group">
                                <label for="capacity">capacity</label>
                                <input type="text" class="form-control" name="capacity">                               
                            </div>
                                
                            <div class="form-group">
                                <label for="date"class="label-date">Date</label>
                                <input type="date" class="form-control" name="date">                             
                            </div>      
                        
                            <div class="form-group">
                                <label for="time" class="label-time">Time</label>
                                <input type="time" class="form-control" name="time">                               
                            </div>
                            
                            <div class="form-group">
                                <button type='submit' name="submit" class="btn btn-submit">Submit</button>  
                            </div>  
                    </div>
                </div>
            </div>
        </div>               
    </div>
    </form>
 </section>
<style>
        label{
            width: 200px;
            display: inline-block;
        }
        #submit{
            margin: 0;
            top: 97.8%;
            width: 100%;
            -ms-transform: translateY(25%);
            transform: translateY(25%);
            position: relative;
            
            
            font-size: inherit;
        }
</style>
