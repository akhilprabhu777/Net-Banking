<?php
include('web.php');

if(!isset($_SESSION))
	session_start();
if(isset($_SESSION['id']))
{
	$uid=$_SESSION['uid'];
	$cname=$_SESSION['cust_name'];
	$cusername=$_SESSION['cust_username'];
	$cpass=$_SESSION['cust_pass'];

}
else
	header("Location:login.php");

  echo "<h3>Your current pass is: $cpass</h3>";
?>
<!DOCTYPE html>
<html>
<head>
    
    <style type="text/css">
    .register-form{
        width: 500px;
        margin: 0 auto;
        text-align: center;
        padding: 10px;
        padding: 10px;
        background : #c4c4c4;
        border-radius: 10px;
        -webkit-border-radius:10px;
        -moz-border-radius:10px;
    }
    .register-form form input{padding: 5px;}
    .register-form .btn{
        background: #726E6E;
        padding: 7px;
        border-radius: 5px;
        text-decoration: none;
        width: 50px;
        display: inline-block;
        color: #FFF;
    }
    .register-form .register{
        border: 0;
        width: 60px;
        padding: 8px;
    }
    </style>
</head>
<body>
    <div class="register-form">
  
        <form method="post">
            <p><label>Enter New Password&nbsp;&nbsp; :</label>
            <input id="password" name="password" type="password" placeholder="New password">
            </p>
            <p><label>Confirm Password &nbsp;&nbsp; :</label>
            <input id="confirmpassword" name="cpassword" type="password" placeholder="Confirm password">
            </p>
           
            <input type="submit" name="update" value="Submit">
        </form>
    </div>
	
</body>
</html>

<?php

if(isset($_POST['update']))
{
	$pass=$_POST['password'];
	$cpass=$_POST['cpassword'];
	
	if($pass!=$cpass){
		echo "<script>alert('passwords not matching')</script>";
		
	}
	else{
	
		$fpass=$pass;
		
	}
	$query="UPDATE `passwords` SET `pass`='$fpass' where `uid`='$uid'";
	$run=mysqli_query($conn,$query);
	if($run)
	{
		echo "<script>alert('pass changed')</script>";
		echo "<script>window.open('cpass.php','_self')</script>";
	}	
}



?>