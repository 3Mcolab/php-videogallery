<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>infygallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <?php

            session_start();
            if(isset($_SESSION['email'])){
                $email =$_SESSION['email'];

                $conn=mysqli_connect('localhost','root','','gitvideogallery');
                $db_check="SELECT *FROM user WHERE email='$email'";
                $db_result=mysqli_query($conn,$db_check);
                if($db_result==true){
                    while($data_query=mysqli_fetch_assoc($db_result))
                    {
                        $firstname= $data_query['firstname'];
                        $lastname= $data_query['lastname'];
        ?>

        <?php
                    }
                }
            }
        ?>
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="navbar-item active">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="navbar-item">
                                <a href="product.php" class="nav-link">Video Lists</a>
                            </li>
                            <li class="navbar-item">
                                <a href="about.php" class="nav-link">Aboutus</a>
                            </li>
                            <?php
                                if(!isset($_SESSION['email'])){
                            ?>
                                <li class="navbar-item">
                                    <a href="login.php" class="nav-link">Login</a>
                                </li>
                                <li class="navbar-item">
                                    <a href="register.php" class="nav-link">Register</a>
                                </li>
                            <?php
                                }else{
                            ?>
                                <li class="navbar-item">
                                        <a href="profile.php" class="nav-link">Profile</a>
                                </li>
                                <li class="navbar-item">
                                        <a href="logout.php" class="nav-link">Logout</a>
                                </li>

                            <?php
                                }
                            ?>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </header>
