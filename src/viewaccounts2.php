
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<div >
			<h2>Accounts information</h2>
		</div>
			<table class="table table-bordered">
				<thead>
		   			<th>Account no</th>
		   			<th>Account type</th>
		   			<th>Balance</th>
		   			<th>Account branch</th>
	   			</thead>
 
			</table>
</body>
</html>
<?php
		session_start();
		$userid=$_GET['id'];
		//connect dbms 
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"dbms_project");

		$result=mysqli_query($con,"select * from account_info where USER_ID=$userid ")
		or die("failed to database");
		$row = mysqli_fetch_array($result);
		$i=0;
		for($i=0;$i<5;$i=$i+1)
		{

			echo $row[$i];
			echo "  ";
		}
?>