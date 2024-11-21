<?php
session_start(); 
require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query to check user credentials
    $loginQuery = "SELECT * FROM user_details WHERE userEmail = '$email' AND userPassword = '$password'";
    $result = $conn->query($loginQuery);

    if($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Store user details in session variables
        $_SESSION['user_id'] = $user['id']; // Assuming there's a column named 'id'
        $_SESSION['firstName'] = $user['firstName'];
        $_SESSION['lastName'] = $user['lastName'];
        $_SESSION['phoneNo'] = $user['phoneNo'];
        $_SESSION['userEmail'] = $user['userEmail'];
        $_SESSION['userPassword'] = $user['userPassword'];
        $_SESSION['role'] = $user['role'];

        // Redirect based on user role
        if ($user['role'] === 'admin') {
            header("Location: admindashboard.php");
            exit();
        } else {
            header("Location: userprof.php");
            exit();
        }
    } else {
        echo "<script>window.location.href='signin.php'</script>";
    }
}
$conn->close();
?>
