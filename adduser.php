<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Add User</title>
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
                            <li><a href="adminindex.html">Admin</a></li>
                            <li><a href="404">Check Blood Availability</a></li>
                            <li><a href="404">Blood Bank Stocks</a></li>
                            <li><a href="#three">Donor Status</a></li>
                            <li><a href="#three">Reports</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
    <!-- <section id="two" class="wrapper style1 fade-up">
    <div class="inner">  --> 

        <form action="validate/adduserValidate.php" method="post" class="register">
            <h1>Registration</h1>
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label>work ID *
                    </label>
                    <input type="text" name="id" />
                    <label>ID Number *
                    </label>
                    <input type="text" name="idNumber" />
                </p>
                <p>
                   <label>Email *
                    </label>
                    <input type="text" name="email" />
                    <label>username*
                    </label>
                    <input type="text" name="username" />
                </p>
            </fieldset>
            <fieldset class="row1">
                <legend>Personal Details
                </legend>
                <p>
                    <label>First Name *
                    </label>
                    <input type="text"  name="firstName" />
                      <label>Middle Name *
                    </label>
                    <input type="text"  name="middleName" />
                      
                </p>
                <p> 
                    <label>Last Name *
                    </label>
                    <input type="text"  name="lastName" />
                    <label>Phone Number *
                    </label>
                    <input type="text" maxlength="10" name="phone_number" />
                </p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
               <!--  <p>
                    <label>Privilege Level *</label>
                    <input type="radio" value="radio" name="privilege" />
                    <label class="gender">Admin</label>
                    <input type="radio" value="radio" name="privilege" />
                    <label class="gender">Clinician</label>

                </p> -->
                 
                 <p>
                   <label>Blood Bank Code *
                    </label>
                    <input type="text" maxlength="10" name="bank_code" /> 
                </p>
            
                <div class="infobox"><h4>Note</h4>
                    <p>the user must adhere to confidetiality of user information</p>
                </div>
            </fieldset>
           
            <div><button class="button">Register &raquo;</button></div>
        </form>
        <!--</section>
        </div>-->
        <!-- Footer -->
            <footer id="footer" class="wrapper style1-alt">
                <div class="inner">
                    <ul class="menu">
                        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </div>
            </footer>

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





