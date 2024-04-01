<?php
   // Start session
   session_start();

   // Check if form is submitted
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Get email and password from form
       $email = $_POST['email'];
       $pass = $_POST['pass'];

       // Connect to the database
       $conn = new mysqli('localhost', 'root', '', 'bms');
       if($conn->connect_error){
           die('Connection Failed' .$conn->connect_error);
       } else {
           // Prepare SQL statement
           $stmt = $conn->prepare("SELECT * FROM user_info WHERE email = ?");
           $stmt->bind_param("s", $email);
           $stmt->execute();
           $stmt_result = $stmt->get_result();

           // Check if user exists and password is correct
           if ($stmt_result->num_rows > 0) {
               $data = $stmt_result->fetch_assoc();
               if ($data['pass'] === $pass) {
                   // Password is correct, set session and redirect to home.php
                   $_SESSION['email'] = $email;
                   $_SESSION['fullname'] = $data['fn']; // Assuming 'full_name' is the column name for the user's full name
                   header("Location: home.php");
                   exit();
               } else {
                   // Invalid password
                   echo "Invalid password";
               }
           } else {
               // User does not exist
               echo "User not found";
           }
       }
       // Close database connection
       $stmt->close();
       $conn->close();
   } 
?>
