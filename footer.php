<head>
    <?php
    if (isset($_POST['Enter'])) {

        $servername = "localhost";
        $usern = "root";
        $passw = "";
        $database = "bank_agent";

        $conn = mysqli_connect($servername, $usern, $passw, $database);

        $qry = $_POST['qry'];
        $email = $_POST['Email'];


        $sql = "INSERT INTO `query` (`Query`, `Email`) VALUES ('$qry','$email')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>alert("We will Send you proper Anwser soon :) :) ")</script>';
            echo "<script>window.location='Sign_up.php';</script>";
        }

    }
    ?>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    footer {
        font-size: 100%;
        background-color: rgb(142, 15, 70);
        color: white;
        height: auto;
        margin-top: 2%;
        padding-top: 1%;
        padding-bottom: 3%;
    }

    .footer-main {
        display: flex;
        justify-content: space-around;
    }

    footer ul {
        font-weight: bold;
        width: 30%;
        padding: 1%
    }

    footer ul li {
        list-style: none;
    }

    .form-f {
        font-size: 1vw;
    }

    .form-f input:hover {
        background-color: white;
    }

    @media (width <=991px) {

        footer {
            font-size: 70%;
        }

        .input-group span {
            font-size: 0.5rem;
        }
    }

    @media (width <=767px) {}

    @media (width <=575px) {

        .footer-main {
            display: inline;
            font-size: 15px;
        }

        .text-center {
            width: 90%;
            margin-left: 2.5%;
            margin-top: 2.5%;
            padding-bottom: 5%;
        }
    }
</style>

<div class="footer-main">
    <ul class="text-center">Needs
        <hr>
        <li class="text-left">
            <i class="fa-solid fa-building-columns"></i>
        <li>
        <li>
            Bank Need For Every On
        </li>
        <li>
            <i class="fa-solid fa-user"></i>
        </li>
        One Agent Who Provide All Help
        </li>
        <li>
            <i class="fa-solid fa-piggy-bank"></i>
        </li>
        <li>
            Proper Saving Must
        </li>
    </ul>
    <ul class="text-center">Feedback
        <hr>
        <li>
            Use Website To Simplify Your Work
        </li>
        <li>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="form-f">
                <div class="input-group">
                    <span class="input-group-text">Enter Your Query</span>
                    <textarea name="qry" class="form-control" rows="1" required></textarea>
                </div>
                <hr>
                <div class="input-group">
                    <button input type="submit" name="Enter" class="btn btn-info" type="button">Button</button>
                    <button class="input-group-text">@</button>
                    <input type="text" name="Email" class="form-control" placeholder="Enter Your Email" required>
                </div>
            </form>
        </li>
        <li>
            --Support Our Team--
        </li>
    </ul>
    <ul class="text-center">
        Contact Info
        <hr>
        <li>
            Contact us and we'll get back to
            you within 24 hours.
        </li>
        <li>
            <i class="fa-solid fa-location-dot"></i>
        </li>
        <li>
            Gujarat,India
        </li>
        <li>
            <i class="fa-solid fa-envelope"></i>
        </li>
        <li>
            Kpind385@gmail.com
        </li>
        <li>
            Developed
               By 
            Kandarp Panseriya
        </li>
    </ul>
</div>