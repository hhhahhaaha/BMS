<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Barangay Management System</title>
    <style>
        @import "bootstrap/scss/bootstrap";

        .container-head {
            background-color: #b1d1e6;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            max-height: 10rem;
            display: flex;
            align-items: center;
        }

        .container-sp {
            margin-top: 10px;
            margin-right: 1rem;
            margin-left: 15rem;
            background-color: #000000;
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 23rem;
            height: 20rem;
        }

        .container-dr,
        .container-dr1,
        .container-sms {
            margin-top: 1rem;
            margin-right: 1rem;
            margin-left: 15rem;
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 23rem;
            height: 20rem;
        }

        .container-sms {
            max-height: 30rem;
        }

        .body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: flex-end;
            padding: 10px;
        }

        .nav-link {
            margin-left: 15px;
            text-decoration: none;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 3rem;
        }

        .nav-link:hover {
            color: #b3cc8b !important;
        }

        .nav-link:not(:last-child)::after {
            content: "|";
            margin-left: 15px;
            color: #6c757d;
        }

        .image-link {
            display: block;
            margin: 0 auto;
            text-decoration: none;
            color: white;
        }
    
        .rounded-button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 25px; /* Adjust the border-radius to make the button more or less rounded */
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            font-size: 10px;
            cursor: pointer;
            margin-top: 2rem;
            
            font-size: 1rem;
            align-items: center;
            
        }
        /* Hover effect */
        .rounded-button:hover {
            background-color: #2602a7;
            color: wheat; /* Change the background color on hover */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light " style="border:solid; Background-color: #216ead;">
        <div class="col-md-6 text-center">
        <img src="img/logo.png" alt="Logo" style="max-height: 5rem; margin-top: 0; margin-right: 1rem; float: left;">
        <img src="img/home1.jpg" alt="Logo" style="max-height: 3rem; margin-top: 1rem; margin-right: 1rem; float: left;">
        <h2 style="color: rgb(255, 255, 255); margin-top:1rem; float: left; font-size: 25px;" >Barangay Management System</h2>
    </div>
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <h3 class="nav-link active" aria-current="page" style="font-size: 30px; color: white; margin-top: .4rem;"><?php  echo isset($_SESSION['fullname']) ? $_SESSION['fullname'] : 'Guest'; ?></h3>
                <a class="nav-link active" aria-current="page" href="login.html" style=" font-size: 30px; color: white;">Logout</a>
            </div>
        </div>
    </div>
</nav>

<div class="container-head" style="color: rgb(0, 0, 0); ">
    <img src="img/da.png" alt="Logo" style="max-height:5rem; margin-left:3rem;">
    <h1 style="color: rgb(0, 0, 0); margin-top:.3rem; margin-left: 2rem; float: left;">Data Analytics</h1>
</div>
<div class="row" style="margin-left: 2rem; margin-top: 1rem;">
    <div class="col-md-3 text-center">
        <div class="container-sp" style="color: rgb(0, 0, 0); margin-top: 1rem; background-color: white;">
                <p style="font-size: 2.5rem; font-family: 'Times New Roman', Times, serif;"><b>Population</b></p>
                <h2 id="ppl">43</h2>
        </div>
        <div class="container-dr" style="color: rgb(0, 0, 0); margin-top: 1rem; background-color: rgb(255, 255, 255);">             
                <h1 style="font-size: 2.5rem; font-family: 'Times New Roman', Times, serif;"><b>Senior</b></h1>
        </div>
    </div>

    <div class="col-md-3 text-center">
        <div class="container-dr" style="color: rgb(0, 0, 0); margin-top: 1rem; background-color: rgb(255, 255, 255);">             
            <h1 style="font-size: 2.5rem; font-family: 'Times New Roman', Times, serif;"><b>Female</b></h1>
        </div>
        <div class="container-dr" style="color: rgb(0, 0, 0); margin-top: 1rem; background-color: rgb(255, 255, 255);">             
            <h1 style="font-size: 2.5rem; font-family: 'Times New Roman', Times, serif;"><b>PWD</b></h1>
        </div>
    </div>

    <div class="col-md-3 text-center">
        <div class="container-dr" style="color: rgb(0, 0, 0); margin-top: 1rem; background-color: rgb(255, 255, 255);">             
            <h1 style="font-size: 2.5rem; font-family: 'Times New Roman', Times, serif;"><b>Male</b></h1>
        </div>
        <div class="container-dr" style="color: rgb(0, 0, 0); margin-top: 1rem; background-color: rgb(255, 255, 255);">             
            <h1 style="font-size: 2.5rem; font-family: 'Times New Roman', Times, serif;"><b>Voters</b></h1>
        </div>
    </div>
</div>

<a href="home.php" class="rounded-button"style="margin-left: 95rem; margin-top:2rem; font-size:1.5rem;">Back</a>


</body>
</html>
