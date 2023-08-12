<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Please select Corporate account type</h1>

    <p><br></p>
    <table>
        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="corporate_FAH.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            First Account Holder
            </button>
            </a>
            </div>
        </tr>

        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="corporate_JAH.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            Joint Account Holder
            </button>
            </a>
            </div>
        </tr>

        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="corporate_AP.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            Authorized Person
            </button>
            </a>
            </div>
        </tr>

</table>
</main>

<?php include('footer.php') ?>