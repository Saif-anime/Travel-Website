<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:Admin_login.php");
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
            <h1>Manage Holiday Package</h1>
            <section class="section">
                <div class="row">
                    <div class="col-lg-3 d-flex justify-content-center border border-1 shadow"
                        style="background-color:white;">
                        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">


                        <ul class="nav nav-pills flex-column mb-auto">
                                <li class="nav-item">
                                    <a href="holiday.php" class="nav-link active border border-1 my-1"
                                        aria-current="page">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        Holiday Package
                                    </a>
                                </li>
                                <li>
                                    <a href="flights.php" class="nav-link link-dark border border-1 my-1">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#speedometer2"></use>
                                        </svg>
                                        Fights
                                    </a>
                                </li>
                                <li>
                                    <a href="Package_theme.php" class="nav-link link-dark border border-1 my-1">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#table"></use>
                                        </svg>
                                        Package Theme
                                    </a>
                                </li>
                                <li>
                                    <a href="itinerary.php" class="nav-link link-dark border border-1 my-1">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#grid"></use>
                                        </svg>
                                        Itinerary
                                    </a>
                                </li>
                             
                                <li>
                                    <a href="Inclusions.php" class="nav-link link-dark border border-1 my-1">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#people-circle"></use>
                                        </svg>
                                        Inclusions
                                    </a>
                                </li>
                                <li>
                                    <a href="Top_Inclusions.php" class="nav-link link-dark border border-1 my-1">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#people-circle"></use>
                                        </svg>
                                        Top Inclusions
                                    </a>
                                </li>
                                <li>
                                    <a href="Exclusions.php" class="nav-link link-dark border border-1 my-1">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#people-circle"></use>
                                        </svg>
                                        Exclusions
                                    </a>
                                </li>
                                <li>
                                    <a href="Tour_Policy.php" class="nav-link link-dark border border-1 my-1">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#people-circle"></use>
                                        </svg>
                                        Tour Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="Gallary_Images.php" class="nav-link link-dark border border-1 my-1">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#people-circle"></use>
                                        </svg>
                                        Gallery Images
                                    </a>
                                </li>
                                <li>
                                    <a href="Meta_Tags.php" class="nav-link link-dark border border-1 my-1">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#people-circle"></use>
                                        </svg>
                                        Meta Tags
                                    </a>
                                </li>
                           
                           
                            </ul>

                        </div>
                    </div>


                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <!-- Horizontal Form -->
                                <form method="post">
                                    <div class="row">
                            
                                     
                                        <div class="mb-3 col-md-12">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label"
                                                >Flight's Name

                                                <div class="col-sm-12">
                                                    <input type="text" name="flight_name" class="form-control" id="inputText">
                                                </div>
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Departure City

                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="departure_city"
                                                        id="inputText">
                                                </div>
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Arrival City

                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="arrival_city"
                                                        id="inputText">
                                                </div>
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Departure's Time

                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="departure_time"
                                                        id="inputText">
                                                </div>
                                        </div>


                                        <div class="mb-3 col-md-12">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Arrival's Time

                                                <div class="col-sm-12">
                                                    <input type="text" required class="form-control" name="arrival_time"
                                                        id="inputText">
                                                </div>
                                        </div>



                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary" name="flight_submit">Save
                                            Flight</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>

                                </form><!-- End Horizontal Form -->

                            </div>
                        </div>

                    </div>

                </div>
            </section>

        </main><!-- End #main -->

    </div>
    </div>



    <?php
    include '../conn.php';

    if(isset($_POST['flight_submit'])){
        $flight_name = $_POST['flight_name'];
        $departure_city = $_POST['departure_city'];
        $arrival_city = $_POST['arrival_city'];
        $departure_time = $_POST['departure_time'];
        $holiday_package=$_POST['package_holiday'];
        $arrival_time=$_POST['arrival_time'];

        $insert = "INSERT INTO `flights`(`flight_name`, `departure_city`, `arrival_city`, `arrival_time`, `holiday_package_id`, `departure_time`) VALUES ('$flight_name','$departure_city','$arrival_city','$arrival_time','$holiday_package','$departure_time')";


        $insert_run = mysqli_query($conn, $insert);

        if($insert_run){
            echo "<script>alert('Add Flight successfully !');</script>";
        }else{
            echo "<script>alert('Add Flight Not successfully !');</script>";
        }
    }
    



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