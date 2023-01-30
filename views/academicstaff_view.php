<?php
// Username is root
$user = 'root';
$password = '';
 
// Database name is webtechproject2
$database = 'project2';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
//$sql = " SELECT * FROM academic_staff WHERE position ='professor' ";
//$sql = " SELECT * FROM academic_staff";
//$result = $mysqli->query($sql);
?>

<section class = "acstaff explore-section">
    <h2 class = "title">Academic Staff</h2>
    <div class = "container">
        <div>
            <div class = "row">

                <div class = "owl-carousel explore-menu-alt">
                    <div ><p class = "bp" data-target = "bp1">Professor</p></div>
                    <div ><p class = "bp" data-target = "bp2">Associate Professor</p></div>
                    <div ><p class = "bp" data-target = "bp3">Senior Lecturer</p></div>
                    <div ><p class = "bp" data-target = "bp4">Lecturer</p></div>
                </div>

                <div class = "col-lg-2 explore-sidebar">
                    <!--make buttons that swap content of explore content-->
                    <div class = "explore-menu">
                        <ul> 
                            <li class = "bp" data-target = "bp1">Professor</li>
                            <li class = "bp" data-target = "bp2">Assoc Professor</li>
                            <li class = "bp" data-target = "bp3">Senior Lecturer</li>
                            <li class = "bp" data-target = "bp4">Lecturer</li>
                        </ul>
                    </div>
                </div>

                <div class = "col-lg-10 explore-info">
                </div>
            </div>
        </div>
    </div>
</section>

        <!--Explore Info Blueprints-->
        <div class = "blueprint bp1">
            <div class = "explore-title explore-info">
                <h1>Professor</h1>
            </div>
            <div>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Office Contact</th>
                        <th>Education</th>
                        <th>Expertise</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                    $sql = " SELECT * FROM academic_staff WHERE position ='professor' ";
                    //$sql = " SELECT * FROM academic_staff";
                    $result = $mysqli->query($sql);
                    ?>
                    <?php
                        // LOOP TILL END OF DATA
                        while($rows=$result->fetch_assoc())
                        {
                    ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN -->
                        <td><?php echo $rows['staff_name'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['phone'];?></td>
                        <td><?php echo $rows['edu_background'];?></td>
                        <td><?php echo $rows['expertise'];?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    
        <div class = "blueprint bp2">
            <div class = "explore-title">
                <h1>Associate Professor</h1>
            </div>
            <div>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Office Contact</th>
                        <th>Education</th>
                        <th>Expertise</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                    $sql = " SELECT * FROM academic_staff WHERE position ='associate professor' ";
                    //$sql = " SELECT * FROM academic_staff";
                    $result = $mysqli->query($sql);
                    ?>
                    <?php
                        // LOOP TILL END OF DATA
                        while($rows=$result->fetch_assoc())
                        {
                    ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN -->
                        <td><?php echo $rows['staff_name'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['phone'];?></td>
                        <td><?php echo $rows['edu_background'];?></td>
                        <td><?php echo $rows['expertise'];?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
        
        <div class = "blueprint bp3">
            <div class = "explore-title">
                <h1>Senior Lecturer</h1>
            </div>
            <div>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Office Contact</th>
                        <th>Education</th>
                        <th>Expertise</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                    $sql = " SELECT * FROM academic_staff WHERE position ='senior lecturer' ";
                    //$sql = " SELECT * FROM academic_staff";
                    $result = $mysqli->query($sql);
                    ?>
                    <?php
                        // LOOP TILL END OF DATA
                        while($rows=$result->fetch_assoc())
                        {
                    ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN -->
                        <td><?php echo $rows['staff_name'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['phone'];?></td>
                        <td><?php echo $rows['edu_background'];?></td>
                        <td><?php echo $rows['expertise'];?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    
        <div class = "blueprint bp4">
            <div class = "explore-title">
                <h1>Lecturer</h1>
            </div>
            <div>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Office Contact</th>
                        <th>Education</th>
                        <th>Expertise</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                    $sql = " SELECT * FROM academic_staff WHERE position ='lecturer' ";
                    //$sql = " SELECT * FROM academic_staff";
                    $result = $mysqli->query($sql);
                    ?>
                    <?php
                        // LOOP TILL END OF DATA
                        while($rows=$result->fetch_assoc())
                        {
                    ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN -->
                        <td><?php echo $rows['staff_name'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['phone'];?></td>
                        <td><?php echo $rows['edu_background'];?></td>
                        <td><?php echo $rows['expertise'];?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>

        <div class="hk1 bp4">

        </div>

<style>
body{
    background-color: var(--b);
    font-family: 'Monserrat', sans-serif;
}
:root{
    --a: #FFA630;
    --b: #d0dcbb;
    --c: #4DA1A9;
    --d: #2E5077;
    --e: #611C35;
    --f: #D7FFCA;
}

.blueprint h2{
    padding-top: 30px;
    padding-left: 250px;
}

.blueprint .container{
    padding-top: 20px;
}

.blueprint ul li{
    color:white;
    width: 100%;
    border: 2px solid;
    padding: 0;
    text-align: center;
    padding-top: 10px;
    margin-top: 10px;
    height: 50px;
    cursor: pointer;   
}

.blueprint ul li:hover{
    opacity: 0.8;
}

.acstaff h2{
    padding-top: 30px;
    padding-left: 250px;
}

.acstaff .container{
	padding-top: 20px;
}

.menu ul li{
    display: block;
    background-color: var(--e);
    color:white;
    width: 100%;
    border: 2px solid;
    padding: 0;
    text-align: center;
    padding-top: 10px;
    margin-top: 10px;
    height: 50px;
    cursor: pointer;   
}

.menu ul li:hover{
    opacity: 0.8;
}

.info{
    background-color:#2E5077;
    width: 100%;
    min-height: 550px;
    padding:1rem 3rem;
    margin-bottom: rem;
    border-radius: 14px;
    color:white;
}

.info ul li{
	margin-top: 30px;
    list-style: none;
    padding: 0;
}

.title{
    padding-top: 50px;
    padding-bottom: 20px;
}

table {
    margin: 0 auto;
    font-size: large;
    border: 1px solid black;
}

h1 {
    text-align: center;
    font-size: xx-large;
    font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
}

td {
    border: 1px solid black;
}

th{
    font-weight: bold;
    border: 1px solid black;
    padding: 10px;
    text-align: justify;
}

td {
    font-weight: lighter;
    border: 1px solid black;
    padding: 5px;
}
</style>