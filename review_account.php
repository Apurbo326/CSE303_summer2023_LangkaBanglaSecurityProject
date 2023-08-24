<?php include('header.php') ?>
<?php include('dbcon.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="text-center">

  <p><br></p>
  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Review Accounts</h1>

    <p><br></p>
    <table class="table table-hover table-bordered table-striped">
      <thead>
        <th>Individual ID</th>
        <th>BO Account</th>
        <th>National ID</th>
        <th>Contact</th>
        <th>Passport</th>
        <th>Bank Account</th>
        <th>Bank Statement</th>
        <th>Photo</th>
        <th>Employee Card</th>
        <th>Trade License</th>
        <th>Authorized P.Photo</th>
        <th>Approve</th>
        <th>Reject</th>
      </thead>

      <tbody>
      <?php

      $query = "SELECT * FROM individual";
      $result = mysqli_query($connection, $query);

      if(!$result){
        die("query failed!".mysqli_error());
      }else{
        while($row = mysqli_fetch_assoc($result)){
          ?>
          <tr>
            <td><?php echo $row['individual_id']; ?></td>
            <td><?php echo $row['bo_account_number']; ?></td>
            <td><?php echo $row['nid']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['passport']; ?></td>
            <td><?php echo $row['bank_account_no']; ?></td>
            <td><?php echo $row['statement']; ?></td>
            <td><?php echo $row['photo']; ?></td>
            <td><?php echo $row['employee_card']; ?></td>
            <td><?php echo $row['trade_license']; ?></td>
            <td><?php echo $row['authorized_person_photo']; ?></td>
            <td><a href='crm_update_individual.php?id=<?php echo $row['individual_id']; ?>' class="btn btn-success">Approve</a></td>
            <td><a href='crm_reject_individual.php?id=<?php echo $row['individual_id']; ?>' class="btn btn-danger">Reject</a></td>
          </tr>
          <?php 
        }
      }
      ?>
      </tbody>


</table>
</main>

<?php include('footer.php') ?>