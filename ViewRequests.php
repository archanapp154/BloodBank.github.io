<?php include("server.php") ?>
<html>
    <head>
        <title>Available Blood Samples</title>
     
        
       
    </head>
    <body>
        <div>
            
            <nav>
                <a href="AddBloodInfom.php">Add  Blood Info</a> |
                <a href="AvailableBloodSampleHospital.php">Available Blood Samples</a> |
                <a href="logout.php">Logout</a>
            </nav>
        </div>
        <div><h2>Available Blood Samples</h2></div>
        <br/><br/>
        <div>
            <table border="2">
                <tr>
                    <th>Reciver's Name</th>
                    <th>Address</th>
                    <th>Blood Group</th>
                    <th>Email</th>
                    <th>Contact No</th>
                </tr>
                <?php 
                    
                    $db=mysqli_connect('localhost', 'root', 'arc99', 'bloodbank');
                    $records = mysqli_query($db,"select * from request_samples"); 
                    while($data = mysqli_fetch_array($records))
                    {
                    ?>
                        <tr>
                            <td><?php echo $data['receiver_name']; ?></td>
                            <td><?php echo $data['receiver_address']; ?></td>
                            <td><?php echo $data['bloodtype'];?></td>
                            <td><?php echo $data['receiver_email']; ?></td>
                            <td><?php echo $data['receiver_contact']; ?></td>
                            
                                
                        </tr>	
                 <?php
                    }   
                
                ?>
            </table>
           
        </div>
    </body>
    
</html>
