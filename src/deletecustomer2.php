<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<div >
			<h2>OPERATION</h2>
		</div>
</body>
</html>

<?php
		session_start();
		$userid=$_GET['id'];
		//connect dbms 
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"dbms_project");

		$result=mysqli_query($con,"delete from customer where USER_ID=$userid ")
		or die("failed to database");
		if($result=1)
		{
			echo "success";
		}
?>