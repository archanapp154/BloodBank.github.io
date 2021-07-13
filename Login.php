<?php include('server.php') ?>
<html>
    <head>
        <Title>Login </Title>
    </head>
    <center><br/>  <h1>Login</h1><br/></center>
    <center>
        <form method="post">
            <table >
                <tr>
                    <td><label>Email </label></td>
                    <td><input type="email" name="email"  required></td>
                </tr>
                <tr>
                    <td><label>Password </label></td>
                    <td> <input type="password" name="password" pattern="^(?=.?[A-Z])|(?=(.*[a-z]))|^(?=(.+[\S]))(?=(.+[0-9]){1,}).{8,}" required></td>
                </tr>
                <tr>
                    <td><label>Select Yes if you are logging in as receiver</label></td>
                    <td><input type="radio" name="rec" value="Yes" checked>Yes&nbsp;&nbsp;
                    <input type="radio" name="rec" value="No">No</td>
                </tr>
            </table>
              
             <center> <input type=submit value="Login" name="login"></center>
           
        </form>
        <form action="UserRegisteration.php">
                <input type=submit value="Not Registered? Click here to register as a receiver">
        </form>
        <form action="HospitalRegisteration.php">
                <input type=submit value="Not Registered? Click here to register as a hospital">
        </form>
    </center>
</html>