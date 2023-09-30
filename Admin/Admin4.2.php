<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<!doctype html>
<html lang="en">
<!---------------------------Add services--------------------------------------->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BankWalaPerson</title>
    <link rel="stylesheet" href="AdminStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <?php

    include '../connection.php';


    $sql = "SELECT * FROM `signup`";
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    ?>
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img class="logo" src="../images/logo3.png" alt="">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <h1 class="hadadmin">Admin Pannel</h1>
                <!-- <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Services.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.html">About us</a>
                </li> -->
        </div>
        <a class="nav-link" href="../logout.php">LogOut</a>
    </div>
</nav>
<!-------------------------------------Current Users----------------------------------------------------------------------------------------------->

<body>

    <div class="main-right p-3">
        <div class="container">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="Admin4.php">User-side Output</a></li>
                    <li class="page-item"><a class="page-link" href="Admin4.2php">Edit service</a></li>
                </ul>
            </nav>
            <?php

            if (isset($_POST['savingA'])) {

                include '../connection.php';
                $bank = $_POST['bank'];
                $ir = $_POST['irate'];
                $mrb = $_POST['mrb'];

                $sql = "INSERT INTO `savingaccount`(`Accounts`, `InterestR`, `mrb`) VALUES ('$bank,','$ir','$mrb')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>window.location='Admin4.2.php';</script>";
                }
            }
            ?>

            <h3 class="text-center">Best Saving Accounts</h3>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="input-group">
                    <span class="input-group-text">Add Bank</span>
                    <input type="text" name="bank" class="form-control" required>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Interest Rate</span>
                    <input type="text" name="irate" class="form-control" required>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Minimum Balance required</span>
                    <input type="text" name="mrb" class="form-control" required>
                </div><br>
                <div class="col-12 mb-5 text-center">
                    <button class="btn btn-primary" name="savingA" type="submit">Add Data</button>
                </div>
            </form>
            <hr>
            <!-------------------------------------------------------------------------------------------------->


            <?php

            if (isset($_POST['accountL'])) {

                include '../connection.php';
                $banknm = $_POST['banknm'];
                $cwl = $_POST['cwl'];
                $ctl = $_POST['ctl'];

                $sql = "INSERT INTO `accountlimits`(`Banknm`, `CWL`, `CTL`) VALUES ('$banknm,','$cwl','$ctl')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>window.location='Admin4.2.php';</script>";
                }
            }
            ?>

            <h3 class="text-center">Cash Withdrawal Limit & Cash Transaction Limit </h3>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="input-group">
                    <span class="input-group-text">Bank Name</span>
                    <input type="text" name="banknm" class="form-control" required>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Cash Withdrawal Limit*</span>
                    <input type="text" name="cwl" class="form-control" required>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Cash Transaction Limit*</span>
                    <input type="text" name="ctl" class="form-control" required>
                </div><br>
                <div class="col-12 mb-5 text-center">
                    <button class="btn btn-primary" name="accountL" type="submit">Add Data</button>
                </div>
            </form>
            <hr>

            <!-------------------------------------------------------------------------------------------------->
            <?php

            if (isset($_POST['dematA'])) {

                include '../connection.php';
                $details = $_POST['details'];
                $d1 = $_POST['d1'];
                $d2 = $_POST['d2'];
                $d3 = $_POST['d3'];

                $sql = "INSERT INTO `demateaccounts`(`Details`, `Demat-broker-1`, `Demat-broker-2`, `Demat-broker-3`) VALUES ('$details,','$d1','$d2','$d3')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>window.location='Admin4.2.php';</script>";
                }
            }
            ?>
            <h3 class="text-center">Demate Account</h3>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="input-group">
                    <span class="input-group-text">Details</span>
                    <input type="text" name="details" class="form-control" required>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Demat broker</span>
                    <input type="text" name="d1" class="form-control" required>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Demat broker</span>
                    <input type="text" name="d2" class="form-control" required>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text">Demat broker</span>
                    <input type="text" name="d3" class="form-control" required>
                </div><br>
                <div class="col-12 mb-5 text-center">
                    <button class="btn btn-primary" name="dematA" type="submit">Add Data</button>
                </div>
            </form>

        </div>
    </div>
    <div class="main-left">
        <h3> <a href="Admin3.php"> Profile</a></h3>
        <hr>
        <h3> <a href="Admin1.php"> Current Users</a></h3>
        <hr>
        <h3> <a href="Admin2.php"> FeedBack</a></h3>
        <hr>
        <h3> <a href="Admin4.php"> Add Bank Details >>>>></a></h3>
        <hr>
        <h3> <a href="Admin5.php"> User Add This </a></h3>
        <hr>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>