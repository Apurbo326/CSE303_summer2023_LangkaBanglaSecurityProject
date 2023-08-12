<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Apple for <br>Value Added Service</h1>

    <div class="form-floating">
      <input type="number" class="form-control" id="investor_ID" placeholder="text" name="investor_ID">
      <label for="investor_ID">Investor ID</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="name" placeholder="text" name="name">
      <label for="name">Investor Name</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="number" placeholder="text" name="number">
      <label for="number">Your Mobile number</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="email" placeholder="text" name="email">
      <label for="email">Your Email</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control" id="date" placeholder="text" name="date">
      <label for="date">Applying Date</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="it" placeholder="text" name="it">
      <label for="it">Internet Trading</label>
    </div>

    <p><br></p>
    <div class="checkbox mb-3">
      <label>
        Order Management System?
        <input type="checkbox" value="yes">
      </label>
    </div>
    <div class="checkbox mb-3">
      <label>
        Want to receive SMS Service?
        <input type="checkbox" value="yes">
      </label>
    </div>
    <div class="checkbox mb-3">
      <label>
        Want to receive Email service?
        <input type="checkbox" value="yes">
      </label>
    </div>

    <p><br></p>
      <label for="signature">Your Signature</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

    <p><br></p>
      <label for="authority_signature">LBS Authority Signature</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">
      


    <p><br></p>
	<div class="d-inline-flex gap-2 mb-5">
    <a class="nav-link" href="####">
      <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
        Register       
      </button>
    </a>

</main>
<?php include('footer.php') ?>