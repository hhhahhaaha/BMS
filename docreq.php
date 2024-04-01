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
        .container-sp {
            background-color: #b1d1e6;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            max-width: 100%;
            max-height: 10rem;
            display: flex;
            align-items: center; /* Align items vertically in the center */
        }
        .container-dr {
            margin-top: 3rem; /* Adjust the margin as needed */
            margin-left: 10rem;
            margin-bottom: 1rem;
            background-color: #066c8b;
            padding: 20px;
            border-radius: 30px; /* Add this line for rounded corners */
            box-shadow: 0px 0px 10px rgba(132, 214, 235, 0.1);
            width: 30rem; /* Adjust the width as needed */
            height: 35rem;
            text-decoration: none;
        }
        .container-sp img {
            max-height: 5rem;
            margin-right: 3rem;
        }
        .container-sp h1 {
            color: rgb(255, 255, 255);
            font-size: 2rem;
            margin-top: 1rem;
        }
        .body{
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
        .container-dr a.image-link {
    text-decoration: none;
}
        .container-dr a.image-link p {
            margin-bottom: 0;
            text-decoration: none;
            color: #000;
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
                    <a class="nav-link active" aria-current="page" href="index.html" style=" font-size: 30px; color: white;">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container-sp" style="color: rgb(0, 0, 0); ">
        <img src="img/dr.png" alt="Logo" style="max-height:5rem; margin-left:3rem;">
        <h1 style="color: rgb(0, 0, 0); margin-top:.3rem; float: left;" >Document Requisition</h1>
    </div>

    <div class="row">
        <div class="col-md-6 text-center">
            <div class="container-dr" style="color: rgb(0, 0, 0); margin-top: 3rem;">
                <a href="brgyCert.php" class="image-link">
                    <img src="img/cert.png" alt="Logo" style="max-height: 25rem; margin-top: 3rem;">
                    <p style="font-size: 1.5rem; font-family: 'Times New Roman', Times, serif; text-decoration: none;">Barangay Certificates</p>
                </a>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="container-dr" style="color: rgb(0, 0, 0); margin-top: 3rem; margin-left: 1rem;">
                <a href="" class="image-link">
                    <img src="img/ppl.png" alt="Logo" style="max-height: 25rem; margin-top: 3rem;">
                    <p style="font-size: 1.5rem; font-family: 'Times New Roman', Times, serif; text-decoration: none;">Blotter</p>
                </a>
            </div>
        </div>
    </div>
    <a href="home.php" class="rounded-button"style="margin-left: 95rem; margin-top:.5rem; font-size:1.5rem;">Back</a>

</body>
</html>
