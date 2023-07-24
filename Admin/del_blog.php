<?php
include '../conn.php';
$id = $_GET['id'];

$del = "DELETE FROM `blogs` WHERE id='$id'";


$del_run = mysqli_query($conn, $del);

if($del_run){
    header("location:Blogs.php");
}else{
    header("location:Blogs.php");
}





?>