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
    $nid = $_POST['nid'];
    $number = $_POST['number'];
    $passport = $_POST['passport'];
    $bank_account_no = $_POST['bank_account_no'];

    $poa_first_name = $_POST['first_name'];
    $poa_last_name = $_POST['last_name'];
    $poa_nationality = $_POST['nationality'];
    $poa_number = $_POST['number2'];
    $poa_date_of_birth = $_POST['date_of_birth'];
    $poa_address = $_POST['address'];

    // Use prepared statements to prevent SQL injection
    $sql1 = "INSERT INTO individual (bo_account_number, nid, number, passport, bank_account_no) VALUES (?, ?, ?, ?, ?)";
    $stmt1 = $connection->prepare($sql1);
    $stmt1->bind_param("sssss", $bo_account_number, $nid, $number, $passport, $bank_account_no);

    $sql2 = "INSERT INTO poa (first_name, last_name, nationality, number, date_of_birth, address) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt2 = $connection->prepare($sql2);
    $stmt2->bind_param("ssssss", $poa_first_name, $poa_last_name, $poa_nationality, $poa_number, $poa_date_of_birth, $poa_address);

    $bo_account_number = 1234; 

    // Execute prepared statements
    if ($stmt1->execute() && $stmt2->execute()) {
        echo "Records inserted successfully.";
    } else {
        echo "Error: " . $stmt1->error . " " . $stmt2->error;
    }

    // Close the statements
    $stmt1->close();
    $stmt2->close();
    
    // Close the connection
    $connection->close();
}
?>
