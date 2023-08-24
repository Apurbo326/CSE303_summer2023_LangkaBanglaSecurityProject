<?php include('dbcon.php') ?>

<?php 

	if(isset($_GET['id'])){
		$id = $_GET['id'];

	$query = "DELETE FROM individual WHERE individual_id='$id'";
	$result = mysqli_query($connection, $query);

	if(!$result){
		die("Query failed".mysqli_error());
	}else{
		header('location:review_account.php?delete_msg=You have deleted the record.');
		}
	}
?>