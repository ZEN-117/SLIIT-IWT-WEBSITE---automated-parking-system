<?php 
//Include Db connection
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>

    
    <style>
        
        .reserve-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        .reserve-table th, .reserve-table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .reserve-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        
        .update-btn {
            width: 100px;
            border: 2px solid #FCA311;
            border-radius: 8px;
            background: linear-gradient(145deg, #ffffff, #FCA311);
            padding: 10px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
            font-weight: bold;
            letter-spacing: 1.5px;
            color: #14213D;
            transition: all 0.5s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            margin: 5px;
        }

        .update-btn:hover  {
            background: linear-gradient(145deg, #FCA311, #ffffff);
            color: #14213D;
            text-shadow: 0px 0px 10px #00ff99;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.8);
            border: 2px solid #00ff99;
        }

        .delete-btn{
            width: 100px;
            border: 2px solid #FF4D4D;
            border-radius: 8px;
            background: linear-gradient(145deg, #FCA311, #FF4D4D);
            padding: 10px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
            font-weight: bold;
            letter-spacing: 1.5px;
            color: #fff;
            transition: all 0.5s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            margin: 5px;
        }

        .delete-btn:hover{
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
//retrieve data from the database
$sql = "SELECT * FROM reserve";
$result = $conn->query($sql);

if( $result->num_rows > 0){
    echo "<table class='reserve-table'>";
    echo "<tr><th>ID</th><th>Arrival Date</th><th>Arrival Time</th><th>Exit Date</th><th>Exit Time</th><th>Car Park</th><th>Actions</th></tr>";
    while($row = $result -> fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["arrivalDate"] . "</td>";
        echo "<td>" . $row["arrivalTime"] . "</td>";
        echo "<td>" . $row["exitDate"] . "</td>";
        echo "<td>" . $row["exitTime"] . "</td>";
        echo "<td>" . $row["carPark"] . "</td>";
        echo "<td>";
        echo "<button class='delete-btn' onClick=\"window.location.href='ad_delete_reservation.php?delete_id=" . $row["id"] . "'\">Delete</button>";
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
