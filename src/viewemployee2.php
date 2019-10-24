
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
		   			<th>USER_ID</th>
		   			<th>NAME</th>
		   			<th>BRANCH</th>
		   			<th>STATUS</th>

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

		$result=mysqli_query($con,"select user_id,emp_name,branch,status from emp_empview where USER_ID=$userid ")
		or die("failed to database");
		$row = mysqli_fetch_array($result);
		$i=0;
		for($i=0;$i<4;$i=$i+1)
		{
			echo $row[$i];
			echo "------------- ";
		}
?>