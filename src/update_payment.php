<?php 
//Include Db connection
require_once 'connection.php';

// Check if ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // get payment details by ID
    $sql = "SELECT * FROM payment WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $holderName = $row['holderName'];
        $cardNumber = $row['cardNumber'];
        $expDate = $row['expDate'];
        $cvvNo = $row['cvvNo'];
        $billAddress = $row['billAddress'];
    } else {
        echo "No payment record found!";
        exit();
    }
} else {
    echo "No ID parameter found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Payment</title>
    <style>
        /* Form styles */
        .form-container {
            font-family: "Poppins", sans-serif;
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container button {
            width: 100%;
            border: 2px solid #FCA311;
            border-radius: 8px;
            background: linear-gradient(145deg, #ffffff, #FCA311);
            padding: 14px 18px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            font-weight: bold;
            letter-spacing: 3px;
            color: #14213D;
            transition: all 0.5s ease;
            cursor: pointer;
        }

        .form-container button:hover {
            background: linear-gradient(145deg, #FCA311, #ffffff);
            color: #14213D;
            text-shadow: 0px 0px 10px #00ff99;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.8);
            border: 2px solid #00ff99;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Update Payment</h2>
    <form action="update_payment.inc.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="holderName">Holder Name:</label>
        <input type="text" name="holderName" value="<?php echo $holderName; ?>" required>

        <label for="cardNumber">Card Number:</label>
        <input type="text" name="cardNumber" value="<?php echo $cardNumber; ?>" required>

        <label for="expDate">Expiry Date:</label>
        <input type="text" name="expDate" value="<?php echo $expDate; ?>" required>

        <label for="cvvNo">CVV:</label>
        <input type="number" name="cvvNo" value="<?php echo $cvvNo; ?>" required>

        <label for="billAddress">Billing Address:</label>
        <input type="text" name="billAddress" value="<?php echo $billAddress; ?>" required>

        <button type="submit">Update Payment</button>
    </form>
</div>

</body>
</html>
