
<?php 
	/**
	* 
	*/

	/**
	* 
	*/
	class user
	{
		var $conn;
		function __construct()
		{
			$this->conn = new mysqli("localhost","root","","registration");
		}

		public function registerUser($data=false){
			$con = $this->conn;
			$sql = "INSERT INTO form(user,pass) VALUES('{$data['user']}','{$data['pass']}')";
			$result = $con->query($sql);
		}
	}

	$dbUser = new user();
	$result = $dbUser->registerUser($_POST);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>post register</title>
</head>
<body>
<h1>Success</h1>
<div>
</div>
</body>
</html>