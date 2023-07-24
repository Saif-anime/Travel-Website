<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:Admin_login.php");
}

?>



<?php
include "../conn.php";



if (isset($_POST['submit'])) {

    $title = $_POST['title'];

    $file = $_FILES['banner_img'];

    $blog_img_err = $file['error'];
    $blog_tmp = $file['tmp_name'];
    $blog_name = $file['name'];


    if ($blog_img_err == 0) {
        $ban_path = './assets/banner/' . $blog_name;
        $upload_img = move_uploaded_file($blog_tmp, $ban_path);
        if ($upload_img) {

            $insert = "INSERT INTO `banner`(`title`, `banner_img`) VALUES ('$title','$ban_path')";

            $insert_run = mysqli_query($conn, $insert);

            if ($insert_run) {
                echo "<script>alert('Add New Banner successfully !');</script>";

            } else {
                echo "<script>alert('OOps New Banner not successfully !')</script>";
            }
        }

    } else {
        echo "<script>alert('Banner Image Err !');</script>";
    }
}

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
    <link href="assets/img/favicon.png" rel="icon">
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


</head>

<body>
    <?php
    include './comp/nav.php';
    include './comp/side_nav.php';


    ?>

    <div class="container-fluid p-0">
        <main id="main" class="main">
            <h1>Enquiry Management </h1>
            <section class="section">
                <div class="row">
               
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">New Enquiry Add </h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php

                                        include "../conn.php";

                                        $read = "SELECT * FROM `contact`";
                                        $read_run = mysqli_query($conn, $read);
                                        $num = mysqli_num_rows($read_run);

                                        if ($num) {

                                            while ($f = mysqli_fetch_array($read_run)) {

                                                ?>

                                                <tr>
                                                    <th scope="row">
                                                        <?php echo $f['id']; ?>
                                                    </th>
                                                    <td>
                                                        <?php echo $f['name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $f['email']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $f['subject']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $f['message']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $f['phone']; ?>
                                                    </td>
                                                  
                                                    <td><a class="btn btn-danger btn-sm"
                                                            href="del_enq.php?id=<?php echo $f['id']; ?>"><i
                                                                class="bi bi-trash"></i></a>
                                                    
                                                    </td>
                                                </tr>


                                                <?php



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

    </div>
    </div>






    <?php



    ?>





    <?php
    include './comp/footer.php';

    ?>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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