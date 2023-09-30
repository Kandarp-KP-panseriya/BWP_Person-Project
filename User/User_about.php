<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('location:../index.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>About Us</title>
    <style>
        .title {
            text-align: center;
            margin-top: 2%;
            font-size: 5rem;
            font-weight: 100;
            margin-bottom: 2%;

        }

        .fast-4 {
            width: 50%;
            float: right;
            font-family: 'Noto Serif', serif;
            font-family: 'Playfair Display', serif;
            font-family: 'Signika', sans-serif;

        }

  
        .about-image {
            display: flex;
            justify-content: space-around;
        }

        .about-image img {
            width: 86%;
        }
        .main
        {
            height: 120%;
        }
    </style>
</head>
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
                        <a class="nav-link" aria-current="page" href="User.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="User_services.php">Services</a>      
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="My_services.php">My Services</a>      
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="User_about.php">About us</a>
                    </li>
            </div>
            <img src="../images/profile.png" class="mx-1" width="2%" alt=""> <?php echo $_SESSION['Username']; ?>
            <a class="nav-link mx-3" href="../logout.php" >Logout</a>
        </div>
    </nav>
</header>

<body>

    <body>
        <div class="main">
            <!-- ------------------------------------------------------------------------------------ -->
            <h1 class="title">
                About us
            </h1>
            <div class="fast-4">
                <p>
                    A bank agent website is a website designed and maintained by a bank's agent or representative. The
                    website
                    typically provides information about the bank's products and services, such as checking and savings
                    accounts, loans, credit cards, and investment options. It may also offer tools and resources for
                    managing
                    finances, such as calculators, budgeting guides, and educational materials.
                </p>
                <p>
                    Customers can typically use the website to access their accounts, make transactions, and contact
                    customerservice. The website may also include security measures to protect customers' personal and
                    financial
                    information. Overall, a bank agent website is a convenient and accessible way for customers to
                    interact
                    with
                    their bank and manage their finances.
                </p>

                <p>
                    After some time, we will add more functionality and services.
                </p>
                <p>
                    This bank collaborates with our team to manage client services.
                </p>
            </div>
            <div class="about-image">
                <img src=" ../images/contact-1.jpg" alt="">
            </div>
        </div>

    </body>
    <footer>
        <?php include '../footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

</html>