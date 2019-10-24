<?php
session_start();
	echo "Welcome" .$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<h1>BANK OF INDIA</h1>
</head>
<body>
<div >
	<ul>
		<li><a href="viewaccount1.php"><b>View customer details</b></a></li>
		<li><a href="addcustomer1.php"><b>add customer</b></a></li>
		<li><a href="deletecustomer1.php"><b>delete customer</b></a></li>
		<li><a href="updcus.php"><b>update customer details</b></a></li>
		<li><a href="changacctyp.php"><b>change account type</b></a></li>
		<li><a href="changbrnch.php"><b>change branch of customer</b></a></li>
		<li><a href="viewloaninfo1.php"><b>View loan details</b></a></li>
		<li><a href="viwcrddet.php"><b>View card details of user</b></a></li>
		<li><a href="viewemployee1.php"><b>View Employee details</b></a></li>
		</ul>
		</div>
<li><a href="logout.php"><b>LOGOUT</b></a></li>
</body>
</html>
