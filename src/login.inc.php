<?php
session_start();

// Include connection PHP file
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $stmt = $conn->prepare("SELECT * FROM user_details WHERE userEmail = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found
        $user = $result->fetch_assoc();

        // Check if the password matches
        if ($user['userPassword'] === $password) {
            
            $_SESSION['userId'] = $user['id']; 
            $_SESSION['userEmail'] = $user['userEmail'];

            
            echo "<script>alert('Login successful!');</script>";
            echo "<script>window.location.href='userdashboard.php';</script>"; 
        } else {
            // Invalid password
            echo "<script>alert('Incorrect password. Please try again.');</script>";
            echo "<script>window.location.href='signin.php';</script>";
        }
    } else {
        // User not found
        echo "<script>alert('No account found with that email.');</script>";
        echo "<script>window.location.href='signin.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
