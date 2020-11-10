<?php
include('welcome.php');
?>

<html>
<body>
<form action="" method="post">
  <div class="container">
    <h1>Transactions Here</h1>
    <hr>
     
	 <label for="date"><b>From-Date</b></label>
    <input type="date" placeholder="" name="fdate" required><br>
	</br>
	
	<label for="date"><b>To-Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input type="date" placeholder="" name="tdate" required><br><br>
	  <button type="submit" class="registerbtn" name="submit">VIEW</button>
  </div>
  </br>
  <div class="container">
  <table class="table table-bordered">
  <thead>
  <tr>
  <th>S.No</th>
  <th>Date</th>
  <th>Description</th>
  <th>Credit</th>
  <th>Debit</th>
  <th>Balance</th>
  </tr>
  </thead>

</form>


<?php
if(isset($_POST['submit']))
{
	$fdate=$_POST['fdate'];
	$tdate=$_POST['tdate'];

$query="select credit,debit,date,description from `transactions` WHERE date BETWEEN '$fdate' and '$tdate' and cust_name='$id'";

$run=mysqli_query($conn,$query);
$i=1;
$balance=0;
while($a=mysqli_fetch_assoc($run))
{
$credit=$a['credit'];
$debit=$a['debit'];
$balance+= $credit-$debit;
$desc=$a['description'];
$txdate=$a['date'];

?>	
        <tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo date("d-m-Y",strtotime($txdate)); ?></td>
		<td><?php echo $desc; ?></td>
		<td><?php echo $credit; ?></td>
		<td><?php echo $debit; ?></td>
		<td><?php echo $balance; ?></td>
		</tr>
</body>
</html>

<?php 
}
}
 ?>