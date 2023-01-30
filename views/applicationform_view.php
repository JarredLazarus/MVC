
<form id="formApply" action="<?=base_url()?>Apply/addnew" method="post" style="border:1px solid #ccc">
	<div class="container">
		<h1>Staff Application</h1>
		<p>Please fill in this form to apply.</p>
		<p><?php echo $this-> session-> flashdata('application_status'); ?></p>
		<?php $string = validation_errors(); if(!empty($string)): ?>
		<?php echo'<div class="alert" style="width:60%">'.validation_errors().'</div>' ?>
	<?php endif; ?>

		<hr>
		<label for="name"><b>Full Name</b></label>
		<input type="text" placeholder="Enter Full Name" name="sName" required>

		<label for="email"><b>Email</b></label>
		<input type="email" placeholder="Enter Email" name="sEmail" required>

		<label for="phone"><b>Phone</b></label>
		<input type="text" placeholder="Enter Phone Number" name="sPhone" required>

		<label for="eduBg"><b>Education Background</b></label>
		<input type="text" placeholder="Enter Education Background" name="sEduBg" required>

		<label for="expertise"><b>Expertise</b></label>
		<input type="text" placeholder="Enter Expertise" name="sExpertise" required>

		<label for="position"><b>Position</b></label>
		<input type="text" placeholder="Enter Applied Position" name="sPosition" required>

		<label for="experience"><b>Experience</b></label>
		<input type="text" placeholder="Enter Field Experience" name="sExperience" required>

		<p>By applying, you agree to our <a href="a" style="color:dodgerblue">Terms & Privacy</a>.
		</p>

		<div class="clearfix">
			<button type="button" class="cancelbtn">Cancel</button>
			<button type="submit" class="signupbtn">Apply</button>
		</div>
	</div>
</form>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {body-sizing:border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email], select{
	width: 100%;
	padding: 15px;
	margin: 5px 0 22px 0;
	display: inline-block;
	border: none;
	background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, select:focus{
	outline: none;
}

hr{
	border: 1-x solid #f1f1f1;
	margin-bottom: 25px;
}

/* Set a style for all buttons */
button{
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 20%;
	opacity: 0.9;
}


button:hover{
	opacity: 1;
}

/* Extra styles for the cancel button */
.cancelbtn{
	padding: 14px 20px;
	background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn{
	float: left;
	width: 20%;
}

/* Add padding to container elements */
.container{
	padding: 16px;
	width: 80%;
}

/* Clear floats */
.clearfix::after{
	content: "";
	clear: both;
	display: table;
}

.alert{
	padding: 20px;
	background-color: #f44336;
	color: white;
}

.alert-green{
	padding:  20px;
	background-color: #00cc66;
	color: white;
}

/* Change styles for cancel button and signup button on extra screens */

@media screen and (max-width: 300px){
	.cancelbtn, .signupbtn{
	width: 20%;
	}
}
</style>
