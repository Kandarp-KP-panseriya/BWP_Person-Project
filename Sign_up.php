<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <?php
    if (isset($_POST['submit'])) {

        include 'connection.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $email_ = "SELECT * FROM signup WHERE Email = '$email'";
        $run_email = mysqli_query($conn, $email_);
        $count1 = mysqli_num_rows($run_email);
        //echo $catch['Email'];
    

        $usr_ = "SELECT * FROM signup WHERE  Username = '$username'";
        $run_usr = mysqli_query($conn, $usr_);
        $count = mysqli_num_rows($run_usr);
        if ($count1 > 0) {
            echo "Email Already exist";
        } elseif ($count > 0) {
            echo "Username Already exist";
        } else {
            $sql = "INSERT INTO `signup` (`Name`, `Email`, `Username`, `Password`, `User/Admin`)	
			 VALUES ('$name', '$email', '$username', '$password', 'User')";
            $result = mysqli_query($conn, $sql);
            if ($result) {

                echo '<script>alert("Welcome :) Signup complete  :) :) ")</script>';
                echo "<script>window.location='Login.php';</script>";
            }
        }
    }
    ?>
</head>
<style>
    body {
        background-color: rgb(241, 234, 240);
    }

    .container-fluid {
        background-color: rgb(142, 15, 70);
        color: white;
        padding: 0.0% 0px 0.0% 0px;
        font-size: 2.5vh;
        font-weight: bold;
    }

    .logo {
        padding-right: 5%;
    }


    .container-fluid a {
        color: white;
    }

    
    #login
    {
        padding-right: 1%;
    }

    .form-l {
        display: block;
        width: 28%;
        height: auto;
        padding: 1% 7% 1% 7%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 7%;
        margin-bottom: 10%;

        background-color: rgb(142, 15, 70);
        /* background-image: radial-gradient(rgb(109, 113, 230), rgb(181, 51, 110)); */
        align-items: center;
        text-align: center;
    }


    .form-l input {
        margin: auto;
        background: none;
        border: none;
        padding: 3%;
        margin: 3%;
        text-align: center;
        font-size: 1vw;
        background-color: aliceblue;
        border-radius: 10%;
        border: none;
    }

    input:hover {
        background-color: wheat;
        border: none;
    }

    h2 {
        font-size: 3vw;
        color: whitesmoke;
    }

    a {
        color: whitesmoke;
        font-size: 1vw;
        text-decoration: none;
    }

    .sub {
        background-color: wheat;
        border: none;
    }

    .sub:hover {
        background-color: rgb(237, 206, 149);
        text-decoration: underline;
    }

    i {
        color: whitesmoke;
        font-size: 1vw
    }

    .form-l h3 {
        color: rgb(214, 201, 178);
        font-size: 1.2vw;
    }

    @media (width <=992px) {
        .form-l {
            width: 40%;
            margin-top: 20%;
            margin-bottom: 20%;
        }

        .form-l h2 {
            font-size: 4vw;
        }

        .form-l h3 {
            color: rgb(214, 201, 178);
            font-size: 2vw;
        }

        .form-l a {
            font-size: 2vw;
        }

        .form-l input {
            font-size: 2vw;
        }

        .form-l i {
            font-size: 2vw;
        }
    }

    @media (width <=768px) {
        .form-l {
            width: 50%;
            margin-top: 20%;
            margin-bottom: 20%;
        }

        .form-l h2 {
            font-size: 5vw;
        }

        .form-l h3 {
            color: rgb(214, 201, 178);
            font-size: 2.5vw;
        }

        .form-l a {
            font-size: 2vw;
        }

        .form-l input {
            font-size: 2vw;
        }

        .form-l i {
            font-size: 2vw;
        }

    }

    @media (width <=576px) {
        .form-l {
            width: 70%;
            margin-top: 40%;
            margin-bottom: 40%;
        }

        .form-l h2 {
            font-size: 7.5vw;
        }

        .form-l h3 {
            color: rgb(214, 201, 178);
            font-size: 3vw;
        }

        .form-l a {
            font-size: 3vw;
            text-decoration: underline;
        }

        .form-l input {
            font-size: 3vw;
        }

        .form-l i {
            font-size: 3vw;
        }


        .logo {
            display: none;
        }

    }
</style>

<header>
    <?php include 'header.php'; ?>
</header>

<body>
    <!-- ------------------------------------------------------------------------------------ -->
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="form-l">
        <h2>Sign Up</h2>
        <hr>
        <i class="fa-solid fa-file-signature fa-beat"></i>
        <input class="name" name="name" type="text" placeholder="Enter your Name" required>
        <hr>
        <hr>
        <i class="fa-solid fa-user fa-beat-fade"></i>
        <input class="user" name="email" type="email" placeholder="Email" required>
        <hr>
        <input class="password" name="username" type="text" placeholder="Enter username" required>
        <hr>
        <i class="fa-solid fa-lock fa-beat-fade"></i>
        <input class="password" name="password" type="password" placeholder="Enter password" required>
        <br>
        <input class="sub" type="submit" name="submit" value="Sign Up">
        <h3 class="h3">If Have Account - <a href="login.php">Login</a> <i class="fa-solid fa-angles-left fa-bounce"></i>
        </h3>
    </form>
    <!-- ---------------------------------------------------------------------------------  -->
    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>
<!--  -->