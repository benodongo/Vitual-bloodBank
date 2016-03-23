<!DOCTYPE html>
<html>
<head>
    <title>forms for blood donation</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="form.css">

</head>
<body>
<script type="text/javascript">

    (function ($) {

        $(document).ready(function() {
            $('#birthDate').datetimepicker();
            $('#donationDate').datetimepicker();
        });
    }(jQuery));
    </script>
<div class="row">
    <div class="jumbotron col-md-8 col-md-offset-2">
<div class="form-group col-md-offset-2 col-md-8">
    <form class="form-horizontal" action="volunter.php" method="post">
    <h3>Volunteer Registration</h3>
            <div class="form-group">
                    <label>National ID</label>
                    <input type="text" class="form-control" name="nationalId" value="" size="12" maxlength="8" required />
             </div>
             <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name="username" value="" size="12" maxlength="8" required>
             </div>
             <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" value="" size="12" maxlength="8" required>
             </div>
             <div class="row">
                    <label>Full Names</label><br/>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="firstName" placeholder="First Name" value="" size="30" required />
                    </div>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="middleName"  placeholder="Middle Name" value="" size="25" required />
                    </div>

                    <div class="col-md-4">
                        <input type="text" class="form-control" name="lastName" placeholder="Last Name" value="" size="30" required />
                    </div>
                </div>
                <div class="form-group">
                                <label>Blood Group</label>
                                <select class="form-control" name="blood_group">
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
                </div>
                <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="phone_number" value="" size="12" maxlength="8" required>
                </div>
                <div class="form-group">
                                <label>Date of Birth</label>
                                <div class='input-group date' id='birthDate'>
                                    <input type='text' class="form-control" name="dob" required />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                </div>
                 </div>
                 <div class="form-group">
                <label>County</label>
                <input type="text" class="form-control" name="county" value="" size="12" maxlength="8" required>
                </div>
                <div class="form-group">
                <label>Sub County</label>
                <input type="text" class="form-control" name="sub_county" value="" size="12" maxlength="8" required>
                </div>
                <div class="form-group">
                                <label>Donation Date</label>
                                <div class='input-group date' id='donationDate'>
                                    <input type='text' class="form-control" name="dob" required />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                </div>
                 </div>
                <div class="form-group">
                <label>Blood Bank Name</label>
                <input type="text" class="form-control" name="bank_name" value="" size="12" maxlength="8" required>
                </div>
                <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                </div>
    </form> 
  </div>
  <a href="login.php">login</a>
  <a href="usersform.php"> admin</a>
</body>
</html>