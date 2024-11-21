<?php
// db connection
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id = $_POST['id'];  
    $arrivalDate = $_POST['arrival-date'];
    $arrivalTime = $_POST['arrival-time'];
    $exitDate = $_POST['exit-date'];
    $exitTime = $_POST['exit-time'];
    $carPark = $_POST['car-park'];

    // Check if any of the form values are empty
    if (empty($arrivalDate) || empty($arrivalTime) || empty($exitDate) || empty($exitTime) || empty($carPark)) {
        echo "All fields are required.";
    } else {
        
        $sql = "UPDATE reserve SET 
                    arrivalDate = '$arrivalDate', 
                    arrivalTime = '$arrivalTime', 
                    exitDate = '$exitDate', 
                    exitTime = '$exitTime', 
                    carPark = '$carPark' 
                WHERE id = '$id'";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header('Location: userdashboard.php'); 
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}
$conn->close();
?>
