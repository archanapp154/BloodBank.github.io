<?php
include('server.php');
                    $email=$_SESSION['email'];

                    $db = mysqli_connect('localhost', 'root', 'arc99', 'bloodbank');
                    if (!$db) {
                        die('Could not connect: ' . mysql_error());
                    }
                    $bloodgroup=$_SESSION['bloodgroup'];
                    $name=$_SESSION['name'];
                    $address=$_SESSION['addr'];
                    $mobile=$_SESSION['mobile'];
                
                    
//['selectedBloodGroup'];

           
                    if($_SESSION['noData']!="true")
                    {
                        $query = "INSERT INTO request_samples VALUES('$name','$mobile','$email', '$bloodgroup','$address')";
                        mysqli_query($db, $query);
                        if(mysqli_affected_rows($db) != (-1))
                        {
                        
                            echo '<script type="text/javascript">
                            window.onload = function () { 
                            window.location.href = "AvailableBloodSampleReceiver.php";
                            alert("Your Request is submitted successfully");}
                            </script>';
                            header('AvailableBloodSampleReceiver.php');
                        }
                        else
                        {       
                            echo '<script type="text/javascript">
                            window.onload = function () {  window.location.href = "AvailableBloodSampleReceiver.php";
                            alert("Your Request could not be submitted");}
                            </script>';
                            header('AvailableBloodSampleReceiver.php');
                        }
                    }
                    else
                         {       
                            echo '<script type="text/javascript">
                            window.onload = function () {  window.location.href = "AvailableBloodSampleReceiver.php";
                            alert("Your Request could not be submitted");}
                            </script>';
                            header('AvailableBloodSampleReceiver.php');
                        }
                        
            
?>
