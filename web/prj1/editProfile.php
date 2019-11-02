<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>A+llergy Dashboard</title>



  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>

<body id="page-top">

  <?php require_once('navtop.php') ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="editProfile.php">
          <i class="fas fa-fw fa-edit"></i>
          <span>Edit Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="recipes.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Recipe Database</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-utensils"></i>
          <span>Find Restaurants</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Edit Profile</li>
        </ol>

        <!-- Icon Cards-->

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Current Allergies</div>
          <div class="card-body d-flex flex-column justify-content-around">
            <span>Your Current Allergies - Tap to Remove</span>
            <?php
            require "databaseLoader.php";
            $db = get_db();

            //         foreach ($db->query('SELECT
            //     u.id,
            //     u.name,
            //     a.id,
            //     a.name
            // FROM
            //     APP_USER u
            //     JOIN USER_ALLERGY ua ON ua.user_id = u.id
            //     JOIN ALLERGY a ON ua.allergy_id = a.id
            // WHERE u.id = 1
            // ORDER BY
            //     u.name;') as $row) {
            //           echo'
            //         <div class="d-flex flex-column ml-2">
            //           <h5 class="card-title text-center">'. ucfirst($row['name']) . '</h5>
            //           <a href="#" class="btn btn-danger btn-md">Remove</a>
            //         </div>';
            //         }
            ?>
          </div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Add Allergies - Tap to Add</div>
          <div class="card-body d-flex flex-column justify-content-around">
            <span>Select from the following: </span>
          </div>
        </div>
      </div>
      <?php
      date_default_timezone_set('America/Denver');
      $date = date('m/d/Y h:i:s a', time());
      ?>
      <div class="card-footer small text-muted">Last Updated on
        <?php
        echo $date;
        ?>
      </div>
    </div>
  </div>

  <!-- Sticky Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © Lucas Wargha 2019</span>
      </div>
    </div>
  </footer>

  </div>
  <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>