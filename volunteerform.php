<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>virtual Blood Bank </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>
    <!-- Sidebar -->
            <section id="sidebar">
                <div class="inner">
                    <nav>
                        <ul>
                            <li><a href="logout.php"><p>Home</p></a></li>
                            <li><a href="404"><p>Check Blood Availability</p></a></li>
                            <li><a href="404"><p>Blood Bank Stocks</p></a></li>
                            <li><a href="#three"><p>Donor Status</p></a></li>
                            <li><a href="#three"><p>Reports</p></a></li>
                        </ul>
                    </nav>
                </div>
            </section>
    <!-- <section id="two" class="wrapper style1 fade-up">
    <div class="inner">  -->  
        <form action="volunteer.php" method="post" class="register">
            <h1>Donor Registration</h1>
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label>National ID *
                    </label>
                    <input type="text" name="nationalId" required="required"/>
                    <label>Phone Number *
                    </label>
                    <input type="text" maxlength="10" name="phone_number" required="required" />
                </p>
                <p>
                   <label>Email *
                    </label>
                    <input type="text" name="email" required="required"/>
                    <label>username*
                    </label>
                    <input type="text" name="username" required="required"/>
                </p>
            </fieldset>
            <fieldset class="row1">
                <legend>Personal Details
                </legend>
                <p>
                    <label>First Name *
                    </label>
                    <input type="text"  name="firstName" required="required" />
                      <label>Middle Name *
                    </label>
                    <input type="text"  name="middleName" required="required"/>
                      
                </p>
                <p> 
                    <label>Last Name *
                    </label>
                    <input type="text"  name="lastName" />
                    <label>Date of Birth</label>
                                <div id='birthDate'>
                                    <input type='text'  name="dob"  required="required"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                </div>
                </p>
                <p>
                    
                                <label>Donation Date</label>
                                <div class='input-group date' id='donationDate'>
                                    <input type='text' class="form-control" name="dod" required="required"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                </div>
                </p>
                <p> 
                    <label>County
                    </label>
                    <input type="text"  name="county" required="required"/>
                    <label>Sub-County
                    </label>
                    <input type="text" maxlength="10" name="sub_county" required="required" />
                </p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Blood Group
                    </label>
                                <select name="blood_group" required="required">
                                    <option value="0"></option>
                                    <option value="1">A Positive</option>
                                    <option value="2">A Negative</option>
                                    <option value="3">B Positive</option>
                                    <option value="4">B Negative</option>
                                    <option value="5">O Positive</option>
                                    <option value="6">O Negative</option>
                                    <option value="7">AB Positive</option>
                                    <option value="8">AB Negative</option>
                                    <option value="9">Unknown</option>
                                </select>

                </p>
                 
                 <p>
                   <label>Blood Bank
                    </label>
                    <input type="text" maxlength="10" name="bank_name" required="required"/> 
                </p>
            
                <!-- <div class="infobox"><h4>Note</h4>
                    <p>the user must adhere to confidetiality of user information</p>
                </div> -->
            </fieldset>
           
            <div><button class="button">Register &raquo;</button></div>
        </form>
        <!--</section>
        </div>-->
        <!-- Footer -->
            <!-- <footer id="footer" class="wrapper style1-alt">
                <div class="inner">
                    <ul class="menu">
                        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </div>
            </footer> -->

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

    </body>
</html>





