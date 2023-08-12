<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Add Bank Account</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="name" placeholder="text" name="name">
      <label for="name">Bank Name</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="number" placeholder="text" name="number">
      <label for="number">Bank Code</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="number" placeholder="text" name="number">
      <label for="number">Bank Account number</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="bank" placeholder="text" name="bank">
      <label for="bank">Branch name</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="bank" placeholder="text" name="bank">
      <label for="bank">Branch Code</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="bank" placeholder="text" name="bank">
      <label for="bank">Routing number</label>
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