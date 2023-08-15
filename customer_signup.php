<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Sign up</h1>

    <p><br></p>
    <form method="post" action="customer_signup_into_database.php" enctype="multipart/form-data">
    <div class="form-floating">
      <input type="text" class="form-control" id="nid" placeholder="text" name="nid">
      <label for="nid">National ID</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="first_name" placeholder="text" name="first_name">
      <label for="first_name">First name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="last_name" placeholder="text" name="last_name">
      <label for="last_name">Last name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="gender" placeholder="text" name="gender">
      <label for="gender">Gender</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="age" placeholder="text" name="age">
      <label for="age">Age</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control" id="dateofbirth" placeholder="number" name="dateofbirth">
      <label for="dateofbirth">Date of birth</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="number" placeholder="text" name="number">
      <label for="number">Phone number</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="street" placeholder="text" name="street">
      <label for="street">Street</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="city" placeholder="text" name="city">
      <label for="city">City</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="zip" placeholder="text" name="zip">
      <label for="zip">Zip Code</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="tiin_number" placeholder="text" name="tiin_number">
      <label for="tiin_number">TIIN number</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="email" placeholder="text" name="email">
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="Password" placeholder="text" name="password">
      <label for="Password">Password</label>
    </div>
    <p><br></p>
      <label for="photo">Photo</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

    <p><br></p>
      <label for="signature">Signature</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

    <p><br></p>

    
	<div class="d-inline-flex gap-2 mb-5">
    
      <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" name="submit">
        Sign up       
      </button>
    
  </div>
</form>


</main>
<?php include('footer.php') ?>