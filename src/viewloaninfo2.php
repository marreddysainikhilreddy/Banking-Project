
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
		   			<th>user_Id</th>
		   			<th>ACCOUNT_NUMBER</th>
		   			<th>INTEREST</th>
		   			<th>LOAN_TYPE</th>
		   			<th>LOAN_AMOUNT</th>

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

		$result=mysqli_query($con,"select * from loan_info where USER_ID=$userid ")
		or die("failed to database");
		$row = mysqli_fetch_array($result);
		$i=0;
		for($i=0;$i<5;$i=$i+1)
		{
			echo $row[$i];
			echo "------------- ";
		}
?>