<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
}

// Include Db connection
require_once 'connection.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    
    header("Location: signin.php");
    exit();
}

// Get the logged in users id from the session
$userId = $_SESSION['user_id'];

// Query to retrieve the logged in users details
$sql = "SELECT * FROM user_details WHERE id = '$userId'"; 
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>

    
    <style>
        
        .card-container {
            flex-wrap: wrap;
            justify-content: center; 
            margin-top: 20px; 
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            margin: 10px;
            padding: 20px;
            width: 300px; 
            transition: transform 0.2s;
        }
        .card h2 {
            margin: 0 0 10px;
            font-size: 25px;
            color: #14213D;
        }

        .card p {
            margin: 5px 0;
            font-size: 20px;
            color: #333;
        }

        
        .label {
            font-weight: bold;
            color: #FCA311;
        }

       
        .update-btn, .delete-btn {
            width: 100px;
            border-radius: 8px;
            padding: 10px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
            font-weight: bold;
            letter-spacing: 1.5px;
            cursor: pointer;
            margin: 5px;
        }

        .update-btn {
            border: 2px solid #FCA311;
            background: linear-gradient(145deg, #ffffff, #FCA311);
            color: #14213D;
            transition: all 0.5s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .update-btn:hover {
            background: linear-gradient(145deg, #FCA311, #ffffff);
            color: #14213D;
            text-shadow: 0px 0px 10px #00ff99;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.8);
            border: 2px solid #00ff99;
        }

        .delete-btn {
            border: 2px solid #FF4D4D;
            background: linear-gradient(145deg, #FCA311, #FF4D4D);
            color: #fff;
            transition: all 0.5s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .delete-btn:hover {
            background: linear-gradient(145deg, #FF4D4D, #FCA311);
            color: #fff;
            text-shadow: 0px 0px 10px #00ff99;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.8);
            border: 2px solid #00ff99;
        }
    </style>
</head>
<body>

<?php 
if ($result->num_rows > 0) {
    echo "<div class='card-container'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<h2>User Details</h2>";
        echo "<br>";
        echo "<p class='label'>Name:</p> <p>" . htmlspecialchars($row["firstName"]) . " " . htmlspecialchars($row["lastName"]) . "</p>";
        echo "<br>";
        echo "<p class='label'>Phone No:</p> <p>" . htmlspecialchars($row["phoneNo"]) . "</p>";
        echo "<br>";
        echo "<p class='label'>Email:</p> <p>" . htmlspecialchars($row["userEmail"]) . "</p>";
        echo "<br>";
        echo "<p class='label'>Password:</p> <p>" . htmlspecialchars($row["userPassword"]) . "</p>";
        echo "<div>";
        echo "<br>";
        echo "<button class='update-btn' onClick=\"redirectToUpdateForm(". $row ["id"] . ")\">Update</button>";
        echo "<button class='delete-btn' onClick=\"window.location.href='delete_reservation.php?delete_id=" . $row["id"] . "'\">Delete</button>";
        echo "</div>";
        echo "</div>"; 
    }
    echo "</div>"; 
} else {
    echo "<p>No data available</p>";
}
$conn->close();
?>

</body>
</html>
