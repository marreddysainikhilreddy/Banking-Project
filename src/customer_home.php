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
		<li><a href="viewaccount1.php"><b>View accounts</b></a></li>
		<li><a href="viewemployee1.php"><b>employee info</b></a></li>
		<li><a href="viewcard1.php"><b>Card info</b></a></li>
		<li><a href="viewloaninfo1.php"><b>View loans</b></a></li>
		<li><a href="updatedetreq.php"><b>Request to update my details</b></a></li>
		</ul>
		</div>
<li><a href="logout.php"><b>LOGOUT</b></a></li>
</body>
</html>
