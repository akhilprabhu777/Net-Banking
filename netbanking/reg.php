<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="bootstrap/layout.css">
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>	
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<script src="bbotstrap/bootstrap.min.js"></script>
<script src="bootstrap/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/popper.min.js"></script>
<style>
* {box-sizing: border-box}

/* Add padding to containers */

.head{
	margin-top: 30px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: 2px solid grey;

  background: #f1f1f1;
}



/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 30px;
}

/* Set a style for the submit/register button */

.registerbtn {
  background-color: #000;
  color: white;
  font-weight: bold;
  font-size: 20;
  padding:  20px;
  border-radius: 50%;
  margin: 20px 0;
  border: none;
  cursor: pointer;
  width: 63%;
  }

.registerbtn:hover {
  background:green;
}


/* Add a blue text color to links */
a {
  color: green;
}


</style>
</head>
<body>
<form action="" method="post">
  <div class="container">
    <h1 class="head">Register Here</h1>
    <p>Please fill in this form to create net banking account.</p>
    <hr>
     
	
    <label><b>Customer Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input type="text" placeholder="Enter Name" name="cname" required><br>

    <label><b>Customer Mobile&nbsp;&nbsp;&nbsp;</b></label>
    <input type="text" placeholder="Enter Mobile" name="cmob" required><br>
	
	
    <label><b>Customer Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>
	
	 <label><b>Create Pass&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input type="password" placeholder="Enter Pass" name="pass" required><br>
	

    <hr>

    <p>By creating an account you agree to our <a href="https://www.fb.com">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" name="register">Register</button>
  </div>

  
</form>

</body>
</html>
<?php
include('connection.php');

if(isset($_POST['register']))
{

	
	$cname=$_POST['cname'];
	$cmob=$_POST['cmob'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];

	
	$insert="INSERT INTO `customers` (`cust_name`, `cust_mobile`, `cust_email`, `cust_pass`) VALUES ('$cname','$cmob','$email','$pass')";
	//echo $insert;
//exit;
	$run=mysqli_query($conn,$insert);
	
	if($run)
	{
		
		echo "<script>alert('Details recorded')</script>";
	}
	else
	{
				echo "<script>alert('Details not recorded')</script>";

	}
	
}
?>

