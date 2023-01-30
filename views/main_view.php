

<?php $this -> session -> set_flashdata('');?>

<section class = "explore-section">
            <div class = "container">
                <div class = "explore-content">
                    <div class = "row">

                        <div class = "owl-carousel explore-menu-alt">
                            <div ><p class = "bp" data-target = "bp1">Welcome</p></div>
                            <div ><p class = "bp" data-target = "bp2">Research</p></div>
                            <div ><p class = "bp" data-target = "bp3">Programs</p></div>
                            <div ><p class = "bp" data-target = "bp4">Postgraduate</p></div>
                            <div ><p class = "bp" data-target = "bp5">Reserve Facility</p></div>
                            <div ><p class = "bp" data-target = "bp6">Location</p></div>
                            <div ><p class = "bp" data-target = "bp7">Calender</p></div>
                        </div>

                        <div class = "col-lg-2 explore-sidebar">
                            <!--make buttons that swap content of explore content-->
                            <div class = "explore-menu">
                                <ul> 
                                    <li class = "bp" data-target = "bp1">Welcome</li>
                                    <li class = "bp" data-target = "bp2">Research</li>
                                    <li class = "bp" data-target = "bp3">Programs</li>
                                    <li class = "bp" data-target = "bp4">Postgraduate</li>
                                    <li class = "bp" data-target = "bp5">Reserve Facility</li>
                                    <li class = "bp" data-target = "bp6">Location</li>
                                    <li class = "bp" data-target = "bp7">Calender</li>
                                </ul>
                            </div>
                        </div>

                        

                        <div class = "col-lg-6 explore-info">
                            
                        </div>

                        <div class = "col-lg-4 explore-pic">
                            <img class = "pic-holder">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--Explore Info Blueprints-->
        <div class = "blueprint bp1">
            <div class = "explore-title">
                <i class = "fa fa-graduation-cap"></i>
                <h1>Welcome</h1>
            </div>
            <p class = "explore-description">Faculty of Computing and Informatics (FCI) formerly known as Labuan School of Informatics Science (LSIS) was established in May 1999, offering programmes in the field of computing and information technology. In October 2003 Universiti Malaysia Sabah was recognised by Multimedia Development Corporation (MDeC) for ICT- facilitated business that develop or use multimedia technologies to produce and enhance their products and services (quality graduates).</p>
            <a class = "ref-button" href = "aboutus.html">About Us</a>
        </div>
    
        <div class = "blueprint bp2">
            <div class = "explore-title">
                <i class = "fa fa-eye"></i>
                <h1>Research</h1>
            </div>
            <p class = "explore-description">We research details details details details details details details details details details details details details </p>
            <a class = "ref-button" href = "<?=base_url()?>">Apply</a>
        </div>
        
    
        <div class = "blueprint bp3">
            <div class ="row">
                <div class = "col-lg-4 col-md-6">
                    <div class = "program-info">
                        <i class = "fa fa-flask"></i>
                        <p>Data Science</p>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6">
                    <div class = "program-info">
                        <i class = "fa fa-book"></i>
                        <p>Programming Languages</p>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6">
                    <div class = "program-info">
                        <i class = "fa fa-list-ul"></i>
                        <p>Database</p>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6">
                    <div class = "program-info">
                        <i class = "fa fa-laptop"></i>
                        <p>Computer Architecture</p>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6">
                    <div class = "program-info">
                        <i class = "fa fa-globe"></i>
                        <p>Web Engineering</p>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6">
                    <div class = "program-info">
                        <i class = "fa fa-calculator"></i>
                        <p>Maths For Computing</p>
                    </div>
                </div>
            </div>
            <a href = "<?=base_url()?>/ProgramInfo" class = "ref-button">Details</a>
        </div>
    
        <div class = "blueprint bp4">
            <div class = "explore-title">
                <i class = "fa fa-list-alt"></i>
                <h1>Postgraduate Application</h1>
            </div>
            <div>
                <p style = "margin-bottom:30px">
                    Looking to continue your studies? Apply for our postgraduate program today!
                </p>
                
                <a class = "ref-button" href = "<?=base_url()?>registerformbase" >Register</a>
            </div>
        </div>
    
        <div class = "blueprint bp5">
            <div class = "explore-title">
                <i class = "fa fa-handshake-o"></i>
                <h1>Reserve Facility</h1>
                <p>Reserve a Lecture Hall for your future use.</p>
            </div>
            <div>
                <a class = "ref-button" href = "<?=base_url()?>ReserveFacility">Apply</a>
            </div>
        </div>
    
        <div class = "blueprint bp6">
            <div class = "explore-title">
                <i class = "fa fa-map"></i>
                <h1>Location</h1>
                <p></p>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.417567346954!2d116.1208770455551!3d6.036496356938048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x323b6b7020cc3bf9%3A0x1c7bd63eab46aa26!2sFaculty%20Of%20Computing%20And%20Informatics%20(FCI)!5e0!3m2!1sen!2smy!4v1652054826698!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    
        <div class = "blueprint bp7">
            <div class = "explore-title">
                <i class = "fa fa-calendar"></i>
                <h1>2022</h1>
            </div>
            <div>
                <table class = "agenda">
                    <tr>
                        <th>Time</th>
                        <th>Agenda</th>
                    </tr>
                    <tr>
                        <td>2 Jan - 14 Jan</td>
                        <td>Intake</td>
                    </tr>
                    <tr>
                        <td>20 Feb - 23 Feb</td>
                        <td>Sports Day</td>
                    </tr>
                    <tr>
                        <td>9 April - 10 April</td>
                        <td>Outdoor Visit Day 1</td>
                    </tr>
                    <tr>
                        <td colspan="2">Mid Year Break (14 March - 14 June)</td>
                    </tr>
                    <tr>
                        <td>13 August - 10 August</td>
                        <td>Outdoor Visit Day 2</td>
                    </tr>
                    <tr>
                        <td>10 October - 12 October</td>
                        <td>Graduation Ceremony</td>
                    </tr>
                </table>
            </div>
            <div style = "margin-top:30px" >
                <a class = "ref-button" href = "<?=base_url()?>Updatecalendar">More Info</a>
            </div>
        </div>
</html>