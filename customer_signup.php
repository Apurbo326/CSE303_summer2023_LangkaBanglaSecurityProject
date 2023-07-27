<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Sign up</h1>

    <p><br></p>
    
    <div class="form-floating">
      <input type="number" class="form-control" id="NID" placeholder="text" name="NID">
      <label for="NID">National ID</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="fname" placeholder="text" name="fname">
      <label for="fname">First name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="lname" placeholder="text" name="lname">
      <label for="lname">Last name</label>
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
      <input type="date" class="form-control" id="dob" placeholder="number" name="dob">
      <label for="dob">Date of birth</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="number" placeholder="number" name="dob">
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
      <input type="number" class="form-control" id="zip" placeholder="number" name="zip">
      <label for="zip">Zip Code</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="email" placeholder="text" name="email">
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="Password" placeholder="number" name="password">
      <label for="Password">Password</label>
    </div>

    <p><br></p>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Have a Nominee?
      </label>
    </div>

    <p><br></p>

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
	<div class="d-inline-flex gap-2 mb-5">
    <a class="nav-link" href="customer_login.php">
      <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
        Sign up       
      </button>
    </a>



</main>
<?php include('footer.php') ?>