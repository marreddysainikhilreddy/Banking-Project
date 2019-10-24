<!DOCTYPE html>
<html>
<head>
	<h1 style="text-align:center">BANK OF INDIA</h1>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		
		<form action="process.php" action=method="POST">
			<p>
				<label>Userid:</label>
				<input type="text" id="id" name="id"/>
			</p>
			
			<p>
				<label>Password:</label>
				<input type="password" id="pass" name="pass"/>
			</p>
			<p>
				<input type="submit" id="btn" value="Login"/>
			</p>
		</form>
	</div>
	<li><a href="logout.php"><b>LOGOUT</b></a></li>
</body>
</html>
