<?php

class info
{
	public $name;
	public $email;
	public $gender;

	function set_name($name)
	{
		$this->name = $name;
	}


	function get_name()
	{
		return $this->name;
	}

	function set_email($email)
	{
		$this->email = $email;
	}

	function get_email()
	{
		return $this->email;
	}

	function set_gender($gender)
	{
		$this->gender = $gender;
	}

	function get_gender()
	{
		return $this->gender;
	}
}

$data = new info();
$data->set_name($_POST['name']);
echo "Name: " . $data->get_name();
echo "<br>"; 
$data->set_email($_POST['email']);
echo "Email: " . $data->get_email();
echo "<br>"; 
$data->set_gender($_POST['gender']);
echo "Gender: " .$data->get_gender();

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Name: " . $data->get_name(). "		Email: " .$data->get_email(). "		Gender: " .$data->get_gender();
fwrite($myfile, $txt);

fclose($myfile);

?>

