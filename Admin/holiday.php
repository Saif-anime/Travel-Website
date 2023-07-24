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
                                <form method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Package Type <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-12">
                                                <select id="inputState" name="package_type" required
                                                    class="form-select">
                                                    <option selected>Choose Package Type...</option>

                                                    <?php

                                                    include "../conn.php";

                                                    $read = "SELECT * FROM `package_type`";
                                                    $read_run = mysqli_query($conn, $read);
                                                    $num = mysqli_num_rows($read_run);

                                                    if ($num) {

                                                        while ($f = mysqli_fetch_array($read_run)) {

                                                            ?>
                                                            <option value="<?php echo $f['id']; ?>"><?php echo $f['package_type']; ?></option>

                                                            <?php



                                                        }





                                                    }



                                                    ?>






                                                </select>

                                                <!-- Button trigger modal -->
                                                <p type="button" class="btn my-1 border-none" data-bs-toggle="modal"
                                                    data-bs-target="#package_type">
                                                    <i class="bi bi-plus"></i> Add New Ppeackage type
                                                </p>
                                            </div>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Type <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-12">
                                                <select id="inputState" name="type" required
                                                    class="form-select">
                                                    <option selected>Type...</option>
                                                    <option>International</option>
                                                    <option>Domestic</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Destination <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-12">
                                                <select id="inputState" name="destination" required class="form-select">
                                                    <option selected>Choose Destination...</option>
                                                    <?php

                                                    include "../conn.php";

                                                    $read = "SELECT * FROM `destination`";
                                                    $read_run = mysqli_query($conn, $read);
                                                    $num = mysqli_num_rows($read_run);

                                                    if ($num) {

                                                        while ($f = mysqli_fetch_array($read_run)) {

                                                            ?>
                                                            <option value="<?php echo $f['id']; ?>"><?php echo $f['destination']; ?></option>

                                                            <?php



                                                        }





                                                    }



                                                    ?>

                                                </select>
                                                <!-- Button trigger modal -->
                                                <p type="button" class="btn my-1 border-none" data-bs-toggle="modal"
                                                    data-bs-target="#destination_add">
                                                    <i class="bi bi-plus"></i> Add New Destination
                                                </p>
                                            </div>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Package's Name
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-12">
                                                <input type="text" name="package_name" required class="form-control"
                                                    id="inputText">
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Price
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-12">
                                                <input type="text" name="price" required class="form-control"
                                                    id="inputText">
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Price Offer
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-12">
                                                <input type="text" name="price_offer" required class="form-control"
                                                    id="inputText">
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Tour Code </label>
                                            <div class="col-sm-12">
                                                <input type="text" name="tour_code" class="form-control" id="inputText">
                                            </div>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Image Alt </label>
                                            <div class="col-sm-12">
                                                <input type="text" name="img_alt" class="form-control" id="inputText">
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <label for="inputNumber" class="col-sm-12 col-form-label">Package
                                                Image</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="package_img" type="file"
                                                    id="formFile">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputNumber" class="col-sm-12 col-form-label">Banner Image (1500
                                                X 500)</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="banner_img" type="file" id="formFile">
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="inputNumber" class="col-sm-12 col-form-label">Number of Nights
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="no_of_nights" type="number"
                                                    id="formFile">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputNumber" class="col-sm-12 col-form-label">Number of Days
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="no_of_days" type="number"
                                                    id="formFile">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputNumber" class="col-sm-12 col-form-label">Details of Day and
                                                Nights <span class="text-danger">*</span></label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="detail_of_day_and_nights" type="text"
                                                    id="formFile">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="inputNumber" class="col-sm-12 col-form-label">Support Number
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="support_number" type="text"
                                                    id="formFile">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputNumber" class="col-sm-12 col-form-label">Package's Overview
                                            </label>
                                            <div class="col-sm-12">
                                                <textarea row="20" class="form-control" col="20"
                                                    name="package_overview"></textarea>
                                            </div>
                                        </div>





                                    </div>
                                   

                                </form><!-- End Horizontal Form -->

                            </div>
                        </div>

                    </div>

                </div>
            </section>

        </main><!-- End #main -->

        <!-- Modal -->
        <div class="modal fade" id="package_type" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Package type
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="mb-3 col-md-12">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">Package Type

                                    <div class="col-sm-12">
                                        <input type="text" required placeholder="Enter the Package Type" class="form-control"
                                            id="inputText" name="package_type">
                                    </div>
                            </div>

                            <input type="submit" class="btn btn-primary" name="package_type_add">
                        </form>
                    </div>


                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="destination_add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Destination Add
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="mb-3 col-md-12">
                            <label for="inputEmail3" class="col-sm-12 col-form-label">Destination Add

                                <div class="col-sm-12">
                                    <input type="text" required placeholder="Enter the Destination" class="form-control"
                                        id="inputText" name="destination">
                                </div>
                        </div>

                        <input type="submit" class="btn btn-primary" name="destination_add">
                    </form>
                </div>


            </div>
        </div>

    </div>
    </div>


    <?php

    include "../conn.php";



    if (isset($_POST['package_type_add'])) {
        $package_type = $_POST['package_type'];
        $insert = "INSERT INTO `package_type`(`package_type`) VALUES ('$package_type')";
        $insert_run = mysqli_query($conn, $insert);
        if($insert_run){
            echo "<script>window.location.href = '';</script>";
        }

    }

    if (isset($_POST['destination_add'])) {
        $destination = $_POST['destination'];
        $insert = "INSERT INTO `destination`(`destination`) VALUES ('$destination')";
        $insert_run = mysqli_query($conn, $insert);
        echo "<script>window.location.href = '';</script>";

    }








    ?>






    <?php

    include '../conn.php';


    if (isset($_POST['add_holiday_package'])) {
     
        $package_type = $_POST['package_type'];
        $type = $_POST['type'];
        $destination = $_POST['destination'];
        $package_name = $_POST['package_name'];
        $price = $_POST['price'];
        $price_offer = $_POST['price_offer'];
        $tour_code = $_POST['tour_code'];
        $img_alt = $_POST['img_alt'];
        $package_img = $_FILES['package_img'];
        $banner_img = $_FILES['banner_img'];
        $no_of_nights = $_POST['no_of_nights'];
        $no_of_days = $_POST['no_of_days'];
        $detail_of_day_and_night = $_POST['detail_of_day_and_nights'];
        $support_no = $_POST['support_number'];
        $package_overview = $_POST['package_overview'];

        // package 
        $package_err = $package_img['error'];
        $package_tmp = $package_img['tmp_name'];
        $packag_name = $package_img['name'];

        // banner_img package 
    
        $banner_err = $banner_img['error'];
        $banner_tmp = $banner_img['tmp_name'];
        $banner_name = $banner_img['name'];



        if ($banner_err == 0 || $package_err == 0) {
            $ban_p = './assets/holiday/'.$banner_name;
            $upload_ban = move_uploaded_file($banner_tmp, $ban_p);
            $package_p = './assets/holiday/banner_holiday/'.$packag_name;
            $upload_pack = move_uploaded_file($package_tmp, $package_p);


            if ($upload_ban || $upload_pack) {


                $insert = "INSERT INTO `holyday_package`(`package_type`, `types`, `destination`, `package_name`, `tour_code`, `img_alt`, `package_img`, `banner_img`, `no_of_nights`, `no_of_days`, `details_day_of_night`, `spport_number`, `package_overview`, `price`, `price_offer`) VALUES ('$package_type','$type', '$destination', '$package_name', '$tour_code', '$img_alt', '$package_p', '$ban_p', '$no_of_nights', '$no_of_days', '$detail_of_day_and_night', '$support_no', '$package_overview', '$price', '$price_offer')";

                $insert_run = mysqli_query($conn, $insert);
                if ($insert_run) {
                    echo "<script>alert('Add New Holiday successfully !');</script>";
                } else {
                    echo "<script>alert('Add New Holiday Not successfully !');</script>";
                }

            }






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