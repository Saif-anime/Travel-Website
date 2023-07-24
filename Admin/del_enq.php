<?php
include '../conn.php';
$id = $_GET['id'];

$del = "DELETE FROM `contact` WHERE id='$id'";


$del_run = mysqli_query($conn, $del);

if($del_run){
    header("location:all_enquiry.php");
}else{
    header("location:all_enquiry.php");
}





?>