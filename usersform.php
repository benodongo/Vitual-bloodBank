<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CSS Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>    
        <form action="userValidate.php" method="post" class="register">
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
                    <input type="text" maxlength="10"/>
                </p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Privilege Level *</label>
                    <input type="radio" value="radio"/>
                    <label class="gender">Admin</label>
                    <input type="radio" value="radio"/>
                    <label class="gender">Clinician</label>

                </p>
                 
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
    </body>
</html>





