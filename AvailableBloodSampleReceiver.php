<?php include("server.php") ?>
<html>
    <head>
        <title>Available Blood Samples</title>
     
       
       
    </head>
    <body>
        <div>
            
            <nav>
                
                <a href="AvailableBloodSampleReceiver.php">Available Blood Samples</a> |
                <a href="logout.php">Logout</a>
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
                    
                    $email=$_SESSION['email'];
                    $bloodgroup=$_SESSION['bloodgroup'];
                    $db=mysqli_connect('localhost', 'root', 'arc99', 'bloodbank');
                    $records = mysqli_query($db,"select * from addedbloodsamples where bloodgroup='$bloodgroup'"); 
                    $data= mysqli_fetch_array($records);
                    if($data){
                        while($data)
                        {
                    ?>
                        <tr>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['address']; ?></td>
                            <td><?php echo $data['bloodgroup'];?> </td>
                            <td><?php echo $data['quantity']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['mobile']; ?></td>
                            
                            
                                
                        </tr>	
                 <?php
                    }   }
                    else{
                        $_SESSION['noData']="true";
                    }
                
                ?>
            </table>
            <form action="RequestSampleServer.php" method=post>
                <br/>&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;
                <input type=submit value="Request Sample" name="request_Sample">
            </form>
        </div>
    </body>
    
</html>
