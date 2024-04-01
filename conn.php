<?php
    $fn = $_POST['fn'];
    $pos = $_POST['pos'];
    $add = $_POST['add'];
    $email = $_POST['email'];
    $pn = $_POST['pn'];
    $pass = $_POST['pass'];

    $conn = new mysqli('localhost', 'root', '', 'bms');
    if($conn->connect_error){
        die('Connection Failed' .$conn->connect_error);
    }else{
        $stmt = $conn -> prepare("insert into user_info (fn,position,address,email,phoNum,pass) values(?, ?, ?, ?, ?, ?)");
        $stmt -> bind_param("ssssis", $fn, $pos, $add, $email, $pn, $pass);
        $stmt -> execute ();
        $stmt -> close();
        $conn -> close();
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Result</title>
    <script>
        function showAlert() {
            alert("Submitted");
            window.location.href="login.html";
        }
    </script>
</head>
<body onload="showAlert()">
    <!-- You can add an "OK" button if needed -->
    <!-- <button onclick="window.location.href='your_page.php'">OK</button> -->
</body>
</html>