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
    include './comp/Slider.php';
    include './comp/search.php';

    ?>






    </div>




    <!-- Testimonial Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">

                <h1>Explore Top Destination</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">

                <?php

                include "conn.php";

                $read = "SELECT * FROM `holyday_package`";
                $read_run = mysqli_query($conn, $read);
                $num = mysqli_num_rows($read_run);

                if ($num) {

                    while ($f = mysqli_fetch_array($read_run)) {

                        $id_des = $f['destination'];

                    

              





                            ?>

                            <div class="col-lg-12 col-md-12 mb-4">
                                <div class="destination-item position-relative overflow-hidden mb-2">
                                    <img class="img-fluid" src="img/destination-1.jpg" alt="">
                                    <a class="destination-overlay text-white text-decoration-none" href="">
                                        <h5 class="text-white">City</h5>

                                    </a>
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







    <!-- Testimonial Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">

                <h1>Pefect Tour Packages</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">

                <?php

                include "conn.php";

                $read = "SELECT * FROM `holyday_package`";
                $read_run = mysqli_query($conn, $read);
                $num = mysqli_num_rows($read_run);

                if ($num) {

                    while ($f = mysqli_fetch_array($read_run)) {

                        ?>

                        <div class="col-lg-12 col-md-12 mb-4">
                            <a href="single_package.php?id=<?php echo $f['id']; ?>">
                                <div class="package-item bg-white mb-2">
                                    <img class="img-fluid" src="<?php echo $f['package_img'];?>" alt="">
                                    <div class="p-4">
                                        <div class="d-flex justify-content-between mb-3">
                                            <small class="m-0"><i
                                                    class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                        </div>
                                        <h3 class="h5 text-decoration-none"><?php echo $f['package_name']; ?></h3>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="m-0"><?php if($f['price'] == ''){
                                                    echo $f['price_offer'];
                                                }else{
                                                    echo $f['price'];
                                                }   ?></h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php



                    }





                }



                ?>



            </div>
        </div>
    </div>
    <!-- Testimonial End -->















    <!-- Registration Start -->
    <div class="container-fluid bg-registration">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="text-white">We Provide Top Destinations Expecially For <span class="text-primary">You
                                Book Now and Enjoy!</span></h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <a href="tel:9821446008" class="text-dark text-decoration-none">
                        <h1 class="text-white"><i class="fa fa-phone-alt mr-2"></i>+91 88002 08304</p>
                        </h1>
                </div>


            </div>
        </div>
    </div>
    <!-- Registration End -->


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
                                <p class="mt-5">
                                    <?php echo $f['review']; ?>
                                </p>
                                <h5 class="text-truncate">
                                    <?php echo $f['name']; ?>
                                </h5>
                                <span>
                                    <?php echo $f['destination']; ?>
                                </span>
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




    <!-- Testimonial Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">

                <h1>Our Blogs</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">

                <?php

                include "conn.php";

                $read = "SELECT * FROM `blogs`";
                $read_run = mysqli_query($conn, $read);
                $num = mysqli_num_rows($read_run);

                if ($num) {

                    while ($f = mysqli_fetch_array($read_run)) {

                        ?>

                        <div class="col-lg-12 col-md-12 mb-4 pb-2">
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
                                        <h5 class="text-primary text-uppercase text-decoration-none">
                                            <?php echo $f['tags'] ?>
                                        </h5>
                                        <span class="text-primary px-2">|</span>
                                        <h5 class="text-primary text-uppercase text-decoration-none">
                                            <?php echo $f['title'] ?>
                                        </h5>
                                    </div>
                                    <a class="h5 m-0 text-decoration-none" href="single_blog.php?id=<?php echo $f['id']; ?>">
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
    <!-- Testimonial End -->


    <div class="container-fluid " style="background-color:#8080802b;">
        <div class="container px-4 py-5" id="hanging-icons">
            <h1 class="text-center">Why We Choose Us?</h1>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div
                        class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#toggles2"></use>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">100% Customizable</h3>
                        <p>Tell us about your trip requirement. We'll work together to
                            customize your trip to meet your exact requirement so that you have a memorable trip.</p>

                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div
                        class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#cpu-fill"></use>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">Top quality customer support</h3>
                        <p>We provide exceptional customer service to ensure your
                            satisfaction</p>

                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div
                        class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#tools"></use>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">Local Experts. Middle-man free price</h3>
                        <p>We're a local travel agency. When you book with us, you get best
                            possible price, which is middle-man free.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->



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