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
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<form action="" method="post">
  <div class="container">
    <h1>Credit/Debit Here</h1>
    <hr>
     
	 <label for="date"><b>Enter Date</b></label>
    <input type="date" placeholder="" name="date" required><br>
	
    <label for="name"><b>Customer Name</b></label>
    <input type="text" placeholder="Enter Name" name="cname" required>

    <label for="credit"><b>credit</b></label>
    <input type="text" placeholder="Enter amount" name="credit" required>
	
	
    <label for="debit"><b>Debit</b></label>
    <input type="text" placeholder="Enter amount" name="debit" required>
	
	<h4>Description</h4>
	
     <textarea rows="3" col="10" name="desc">
	 </textarea>
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

	$date=$_POST['date'];
	$cname=$_POST['cname'];
	$credit=$_POST['credit'];
	$debit=$_POST['debit'];
	$desc=$_POST['desc'];

	
	$insert="INSERT INTO `transactions` (`date`, `cust_name`, `credit`, `debit`, `description`) VALUES ('$date','$cname','$credit','$debit','$desc')";

	$run=mysqli_query($conn,$insert);
	
	if($run){
		
		echo "<script>alert('Details recorded')</style>";
		
	
	}
	
}
?>

