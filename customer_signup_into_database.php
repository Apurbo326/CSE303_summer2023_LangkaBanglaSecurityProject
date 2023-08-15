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
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$age = $_POST['age'];
		$dateofbirth = $_POST['dateofbirth'];
		$nid = $_POST['nid'];
		$number = $_POST['number'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$zip = $_POST['zip'];
		$tiin_number = $_POST['tiin_number'];
		$photo = $_POST['photo'];
		$signature = $_POST['signature'];

		// Properly escape user input to prevent SQL injection
		$first_name = mysqli_real_escape_string($connection, $first_name);
		$last_name = mysqli_real_escape_string($connection, $last_name);
		$gender = mysqli_real_escape_string($connection, $gender);
		$email = mysqli_real_escape_string($connection, $email);
		$password = mysqli_real_escape_string($connection, $password);
		$age = mysqli_real_escape_string($connection, $age);
		$dateofbirth = mysqli_real_escape_string($connection, $dateofbirth);
		$nid = mysqli_real_escape_string($connection, $nid);
		$number = mysqli_real_escape_string($connection, $number);
		$street = mysqli_real_escape_string($connection, $street);
		$city = mysqli_real_escape_string($connection, $city);
		$zip = mysqli_real_escape_string($connection, $zip);
		$tiin_number = mysqli_real_escape_string($connection, $tiin_number);
		$photo = mysqli_real_escape_string($connection, $photo);
		$signature = mysqli_real_escape_string($connection, $signature);

		$sql = "INSERT INTO customer (admin_id, first_name, last_name, gender, email, password, age, dateofbirth, nid, number, street, city, zip, tiin_number, photo, signature) VALUES ('2030359', '$first_name', '$last_name', '$gender', '$email', '$password', '$age', '$dateofbirth', '$nid', '$number', '$street', '$city', '$zip', '$tiin_number', '$photo', '$signature')";

		$result = mysqli_query($connection, $sql);

		if ($result) {
			echo "Record inserted successfully.";
		} else {
			echo "Error: " . mysqli_error($connection);
		}
	}
?>

