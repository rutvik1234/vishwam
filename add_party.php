<?php
// if (session_status() === PHP_SESSION_NONE) {
//   session_start();
// }
session_start();
if ($_SESSION['uid']) {
  include 'db.php';
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 13 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_party'])) {
      $party = $_POST['party'];

      $check_update = "SELECT * FROM add_party WHERE party = '$party'";
      $query = $conn->query($check_update);
      if ($query->num_rows>0) {
        echo "<script language='javascript'>alert('Party is Already exits!');</script>"; 
      } else {



        $query = "INSERT INTO add_party (party) VALUES ('$party')";
        $conn->query($query);
        header('location:add_party.php');
        exit;
      }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_state'])) {
      $state = $_POST['state'];

      $check_update = "SELECT * FROM add_state WHERE state = '$state'";
      $query = $conn->query($check_update);
      if ($query->num_rows > 0) {
        echo "<script language='javascript'>alert('State is already exits!');</script>"; 
      } else {

        $query = "INSERT INTO add_state (state) VALUES ('$state')";
        $conn->query($query);
        header('location:add_party.php');
        exit;
      }
    }

    //  header file
    include 'header.php';

    // sidebar file
    include 'sidebar.php';
    ?>

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Add Branch & State</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
              <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add State</h5>
            
                <!-- No Labels Form -->
                <form class="row g-3" action="add_party.php" method="POST">
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="state">
                  </div>
                  <!-- <div class="col-md-6 d-none d-md-block"></div> -->
                  <div class="text-center col-md-2">
                    <button type="submit" class="btn btn-primary" name="add_state">Submit</button>
                  </div>
                </form><!-- End No Labels Form -->
            
              </div>
            </div>
              </div>

              <div class="col-lg-12">
              <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Branch</h5>
                <form class="row g-3" action="add_party.php" method="POST">
                  <div class="col-md-12">
                <select id="inputState" class="form-select" name="state_1">
                    <option selected value="">Sender Party</option>
                    <?php
                    $sql = "SELECT * FROM add_state";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . htmlspecialchars($row['state']) . "'>" . htmlspecialchars($row['state']) . "</option>";
                      }
                    } else {
                      echo "<option value=''>No users found</option>";
                    }
                    
                    ?>
                  </select>
                  </div>
                  <!-- <div class="col-md-6 d-none d-md-block"></div> -->
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="party">
                  </div>
                  <!-- <div class="col-md-6 d-none d-md-block"></div> -->
                  <div class="text-center col-md-2">
                    <button type="submit" class="btn btn-primary" name="add_party">Submit</button>
                  </div>
                </form><!-- End No Labels Form -->
            
              </div>
            </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">State</h5>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM add_state ORDER BY state ASC";
                    $query = $conn->query($sql);

                    if ($query->num_rows > 0) {
                      while ($row = $query->fetch_array()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['state']) . "</td>";
                        echo '<td><a href="delete_entry.php?id=' . (int)$row['state_no'] . ' " class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">Delete </a> </td>';
                      }
                    }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Branch</h5>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM add_party ORDER BY party ASC";
                    $query = $conn->query($sql);

                    if ($query->num_rows > 0) {
                      while ($row = $query->fetch_array()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['party']) . "</td>";
                        echo '<td><a href="delete_entry2.php?id=' . (int)$row['party_no'] . ' " class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">Delete </a> </td>';
                      }
                    }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </section>

    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Jayveer Business Solution</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by BootstrapMade</a>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>
<?php } else {
  header('location:admin_login.php');
} ?>

  </html>