
<?php
include '../conn.php';
$id = $_GET['id'];

$del = "DELETE FROM `happy_client` WHERE id='$id'";


$del_run = mysqli_query($conn, $del);

if($del_run){
    header("location:happy_client.php");
}else{
    header("location:happy_client.php");
}





?>