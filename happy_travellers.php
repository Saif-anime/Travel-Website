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
    <!-- Testimonial Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Say Our Hpappy Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">

                <?php

                include "conn.php";

                $read = "SELECT * FROM `happy_client`";
                $read_run = mysqli_query($conn, $read);
                $num = mysqli_num_rows($read_run);

                if ($num) {

                    while ($f = mysqli_fetch_array($read_run)) {

                        ?>

                        <div class="text-center pb-4">
                            <div class="testimonial-text bg-white p-4 mt-n5">
                                <p class="mt-5"><?php echo $f['review']; ?>
                                </p>
                                <h5 class="text-truncate"><?php echo $f['name']; ?></h5>
                                <span><?php echo $f['destination']; ?></span>
                            </div>
                        </div>
                        <?php



                    }





                }



                ?>


           
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

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