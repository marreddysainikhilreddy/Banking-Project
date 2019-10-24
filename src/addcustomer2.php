<?php
		
		$userid=$_GET['id'];
		$password=$_GET['password'];
		$name=$_GET['name'];
		$acc_num=$_GET['acc_num'];
		$branch=$_GET['branch'];
		$age=$_GET['age'];
		$gender=$_GET['gender'];
		$address=$_GET['address'];
		//connect dbms
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"dbms_project");
		$result=mysqli_query($con,"insert into customer (USER_ID, ACCOUNT_NUMBER,CUSTOMER_NAME,BRANCH, AGE, GENDER, ADDRESS) 
		values('$userid','$acc_num','$name','$branch','$age','$gender','$address')") or die("failed to connect database or user already exist ");
		$result1=mysqli_query($con,"insert into credentials(USERNAME,USER_ID,PASSWORD) values('$name','$userid','$password')") or die("failed to connect database or user already exist");
		if($result=1)
		{
			echo "Customer Successfully created";
		}
?>