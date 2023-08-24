<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Individual Account Registration</h1>

  <form method="post" action="individual_account_registration_into_database.php" enctype="multipart/form-data">
    <div class="form-floating">
      <input type="number" class="form-control" id="nid" placeholder="number" name="nid">
      <label for="nid">National ID</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="number" placeholder="text" name="number">
      <label for="number">Contact number</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="passport" placeholder="text" name="passport">
      <label for="passport">Passport number</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="bank_account_no" placeholder="text" name="bank_account_no">
      <label for="bank_account_no">Bank Account number</label>
    </div>
      <p><br></p>
      <label for="statement">Bank Statement</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

	  <p><br></p>
      <label for="photo">Passport Size Photo</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <p><br></p>
      <label for="employee_card">Photo of Employee ID Card</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <p><br></p>
      <label for="trade_license">Trade License</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <p><br></p>
      <label for="authorized_person_photo">Photo of Authorized Person</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">


      <!-- Power of attorney -->
      <p><br></p>
      <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="yes"> Want to give Power of Attorney to someone else?
      </label>
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" id="first_name" placeholder="text" name="first_name">
      <label for="first_name">POA's First name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="last_name" placeholder="text" name="last_name">
      <label for="last_name">POA's Last name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="nationality" placeholder="text" name="nationality">
      <label for="nationality">POA's Nationality</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="number2" placeholder="text" name="number2">
      <label for="number2">POA's Contact number</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control" id="date_of_birth" placeholder="text" name="date_of_birth">
      <label for="date_of_birth">POA's Date of Birth</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="address" placeholder="text" name="address">
      <label for="address">POA's Address</label>
    </div>


    <p><br></p>
	<div class="d-inline-flex gap-2 mb-5">
    
      <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" name="submit">
        Register       
      </button>
    
  </div>
</form>

</main>
<?php include('footer.php') ?>