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
<script src="bootstrap/bootstrap.min.js"></script>
<script src="bootstrap/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/popper.min.js"></script>
</head>
<body>
<br>
<h2 align="center"><b>Customer Details Are Displayed Here</b></h2>
<br><br>

	<div class="container">
<table class="table table-bordered table-striped table-hover">
<thead class="table table-primary">
<tr>
<th>S.No</th>
<th>Customer Name</th>
<th>Customer Mobile</th>
<th>Customer Email</th>
<th>Customer Pass</th>
<th>Action</th>
</tr>
</thead>

<?php

include('connection.php');

$query="select * from `customers`";

$run=mysqli_query($conn,$query);
$i=1;
while($a=mysqli_fetch_array($run))
{
$cid=$a['cust_id'];
$cname=$a['cust_name'];
$cmob=$a['cust_mobile'];
$cemail=$a['cust_email'];
$cpass=$a['cust_pass'];

?>

        <tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $cname; ?></td>
		<td><?php echo $cmob; ?></td>
		<td><?php echo $cemail; ?></td>
		<td><?php echo $cpass; ?></td>
	    <td>
		<a href="#edit<?php echo $cid; ?>" data-toggle="modal">Edit</a>
		<a href="#delete<?php echo $cid; ?>" data-toggle="modal">Delete</a>
		</td>
		</tr>
		</div>

	<div id="edit<?php echo $cid; ?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST">
					<div class="modal-header">
						<h4 class="modal-title">Edit Customer details</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					</div>
					<div class="modal-body">

						 <div class="form-group">
							<input type="hidden" name="cid" value="<?php echo $cid; ?>"  class="form-control" required>
						</div>

						<div class="form-group">
							<label>Account Num</label>
							<input type="text" name="caccno" value="<?php echo $caccno; ?>"  class="form-control" required>
						</div>
						<div class="form-group">
							<label>Customer Name</label>
							<input type="text" name="cname" value="<?php echo $cname; ?>"  class="form-control" required>
						</div>
						<div class="form-group">
							<label>Customer Mobile</label>
							<input type="text" name="cmob" value="<?php echo $cmob; ?>"  class="form-control" required>
						</div>
						<div class="form-group">
							<label>Customer Email</label>
							<input type="text" name="cemail" value="<?php echo $cemail; ?>"  class="form-control" required>
						</div>
						
						
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-outline-info" name="update" ><span class="glyphicon glyphicon-edit"></span>Update</button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
					</div>
				</form>

			</div>
		</div>
	</div>		
			
	
	<!-- EDIT CODE -->
	<div id="delete<?php echo $cid; ?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST">
					<div class="modal-header">
						<h4 class="modal-title">Delete Customer</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					</div>
						<div class="modal-body">
						 <div class="form-group">
							<input type="hidden" name="cid" value="<?php echo $cid; ?>"  class="form-control" required>
						</div>

						<div class="form-group">
							<label>Account Num</label>
							<input type="text" name="caccnum" value="<?php echo $caccno; ?>"  class="form-control" readonly>
							<p>
							Do you want to delete the record...?
							</p>
							
						</div>
					</div>
				
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" name="delete" ><span class="glyphicon glyphicon-delete"></span>DELETE</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
					</div>
				</form>

			</div>
		</div>
	</div>	

<?php
if(isset($_POST['update']))
{
$id=$_POST['cid'];
$accno=$_POST['caccno'];
$name=$_POST['cname'];
$mob=$_POST['cmob'];
$mail=$_POST['cemail'];


$sq="UPDATE `customers` SET `cust_accno`='$accno',`cust_name`='$name',`cust_mob`='$mob',`cust_email`='$email' WHERE `cust_id`='$id'";
//echo $sq;
//exit;
$y=mysqli_query($conn,$sq);
if($y){
echo '<script>alert("UPDATE SUCCESS")</script>';
echo '<script>window.location.href="fetch.php"</script>';
}
}
if(isset($_POST['delete']))
{
$accnum=$_POST['caccno'];


$sq2="DELETE FROM `customers` WHERE `cust_accno`='$accnum'";
//echo $sq;
//exit;
$yy=mysqli_query($conn,$sq2);
if( $yy){
echo '<script>alert("DELETE SUCCESS")</script>';
echo '<script>window.location.href="fetch.php"</script>';
}
}

?>
</body>
</html>
<?php } ?>