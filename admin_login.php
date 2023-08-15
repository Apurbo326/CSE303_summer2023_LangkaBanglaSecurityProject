<?php include('header.php') ?>

<link rel="stylesheet" type="text/css" href="form_shape.css">

<main class="form-signin w-100 m-auto text-center">

  <a class="nav-link" href="index.php">
    <img class="mb-4" src="logo.png" alt="" width="250" height="200">
  </a>
    <h1 class="h3 mb-3 fw-normal">Log In</h1>

  <form action="admin_login_into_database.php" method="POST">
    <div class="form-floating">
      <input type="text" class="form-control" id="email" placeholder="text" name="email">
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="Password" placeholder="text" name="password">
      <label for="password">Password</label>
    </div>

    <p><br></p>
	<div class="d-inline-flex gap-2 mb-5">
      <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" name="submit">
        Log In       
      </button>
    </a>
  </div>
</form>
</main>
<?php include('footer.php') ?>