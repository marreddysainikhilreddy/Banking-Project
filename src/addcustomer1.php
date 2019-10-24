<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>enter the customer details to create</h1>
<form action="addcustomer2.php" action=method="POST">
	<p>
		<label>Userid:</label>
		<input type="text" id="id" name="id"/>
	</p>

	<p>
		<label>Password:</label>
		<input type="text" id="password" name="password"/>
	</p>
	
	<p>
		<label>Name:</label>
		<input type="text" id="name" name="name"/>
	</p>
	<p>
		<label>Account_number:</label>
		<input type="text" id="acc_num" name="acc_num"/>
	</p>
	<p>
		<label>Branch:</label>
		<input type="text" id="branch" name="branch"/>
	</p>
	<p>
		<label>Age:</label>
		<input type="text" id="age" name="age"/>
	</p>
	<p>
		<label>Gender:</label>
		<input type="text" id="gender" name="gender"/>
	</p>
	<p>
		<label>Address:</label>
		<input type="text" id="address" name="address"/>
	</p>
	<p>
		<input type="submit" id="btn" value="create"/>
	</p>
</form>
</body>
</html>