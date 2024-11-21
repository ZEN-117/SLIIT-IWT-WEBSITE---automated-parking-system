<?php 
//Include Db connection
require_once 'connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
    $id = $_POST['id'];
    $holderName = $_POST['holderName'];
    $cardNumber = $_POST['cardNumber'];
    $expDate = $_POST['expDate'];
    $cvvNo = $_POST['cvvNo'];
    $billAddress = $_POST['billAddress'];

   
    $sql = "UPDATE payment SET holderName = '$holderName', cardNumber = '$cardNumber', expDate = '$expDate', cvvNo = '$cvvNo', billAddress = '$billAddress' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Payment details updated successfully!";
        
        header("Location: paymentdetails.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the connection
    $conn->close();
} else {
    echo "Invalid request.";
}
