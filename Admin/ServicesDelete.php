<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<?php

include '../connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM `savingaccount` WHERE `savingaccount`.`ID` = $id";

$result = mysqli_query($conn, $sql);
if($result)
{
    echo "<script>alert('Data Deleted ')</script>";
    echo "<script>window.location='Admin4.php'</script>";
}
