<?php include("header.php") ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

	<a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Nominee Registration</h1>

    <div class="form-floating">
      <input type="number" class="form-control" id="NNID" placeholder="text" name="NNID">
      <label for="NNID">Nominee's National ID</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="fname" placeholder="text" name="fname">
      <label for="fname">Nominee's First name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="lname" placeholder="text" name="lname">
      <label for="lname">Nominee's Last name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="gender" placeholder="text" name="gender">
      <label for="gender">Nominee's Gender</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="age" placeholder="text" name="age">
      <label for="age">Nominee Age</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control" id="dob" placeholder="number" name="dob">
      <label for="dob">Nominee's Date of birth</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="number" placeholder="number" name="dob">
      <label for="number">Nominee's Phone number</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="street" placeholder="text" name="street">
      <label for="street">Nominee's Street</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="city" placeholder="text" name="city">
      <label for="city">Nominee's City</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="zip" placeholder="number" name="zip">
      <label for="zip">Nominee's Zip Code</label>
    </div>

    <p><br></p>
      <label for="user_image">Nominee's Photo</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

    <p><br></p>
      <label for="signature">Nominee's Signature</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">


    <p><br></p>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Have another Nominee?
      </label>
    </div>

    <div class="form-floating">
      <input type="number" class="form-control" id="NNID" placeholder="text" name="NNID">
      <label for="NNID">2nd Nominee's National ID</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="fname" placeholder="text" name="fname">
      <label for="fname">2nd Nominee's First name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="lname" placeholder="text" name="lname">
      <label for="lname">2nd Nominee's Last name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="gender" placeholder="text" name="gender">
      <label for="gender">2nd Nominee's Gender</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="age" placeholder="text" name="age">
      <label for="age">2nd Nominee Age</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control" id="dob" placeholder="number" name="dob">
      <label for="dob">2nd Nominee's Date of birth</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="number" placeholder="number" name="dob">
      <label for="number">2nd Nominee's Phone number</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="street" placeholder="text" name="street">
      <label for="street">2nd Nominee's Street</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="city" placeholder="text" name="city">
      <label for="city">2nd Nominee's City</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="zip" placeholder="number" name="zip">
      <label for="zip">2nd Nominee's Zip Code</label>
    </div>

    <p><br></p>
      <label for="user_image">2nd Nominee's Photo</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

    <p><br></p>
      <label for="signature">2nd Nominee's Signature</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

    <p><br></p>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Have Minor?
      </label>
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" id="m_name" placeholder="text" name="m_name">
      <label for="m_name">Minor name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="m_gname" placeholder="text" name="m_gname">
      <label for="m_gname">Minor's Guardian name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="m_address" placeholder="text" name="m_address">
      <label for="m_address">Minor's Address</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="m_relation" placeholder="text" name="m_relation">
      <label for="m_relation">Minor's Relationship with Guardian</label>
    </div>

    <p><br></p>
	<div class="d-inline-flex gap-2 mb-5">
    <a class="nav-link" href="customer_login.php">
      <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
        Register       
      </button>
    </a>



</main>

<?php include("footer.php") ?>