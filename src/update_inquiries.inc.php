<?php
// Include Db connection
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Update the inquiry in the database
    $sql = "UPDATE contact SET uName='$name', uEmail='$email', phoneNo='$phone', Umessage='$message' WHERE id='$id'";

    // Check if the update was successful
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Inquiry updated successfully')</script>";
        echo "<script>window.location.href='inquiries.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
