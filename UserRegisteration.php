<?php include('server.php') ?>
<html>
    <head>
        <title> Registeration Page - User</title>
        <style>
            .container
        </style>
         
    </head>
    <body>
        
        <div class="container">
            <center>   <h1>Registertion For Receivers</h1><br/> <br /> </center>
            <center>
            <form  method=post>
                <label align=left>First Name </label>
                <input type="text" name="firstname" required align=left> <br/> <br /> 
                <label>Last Name </label>
                <input type="text" name="lastname"  required><br /><br />
                <label>Contact Number </label>
                <input type="text" name="mobile"  required maxlength="10" minlength="10" pattern="[0-9]{10}"><br /><br />
                <label>Email </label>
                <input type="email" name="email"  required><br /><br />
                <label>Password </label>
                <input type="password" name="password" pattern="^(?=.?[A-Z])|(?=(.*[a-z]))|^(?=(.+[\S]))(?=(.+[0-9]){1,}).{8,}" required>&nbsp;&nbsp;<a href=PasswordInfo.html target="_blank">Click here for Knowing Password Criteria</a>
                <br /><br />
                <label>Confirm Password </label>
                <input type="password" name="cpassword"  required><br /><br />
                <label>Date of Birth </label>
                <input type="date" name="dob"  required><br /><br />
                <label>State</label>
                <input type="text" name="state"  required><br /><br />
                <label>Address</label>
                <input type="text" name="dist"  required><br /><br />
                <label>Pincode</label>
                <input type="text" name="pcode" maxlength="6" size="6" required><br /><br />
                <label>Blood Group </label>
                <select  name="bgroups"  id="bgroups" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                    <option value="A">A-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                    <option value="O-">O-</option>
                </select><br /><br />
                <label>Allergy </label>
                <input type="text" name="allergy" placeholder="If any"><br /><br />
                <input type="submit" value="Register" name="registerUser">
            </form>
            <form action="Login.php">
                <input  name="login" type=submit value="Already Registered? Click here to Login">
            </form>
            </center>
        </div>
    </body>
</html>