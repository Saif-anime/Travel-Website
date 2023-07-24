<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">



            <?php

            include "conn.php";

            $read = "SELECT * FROM `banner`";
            $read_run = mysqli_query($conn, $read);
            $num = mysqli_num_rows($read_run);

            if ($num) {

                while ($f = mysqli_fetch_array($read_run)) {

                    ?>

                    <div class="carousel-item active">
                        <img class="w-100" style="height: 500px;" src="./Admin/<?php echo $f['banner_img']; ?>" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        </div>
                    </div>



                    <?php



                }





            }



            ?>








        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->