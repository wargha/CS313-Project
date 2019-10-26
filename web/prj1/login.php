<!DOCTYPE html>
<html lang="en">
<?php
require "databaseLoader.php";
$db = get_db();

$canLogin = "Not Set";
if (!empty($_POST)) {
  $email = $_POST['email'];
  $pw = $_POST['password'];


  foreach ($db->query("SELECT * FROM app_user WHERE email = '$email'") as $row) {
    $pw_check = $row['pw'];
    if ($pw_check == $pw)
    { 
      echo "Correct login!";
      setcookie("canLogin", true, time()+36000);
      setcookie("user_id", $row['id'], time()+36000); //10 hours
      header("Location: index.php");
      break;
    } else { 
      $canLogin = "Not Authorized";
    }
}

}
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AllergyPlus Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="login.php" method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" href="index.html">Login</button>
        </form>
        <?php
  if ($canLogin == "Not Authorized")  {
    echo "wrong login, try again";
  }
        ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
