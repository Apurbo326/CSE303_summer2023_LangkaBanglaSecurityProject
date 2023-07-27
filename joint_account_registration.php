<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Joint Account Registration</h1>

    <div class="form-floating">
      <input type="number" class="form-control" id="NID" placeholder="text" name="NID">
      <label for="NID">Person 1 - National ID</label>
    </div>
      <p><br></p>
      <label for="bankstatement">Person 1 - Bank Statement</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

	  <p><br></p>
      <label for="passsizephoto">Person 1 - Passport Size Photo</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <p><br></p>
      <label for="photoofeidcard">Person 1 - Photo of Employee ID Card</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <p><br></p>
      <label for="Tradelicense">Person 1 - Trade License</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <p><br></p>
      <label for="poap">Person 1 - Photo of Authorized Person</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <p><br></p>
      <div class="form-floating">
      <input type="number" class="form-control" id="NID" placeholder="text" name="NID">
      <label for="NID">Person 2 - National ID</label>
    </div>
      <p><br></p>
      <label for="bankstatement">Person 2 - Bank Statement</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

    <p><br></p>
      <label for="passsizephoto">Person 2 - Passport Size Photo</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <p><br></p>
      <label for="photoofeidcard">Person 2 - Photo of Employee ID Card</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <p><br></p>
      <label for="Tradelicense">Person 2 - Trade License</label>
      <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">

      <p><br></p>
      <label for="poap">Person 2 - Photo of Authorized Person</label>
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