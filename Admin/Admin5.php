<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<!doctype html>
<html lang="en">
<!----------------------------This users is interested in this service--------------->

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
        <table class="table table-bordered border-secondary bg-light w-80">
            <thead class="text-center bg-info">
                <h3 class="text-center">Our User Interested </h3>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Banks</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $sql = "SELECT * FROM `userinterest`";
                $result = mysqli_query($conn, $sql);

                $num = mysqli_num_rows($result);
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>' . "<td>" . $row['UserEmail'] . "</td>" . "<td>" . $row['UserName'] . "</td>" . "<td>" . $row['BankName'] . "</td>"; ?>
                <?php
                    }
                } ?>

            </tbody>
        </table>
        <hr>
        <br>

    </div>
    <div class="main-left">
        <h3> <a href="Admin3.php"> Profile</a></h3>
        <hr>
        <h3> <a href="Admin1.php"> Current Users</a></h3>
        <hr>
        <h3> <a href="Admin2.php"> FeedBack</a></h3>
        <hr>
        <h3> <a href="Admin4.php"> Add Bank Details</a></h3>
        <hr>
        <h3> <a href="Admin5.php"> User Add This >>>>></a></h3>
        <hr>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>