<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<?php

include '../connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM `signup` WHERE `signup`.`Id` = $id;";

$result = mysqli_query($conn, $sql);
if($result)
{
    echo "<script>alert('Data Deleted ')</script>";
    echo "<script>window.location='Admin3.2.php'</script>";
}



?>