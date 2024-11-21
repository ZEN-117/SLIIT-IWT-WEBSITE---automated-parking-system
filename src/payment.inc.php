<?php
//Include connection PHP file
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $holdername = $_POST["cardName"];
    $cardnum = $_POST["cardNumber"];
    $expdate = $_POST["expiryDate"];
    $cvv = $_POST["cvv"];
    $address = $_POST["billingAddress"];

    // Insert data into the database
    $sql = "INSERT INTO payment (holderName, cardNumber, expDate, cvvNo, billAddress)
            VALUES ('$holdername', '$cardnum', '$expdate', '$cvv', '$address')";

    // Check if the insert was successful
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data added successfully')</script>";
        echo "<script>window.location.href='paymentdetails.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
