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

    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<!------------------------------------------------------------------------------------------------------------------------------------>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img class="logo" src="../images/logo3.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="User.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="User_services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="My_services.php">My Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="User_about.php">About us</a>
                    </li>
            </div>
            <img src="../images/profile.png" class="mx-1" width="2%" alt="">
            <?php echo $_SESSION['Username']; ?>
            <a class="nav-link mx-3" href="../logout.php">Logout</a>
        </div>
    </nav>
</header>
<!------------------------------------------------------------------------------------------------------------------------------------>

<body class="body">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img" src="../images/pexels.jpg" width="100%">Welcome
            </div>
            <div class="carousel-item">
                <img class="img" src="../images/pexels.jpg" width="100%">Welcome
            </div>
            <div class="carousel-item">
                <img class="img" src="../images/pexels2.jpg" width="100%">Welcome
            </div>
        </div>
        <hr>
    </div>
    <!------------------------------------------------------------------------------------------------------------------------------------>
    <div class="list-group mt-3">
        <a href="User_services.php" class="list-group-item list-group-item-action">Open Account</a>
        <a href="User_services.php" class="list-group-item list-group-item-action">Get Loan Easily</a>
        <a href="User_services.php" class="list-group-item list-group-item-action">Investment in Stock</a>
        <a href="User_services.php" class="list-group-item list-group-item-action">FD With Maximum % Return</a>
        <a href="User_services.php" class="list-group-item list-group-item-action">Work With Less Paper Work</a>

    </div>
    <!------------------------------------------------------------------------------------------------------------------------------------>
    <div class="cardp">
        <div class="card">
            <img src="../images/card.jpg" class="card-img-top" alt="...">
            <hr>
            <hr>
            <div class="card-body">
                <h5 class="card-title">Car loan</h5>
                <p class="card-text">we provide best car loan
                    facility for all car buyer,
                    or bank agent provide right
                    information to all, no any
                    hiden charg or no charge any
                    extra commission
                    content.</p>
            </div>
        </div>
        <div class="card">
            <img src="../images/pixal3.jpg" class="card-img-top" alt="...">
            <hr>
            <hr>
            <div class="card-body">
                <h5 class="card-title">Open Account</h5>
                <p class="card-text">open account, with our agent guidelines.give info about your need and our agent
                    provides best bank related your needs and best account type also. open account within two days
                </p>
            </div>
        </div>
        <div class="card">
            <img src="../images/card-1.jpg" class="card-img-top" alt="...">
            <hr>
            <hr>
            <div class="card-body">
                <h5 class="card-title">FD Deposit</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
            </div>
        </div>
    </div>
    <div class="cardp">
        <div class="card">
            <img src="../images/card-2.jpg" class="card-img-top" alt="...">
            <hr>
            <hr>
            <div class="card-body">
                <h5 class="card-title">Buy Stock</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
            </div>
        </div>
        <div class="card">
            <img src="../images/card-5.png" class="card-img-top" alt="...">
            <hr>
            <hr>
            <div class="card-body">
                <h5 class="card-title">Zero Brockrage</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
            </div>
        </div>
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------>

    <footer>
        <?php include '../footer.php'; ?>
    </footer>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>