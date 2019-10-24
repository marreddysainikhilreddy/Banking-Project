


<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<div >
			<h2>Employee information</h2>
		</div>
			<table class="table table-bordered">
				<thead>
		   			<th>account_number</th>
		   			<th>card_type</th>
		   			<th>card_number</th>

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

		$result=mysqli_query($con,"select account_number,card_type,card_number from card_info where USER_ID=$userid ")
		or die("failed to database");
		$row = mysqli_fetch_array($result);
		$i=0;
		for($i=0;$i<3;$i=$i+1)
		{
			echo $row[$i];
			echo "------------- ";
		}
?>