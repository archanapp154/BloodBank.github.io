<?php
session_start();

$firstname="";
$lastname="";
$dob="";
$password = "";
$cpassword = "";
$email= "";
$age="";
$allergy="";
$state="";
$district="";
$pincode="";
$bloodgroup="";
$errors=array();
$age;
$mobile="";
$_SESSION['success'] = "0";
#session_start();
$db = mysqli_connect('localhost', 'root', 'arc99', 'bloodbank');
if(isset($_POST['registerUser']))
{
    $firstname=mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname=mysqli_real_escape_string($db, $_POST['lastname']);
    $dob=mysqli_real_escape_string($db, $_POST['dob']);
    $email=mysqli_real_escape_string($db, $_POST['email']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    $cpassword=mysqli_real_escape_string($db, $_POST['cpassword']);
    $pcode=mysqli_real_escape_string($db, $_POST['pcode']);
    $state=mysqli_real_escape_string($db, $_POST['state']);
    $dist=mysqli_real_escape_string($db, $_POST['dist']);
    $bloodgroup=mysqli_real_escape_string($db, $_POST['bgroups']);
    $allergy=mysqli_real_escape_string($db, $_POST['allergy']);
    $age=22; #mysqli_real_escape_string($db, $_POST['age']);
    $mobile=mysqli_real_escape_string($db, $_POST['mobile']);
    
    if($password !== $cpassword)
    {
        $error=$error+1;
        echo '<script>alert("Password don\'t match")</script>';
    }
    $user_Check="SELECT * FROM receivers WHERE email='$email' AND mobile='$mobile' LIMIT 1";
    $result = mysqli_query($db, $user_Check);
    $user = mysqli_fetch_assoc($result);
    if ($user) 
    { 
      if ($user['email'] === $email) 
      {
          array_push($errors, "Email already exists");
          #echo '<script>alert("Email exists")</script>';
          
      }
      if ($user['mobile'] === $mobile) 
      {
          array_push($errors, "Mobile number already exists");
          echo '<script>alert("Mobile number already exists")</script>';
          
      }
    }
    if (count($errors) == 0)
    {
        $query = "INSERT INTO receivers VALUES('$firstname', '$lastname','$email', '$password','$mobile','$dob','$state','$dist','$pcode','$bloodgroup','$allergy')";
  	    mysqli_query($db, $query);
        if(mysqli_affected_rows($db)==1 )
        {
            #echo 'Congrats !! You are registered Click below button to login';
            header("Location:Login.php");
        }
        else
        {
                 echo '<script type="text/javascript">
                            window.onload = function () {  window.location.href = "UserRegisteration.php";
                            alert("Couldn\'t register you. Make sure you have entered right information");}
                            </script>';
        }
        
    }
    else
    {
        header("Location:UserRegisteration.php");
    }
}
   
   
   
if (isset($_POST['login'])) 
{
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $receiver=$_POST['rec'];
    if ($receiver === "Yes") 
    {
        #$password = md5($password);
        $query = "SELECT * FROM receivers WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
  	    if (mysqli_num_rows($results) == 1) 
        {
            
             $row= mysqli_fetch_assoc($results);
  	         $_SESSION['email'] = $email;
  	         $_SESSION['name'] = $row['firstname']." ".$row['lastname']; ;
             $_SESSION['addr'] = $row['address'].", ".$row['pincode'].", ".$row['state'];
             $_SESSION['mobile'] = $row['mobile'];
             $_SESSION['bloodgroup']=$row['bloodgroup'];
            # $_SESSION[]
  	         header("Location: AvailableBloodSampleReceiver.php");
  	    }
        else
        {
            echo '<script type="text/javascript">
                            window.onload = function () { 
                            window.location.href = "Login.php";
                            alert("Wrong Username or Password");}
                            </script>';
        }
            
    }
    else 
    {
  		$query = "SELECT * FROM hospital WHERE email='$email' AND password='$password'";
        $query2 = "SELECT * FROM addedbloodsamples WHERE email='$email'";
        $results = mysqli_query($db, $query);
        $results2 = mysqli_query($db, $query2);
  	        if (mysqli_num_rows($results) == 1) 
            {
                 $row2= mysqli_fetch_assoc($results2);
                 $row= mysqli_fetch_assoc($results);
                 $_SESSION['bloodgroup']=$row2['bloodgroup'];
                 $_SESSION['name'] = $row['name'];
                 $_SESSION['addr'] = $row['address'];
                 $_SESSION['mobile'] = $row['mobile'];
  	             $_SESSION['email'] = $email;
                 $_SESSION['receiver']="no";
  	             header('Location: AddBloodInfom.php');
  	        }
        else
        {
             echo '<script type="text/javascript">
                            window.onload = function () { 
                            window.location.href = "Login.php";
                            alert("Wrong Username or Password");}
                            </script>';
        }
        }
}


?>