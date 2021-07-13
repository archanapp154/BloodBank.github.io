<?php include('BloodInfoServer.php') ?>

<html>
    <title>Add Blood Info</title>
    <body>
        <div>
            
            <nav>
                <a href="ViewRequests.php">View Requests</a> |
                <a href="AvailableBloodSampleHospital.php">Available Blood Samples</a> |
                <a href="logout.php">Logout</a>
            </nav>
        </div>
   
    <form method=post>
        <center>
        <table >
            <tr> <th><center>   <h1>Adding Blood Information</h1><br/></center></th></tr>
                <tr>
                    <td><label>Blood Group </label></td>
                    <td>
                        <select  name="bgroups"  id="bgroups" required>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                        <option value="A">A-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                        <option value="O-">O-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Quantity</label></td>
                    <td><input type="text" name="quantity" pattern="[0-9]{1,}" required></td>
                </tr>
            </table><br/>
            </center>
             <center> <input type=submit value="Register" name="regH"></center>
    </form>
         </body>
</html>