

<form id = "feedbackForm" class = "form-sc" action = "<?=base_url()?>/FeedbackForm/submit" method = "post" style = "border1px solid #ccc;">

<div class = "container">
    <?php $string = validation_errors(); if(!empty($string)):?>
    <?php echo '<div class = "alert" style = "width:50%">' .validation_errors(). '</div>'?>
    <?php endif;?>
    <p><?php echo $this -> session -> flashdata('feedback_status'); ?></p>
    
    <div class = "explore-info-loaded">
        <h1>Give Us Your Feedback!</h1>
        
        <label for = "email"><b>Email</b></label>
        <input type = "email" placeholder = "Enter Email" name = "cEmail" required>

        <lable for = "feedbacktextarea"><b>Your thoughts (500 character limit):</b></lable>
        <textarea type = "text" placeholder = "Let us know what you think!" name = "cFeedback" rows = "5" cols = "100" maxlength = "500" required></textarea>
        
        <lable for = "rating"><b>Rate our Website: </b></lable>
        <select name="cRating" id= "rating"> 
        <option value="" disabled="disabled" selected="selected">Please Select</option> 
            <option value="1">1</option> 
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select> 

        <button type = "submit" class = "ref-button"> Submit </button>
        <a class = "ref-button" style = "background-color:#ff1213; margin-left:30px; padding:16px;" href = "<?=base_url()?>"> Cancel </a>
                
    </div>
    </div>
</form>