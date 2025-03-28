<?php
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

  <script>
        function showForm(formId) {
            document.getElementById('senderForm').style.display = 'none';
            document.getElementById('receiverForm').style.display = 'none';
            document.getElementById(formId).style.display = 'block';
        }
  </script>
</head>

<body>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_transction'])) {
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $comission = $_POST['comission'];
    $comission2 = $_POST['comission2'];
    $action = $_POST['action'];
    $state1 = $_POST['state_1'];
    $party1 = $_POST['party_1'];
    // $state2 = $_POST['state_2'];
    // $party2 = $_POST['party_2'];
    $status = $_POST['status'];

    $query = "INSERT INTO add_data (date, add_amount, add_comm, add_commi2, stage, state_1, party_1, status) VALUES ('$date', '$amount', '$comission', $comission2, '$action', '$state1', '$party1', '$status')";
    $conn->query($query);
    echo "<script language='javascript'>alert('Data Updated!');</script>"; 
    header('location:index.php');
    exit;
  }

  //  header file
  include 'header.php';

  // sidebar file
  include 'sidebar.php';
  ?>
  <main id="main" class="main">

    <!-- <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title">Add Details</h5>
            <button class="btn btn-primary" onclick="showForm('senderForm')">Send</button>
            <button class="btn btn-success" onclick="showForm('receiverForm')">Receive</button>

            <div id="senderForm" class="mt-3" style="display:none;">
              <h5 class="card-title">Sender Entry</h5>
              <form class="row g-3" action="index.php" method="POST">

                <div class="col-md-4 col-sm-12">
                  <input type="date" class="form-control" name="date" placeholder="Date" value="<?php echo date('Y-m-d'); ?>" required>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>

                <div class="col-md-4 col-sm-12">
                <label for="inputName5" class="form-label">Amount</label>
                  <input type="number" class="form-control" name="amount" required>
                </div>

                <div class="col-md-4 col-sm-6">
                <label for="inputName5" class="form-label">Receive Comission</label>
                  <input type="number" class="form-control" name="comission" required> 
                </div>

                <div class="col-md-4 col-sm-6">
                <label for="inputName5" class="form-label">Send Comission</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>
                
                <div class="col-md-6 col-sm-12">
                <label for="inputName5" class="form-label">Sender Name</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-6 col-sm-12">
                <label for="inputName5" class="form-label">Sender Number</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-6 col-sm-12">
                <label for="inputName5" class="form-label">Receiver Name</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-6 col-sm-12">
                <label for="inputName5" class="form-label">Receiver Number</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-6">
                <label for="inputName5" class="form-label">Receiver State</label>
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

                <div class="col-md-6">
                <label for="inputName5" class="form-label">Receiver Branch</label>
                  <select id="inputState" class="form-select" name="state_1">
                    <option selected value="">Receiver Party</option>
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

                <div class="col-md-4 col-sm-12">
                <label for="inputName5" class="form-label">Token</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-4 col-sm-12">
                <label for="inputName5" class="form-label">Via</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-4 col-sm-12">
                <label for="inputName5" class="form-label">Remarks</label>
                  <input type="number" class="form-control" name="comission2" required> 
                  </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="add_transction">Submit</button>
                </div>
              </form><!-- End No Labels Form -->
            </div>




            <div id="receiverForm" class="mt-3" style="display:none;">
              <h5 class="card-title">Receiver Entry</h5>
              <form class="row g-3" action="index.php" method="POST">

                <div class="col-md-4 col-sm-12">
                  <input type="date" class="form-control" name="date" placeholder="Date" value="<?php echo date('Y-m-d'); ?>" required>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>

                <div class="col-md-4 col-sm-12">
                <label for="inputName5" class="form-label">Amount</label>
                  <input type="number" class="form-control" name="amount" required>
                </div>

                <div class="col-md-4 col-sm-6">
                <label for="inputName5" class="form-label">Receive Comission</label>
                  <input type="number" class="form-control" name="comission" required> 
                </div>

                <div class="col-md-4 col-sm-6">
                <label for="inputName5" class="form-label">Send Comission</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>
                
                <div class="col-md-6 col-sm-12">
                <label for="inputName5" class="form-label">Sender Name</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-6 col-sm-12">
                <label for="inputName5" class="form-label">Sender Number</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-6 col-sm-12">
                <label for="inputName5" class="form-label">Receiver Name</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-6 col-sm-12">
                <label for="inputName5" class="form-label">Receiver Number</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-6">
                <label for="inputName5" class="form-label">Sender State</label>
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

                <div class="col-md-6">
                <label for="inputName5" class="form-label">Sender Branch</label>
                  <select id="inputState" class="form-select" name="state_1">
                    <option selected value="">Receiver Party</option>
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

                <div class="col-md-4 col-sm-12">
                <label for="inputName5" class="form-label">Token</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-4 col-sm-12">
                <label for="inputName5" class="form-label">Via</label>
                  <input type="number" class="form-control" name="comission2" required> 
                </div>

                <div class="col-md-4 col-sm-12">
                <label for="inputName5" class="form-label">Remarks</label>
                  <input type="number" class="form-control" name="comission2" required> 
                  </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="add_transction">Submit</button>
                </div>
              </form>
            </div>
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
      <?php
    }
    else {
      header("location:admin_login.php");
    }
    ?>
</html>