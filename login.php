<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Please Select Catagory</h1>

    <p><br></p>
    <table>
        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="customer_login.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            Customer
            </button>
            </a>
            </div>
        </tr>

        <p></p>

        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="crm_login.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            CR Manager
            </button>
            </a>
            </div>
        </tr>

        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="bm_login.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            Branch Manager
            </button>
            </a>
            </div>
        </tr>

        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="hos_login.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            Head of Settlement
            </button>
            </a>
            </div>
        </tr>

        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="broker_login.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            Broker
            </button>
            </a>
            </div>
        </tr>
        <p> </p>

        <tr>
            <div class="d-inline-flex gap-2 mb-5">
            <a class="nav-link" href="admin_login.php">
            <button class="d-inline-flex align-items-center btn btn-dark btn-lg px-4" type="button">
            Admin
            </button>
            </a>
            </div>
        </tr>
    </table>


</main>


<?php include('footer.php') ?>