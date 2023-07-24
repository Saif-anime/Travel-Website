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
    <link rel="stylesheet" href="./css/custom.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>



    <?php
    include './comp/top_bar.php';
    include './comp/nav.php';



    ?>




    <div class="container-fluid">
    
      


            <?php 

            include 'conn.php';

            $id = $_GET['id'];

            $read = "SELECT * FROM `holyday_package` WHERE '$id'";
            
          
            $read_run = mysqli_query($conn, $read);
            $num = mysqli_num_rows($read_run);


            if($num){
                $f = mysqli_fetch_array($read_run);




?>

    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-5 text-white text-uppercase"><?php echo $f['package_name'].'-'.$f['details_day_of_night']; ?></h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white"><?php  if($f['tour_code'] != ''){
                        echo "Tour Code    <i class='fa fa-angle-double-right pt-1 px-3'></i>".$f['tour_code'];
                    }   ?></a></p>
                 
                    <p class="m-0 text-uppercase"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<?php






                
            }

            
            
            
            
            
            ?>
                <div class="container-fluid mt-5 p-4
                ">
      <div class="row">



                <div class="col-md-8 col-sm-12">
                    <?php
                    include './comp/Slider.php';

                    ?>
                    <div class="col-md-12 col-sm-12 p-0 mt-4">
                        <nav class="nav nav-pills flex-column flex-sm-row">
                            <a class="flex-sm-fill text-sm-center nav-link active" href="#overview">Overview</a>
                            <a class="flex-sm-fill text-sm-center nav-link" href="#inclusion_&_exclusion">Inclusion &
                                Exclusion</a>
                            <a class="flex-sm-fill text-sm-center nav-link" href="#itinerary">Itinerary</a>
                            <a class="flex-sm-fill text-sm-center nav-link" href="#Hotel">Hotel</a>
                            <a class="flex-sm-fill text-sm-center nav-link" href="#">Price</a>
                            <a class="flex-sm-fill text-sm-center nav-link" href="#">Term & Info</a>
                        </nav>
                    </div>



                    <!-- Testimonial Start -->
                    <div class="container-fluid" id="#overview">
                        <div class="container py-5">
                            <div class="text-center mb-3 pb-3">
                                <h3>Package Overview</h3>
                            </div>
                            <p>Explore - Badami & Anegundi Hampi – 2 Nights / 3 Days by Car ( Resorts stay)

                                Hampi, Badami & Anegundi - 2 Nights / 3 Days

                                Transfers - Hosapete

                                2 Nights Accommodation with breakfast

                                3 Days Sightseeing by Private Luxury Car</p>

                        </div>
                    </div>

                    <hr>
                    <!-- Testimonial Start -->
                    <div class="container-fluid" id="#top_inclusion">
                        <div class="container py-5">
                            <div class="text-center mb-3 pb-3">
                                <h3>Top Inclusion</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-2">

                                </div>

                            </div>


                        </div>
                    </div>
                    <!-- Testimonial End -->

                    <hr>
                    <!-- Testimonial End -->
                    <!-- Testimonial Start -->
                    <div class="container-fluid" id="#inclusion_&_exclusion">
                        <div class="container py-5">
                            <div class="text-center mb-3 pb-3">
                                <h3>Inclusion & Exclusion</h3>
                            </div>

                            <h3>Inclusion</h3>
                            <ul>
                                <li>Pick up and Drop Hosapete</li>
                                <li>Pick up and Drop Hosapete</li>
                                <li>Pick up and Drop Hosapete</li>
                                <li>Pick up and Drop Hosapete</li>
                                <li>Pick up and Drop Hosapete</li>
                                <li>Pick up and Drop Hosapete</li>

                            </ul>


                            <h3>Exclusion</h3>
                            <ul>
                                <li>Pick up and Drop Hosapete</li>
                                <li>Pick up and Drop Hosapete</li>
                                <li>Pick up and Drop Hosapete</li>
                                <li>Pick up and Drop Hosapete</li>
                            </ul>

                        </div>
                    </div>
                    <!-- Testimonial End -->

                    <hr>
                    
                    <!-- Testimonial Start -->
                    <div class="container-fluid" id="#overview">
                        <div class="container py-5">
                            <div class="text-center mb-3 pb-3">
                                <h3>Tour Policy</h3>
                            </div>
                            <p>Explore - Badami & Anegundi Hampi – 2 Nights / 3 Days by Car ( Resorts stay)

                                Hampi, Badami & Anegundi - 2 Nights / 3 Days

                                Transfers - Hosapete

                                2 Nights Accommodation with breakfast

                                3 Days Sightseeing by Private Luxury Car</p>

                        </div>
                    </div>

                    <hr>
                </div>
            </div>







        </div>
    </div>



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