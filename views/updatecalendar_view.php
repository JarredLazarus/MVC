
<form class = "form-sc" id="formUpdateCalendar" action="<?=base_url()?>Updatecalendar/addnew" method="post" style="border:1px solid #ccc">
   <div class="container explore-info-loaded">
    <h1 align="center">Academic Calendar</h1>
    <p align="center">You can update your academic calendar by fill this form</p>
    <p><?php echo $this -> session -> flashdata('status'); ?></p>
    <?php $string = validation_errors(); if(!empty($string)): ?>
        <?php echo '<div class="alert" style="width:60%">' .validation_errors(). '</div>' ?>
        <?php endif; ?>
    <hr>

    <label for="desc"><b>Agenda</b></label>
    <input type="text" name="Desc" required>
	
	<label for="dateStart"><b>Start</b></label>
    <input type="date"  name="date_start" required>
	
	<label for="dateEnd"><b>End</b></label>
    <input type="date" name="date_end" required>
    
    <label for="duration"><b>Duration of Agenda</b></label>
    <input type="text" placeholder="eg:4 days" name="duration" required>

    <label for="remarks"><b>Remarks</b></label>
    <input type="text" placeholder="Remarks" name="Remarks" required>

        <div class="clearfix">
            <button type="submit" class="ref-button">Save</button>
        </div>
		
		</hr>
    </div>
</form>

