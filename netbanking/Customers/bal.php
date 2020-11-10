<?php
include('welcome.php');

?>
<?php

$query="select (sum(credit)-sum(debit)) as balance from transactions where cust_name='$id'";
//echo $query;
//exit;
$run=mysqli_query($conn,$query);
while($a=mysqli_fetch_array($run)){
	
$bal=$a['balance'];
}
if($bal>0){
echo "Your available balance is: $bal";

}
else{
	echo "Your available balance is:0";
}
	
?>

	
