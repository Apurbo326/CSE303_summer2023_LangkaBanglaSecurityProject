<?php include('header.php') ?>
<?php include('dbcon.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

	<!-- To read data from the database -->
	<?php 
		if(isset($_GET['id'])) {
			$individual_id = $_GET['id'];
    	
	    	$query = "SELECT * FROM individual WHERE individual_id = '$individual_id'";
	    	$result = mysqli_query($connection, $query);

	    	if(!$result) {
	        	die("Query failed: " . mysqli_error($connection));
	    	} else {
	        	$row = mysqli_fetch_assoc($result);
	    	}
		}
    ?>


    <!-- To update data on the database -->
    <?php 
    	if(isset($_POST['approve'])){
    		if(isset($_GET['id_new'])) {
    			$idnew = $_GET['id_new'];
    		
	    		$nid = $_POST['nid'];
	    		$number = $_POST['number'];
	    		$passport = $_POST['passport'];
	    		$bank_account_no = $_POST['bank_account_no'];

	    		$query = "UPDATE individual SET nid='$nid', number='$number', passport='$passport', bank_account_no='$bank_account_no' WHERE individual_id='$idnew'";
	    		$result = mysqli_query($connection, $query);

	    		if(!$result) {
	        		die("Query failed: " . mysqli_error($connection));
	    		}else{
	    			header('location:review_account.php?update_msg=Successfully Updated.');
	    		}
    		}
		}
    ?>


	<form action="crm_update_individual.php?id_new=<?php echo $individual_id; ?>" method="post">
	<div class="form-floating">
      <input type="number" class="form-control" id="nid" placeholder="number" name="nid" value="<?php echo $row['nid'] ?>">
      <label for="nid">National ID</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="number" placeholder="text" name="number" value="<?php echo $row['number'] ?>">
      <label for="number">Contact number</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="passport" placeholder="number" name="passport" value="<?php echo $row['passport'] ?>">
      <label for="passport">Passport number</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="bank_account_no" placeholder="text" name="bank_account_no" value="<?php echo $row['bank_account_no'] ?>">
      <label for="bank_account_no">Bank Account number</label>
    </div>
      
      <p><br></p>
      <input type="submit" class="btn btn-success" name="approve" value="Confirm">
  </form>
</main>

<?php include('footer.php') ?>

