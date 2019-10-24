<?php
// Get values from the login page
session_start();
$userid=$_GET['id'];
$password=$_GET['pass'];
$_SESSION['userid']=$user_id;

//connect to the server and DB
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbms_project");

//query
$result=mysqli_query($con,"select user_id,password from credentials where user_id='$userid' and password='$password'")
or die("failed to query database");
$result1=mysqli_query($con,"select USER_ID,password from emp_credentials where USER_ID='$userid' and password='$password'")
or die("failed to query database");
$result2=mysqli_query($con,"select USER_ID,PASSWORD from manager_credentials where USER_ID='$userid' and PASSWORD='$password'")
or die("failed to query database");
$row=mysqli_fetch_array($result);
$row1=mysqli_fetch_array($result1);
$row2=mysqli_fetch_array($result2);
    if($row['user_id']==$userid && $row['password']==$password)
      {
	     echo "Login in success!!! Welcome" .$row[username] .$row[userid];
	     $_SESSION['username']=$username;
	     header("Location:customer_home.php");
      }
    elseif ($row1['USER_ID']==$userid && $row1['password']==$password)
     {
      header("Location:employee_home.php");
     }
     elseif ($row2['USER_ID']==$userid && $row2['PASSWORD']==$password)
     {
      header("Location:managerhome.php");
     }
     
   else
      {
	     echo "Failed to connect";
	     header("Location:login.php");
      }
?>