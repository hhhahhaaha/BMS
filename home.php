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
            margin-top: 10px;
            margin-right: 1rem;
            background-color: #cf1d1d;
            padding: 20px;
            border-radius: 30px; /* Add this line for rounded corners */
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            max-width: 23rem;
            max-height: 20rem;
            }
            .container-dr {
            margin-top: 10px;
            margin-right: 1rem;
            margin-bottom: 5rem;
            background-color: #d7ea0d;
            padding: 20px;
            border-radius: 30px; /* Add this line for rounded corners */
            max-width: 23rem;
            max-height: 20rem;
            }
            .container-dr1 {
            margin-top: 3rem;
            margin-right: 1rem;
            background-color: #32cfe0;
            padding: 20px;
            border-radius: 30px; /* Add this line for rounded corners */
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            max-width: 23rem;
            max-height: 20rem;
            }
            .container-sms {
            margin-top: 3rem;
            margin-right: 1rem;
            background-color: #3c36b7;
            padding: 20px;
            border-radius: 30px; /* Add this line for rounded corners */
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            max-width: 23rem;
            max-height: 30rem;
            }
            .body{
                margin: 0;
                padding: 0;
            }
            .navbar {
                display: flex;
                justify-content: flex-end;
                /* Set background color */
                padding: 10px; /* Add some padding for better visibility */
            }
            /* Style for the navigation links */
            .nav-link {
                margin-left: 15px; /* Add some space between the links */
                text-decoration: none; /* Remove underlines from links */
                 /* Set text color */
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-size: 3rem;
            }
            .nav-link:hover {
                color: #b3cc8b !important; /* Set the text color on hover */
            }
            /* Style for the line between the links */
            .nav-link:not(:last-child)::after {
                content: "|"; /* Add a vertical bar as a separator */
                margin-left: 15px; /* Adjust the space between the links and the separator */
                color: #6c757d; /* Set color of the separator */
            }
            .image-link {
            display: block;
            margin: 0 auto;
            text-decoration: none;
            color: white
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

          <div class="row">
            <!-- Left side content (logo) -->
            <div class="col-md-6 text-center">
                <h1 style="font-size:3rem; font-family:'Times New Roman', Times, serif; margin-top: 2rem;">Punong Barangay</h1>
                <h1 style="font-size:1.5rem; font-family:'Times New Roman', Times, serif; margin-top: 0;">Hon. Emil N. Villafania</h1>
                <img src="img/punong.jpg" alt="Logo" style="max-height: 40rem; margin-top: 0;">
            </div>
        
            <!-- Images in the same row -->
            <div class="col-md-3 text-center">
                <div class="container-sp" style="color: rgb(0, 0, 0); margin-top: 8rem;">
                    <a href="resprofile.php" class="image-link">
                        <img src="img/sp.png" alt="Logo" style="max-height: 40rem; margin-top: 0; max-height: 15rem;">
                        <p style="font-size: 1.5rem; font-family: 'Times New Roman', Times, serif;">Resident Profiling</p>
                    </a>
                </div>
                <div class="container-dr" style="color: rgb(0, 0, 0); margin-top: 2rem;">
                    <a href="docreq.php" class="image-link">
                        <img src="img/dr.png" alt="Logo" style="max-height: 40rem; margin-top: 0; max-height: 15rem;">
                        <p style="font-size: 1.5rem; font-family: 'Times New Roman', Times, serif;">Document Requisition</p>
                    </a>
                </div>
            </div>
        
            <div class="col-md-3 text-center">
                <div class="container-dr1" style="color: rgb(0, 0, 0); margin-top: 8rem;">
                    <a href="dataA.php" class="image-link" style="background-color: #32cfe0;">
                        <img src="img/da.png" alt="Logo" style="max-height: 40rem; margin-top: 0; max-height: 15rem;">
                        <p style="font-size: 1.5rem; font-family: 'Times New Roman', Times, serif;">Data Analytics</p>
                    </a>
                </div>
                <div class="container-sms" style="color: rgb(0, 0, 0); margin-top: 2rem;">
                    <a href="sms.html" class="image-link">
                        <img src="img/send.png" alt="Logo" style="max-height: 40rem; margin-top: 0; padding-bottom: 2rem;">
                        <p style="font-size: 1.5rem; font-family: 'Times New Roman', Times, serif;">SMS</p>
                    </a>
                </div>
            </div>    

            <div>
                <h1 style="text-align: center;">Barangay Officials and SK Officials</h1>
                <img src="img/1234.jpg" alt="Logo" style="max-height: 50rem; margin-top: 1rem; margin-left: 3rem;">
            </div>
            <div class="pic">
                <h1 style="text-align: center; margin-top: 2rem;">Facilities:</h1>
                <img src="img/e.jpg" alt="Logo" style="max-height: 30rem; margin-top: 1rem; margin-left: 15rem;">
                <img src="img/i.jpg" alt="Logo" style="max-height: 30rem; margin-top: 1rem; margin-left: 5rem;">
                <img src="img/o.jpg" alt="Logo" style="max-height: 20rem; margin-top: 1rem; margin-left: 5rem;">
                <img src="img/u.jpg" alt="Logo" style="max-height: 20rem; margin-top: 1rem; margin-left: 25rem;"> 
                <img src="img/a.jpg" alt="Logo" style="max-height: 20rem; margin-top: 1rem; margin-left: 5rem; margin-bottom: 2rem;">
            </div>

            <footer class="footer" style="border:solid; Background-color: #00474f;">
                <div class="col-md-6 text-center">
                     <p style="color: rgb(255, 255, 255); margin-top:1.3rem; float: left; margin-left: 2rem;" >Brgy. Almacen Hermosa, Bataan 2111</p>
                    </div>
            </footer>
    </body>
</html>
