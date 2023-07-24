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