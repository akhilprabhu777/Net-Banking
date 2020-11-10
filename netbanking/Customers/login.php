<?php
session_start();

?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
		
	}
    .login-form form {
    	margin-bottom: 55px;
        background: #ffffff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 10 20 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 100px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Customer Login</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="login">Log in</button>
        </div>
        <div class="clearfix">
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
   
</div>
</body>
</html>  
<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,'netbanking');

if(isset($_POST['login']))
{
	$mobile=$_POST['mobile'];
	$pass=$_POST['pass'];
	
	$query="select * from customers where cust_mobile='$mobile' and cust_pass='$pass'";
	//echo $query;
	//exit;
		$run=mysqli_query($conn,$query);
	if(mysqli_num_rows($run)>0) 
	{
			$a=mysqli_fetch_array($run);
		$_SESSION['id']=$a['cust_id'];
		$_SESSION['cname']=$a['cust_name'];
		$_SESSION['mobile']=$a['cust_mobile'];
		$_SESSION['email']=$a['cust_email'];
		$_SESSION['pass']=$a['cust_pass'];
	
			echo '<script>alert("Login successsfully")</script>';
			echo '<script>window.open("home.php","_self")</script>';
	}
	else{
		echo '<script>alert("Wrong Password!!!")</script>';
	}	
}
?>	
	
	
                              		                            