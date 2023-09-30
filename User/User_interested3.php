<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<?php
//  diffrent id for diffrent table, colum have diffrent name
$id = $_GET['id'];
$user = $_GET['user'];

include '../connection.php';

$sql1 = "SELECT * FROM `signup` WHERE Username='$user'";
$result1 = mysqli_query($conn, $sql1);
$data1 = mysqli_fetch_assoc($result1);

$Bankname = $id;
$Name = $data1["Name"];
$Email = $data1["Email"];

$check = "SELECT * FROM `userinterest` ";
$checkresult = mysqli_query($conn, $check);
$checkdata = mysqli_fetch_assoc($checkresult);
$checkName = $checkdata["BankName"];

if($Name == $checkName)
{
    echo "sorry already added";
}
else
{
    $newsql = "INSERT INTO `userinterest`(`BankName`, `UserName`, `UserEmail`) VALUES ('$Bankname','$Name','$Email')";
    $newresult = mysqli_query($conn, $newsql);
    echo "<script> alert('Thanks, you will get your services and related info as soon as possible ')</script>";
    
    echo "<script>window.location='User_services.php';</script>";
}


?>