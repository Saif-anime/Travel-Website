<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/TP-01.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <div class="container">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="border border-3 border-primary"></div>
                        <div class="card bg-white">
                            <div class="card-body p-5">
                                <form class="mb-3 mt-md-4" method="post">
                                    <h2 class="fw-bold mb-2 text-uppercase text-center"> <img
                                            src="./assets/img/original.png" style="width:230px; height:80px;"></h2>
                                    <h2 class="fw-bold mb-2 text-uppercase text-center">Admin Login</h2>
                                    <div class="mb-3">
                                        <label for="user" class="form-label ">Username</label>
                                        <input type="text" name="username" class="form-control" id="user"
                                            placeholder="Admin">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label ">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="*******">
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-outline-dark" name="login" type="submit">Login</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    include '../conn.php';
    if (isset($_POST['login'])) {
        $user = strtolower($_POST['username']);
        $pass = $_POST['password'];

        $read = "SELECT * FROM `admin_user` WHERE username = '$user'";
        $read_run = mysqli_query($conn, $read);
        $num = mysqli_num_rows($read_run);

        if ($num) {
            $f = mysqli_fetch_array($read_run);
            if ($f['password'] == $pass) {
                $_SESSION['username'] = $f['username'];
                header("Location:Admin.php");
            } else {
                echo "<script>alert('please try again !')</script>";
            }
        } else {
            echo "<script>alert('please try again !')</script>";
        }


    }

    ?>

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

</html>