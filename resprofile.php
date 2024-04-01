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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2; /* Gray background for headers */
        }

        /* Gray background for even columns */
        td:nth-child(even) {
            background-color: #f9f9f9;
        }
        .button-container {
            display: flex;
            gap: 10px; /* Adjust the gap as needed */
        }
        .rounded-button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 40px; /* Adjust the border-radius to make the button more or less rounded */
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
            <img src="img/logo.png" alt="Logo" style="max-height: 6rem; margin-top: 0; margin-right: 1rem; float: left;">
            <img src="img/home1.jpg" alt="Logo" style="max-height: 3rem; margin-top: 1rem; margin-right: 1rem; float: left;">
            <h2 style="color: rgb(255, 255, 255); margin-top:1rem; float: left;" >Barangay Management System</h2>
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

    <div class="container-sp" style="color: rgb(0, 0, 0); ">
        <img src="img/sp.png" alt="Logo" style="max-height:5rem; margin-left:3rem;">
        <h1 style="color: rgb(0, 0, 0); margin-top:.3rem; float: left;" >Resident Profiling</h1>
        
        <a href="addRes.html">
        <button style="margin-left: 20rem; width:10rem; height: 3rem; font-size: 20px; color: white; background-color: #216ead;">Add Resident</button></a>
        
        <a href="">
        <button style="margin-left: 2rem; width:10rem; height: 3rem; font-size: 20px; color: white; background-color: #216ead;">Edit Resident</button></a>
        
        <a href="resprofile.php"><img src="img/re.png" alt="Logo" style="max-height:3rem; margin-left:2rem; margin-right: 0;"></a>
        <label for="searchInput">
            <input style="width:15rem; height: 3rem; font-size: 1.2rem;" type="text" id="searchInput" placeholder="Search by Name">
        </label> 
        <img src="img/see.png" alt="Logo" style="max-height:3rem; margin-left:0; margin-right: 0;">
    </div>

    <table>
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Address</th>
                <th>Sex</th>
                <th>Phone Number</th>
            


            </tr>
        </thead>
        <tbody>
        <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "bms";

                $conn = new mysqli($servername, $username, $password, $database);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                // SQL query to fetch data (adjust this query based on your database structure)
                $sql = "SELECT ln, fn, mn, addr, sex, phoNum FROM resident";
                $result = $conn->query($sql);
                // Display data in the table
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["ln"] . "</td>";
                        echo "<td>" . $row["fn"] . "</td>";
                        echo "<td>" . $row["mn"] . "</td>";
                        echo "<td>" . $row["addr"] . "</td>";
                        echo "<td>" . $row["sex"] . "</td>";
                        echo "<td>" . $row["phoNum"] . "</td>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data available</td></tr>";
                }
                $conn->close();
            ?>
    </table>

    <a href="home.php" class="rounded-button"style="margin-left: 100rem; margin-top:5rem; font-size:1.5rem;">Back</a></td>

   <div class="button-container">
</div>
</body>
</html>
