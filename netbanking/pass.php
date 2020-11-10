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

</head>
<body>

<form action="" method="post">
  <div class="container">
    <h1>Register</h1>
    
    <hr>
     
	<?php include ('connection.php');?>
    <form action="" method="post">
  <div class="container">
  <div class="col-sm-6">
  <div class="form-group">
			<?php
			$sql="SELECT * FROM `customers`";
			echo "<select class='form-control' name='custid'>";
			echo "<option disabled selected value>Select Customer</option>";
			foreach ($conn->query($sql) as $row){
			echo "<option value=".$row['cust_id'].">".$row['cust_id']."->".$row['cust_name']."</option>";
			}
			echo "</select>";
			?>
  </div>
  </div>
  
    <div class="col-sm-6">
    <div class="form-group">
    <label for="uname"><b>Create Username</b></label>
    <input type="text" placeholder="Enter username" name="uname" required>
    </div>
    </div>
	
	<div class="col-sm-6">
    <div class="form-group">
    <label for="psw"><b>Create New Password</b></label>
    <input type="password" placeholder="New Password" name="pass" value="$123456789" required>
	</div>
    </div>
	
	<div class="col-sm-6">
    <div class="form-group">
	<label for="psw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="cpass" value="$123456789" required>
	</div>
    </div>

    <hr>

    <button type="submit" class="registerbtn" name="submit">Submit</button>
  </div>

  
</form>

</body>
</html>
<?php
include('connection.php');

if(isset($_POST['submit']))
{   
    $pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	
	if($pass!=$cpass)
	{
		echo "<script>alert('Passwords not matching! Enter correctly')</script>";
		echo "<script>window.open('pass.php','_self')</script>";
		
	}
	else
	{
	
	$custid=$_POST['custid'];
	$uname=$_POST['uname'];
	$cpass=$_POST['cpass'];

	
	$insert="INSERT INTO `passwords`(`cust_name`, `cust_username`, `cust_pass`) VALUES ('$custid','$uname','$cpass')";
   
	$run=mysqli_query($conn,$insert);
	
	if($run)
	{
		
		echo "<script>alert('Details recorded')</style>";
		
	
	}
	}
	
}
?>

