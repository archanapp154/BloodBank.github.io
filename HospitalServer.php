<?php
session_start();

$name="";
#$lastname="";
$nob="";
$password = "";
$cpassword = "";
$email= "";
$auth="";
#$allergy="";
$state="";
$address="";
#$pincode="";
#$bloodgroup="";
$errors=array();
#$age;
$mobile="";

#session_start();
$db = mysqli_connect('localhost', 'root', 'arc99', 'bloodbank');
if (isset($_POST['regH']))
{
    $name=mysqli_real_escape_string($db, $_POST['name']);
    #$lastname=mysqli_real_escape_string($db, $_POST['lastname']);
    $nob=mysqli_real_escape_string($db, $_POST['nob']);
    $email=mysqli_real_escape_string($db, $_POST['email']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    $cpassword=mysqli_real_escape_string($db, $_POST['cpassword']);
    #$pcode=mysqli_real_escape_string($db, $_POST['pcode']);
    $state=mysqli_real_escape_string($db, $_POST['state']);
    $address=mysqli_real_escape_string($db, $_POST['dist']);
    #$bloodgroup=mysqli_real_escape_string($db, $_POST['bgroups']);
    #$allergy=mysqli_real_escape_string($db, $_POST['allergy']);
    $auth= mysqli_real_escape_string($db, $_POST['auth']);
    $mobile=mysqli_real_escape_string($db, $_POST['mobile']);
    
    if($password !== $cpassword)
    {
        $error=$error+1;
        echo '<script>alert("Password don\'t match")</script>';
    }
    $user_Check="SELECT * FROM hospital WHERE email='$email' AND mobile='$mobile' LIMIT 1";
    $result = mysqli_query($db, $user_Check);
    $user = mysqli_fetch_assoc($result);
    if ($user) 
    { 
      if ($user['email'] === $email) 
      {
          array_push($errors, "Email already exists");
          echo '<script>alert("Email exists")</script>';
          
      }
      if ($user['mobile'] === $mobile) 
      {
          array_push($errors, "Mobile number already exists");
          echo '<script>alert("Mobile number already exists")</script>';
          
      }
    }
    if (count($errors) == 0)
    {
        $query = "INSERT INTO hospital VALUES('$name', '$state','$address','$mobile','$nob','$auth','$email', '$password')";
  	    mysqli_query($db, $query);
        echo 'Congrats !! You are registered Click below button to login';
        header("Location:Login.php");
        
    }
    else
    {
         echo '<script>alert("Couldn\'t Register You Make Sure you fill all fields correctly" )</script>';
    }
}


?>