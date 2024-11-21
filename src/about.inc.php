<?php
//Include connection PHP file
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $review = $_POST["review"];
    

    // Insert data into the database
    $sql = "INSERT INTO reviews (Uname, Uemail, review)
            VALUES ('$name', '$email', '$review')";

    // Check if the insert was successful
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data added successfully')</script>";
        echo "<script>window.location.href='about.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
