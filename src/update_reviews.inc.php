<?php
// Include the database connection
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $review_id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $review = $_POST["review"];

    // Update the review in the database
    $sql = "UPDATE reviews SET Uname='$name', Uemail='$email', review='$review' WHERE id='$review_id'";

    // Check if the update was successful
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Review updated successfully')</script>";
        echo "<script>window.location.href='reviews.php'</script>";
    } else {
        echo "Error updating review: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
