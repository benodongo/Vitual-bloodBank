<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Donor Registration Form</title>
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
                            <li><a href="adminindex.html"><p>Home</a></p></li>
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

       <form action="userValidate.php" method="post" class="register">
            <h1>Blood Transfer </h1>
            <fieldset class="row1">
                <legend>Blood Transfer Form
                </legend>
                <p>
                    <label>Transfer From
                    </label>
                    <select name="transfer_from">
                    <option value="o"></option>
                    <option value="1">KNH</option>
                        
                    </select>
                    <label>Transfer To
                    </label>
                    <select name="transfer_from">
                    <option value="o"></option>
                    <option value="1">Thika Level 5</option>
                        
                    </select>
                </p>
                <p>
                     
                    <label>Blood Group
                    </label>
                                <select name="blood_group">
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
                   <label>No. of Units
                    </label>
                    <input type="number" name="units" />
                    <label>Transfer Date</label>
                                <div class='input-group date' id='transferDate'>
                                    <input type='text' class="form-control" name="transferDate" required />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                </div>
                </p>
            </fieldset>
           
            <div><button class="button">submit &raquo;</button></div>
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





