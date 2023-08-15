<?php 

	define("HOSTNAME", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "");
	define("DATABASE", "lbs_system_version_1.0");

	$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

	if(!$connection){
		die("Connection Failed");
	}else{
		echo "Connection Established";
	}

?>