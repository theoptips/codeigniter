<!DOCTYPE HTML>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php echo $username; echo $age; echo "Account#".$account_number;?>
		<form action="">
			<label for="email">Email:</label>
			<input type="text" name="email" id="email"/>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password"/>
			<input type="submit" value="submit"/>
		</form>
	</body>
</html>