<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Add KYC Profile</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="text" placeholder="text" name="number">
      <label for="text">Name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="name" placeholder="text" name="name">
      <label for="name">Type of Account</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="number" placeholder="text" name="number">
      <label for="number">CRM ID</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="Passport" placeholder="text" name="Passport">
      <label for="Passport">Passport number</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="nid" placeholder="text" name="nid">
      <label for="nid">NID</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="tiin" placeholder="text" name="tiin">
      <label for="tiin">TIIN number</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="Driving_License" placeholder="text" name="Driving_License">
      <label for="Driving_License">Driving License number</label>
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