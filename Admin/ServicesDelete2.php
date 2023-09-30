<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<?php

include '../connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM `accountlimits` WHERE `Id` = $id";

$result = mysqli_query($conn, $sql);
if($result)
{
    echo "<script>alert('Data Deleted ')</script>";
    echo "<script>window.location='Admin4.php'</script>";
}


# $servername = "localhost";
#     $usern = "id20768477_root";
#     $passw = "Root@1234";
#     $database = "id20768477_bank_agent";

 #    $conn = mysqli_connect($servername,$usern,$passw,$database);
