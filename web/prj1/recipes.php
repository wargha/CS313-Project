<!DOCTYPE html>
<html lang="en">
<?php
require "databaseLoader.php";
$db = get_db();

$allergyArray = array();

$user_id = $_COOKIE['user_id'];
foreach ($db->query('SELECT
                u.name,
                a.id,
                a.name
            FROM
                APP_USER u
                JOIN USER_ALLERGY ua ON ua.user_id = u.id
                JOIN ALLERGY a ON ua.allergy_id = a.id
            WHERE u.id = ' . $user_id . '
            ORDER BY
                u.name;') as $row) {
  array_push($allergyArray, $row['id']);
}
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Tables</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  

    <!-- Navbar Search -->

    <!-- Navbar -->
    <?php require_once('navTop.php') ?>


  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editProfile.php">
          <i class="fas fa-fw fa-edit"></i>
          <span>Edit Profile</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="recipes.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Recipe Database</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="safeguards.php">
          <i class="fas fa-fw fa-utensils"></i>
          <span>Allergy Safeguards</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Recipe Database</li>
        </ol>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Your Recipes</div>
            <div class="card-body d-flex flex-row justify-content-around">
          <?php
          // echo "HERE!!!";
         
            foreach ($db->query('SELECT * FROM recipe
      ') as $row) {
            echo'
          <div class="d-flex flex-column ml-2">
            <h5 class="card-title text-center">'. ucfirst($row['title']) . '</h5>
            <a href="#" class="btn btn-primary btn-md ">See Description</a>
          </div>';
          }
         
       ?>

          </div>
          
        <div class="modal fade" id="modal-recipe-day" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Dairy Free Bread</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p> 'In a large mixing bowl or the bowl of a standing mixer with a hook attachment, combine 2 cups of warm almond milk, 1/4 cup sugar, and 1 1/2 tablespoons yeast, stirring gently to dissolve. Let the mixture rest for 5 to 10 minutes, or until foamy (showing the yeast is active).


                  Meanwhile, in a medium-large mixing bowl, combine 6 cups flour and 1 1/2 teaspoons salt.

                  Add 1/4 cup oil to the yeast mixture. Gradually add the flour, about one cup at a time.

                  Turn the dough out onto a lightly floured surface and knead it until the dough is elastic and firm.

                  Place the dough in a lightly oiled bowl, cover the bowl with plastic wrap, and put it in a warm place for 1 hour, or until the dough is doubled in bulk.

                  Preheat the oven to 350 F. Oil two 9x5 inch loaf pans.

                  Punch down the dough, and turn out onto a dry surface, kneading the dough for 3 to 4 minutes. Divide the dough in half, shape each half into a loaf, and place them in the prepared loaf pans. Let the loaves rise in a warm place for 30 to 40 minutes more, or until the loaves have risen above the edges of the pans.

                  Bake for 30 minutes or until golden brown.

                  Remove the loaves from the oven and allow them to cool slightly in the pans before slicing and serving.'</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>


            </div>
          </div>
        </div>
        </div>

      </div>
      
      <!-- /.container-fluid -->

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
          <a class="btn btn-primary" href="login.php">Logout</a>
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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
