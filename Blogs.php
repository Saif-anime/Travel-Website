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
                <div class="col-lg-12">
                    <div class="row pb-3">

                        <?php

                        include "conn.php";

                        $read = "SELECT * FROM `blogs`";
                        $read_run = mysqli_query($conn, $read);
                        $num = mysqli_num_rows($read_run);

                        if ($num) {

                            while ($f = mysqli_fetch_array($read_run)) {

                                ?>

                                <div class="col-lg-4 col-md-12 mb-4 pb-2">
                                    <div class="blog-item">
                                        <div class="position-relative">
                                            <img class="img-fluid w-100" src="./Admin/<?php echo $f['blog_img'] ?>" alt="">
                                            <div class="blog-date">

                                                <small class="text-white text-uppercase">
                                                    <?php echo $f['upload_time'] ?>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="bg-white p-4">
                                            <div class="d-flex mb-2">
                                                <p class="text-primary text-uppercase text-decoration-none" >
                                                    <?php echo $f['tags'] ?>
                            </p>
                                                <span class="text-primary px-2">|</span>
                                                <p class="text-primary text-uppercase text-decoration-none">
                                                    <?php echo $f['title'] ?>
                            </p>
                                            </div>
                                            <a class="h5 m-0 text-decoration-none" href="single_blog.php?id=<?php echo $f['id'];?>">
                                                <?php echo substr($f['blogs_detail'], 0, 50); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php



                            }





                        }



                        ?>






                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Blog End -->












    <!-- Feature End -->

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