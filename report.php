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
  <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.2/css/buttons.dataTables.css">

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/dataTables.buttons.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.dataTables.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.print.min.js"></script>


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
          <li class="breadcrumb-item active">Report</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12"> 
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data tables</h5>
              
              <!-- Table with stripped rows -->
              <table class="table" id="myTable">
                <!-- <thead>
                <tr>
                    <th><input type="text" id="myInput"  placeholder="Date"></th>
                    <th><input type="text" id="myInput1"  placeholder="State 1"></th>
                    <th><input type="text" id="myInput2"  placeholder="Party 1"></th>
                    <th><input type="text" id="myInput3"  placeholder="State 2"></th>
                    <th><input type="text" id="myInput4"  placeholder="Party 2"></th>
                    <th><input type="text" id="myInput5"  placeholder="Status"></th>
                  </tr>
                </thead> -->
                <thead>
                  <tr>
                    <th><b> No </b></th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Our Comission</th>
                    <th>Send Comission</th>
                    <th>Action</th>
                    <th>State </th>
                    <th>Party </th>
                    <!-- <th>State 2</th>
                    <th>Party 2</th> -->
                    <th>Status</th>
                    <th>Button</th>
                  </tr>
                </thead>
                
                <?php
                if ($_SESSION['uid']) {
                  
                
                  $sql = "select * from add_data";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()){
                      $fromatedate = date("d-m-y", strtotime(($row['date'])));
                      echo "<tr>";
                      echo "<td>" . htmlspecialchars($row['add_id']) . "</td>";
                      echo "<td>" . $fromatedate . "</td>";
                      echo "<td>" . htmlspecialchars($row['add_amount']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['add_comm']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['add_commi2']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['stage']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['state_1']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['party_1']) . "</td>";
                      // echo "<td>" . htmlspecialchars($row['state_2']) . "</td>";
                      // echo "<td>" . htmlspecialchars($row['party_2']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                      echo '<td><a href="delete_report.php?id='.(int)$row['add_id'].' " class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">Delete </a> </td>';
                      echo"</tr>";
                    }
                  }
                  else {
                    echo "No record found";
                  }
                  $conn->close();
                }
                ?>
                
              </table>
              <!-- End Table with stripped rows -->
              <!-- <form method="POST" action="generate_pdf.php">
    <input type="hidden" name="filtered_data" id="filteredData">
    <button type="submit">Download Filtered Data</button>
</form> -->
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
      
      Designed by BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script>
    new DataTable('#myTable', {
      layout: {
        topStart: {
          buttons: ['print']
        }
      }
    });
  </script>
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
  header('location:admin_login.php');
}

?>
</html>