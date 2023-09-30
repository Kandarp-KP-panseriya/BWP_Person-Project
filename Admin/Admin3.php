<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BankWalaPerson</title>
    <link rel="stylesheet" href="AdminStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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
<!--------------------------------Admin Profile---------------------------------------------------------------------------------------------------->

<body>

    <div class="main-right p-3 pt-4">
        <div class="rightAdmininput mb-5">
            <form action="">
                <div class="input-group">
                    <span class="input-group-text">Admin Name</span>
                    <input class="form-control" type="text" value="Kandarp Panseriya" disabled readonly>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-text">Email</span>
                    <input class="form-control" type="text" value="Kandarp123@gmail.com" disabled readonly>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-text">Admin Id name</span>
                    <input class="form-control" type="text" value="Kandarp-kp12345" disabled readonly>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-text">Description</span>
                    <input class="form-control" type="text" value="Website Developer And Manager" disabled readonly>
                </div>
                <br>
                <div class="col-12">
                    <a href="Admin3.2.php" class="btn btn-primary">Add Admin</a>
                </div>
            </form>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../images/logo5.jpg" class="card-img-top">
            <div class="card-body">
                <div class="text-center">
                    <h5>Kandarp Panseriya</h5>
                    <p>Developer Of BankWalaPerson</p>
                    <hr>
                    <p>Current And Main Admin</p>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="Admin3.php">
                        <<< </a>
                </li>
                <li class="page-item"><a class="page-link" href="Admin3.php">Admin Profile</a></li>
                <li class="page-item"><a class="page-link" href="Admin3.2.php">Add New Admin</a></li>
                <li class="page-item"><a class="page-link" href="Admin3.2.php">>>></a></li>
            </ul>
        </nav>
    </div>
    <div class="main-left">
        <h3> <a href="Admin3.php"> Profile  >>>>></a></h3>
        <hr>
        <h3> <a href="Admin1.php"> Current Users</a></h3>
        <hr>
        <h3> <a href="Admin2.php"> FeedBack</a></h3>
        <hr>
        <h3> <a href="Admin4.php"> Add Bank Details</a></h3>
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