
<form id="formUpdateAlumni" class = "container form-sc explore-info-loaded" action="<?=base_url()?>Updatealumni/addnew" method="post" style="border:1px solid #ccc">
   <div class="container">
    <h1>Update Details</h1>
    <p>Please fill in this form to update your details.</p>
    <p><?php echo $this -> session -> flashdata('status'); ?></p>
    <?php $string = validation_errors(); if(!empty($string)): ?>
        <?php echo '<div class="alert" style="width:60%">' .validation_errors(). '</div>' ?>
        <?php endif; ?>
    <hr>

    <label for="IC"><b>IC</b></label>
    <input type="text" placeholder="Enter IC without '-'" name="aIC" required>
    
    <label for="MatricNo"><b>Matric No</b></label>
    <input type="text" placeholder="Enter Matric No" name="aMatricNo" required>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="aName" required>

    <label for="Gender"><b>Gender</b></label>
    <select name="aGender" id="sgender">
            <option value="" disabled="disabled" selected="selected">Please Select</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
        </select>

    <label for="DOB"><b>Date of birth</b></label>
    <input type="date" placeholder="Enter date of birth" name="aDOB" required>

    <label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter address " name="aAddress" required>

    <label for="Email"><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="aEmail" required>

    <label for="PhoneNo"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter phone no without '-' " name="aPhoneNo" required>
     
    <label for="Post"><b>Post</b></label>
    <input type="text" placeholder="Enter post" name="aPost" required>

    <label for="EmployementSector"><b>Employement Sector</b></label>
    <input type="text" placeholder="Enter employement sector " name="aEmployementSector" required>

    <label for="StartDate"><b>Start Date</b></label>
    <input type="date" placeholder="Enter start date " name="aStartDate" required>

    <label for="EndDate"><b>End Date</b></label>
    <input type="date" placeholder="Enter end date " name="aEndDate" required>

    <label for="WorkAddress"><b>Work Address</b></label>
    <input type="text" placeholder="Enter work address " name="aWorkAddress" required>

    <label for="Salary"><b>Salary</b></label>
    <input type="text" placeholder="Enter salary " name="aSalary" required>

        <div class="clearfix">
            <button type="submit" class="submitbtn">Submit</button>
        </div>
    </div>
</form>

<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=text], input[type=password],input[type=email], select {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, select:focus {
        background-color: #ddd;
        outline: none;
    }
    
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color:white;
        padding: 14px 20px;
        margin: 8px 0px; 
        border: none;
        cursor: pointer;
        width: 20%;
        opacity: 0.9;
    }

    button:hover {
        opacity:1;
    }


    /* Float submit buttons and add and equal width */
    .submitbtn {
        float: left;
        width:20%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
        width:80%;
    }

    /*Clear floats */
    .clearfix::after {
        content: "";
        clear:both;
        display: table;
    }

    .alert {
        padding: 20px;
        background-color: #f44336;
        color:white;
    }

    .alert_green {
        padding: 20px;
        background-color: #00cc66;
        color: white;
    }

    /* Change styles for submit button on extra small screens */
    @media screen and (max-width: 300px) {
        .submitpbtn {
            width: 20%;
        }
    }

    </style>