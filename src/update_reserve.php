<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Reservation</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }
        .container {
            font-family: "Poppins", sans-serif;
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type='date'],
        input[type='time'],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button[type='submit'] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type='submit']:hover {
            background-color: #45a049;
        }

        @media (max-width: 600px) {
            .signup-container {
                width: 100%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Update Reservation</h2>
    <?php
    // db connection
    require_once 'connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // retrieve the record with the given ID
        $sql = "SELECT * FROM reserve WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $arrivalD = $row['arrivalDate'];
            $arrivalT = date('H:i', strtotime($row['arrivalTime']));
            $exitD = $row['exitDate'];
            $exitT = date('H:i', strtotime($row['exitTime']));
            $carPark = $row['carPark'];

            echo "<form action='./update_reserve.inc.php' method='POST'>";
            echo "<input type='hidden' name='id' value='". $id ."'>";
            
            echo "<label for='arrival-date'>Arrival Date:</label>";
            echo "<input type='date' id='arrival-date' name='arrival-date' value='". $arrivalD ."'><br>";
            
            echo "<label for='arrival-time'>Arrival Time:</label>";
            echo "<input type='time' id='arrival-time' name='arrival-time' value='". $arrivalT ."'><br>";
            
            echo "<label for='exit-date'>Exit Date:</label>";
            echo "<input type='date' id='exit-date' name='exit-date' value='". $exitD ."'><br>";
            
            echo "<label for='exit-time'>Exit Time:</label>";
            echo "<input type='time' id='exit-time' name='exit-time' value='". $exitT ."'><br>";
            
            echo "<label for='car-park'>Select Car Park:</label>";
            echo "<select id='car-park' name='car-park'><br>";
            echo "<option value='malabe' ". ($carPark == 'malabe' ? 'selected' : '') .">SLIIT Car park Malabe</option>";
            echo "<option value='kurunegala' ". ($carPark == 'kurunegala' ? 'selected' : '') .">SLIIT Car park Kurunegala</option>";
            echo "<option value='kandy' ". ($carPark == 'kandy' ? 'selected' : '') .">SLIIT Car park Kandy</option>";
            echo "</select><br>";

            echo "<button type='submit'>Update</button>";
            echo "</form>";

        } else {
            echo "No record available";
        }
    } else {
        echo "ID parameter is missing";
    }
    ?>
</div>

</body>
</html>
