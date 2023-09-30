<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">


    <title>services2</title>
    <style>
        body {
            background-color: rgb(241, 234, 240);
        }

        .logo {
            padding-right: 5%;
        }

        .shape {
            display: flex;
            justify-content: space-around;
            margin: 2%;
        }

    </style>
</head>

<header>
    <?php include 'header.php'; ?>
</header>

<body>

    <div class="container">


        <div class="shape">
            <div class="card text-center " style="width: 25rem;">
                <img src="images/bank-1.jpg" style="height: 15rem;" class="card-img-top" alt="...">
                <div class="card-header">
                    Multipule Bnaks
                </div>
                <div class="card-body">
                    <h5 class="card-title">Open Bank Acoount In Best Bank</h5>
                    <p class="card-text">Open Account with Multiple Choices</p>
                    <a href="Sign_up.php" class="btn btn-primary">Check More</a>
                </div>
            </div>
            <div class="card text-center " style="width: 25rem;">
                <img src="images/online.jpg" style="height: 15rem;" class="card-img-top" alt="...">
                <div class="card-header">
                    For Account
                </div>
                <div class="card-body">
                    <h5 class="card-title">Online Payment Apps</h5>
                    <p class="card-text">Pay Money Online With Safe Apps</p>
                    <a href="Sign_up.php" class="btn btn-primary">Check More</a>
                </div>
            </div>
            <div class="card text-center " style="width: 25rem;">
                <img src="images/bank-4.png" style="height: 15rem;" class="card-img-top" alt="...">
                <div class="card-header">
                    For Account
                </div>
                <div class="card-body">
                    <h5 class="card-title">Open Demate Account </h5>
                    <p class="card-text">For trading services in stock, commodities, mutual funds, bonds, and currency
                    </p>
                    <a href="Sign_up.php" class="btn btn-primary">Check More</a>
                </div>
            </div>
        </div>
        <div class="shape">

            <div class="card text-center mb-3">
                <img src="images/pexels.jpg" style="height: 15rem;" class="card-img-top" alt="...">

                <div class="card-header">
                    Pick Credit Card
                </div>
                <div class="card-body">
                    <h5 class="card-title">Best Credit Card for more Purchases, Shopping</h5>
                    <p class="card-text">Get Credit card but first compare </p>
                    <a href="Sign_up.php" class="btn btn-primary">Check More</a>
                </div>
            </div>
            <div class="card text-center mb-3">
                <img src="images/card-1.jpg" style="height: 15rem;" class="card-img-top" alt="...">

                <div class="card-header">
                    Fixed Deposits
                </div>
                <div class="card-body">
                    <h5 class="card-title">Save Money Not In Home In Fixed Deposits</h5>
                    <p class="card-text">face inflation with growing your savings</p>
                    <a href="Sign_up.php" class="btn btn-primary">Check More</a>
                </div>
            </div>
        </div>
    </div>


</body>
<footer>
    <?php include 'footer.php' ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>

</html>