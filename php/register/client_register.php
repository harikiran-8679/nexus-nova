<?php
session_start(); // Start a session to store user data temporarily
$servername = "localhost:3350";
$username = "root";  // Change to your database username
$password = "";  // Change to your database password
$dbname = "freelancer_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $pass = $_POST['pass']; // Encrypt password

        $sql = "INSERT INTO client_register (fname, lname, mobile, email, pass) VALUES ('$fname', '$lname', '$mobile', '$email', '$pass')";

        if ($conn->query($sql) === TRUE) {
            // Store the user's ID and name in the session
            $_SESSION['fname'] = $fname;
            $_SESSION['email'] = $email;
            $_SESSION['mobile'] = $mobile;

            // Redirect to the subscription page
            header("Location: ../subscription/subscription-page.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>