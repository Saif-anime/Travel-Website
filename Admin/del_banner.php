<?php
include '../conn.php';
$id = $_GET['id'];

$del = "DELETE FROM `banner` WHERE id='$id'";


$del_run = mysqli_query($conn, $del);

if($del_run){
    header("location:banner.php");
}else{
    header("location:banner.php");
}





?>