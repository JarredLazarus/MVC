<form class="form-sc container explore-info-loaded"id="registerform" action="<?=base_url()?>registerformbase/createRegisterform" method="post" style="border:1px solid #ccc">

<?php $string = validation_errors(); if(!empty($string)):?>
<?php echo '<div class = "alert" style = "width:50%">' .validation_errors(). '</div>'?>
<?php endif;?>
<p><?php echo $this -> session -> flashdata('postgrade_status'); ?></p>

<div>
  <h1>Enter Your Information</h1> 
</div>
<div class="input-container ic1">

  <div><label for="name">Name:</label>
    <input type="text" class=input id="name" name="name"></div><br><br>
  </div>
  
  <div class="input-container ic2">

  <div><label for="hp">Phone Number:</label>
  <input type="text" id="hp" name="hp"></div><br><br>
      
  <div> <label for="email">Email Address:</label>
  <input type="text" id="email" name="email"></div><br><br>

  <div> <label for="degreePointer">Degree Pointer:</label>
  <input type="text" id="degreePointer" name="degreePointer"></div><br><br>

  <div><label for="icNo">Identity Card Number:</label>
  <input type="text" id="icNo" name="icNo"><br><br>
  
  <div><label for="degreeID"> Last Degree Course:</label>
  <input type="text" id="degreeID" name="degreeID"></div><br><br>
  
  <button class = "ref-button" type= "submit" name="submit"value="Submit">Submit</button> 
</form>
<!--<a href="<?php echo base_url() ?>/#"> -->
</div>
</div>

