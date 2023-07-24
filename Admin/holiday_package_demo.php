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
                                    <button id="holiday_pack" class="nav-link border border-1 my-1" aria-current="page">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        Holiday Package
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button id="flight_pack" class="nav-link  border border-1 my-1" aria-current="page">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        Flights
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button id="package_theme" class="nav-link  border border-1 my-1"
                                        aria-current="page">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        Package Theme
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button id="Itinerary" class="nav-link border border-1 my-1" aria-current="page">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        Itinerary
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button id="inclusions" class="nav-link border border-1 my-1" aria-current="page">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        Inclusions
                                    </button>
                                </li>


                                <li class="nav-item">
                                    <button id="top_inclusion" class="nav-link  border border-1 my-1"
                                        aria-current="page">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        Top Inclusions
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button id="tour_policy" class="nav-link border border-1 my-1" aria-current="page">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        Tour Policy
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button id="gallary_image" class="nav-link border border-1 my-1"
                                        aria-current="page">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        Gallary_Images
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button id="meta_tags" class="nav-link  border border-1 my-1" aria-current="page">
                                        <svg class="bi me-2" width="16" height="16">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        Meta Tags
                                    </button>
                                </li>
                            </ul>

                        </div>
                    </div>


                    <div class="col-lg-9">
                        <form method="post" enctype="multipart/form-data">
                            <div class="card " id="holiday_package">
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
                                                        <i class="bi bi-plus"></i> Add New Package type
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




                                </div>
                            </div>


                            <div class="card d-none" id="holiday_flight">
                                <div class="card-body">
                                    <!-- Horizontal Form -->

                                    <div class="row">


                                        <div class="mb-3 col-md-12">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Flight's Name

                                                <div class="col-sm-12">
                                                    <input type="text" name="flight_name" class="form-control"
                                                        id="inputText">
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



                                </div>
                            </div>





                            <div class="card " id="package_theme">
                                <div class="card-body">
                                    <!-- Horizontal Form -->

                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label for="inputEmail3" class="col-sm-12 col-form-label">Package Theme
                                            </label>
                                            <div class="col-sm-12">
                                                <select id="inputState" required class="form-select">
                                                    <option selected>Choose Package Theme...</option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>


                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn border-none outline-none"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="bi bi-plus"></i> Add New
                                        </button>

                                        <!-- Modal -->

                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3 col-md-12">
                                                            <label for="inputEmail3"
                                                                class="col-sm-12 col-form-label">Theme Name

                                                                <div class="col-sm-12">
                                                                    <input type="text" required name="name"
                                                                        placeholder="Enter the Theme Name"
                                                                        class="form-control" id="inputText">
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="inputNumber" class="col-sm-12 col-form-label">
                                                                Image</label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" type="file"
                                                                    name="package_img" id="formFile">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="add_package"
                                                            class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>




                            <div class="card" id="itinerary">
                                <div class="card-body">
                                    <!-- Horizontal Form -->

                                    <div class="row">
                                        <!-- Button trigger modal -->
                                        <button type="button" style="width:120px;"
                                            class="btn my-1 border-none btn-primary ms-auto outline-none"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="bi bi-plus"></i> Add New
                                        </button>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Day</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td><button class="btn btn-danger btn-sm"><i
                                                                class="bi bi-trash"></i></button>
                                                        <button class='btn btn-success btn-sm'><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td><button class="btn btn-danger btn-sm"><i
                                                                class="bi bi-trash"></i></button>
                                                        <button class='btn btn-success btn-sm'><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>

                                                </tr>
                                                <tr>


                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">New
                                                            Itinerary
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3 col-md-12">
                                                            <label for="inputEmail3"
                                                                class="col-sm-12 col-form-label">Title

                                                                <div class="col-sm-12">
                                                                    <input type="text" required
                                                                        placeholder="Enter the Title"
                                                                        class="form-control" id="inputText">
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="inputNumber"
                                                                class="col-sm-12 col-form-label">Details</label>
                                                            <div class="card shadow-none p-0 ">
                                                                <div class="card-body ">

                                                                    <div class="quill-editor-full border border-2">

                                                                    </div>
                                                                    <!-- End Quill Editor Full -->

                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-12 mb-3">
                                                            <label for="inputNumber" class="col-sm-12 col-form-label">
                                                                Image</label>
                                                            <div class="col-sm-12">
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 col-md-12">
                                                            <label for="inputEmail3"
                                                                class="col-sm-12 col-form-label">Meal Type <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="col-sm-12">
                                                                <select id="inputState" required class="form-select">
                                                                    <option selected>Choose Meal...</option>
                                                                    <option>Breakfast</option>
                                                                    <option>Dinner</option>
                                                                    <option>Lunch</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary">Save Package</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>



                                </div>
                            </div>




                            <div class="card" id="inclusions">
                                <div class="card-body">
                                    <!-- Horizontal Form -->

                                    <div class="row p-4">
                                        <!-- Button trigger modal -->

                                        <div class="containerr mb-4">

                                        </div>
                                        <button id="add_box" class="btn btn-primary"
                                            style="width:100px; margin-left:auto;">+ Add</button>


                                    </div>
                                </div>











                            </div>

                            <div class="card" id="exclusion">
                                <div class="card-body">
                                    <!-- Horizontal Form -->

                                    <div class="row p-4">
                                        <!-- Button trigger modal -->

                                        <div class="containerr mb-4">

                                        </div>
                                        <button id="add_box" class="btn btn-primary"
                                            style="width:100px; margin-left:auto;">+ Add</button>


                                    </div>
                                </div>











                            </div>

                            <div class="card" id="tour_policy">
                                <div class="card-body">
                                    <!-- Horizontal Form -->

                                    <div class="row p-4">
                                        <!-- Button trigger modal -->

                                        <div class="containerr mb-4">

                                        </div>
                                        <button id="add_box" class="btn btn-primary"
                                            style="width:100px; margin-left:auto;">+ Add</button>


                                    </div>
                                </div>











                            </div>



                            <div class="card" id="meta">
                                <div class="card-body">
                                    <!-- Horizontal Form -->

                                    <div class="row">
                                        <!-- Button trigger modal -->
                                        <button type="button" style="width:120px;"
                                            class="btn my-1 border-none btn-primary ms-auto outline-none"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="bi bi-plus"></i> Add New
                                        </button>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Keyword</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td><button class="btn btn-danger btn-sm"><i
                                                                class="bi bi-trash"></i></button>
                                                        <button class='btn btn-success btn-sm'><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td><button class="btn btn-danger btn-sm"><i
                                                                class="bi bi-trash"></i></button>
                                                        <button class='btn btn-success btn-sm'><i
                                                                class="bi bi-trash"></i></button>
                                                    </td>

                                                </tr>
                                                <tr>


                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Modal -->
                                        <div class="modal fade" id="metaModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">New
                                                            Itinerary
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3 col-md-12">
                                                            <label for="inputEmail3"
                                                                class="col-sm-12 col-form-label">Title

                                                                <div class="col-sm-12">
                                                                    <input type="text" required
                                                                        placeholder="Enter the Title"
                                                                        class="form-control" id="inputText">
                                                                </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3 col-md-12">
                                                                <label for="inputEmail3"
                                                                    class="col-sm-12 col-form-label">Keyword

                                                                    <div class="col-sm-12">
                                                                        <input type="text" required
                                                                            placeholder="Enter the Title"
                                                                            class="form-control" id="inputText">
                                                                    </div>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label for="inputNumber"
                                                                    class="col-sm-12 col-form-label">Description</label>
                                                                <div class="card shadow-none p-0 ">
                                                                    <div class="card-body ">

                                                                        <div class="quill-editor-full border border-2">

                                                                        </div>
                                                                        <!-- End Quill Editor Full -->

                                                                    </div>
                                                                </div>
                                                            </div>





                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>


                                </div>



                                         



                                    </div>

                                    
                                <div class="card" id="galary">
                                    <div class="card-body">
                                        <!-- Horizontal Form -->
                                        <form method="post">
                                            <div class="row">
                                                <!-- Button trigger modal -->
                                                <button type="button" style="width:120px;"
                                                    class="btn my-1 border-none btn-primary ms-auto outline-none"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="bi bi-plus"></i> Add New
                                                </button>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Image Alt</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>

                                                            <td>Otto</td>
                                                            <td><button class="btn btn-danger btn-sm"><i
                                                                        class="bi bi-trash"></i></button>
                                                                <button class='btn btn-success btn-sm'><i
                                                                        class="bi bi-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>

                                                            <td>Thornton</td>
                                                            <td><button class="btn btn-danger btn-sm"><i
                                                                        class="bi bi-trash"></i></button>
                                                                <button class='btn btn-success btn-sm'><i
                                                                        class="bi bi-trash"></i></button>
                                                            </td>

                                                        </tr>
                                                        <tr>


                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Gallary Add
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="mb-3 col-md-12">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-12 col-form-label">Image Alt
                                                                        <div class="col-sm-12">
                                                                            <input type="text" required
                                                                                placeholder="Enter the Image Alt"
                                                                                class="form-control" id="inputText">
                                                                        </div>
                                                                </div>



                                                                <div class="col-md-12 mb-3">
                                                                    <label for="inputNumber"
                                                                        class="col-sm-12 col-form-label">
                                                                        Image</label>
                                                                    <div class="col-sm-12">
                                                                        <input class="form-control" type="file"
                                                                            id="formFile">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                 

                                    </div>



                                    <div class="card" id="galary">
                                    <div class="card-body">
                                        <!-- Horizontal Form -->
                                        <form method="post">
                                            <div class="row">
                                                <!-- Button trigger modal -->
                                                <button type="button" style="width:120px;"
                                                    class="btn my-1 border-none btn-primary ms-auto outline-none"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="bi bi-plus"></i> Add New
                                                </button>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Image Alt</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>

                                                            <td>Otto</td>
                                                            <td><button class="btn btn-danger btn-sm"><i
                                                                        class="bi bi-trash"></i></button>
                                                                <button class='btn btn-success btn-sm'><i
                                                                        class="bi bi-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>

                                                            <td>Thornton</td>
                                                            <td><button class="btn btn-danger btn-sm"><i
                                                                        class="bi bi-trash"></i></button>
                                                                <button class='btn btn-success btn-sm'><i
                                                                        class="bi bi-trash"></i></button>
                                                            </td>

                                                        </tr>
                                                        <tr>


                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Gallary Add
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="mb-3 col-md-12">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-12 col-form-label">Image Alt
                                                                        <div class="col-sm-12">
                                                                            <input type="text" required
                                                                                placeholder="Enter the Image Alt"
                                                                                class="form-control" id="inputText">
                                                                        </div>
                                                                </div>



                                                                <div class="col-md-12 mb-3">
                                                                    <label for="inputNumber"
                                                                        class="col-sm-12 col-form-label">
                                                                        Image</label>
                                                                    <div class="col-sm-12">
                                                                        <input class="form-control" type="file"
                                                                            id="formFile">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                 

                                    </div>
                                    <div class="card" id="galary">
                                    <div class="card-body">
                                        <!-- Horizontal Form -->
                                        <form method="post">
                                            <div class="row">
                                                <!-- Button trigger modal -->
                                                <button type="button" style="width:120px;"
                                                    class="btn my-1 border-none btn-primary ms-auto outline-none"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="bi bi-plus"></i> Add New
                                                </button>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Image Alt</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>

                                                            <td>Otto</td>
                                                            <td><button class="btn btn-danger btn-sm"><i
                                                                        class="bi bi-trash"></i></button>
                                                                <button class='btn btn-success btn-sm'><i
                                                                        class="bi bi-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>

                                                            <td>Thornton</td>
                                                            <td><button class="btn btn-danger btn-sm"><i
                                                                        class="bi bi-trash"></i></button>
                                                                <button class='btn btn-success btn-sm'><i
                                                                        class="bi bi-trash"></i></button>
                                                            </td>

                                                        </tr>
                                                        <tr>


                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Gallary Add
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="mb-3 col-md-12">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-12 col-form-label">Image Alt
                                                                        <div class="col-sm-12">
                                                                            <input type="text" required
                                                                                placeholder="Enter the Image Alt"
                                                                                class="form-control" id="inputText">
                                                                        </div>
                                                                </div>



                                                                <div class="col-md-12 mb-3">
                                                                    <label for="inputNumber"
                                                                        class="col-sm-12 col-form-label">
                                                                        Image</label>
                                                                    <div class="col-sm-12">
                                                                        <input class="form-control" type="file"
                                                                            id="formFile">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                 

                                    </div>
                             
                             
            </section>

            

        </main><!-- End #main -->

    </div>

    </form>

    </div>




    <!-- Modal Package Add -->
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
                                    <input type="text" required placeholder="Enter the Package Type"
                                        class="form-control" id="inputText" name="package_type">
                                </div>
                        </div>

                        <input type="submit" class="btn btn-primary" name="package_type_add">
                    </form>
                </div>


            </div>
        </div>

    </div>
    </div>

    <!-- Modal Destination -->
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







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js">></script>

    <script>



            $(document).ready(function () {
                $('#add_box').click(function () {

                    $('.containerr').append(`<div class="btn_input d-flex mx-2">
                                    <input type="text" name="inclusion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <button type="button"  class="btn delete_btn"><i class="bi bi-x"></i></button>
                                    </div>`);

                })








            })








        // btn 
        var holiday_pack = document.querySelector('#holiday_pack');
        var flight_pack = document.querySelector('#flight_pack');
        var package_theme = document.querySelector('#package_theme');
        var Itinerary = document.querySelector('#Itinerary');
        var inclusions = document.querySelector('#inclusions');
        var top_inclusion = document.querySelector('#top_inclusion');
        var tour_policy = document.querySelector('#tour_policy');
        var gallary_image = document.querySelector('#gallary_image');
        var meta_tags = document.querySelector('#meta_tags');

        // card 
        var holiday_package = document.querySelector('#holiday_package');
        var holiday_flight = document.querySelector('#holiday_flight');
        var package_theme = document.querySelector('#package_theme');

        // function 


        holiday_pack.addEventListener('click', () => {
            holiday_pack.classList.add('active')
            flight_pack.classList.remove('active');
            holiday_package.classList.remove('d-none');
            holiday_flight.classList.add('d-none')
        })

        flight_pack.addEventListener('click', () => {
            flight_pack.classList.add('active')
            holiday_flight.classList.remove('d-none');
            holiday_package.classList.add('d-none');
            holiday_package.classList.remove('active');
        })


    </script>



    <?php

    include "../conn.php";



    if (isset($_POST['package_type_add'])) {
        $package_type = $_POST['package_type'];
        $insert = "INSERT INTO `package_type`(`package_type`) VALUES ('$package_type')";
        $insert_run = mysqli_query($conn, $insert);
        if ($insert_run) {
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