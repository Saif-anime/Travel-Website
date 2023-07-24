<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TRIPOHOLIDAYS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/TP-01.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>



    <?php
    include './comp/top_bar.php';
    include './comp/nav.php';



    ?>



    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">

                <?php

                include "conn.php";
                $id = $_GET['id'];

                $read = "SELECT * FROM `blogs` WHERE id='$id'";
                $read_run = mysqli_query($conn, $read);
                $num = mysqli_num_rows($read_run);

                if ($num) {

                    $f = mysqli_fetch_array($read_run);

                        ?>



                        <div class="col-lg-12">


                            <!-- Blog Detail Start -->
                            <div class="pb-3">
                                <div class="blog-item">
                                    <div class="position-relative">
                                        <img class="img-fluid w-100" src="./Admin/<?php echo $f['blog_img'] ?>" alt="">
                                        <div class="blog-date">
                                          
                                            <small class="text-white text-uppercase"><?php echo $f['upload_time'] ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white mb-3" style="padding: 30px;">
                                    <div class="d-flex mb-3">
                                        <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $f['tags'] ?></a>
                                     
                                     
                                    </div>
                                    <h2 class="mb-3"><?php echo $f['title'] ?></h2>
                                    <p><?php echo $f['blogs_detail'] ?></p>


                                </div>
                            </div>
                            <!-- Blog Detail End -->


                        </div>


                        <?php



                    }else{
                        echo "<h3>No Data Found !</h3>";
                    }





            



                ?>
















            </div>
        </div>
    </div>
    </div>
    <!-- Blog End -->


    <?php
    include './comp/Footer.php';

    ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>



</html>