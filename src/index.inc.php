<?php
//Include connection PHP file
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrivalD = $_POST["arrival-date"];
    $arrivalT = $_POST["arrival-time"];
    $exitD = $_POST["exit-date"];
    $exitT = $_POST["exit-time"];
    $carPark = $_POST["car-park"];

    // Insert data into the database
    $sql = "INSERT INTO reserve (arrivalDate, arrivalTime, exitDate, exitTime, carPark)
            VALUES ('$arrivalD', '$arrivalT', '$exitD', '$exitT', '$carPark')";

    // Check if the insert was successful
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data added successfully')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
