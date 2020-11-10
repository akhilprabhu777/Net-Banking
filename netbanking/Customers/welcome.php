<?php

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,'netbanking');
	
if(!isset($_SESSION))
	session_start();
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id'];
	$cname=$_SESSION['cname'];
	$mobile=$_SESSION['mobile'];
	$email=$_SESSION['email'];
	$pass=$_SESSION['pass'];

}
else
	header("Location:login.php");

?>

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
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="bal.php" name="cbal">Check bal</a>
  <a href="cpass.php" name="cpass">Change pass</a>
  <a href="transfer.php" name="transfer">Transfer</a>
  <a href="stmt.php" name="transfer">Account Statement</a>
  <a href="logout.php" name="logout">Logout</a>
</div>
</div><br><br>




