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
    </head>
    <script>
        function myFunctionshow() {
            var x = document.getElementById("exampleInputPassword1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <body>
        <?php
        include 'header.php';
        include 'sidebar.php';
        ?>
        <main id="main" class="main">

            <div class="pagetitle">
                <h1>All Entry</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">All Entry</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section dashboard">
                <form class="row g-3" action="register.php" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Entry &nbsp; 24-06-2025</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="row-container">
                                                <div class="col-item">John</div>
                                                <div class="col-item">100</div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Entry &nbsp; 24-06-2025</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Entry &nbsp; 24-06-2025</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Entry &nbsp; 24-06-2025</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Entry &nbsp; 24-06-2025</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-3">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>2016-05-25</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </main>
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

    </html>

<?php
} else {
    header("location:admin_login.php");
}
?>