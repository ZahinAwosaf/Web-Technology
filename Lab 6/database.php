<?php

	session_start();
	$u_name = $_SESSION["Name"];
	$u_email = $_SESSION["Email"];
	$u_password = $_SESSION["Password"];
	$u_gender = $_SESSION["Gender"];
	$img = $_FILES['file']['name'];

?>



<?php

/*
	if(isset($_POST['submit']))
	{
		$query = "INSERT INTO 'zahinDB' ('Name', 'Email', 'Password', 'Gender', 'Image') VALUES (:Name, :Email, :Password, :Gender, :Image)";
		$dns= "mysql:host=localhost;dbname=zahinDB";
		$username= "root";
		$password= "";
	}

	try
	{
		$db = new PDO($dns, $username, $password);
		$statement = $db->prepare($query);
		
	}
	catch(Exception $e)
	{
		$error_message = $e -> getMessage();
		echo "<p>Error: $error_message</p>";
	}

*/


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "zahinDB";

	try 
	{
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql = "INSERT INTO table_zahin (Name, Email, Password, Gender, Image) VALUES ('$u_name', '$u_email', '$u_password', '$u_gender', '$img')";
    	
    	$conn->exec($sql);
    	echo "New record created successfully";
    }
	catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Registration successful</h3>
  <a href="login.php">Login</a>
</body>
</html>