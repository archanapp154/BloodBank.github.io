<?php include("server.php")?>
<html>
    <head>
        <title>Available Blood Samples</title>
      
    </head>
    <body>
        <div>
            
            <nav>
                <a href="UserRegisteration.php">Register as blood receiver</a> |
                <a href="HospitalRegisteration.php">Register as Hospital</a> |
                <a href="Login.php">Log in</a> |
               
            </nav>
        </div>
        <div><h2>Available Blood Samples</h2></div>
        <br/><br/>
        <div>
            <table border="2">
                <tr>
                    <th>Hospital's Name</th>
                    <th>Address</th>
                    <th>Available Blood Group</th>
                    <th>Available Quantity</th>
                    <th>Email</th>
                    <th>Contact No</th>
                  
                </tr>
                <?php 
                    
                    $db=mysqli_connect('localhost', 'root', 'arc99', 'bloodbank');
                    $records = mysqli_query($db,"select * from addedbloodsamples"); 
                    while($data = mysqli_fetch_array($records))
                    {
                    ?>
                        <tr>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['address']; ?></td>
                            <td><?php echo $data['bloodgroup']; ?></td>
                            <td><?php echo $data['quantity']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['mobile']; ?></td>
                        </tr>	
                 <?php
                    }   
                
                ?>
            </table>
            <br/>&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;
            <form action="Login.php"><input type="submit" id="RequestButton" value="Request Sample"></form>
            
        </div>
    </body>
    
</html>
