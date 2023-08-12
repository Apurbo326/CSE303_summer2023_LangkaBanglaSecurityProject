<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Corporate FAH Account Registration</h1>

    <div class="form-floating">
      <input type="number" class="form-control" id="NID" placeholder="text" name="NID">
      <label for="NID">National ID</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="contact" placeholder="text" name="contact">
      <label for="contact">Contact number</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="Passport" placeholder="text" name="Passport">
      <label for="Passport">Passport number</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="bank" placeholder="text" name="bank">
      <label for="bank">Bank Account number</label>
    </div>
      <p><br></p>
      <label for="bankstatement">Bank Statement</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

	  <p><br></p>
      <label for="passsizephoto">Passport Size Photo</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <p><br></p>
      <label for="Driving_License">Driving License</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <h4 class="h4 mb-3 fw-normal"><br>Provide Information about First Account Holder</h4>

      <div class="form-floating">
      <input type="text" class="form-control" id="fh_name" placeholder="text" name="fh_name">
      <label for="fh_name">FAH's Father's OR Husband's name</label>
      </div>
      <div class="form-floating">
      <input type="date" class="form-control" id="fah_dob" placeholder="text" name="fah_dob">
      <label for="fah_dob">FAH's Date of Birth</label>
      </div>
      <div class="form-floating">
      <input type="text" class="form-control" id="fah_gender" placeholder="text" name="fah_gender">
      <label for="fah_gender">FAH's Gender</label>
      </div>
      <div class="form-floating">
      <input type="text" class="form-control" id="fah_nationality" placeholder="text" name="fah_nationality">
      <label for="fah_nationality">FAH's Nationality</label>
      </div>
      <div class="form-floating">
      <input type="text" class="form-control" id="fah_address" placeholder="text" name="fah_address">
      <label for="fah_address">FAH's Permanent Address</label>
      </div>
      <div class="form-floating">
      <input type="number" class="form-control" id="fah_number" placeholder="text" name="fah_number">
      <label for="fah_number">FAH's telephone</label>
      </div>
      <div class="form-floating">
      <input type="email" class="form-control" id="fah_email" placeholder="text" name="fah_email">
      <label for="fah_email">FAH's Email</label>
      </div>
      <div class="form-floating">
      <input type="text" class="form-control" id="fah_occupation" placeholder="text" name="fah_occupation">
      <label for="fah_occupation">FAH's Occupation</label>
      </div>
      <div class="form-floating">
      <input type="number" class="form-control" id="fah_etiin" placeholder="text" name="fah_etiin">
      <label for="fah_etiin">FAH's E-TIIN</label>
      </div>


      
      <!-- Power of attorney -->
      <p><br></p>
      <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Want to give Power of Attorney to someone else?
      </label>
    </div>

    
    <div class="form-floating">
      <input type="text" class="form-control" id="poa_fname" placeholder="text" name="poa_fname">
      <label for="poa_fname">POA's First name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="poa_lname" placeholder="text" name="poa_lname">
      <label for="poa_lname">POA's Last name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="poa_nationality" placeholder="text" name="poa_nationality">
      <label for="poa_nationality">POA's Nationality</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="poa_contact" placeholder="text" name="poa_contact">
      <label for="poa_contact">POA's Contact number</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control" id="poa_dob" placeholder="text" name="poa_dob">
      <label for="poa_dob">POA's Date of Birth</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="poa_address" placeholder="text" name="poa_address">
      <label for="poa_address">POA's Address</label>
    </div>


    <p><br></p>
	<div class="d-inline-flex gap-2 mb-5">
    <a class="nav-link" href="####">
      <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
        Register       
      </button>
    </a>

</main>
<?php include('footer.php') ?>