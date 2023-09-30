<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<?php

include '../connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM `demateaccounts` WHERE `id` = $id";

$result = mysqli_query($conn, $sql);
if($result)
{
    echo "<script>alert('Data Deleted ')</script>";
    echo "<script>window.location='Admin4.php'</script>";
}
