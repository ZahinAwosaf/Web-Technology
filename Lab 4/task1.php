<!DOCTYPE html>
<html>
<head>

	<title>Information</title>

</head>

<body>

	<form action="task_class.php" method="post">
	
		Name: 	<input type="text" name="name" required> <br><br>
		Email:  <input type="text" name="email" required> <br><br>
		Gender: 
		<input type="radio" id="Male" name="gender" value="Male" required>
		<label for="male">  Male  </label>
		<input type="radio" id="Female" name="gender" value="Female">
		<label for="female">  Female  </label>
		<input type="radio" id="Other" name="gender" value="Other">
		<label for="other">  Other  </label>

		<button>Submit</button>
	</form>

</body>
</html>