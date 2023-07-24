<!-- Booking Start -->
<div class="container-fluid booking mt-5 pb-5">
    <div class="container pb-5">
        <div class="bg-light shadow" style="padding: 30px;">
            <div class="row align-items-center" style="min-height: 60px;">
                <div class="col-md-10">

                    <form method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 mb-md-0">
                                    <div class="name" id="name">
                                        <input type="text" name="name" class="form-control p-4"
                                            placeholder="Enter Your Name..." />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 mb-md-0">
                                    <div class="number" id="name">
                                        <input type="text" name="contact" class="form-control p-4"
                                            placeholder="Contact No..." />
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" name="destination" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Russia</option>
                                        <option value="2">Turkey</option>
                                        <option value="3">Vietnam</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3 my-2 mb-md-0">
                                    <div class="destination" id="destination">
                                        <input type="text" name="other_destination" class="form-control p-4"
                                            placeholder=" Any Other Destination ?" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3 my-2 mb-md-0">
                                    <div class="destination" id="destination">
                                        <input type="number" class="form-control p-4" placeholder=" For How many days ?"
                                            name="for_how_many_days" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 my-2 mb-md-0">
                                    <div class="destination" id="destination">
                                        <input type="number" class="form-control p-4"
                                            placeholder=" How many people (above 10 yrs) ?" name="how_many_people" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 my-2 mb-md-0">
                                    <div class="destination" id="destination">
                                        <input type="number" class="form-control p-4"
                                            placeholder=" How many kids (below 10 yrs) ?" name="how_many_kids" />
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary btn-block" type="submit" name="submit"
                        style="height: 47px; margin-top: -2px;">Submit</button>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>
<!-- Booking End -->


<?php
include "conn.php";


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $destination = $_POST['destination'];
    $other_destination = $_POST['other_destination'];
    $for_how_many_days = $_POST['for_how_many_days'];
    $how_many_people = $_POST['how_many_people'];
    $how_many_kids = $_POST['how_many_kids'];


    $insert = "INSERT INTO `booking`(`name`, `contact`, `destination`, `other_destination`, `for_how_many_days`, `how_many_people`, `how_many_kids`) VALUES ('$name','$contact','$destination','$other_destination','$for_how_many_days','$how_many_people','$how_many_kids')";


    $insert_run = mysqli_query($conn, $insert);

    if ($insert_run) {
        echo "<script>alert('Your booking successfully submitted !')</script>";
    } else {
        echo "<script>alert('OOps Your booking not successfully submitted !')</script>";
    }
}

?>