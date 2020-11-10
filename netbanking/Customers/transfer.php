<?php

include('bal.php');
?>
<!DOCTYPE html>
<html>
<head>
    
    <style type="text/css">
    .register-form{
        width: 500px;
        margin: 0 auto;
        text-align: center;
        padding: 10px;
        padding: 10px;
        background : #c4c4c4;
        border-radius: 10px;
        -webkit-border-radius:10px;
        -moz-border-radius:10px;
    }
    .register-form form input{padding: 5px;}
    .register-form .btn{
        background: #726E6E;
        padding: 7px;
        border-radius: 5px;
        text-decoration: none;
        width: 50px;
        display: inline-block;
        color: #FFF;
    }
    .register-form .register{
        border: 0;
        width: 60px;
        padding: 8px;
    }
    </style>
</head>
<body>

    <div class="register-form">
  
        <form method="post">
            <p><label>Enter Beneficiary Acc Num&nbsp;&nbsp; :</label>
            <input id="accno" name="mobile_ac" type="text" placeholder="Enter Mobile Num">
            </p>
            <p><label>Enter Amount To Send&nbsp;&nbsp; :</label>
            <input id="amount" name="amount" type="text" placeholder="Enter Amount">
            </p>
           
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
	
</body>
</html>




<?php
if(isset($_POST['submit']))
{
	$mobile_ac=$_POST['mobile_ac'];
	$amount=$_POST['amount'];
	$date=date("Y-m-d");
	if ($amount>0)
	{
		$description="Transfered From A/C: $mobile";
	}
	
	
	//echo $date;
	
	$q="select * from customers where cust_mobile='$mobile_ac'";
	$ru=mysqli_query($conn,$q);
	while($a=mysqli_fetch_array($ru)){
		$tid=$a['cust_id'];
	}
	
		
$query="INSERT INTO `transactions`(`date`, `cust_name`, `credit`, `debit`, `description`) VALUES ('$date','$tid','$amount','0','$description')";

//$query="insert a.*,b.* from customers as a, transactions as b where a.cust_accno=";

$run=mysqli_query($conn,$query);
if($run)
{
	$desc = "Transfered To A/C: $mobile_ac";
	$query1="INSERT INTO `transactions`(`date`, `cust_name`, `credit`, `debit`, `description`) VALUES ('$date','$id','0','$amount','$desc') ";
	$run=mysqli_query($conn,$query1);
	
	echo "<script>alert('Amount transfered')</script>";
	echo "<script>window.open('bal.php','_self')</script>";
}
else{
		echo "<script>alert('Amount Not transfered')</script>";
}

}	
?>

