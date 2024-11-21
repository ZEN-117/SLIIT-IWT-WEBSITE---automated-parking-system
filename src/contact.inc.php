<?php
//Include connection PHP file
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Insert data into the database
    $sql = "INSERT INTO contact (uName, uEmail, phoneNo, Umessage)
            VALUES ('$name', '$email', '$phone', '$message')";

    // Check if the insert was successful
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data added successfully')</script>";
        echo "<script>window.location.href='contact.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
