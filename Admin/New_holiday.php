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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
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


            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">Holyday Package</button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">Flights</button>
                    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills"
                        type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Package
                        Theme</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false">Itinerary</button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false">Inclusions</button>

                    <button class="nav-link" id="v-pills-top_inclusions" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false">Top Inclusions</button>


                    <button class="nav-link" id="v-pills-exclusions" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false">Exclusions</button>

                    <button class="nav-link" id="v-pills-tour_policy" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false">Tour Policy</button>


                    <button class="nav-link" id="v-pills-galary" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false">Galary</button>


                    <button class="nav-link" id="v-pills-meta_tags" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false">Meta Tags</button>




                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab" tabindex="0">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Horizontal Form -->
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">Package Type
                                                    <span class="text-danger">*</span></label>
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
                                                    <select id="inputState" name="type" required class="form-select">
                                                        <option selected>Type...</option>
                                                        <option>International</option>
                                                        <option>Domestic</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">Destination
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-sm-12">
                                                    <select id="inputState" name="destination" required
                                                        class="form-select">
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
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">Tour Code
                                                </label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="tour_code" class="form-control"
                                                        id="inputText">
                                                </div>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="inputEmail3" class="col-sm-12 col-form-label">Image Alt
                                                </label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="img_alt" class="form-control"
                                                        id="inputText">
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
                                                <label for="inputNumber" class="col-sm-12 col-form-label">Banner Image
                                                    (1500
                                                    X 500)</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" name="banner_img" type="file"
                                                        id="formFile">
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="inputNumber" class="col-sm-12 col-form-label">Number of
                                                    Nights
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
                                                <label for="inputNumber" class="col-sm-12 col-form-label">Details of Day
                                                    and
                                                    Nights <span class="text-danger">*</span></label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" name="detail_of_day_and_nights"
                                                        type="text" id="formFile">
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
                                                <label for="inputNumber" class="col-sm-12 col-form-label">Package's
                                                    Overview
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
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab" tabindex="0">



                        <div class="mb-3 col-md-12">
                            <label for="inputEmail3" class="col-sm-12 col-form-label">Flight's Name

                                <div class="col-sm-12">
                                    <input type="text" name="flight_name" class="form-control" id="inputText">
                                </div>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="inputEmail3" class="col-sm-12 col-form-label">Departure City

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="departure_city" id="inputText">
                                </div>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="inputEmail3" class="col-sm-12 col-form-label">Arrival City

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="arrival_city" id="inputText">
                                </div>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="inputEmail3" class="col-sm-12 col-form-label">Departure's Time

                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="departure_time" id="inputText">
                                </div>
                        </div>


                        <div class="mb-3 col-md-12">
                            <label for="inputEmail3" class="col-sm-12 col-form-label">Arrival's Time

                                <div class="col-sm-12">
                                    <input type="text" required class="form-control" name="arrival_time" id="inputText">
                                </div>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                        aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-top_inclusions" tabindex="0">...</div>


                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-exclusions" tabindex="0">...</div>



                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-tour_policy" tabindex="0">...</div>

                    <div class="tab-pane fade" id="v-pills-galary" role="tabpanel" aria-labelledby="v-pills-tour_policy"
                        tabindex="0">...</div>


                    <div class="tab-pane fade" id="v-pills-meta_tags" role="tabpanel"
                        aria-labelledby="v-pills-tour_policy" tabindex="0">...</div>
                </div>
            </div>
        </main><!-- End #main -->

    </div>
    </div>







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