<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<title>Registration</title>

</head>

<body>

	<form action="upload.php" method="post">
		Name: <input type="text" name="name" required><br><br>
		Email: <input type="email" name="email" required><br><br>
		Password: <input type="password" name="password" required><br><br>
		Gender: <input type="radio" name="gender" value="male" required="">Male 
				<input type="radio" name="gender" value="female">Female<br><br>

		<input type="submit" name="submit">

</body>
</html>
