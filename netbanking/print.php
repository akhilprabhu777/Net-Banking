<html>
<body>
<form action="" method="post">
  <div class="container">
    <h1>Transactions Here</h1>
    <hr>
     
	 <label for="date"><b>From-Date</b></label>
    <input type="date" placeholder="" name="fdate" required><br>
	
	<p>To</p>
	
		 <label for="date"><b>To-Date</b></label>
    <input type="date" placeholder="" name="tdate" required><br><br>
	  <button type="submit" class="registerbtn" name="submit">Submit</button>
  </div>
  <div class="container">
  <table class="table table-bordered">
  <thead>
  <tr>
  <th>S.No</th>
  <th>Credit</th>
  <th>Debit</th>
  </tr>
  </thead>

</form>


<?php

include('connection.php');
if(isset($_POST['submit'])){

$fdate=$_POST['fdate'];
$tdate=$_POST['tdate'];



$query="select * from `transactions` WHERE date BETWEEN '$fdate' and '$tdate'";

$run=mysqli_query($conn,$query);
$i=1;
while($a=mysqli_fetch_assoc($run))
{
$credit=$a['credit'];
$debit=$a['debit'];

?>	
        <tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $credit; ?></td>
		<td><?php echo $debit; ?></td>
		</tr>
</body>
</html>

<?php } } ?>