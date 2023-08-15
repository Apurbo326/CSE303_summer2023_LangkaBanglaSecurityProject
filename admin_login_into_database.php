<?php 
	define("HOSTNAME", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "");
	define("DATABASE", "lbs_system_version_1.0");

	$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

	if (!$connection) {
		die("Connection Failed: " . mysqli_connect_error());
	}

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
		$query = $connection->query($sql);

		if ($query->num_rows > 0) {
			header('Location: admin_dashboard.php');
			exit();
		} else {
			echo 'Warning: User not found, something is wrong!';
		}
	}
?>
