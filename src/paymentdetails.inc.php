<?php 
//Include Db connection
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information</title>
    
    <style>
        
        .payment-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        .payment-table th, .payment-table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .payment-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        
        .update-btn, .delete-btn {
            width: 100px;
            border: 2px solid;
            border-radius: 8px;
            padding: 10px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
            font-weight: bold;
            letter-spacing: 1.5px;
            color: #fff;
            transition: all 0.5s ease;
            cursor: pointer;
            margin: 5px;
        }

        .update-btn {
            background: linear-gradient(145deg, #ffffff, #FCA311);
            border-color: #FCA311;
            color: #14213D;
        }

        .update-btn:hover {
            background: linear-gradient(145deg, #FCA311, #ffffff);
            color: #14213D;
        }

        .delete-btn {
            background: linear-gradient(145deg, #FCA311, #FF4D4D);
            border-color: #FF4D4D;
        }

        .delete-btn:hover {
            background: linear-gradient(145deg, #FF4D4D, #FCA311);
        }
    </style>
</head>
<body>

<?php 
// Retrieve data from the database
$sql = "SELECT * FROM payment";
$result = $conn->query($sql);

if( $result->num_rows > 0){
    echo "<table class='payment-table'>";
    echo "<tr><th>ID</th><th>Holder Name</th><th>Card Number</th><th>Expiry Date</th><th>CVV</th><th>Billing Address</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["holderName"] . "</td>";
        echo "<td>" . $row["cardNumber"] . "</td>";
        echo "<td>" . $row["expDate"] . "</td>";
        echo "<td>" . $row["cvvNo"] . "</td>";
        echo "<td>" . $row["billAddress"] . "</td>";
        echo "<td>";
        echo "<a href='update_payment.php?id=" . $row["id"] . "'><button class='update-btn'>Update</button></a>";
        echo "<button class='delete-btn' onClick=\"window.location.href='delete_payment.php?delete_id=" . $row["id"] . "'\">Delete</button>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data available";
}
$conn->close();
?>

</body>
</html>
