<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Welcome to LBS</h1>

    <p><br></p>
    <table>
        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="account_registration.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            Account Registration
            </button>
            </a>
            </div>
        </tr>

        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="account_status.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            Check Account Status
            </button>
            </a>
            </div>
        </tr>

        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="Nominee_registration.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            Nominee Registration
            </button>
            </a>
            </div>
        </tr>

</table>
</main>
<?php include('footer.php') ?>