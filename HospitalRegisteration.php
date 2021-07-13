<?php include('HospitalServer.php') ?>
<html>
    <title>Hospital Registeration</title>
    <body>
        
   
    <form method=post>
        <center>
        <table >
            <tr > <th><center>   &emsp;&emsp;&emsp;&emsp;&emsp;<h1>Registertion For Hospital</h1><br/></center></th></tr>
                <tr>
                    <td><label>Name </label></td>
                    <td><input type="text" name="name"  placeholder="Enter your Hospital's name" required></td>
                </tr>
                <tr>
                    <td><label>State</label></td>
                    <td><input type="text" name="state"  required></td>
                </tr>
                <tr>
                    <td><label>Address</label></td>
                    <td><textarea name="dist"  rows="2" column ="50" required></textarea></td>
                </tr>  
                <tr>
                    <td><label>Mobile</label></td>
                    <td><input type="text" name="mobile" maxlength="10" size="10"  pattern="[0-9]{10}" required></td><br /><br />
                </tr>
                <tr>
                    <td><label>No of Beds </label></td>
                    <td><input type="text" name="nob"  required></td>
                </tr>
                <tr>
                    <td><label>Authorisation</label></td>
                    <td><input type="radio" name="auth" value="Government"  checked required>Government&nbsp;&nbsp;<input type="radio" value="private" name="auth"  required>Private  </td>
                </tr>
                <tr>
                    <td> <label>Email </label></td>
                    <td><input type="email" name="email"  required></td>
                </tr>
                <tr>
                    <td><label>Password </label></td>
                    <td> <input type="password" name="password" pattern="^(?=.?[A-Z])|(?=(.*[a-z]))|^(?=(.+[\S]))(?=(.+[0-9]){1,}).{8,}" required> &nbsp&nbsp<a href=PasswordInfo.html target="_blank">Click here for Knowing Password Criteria</a></td> &nbsp;&nbsp;
                </tr>
                <tr>
                    <td><label>Confirm Password </label></td>
                    <td><input type="password" name="cpassword"  required></td>
                </tr>
            </table><br/>
            </center>
             <center> <input type=submit value="Register" name="regH"></center>
    </form>
       <center> <form action="Login.php">
                <input type=submit value="Already Registered? Click here to Login">
            </form></center>
         </body>
</html>