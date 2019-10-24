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
		<li><a href="viewaccount1.php"><b>VIEW CUSTOMER DETAILS</b></a></li>
		<li><a href="viewemployee1.php"><b>DELETE EMPLOYEE</b></a></li>
		<li><a href="viewcard1.php"><b>A</b></a></li>
		<li><a href="viewloaninfo1.php"><b>View loans</b></a></li>
		</ul>
		</div>
<li><a href="logout.php"><b>LOGOUT</b></a></li>
</body>
</html>
<meta http-equiv="refresh" content="300;url=logout.php"/>