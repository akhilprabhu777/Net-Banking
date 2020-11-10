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
 <div id="login">
        <h3 class="text-center text-black pt-5">WELCOME TO ACCOUNT CREATION !</h3>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <form class="form" action="" method="post">
                           
                            <div class="form-group">
                                <input type="text" name="name"  class="form-control" placeholder="Enter Name">
                            </div>
							
                            <div class="form-group">                              
                                <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile">
                            </div>
							
							<div class="form-group">                              
							<input type="text" name="email" class="form-control" placeholder="Enter Email">
                            </div>
							
							<div class="form-group">                              
							 <input type="pass" name="pass"  class="form-control" placeholder="Create Password">
                            </div
							
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
							<div class="form-group">
							<h5>NOTE:Your mobile number is your USERNAME</h5>
							</div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,'netbanking');

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];

	$insert="INSERT INTO `customers` (`cust_name`, `cust_mobile`, `cust_email`, `cust_pass` ) VALUES ('$name','$mobile','$email','$pass')";

	$run=mysqli_query($conn,$insert);
	
	if($run){
			
		echo '<script>window.open("login.php","_self")</script>';
	}
	else{
		echo '<script>window.location.href="create.php")</script>';
	}
}
?>

