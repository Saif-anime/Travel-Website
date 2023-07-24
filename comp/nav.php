<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-fluid-lg position-relative p-0 " style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="/" class="navbar-brand" style="width:200px;">
                <img src="./img/Logo.png" style="width: 100%;height: 100%;">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="About.php" class="nav-item nav-link">About</a>

                    <li class="nav-item px-4 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Destination</a>
                        <div class="dropdown-menu dropdown-menu-right" style="right:-207px !important;" aria-labelledby="servicesDropdown">

                            <div class="d-md-flex align-items-start justify-content-start">


                                <?php
                                include 'conn.php';

                                $read = "SELECT * FROM `package_type`";
                                $read_run = mysqli_query($conn, $read);
                                $num = mysqli_num_rows($read_run);

                                if ($num) {

                                    while ($f = mysqli_fetch_array($read_run)) {

                                        ?>

                                        
                                <div>
                                    <div class="dropdown-header text-primary"><?php echo $f['package_type'] ?></div>
                                    <a class="dropdown-item" href="#">Bespoke software</a>
                                    <a class="dropdown-item" href="#">Mobile apps</a>
                                    <a class="dropdown-item" href="#">Websites</a>
                                </div>
                                       

                                        <?php



                                    }





                                }


                                ?>


                             
                            </div>
                        </div>
                    </li>
                    <a href="Services.php" class="nav-item nav-link">Services</a>
                    <a href="Blogs.php" class="nav-item nav-link">Blogs</a>
                    <a href="happy_travellers.php" class="nav-item nav-link">Happy Travellers</a>

                    <a href="Contact.php" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->