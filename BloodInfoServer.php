<?php
session_start();
    $bloodgroup="";
    $quantity="";
    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
    $addr=$_SESSION['addr'];
    $mob=$_SESSION['mobile'];
    $db = mysqli_connect('localhost', 'root', 'arc99', 'bloodbank');

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $bloodgroup=mysqli_real_escape_string($db, $_POST['bgroups']);
        $quantity=mysqli_real_escape_string($db, $_POST['quantity']);
        $query = "INSERT INTO addedbloodsamples VALUES('$name','$email','$mob','$addr','$bloodgroup','$quantity')";
        mysqli_query($db, $query);
        echo '<script>alert("Information Added Successfully")</script>';
    }
    
?>