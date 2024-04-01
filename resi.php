<?php
    $ln = $_POST['ln'];
    $fn = $_POST['fn'];
    $mn = $_POST['mn'];
    $add = $_POST['add'];
    $sex = $_POST['sex'];
    $phoNum = $_POST['phoNum'];

    $conn = new mysqli('localhost', 'root', '', 'bms');
    if($conn->connect_error){
        die('Connection Failed' .$conn->connect_error);
    }else{
        $stmt = $conn -> prepare("insert into resident (ln,fn,mn,addr,sex,phoNum) values(?, ?, ?, ?, ?, ?)");
        $stmt -> bind_param("sssssi", $ln, $fn, $mn, $add, $sex, $phoNum);
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
            window.location.href="addRes.html";
        }
    </script>
</head>
<body onload="showAlert()">
    <!-- You can add an "OK" button if needed -->
    <!-- <button onclick="window.location.href='your_page.php'">OK</button> -->
</body>
</html>