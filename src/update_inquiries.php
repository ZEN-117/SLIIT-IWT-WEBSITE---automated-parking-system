<?php
// Include Db connection
require_once 'connection.php';

// Get the inquiry ID from the URL
$id = $_GET['id'];

// Retrieve the inquiry details from the database
$sql = "SELECT * FROM contact WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Inquiry</title>

    
    <style>
        .form-container {
            font-family: "Poppins", sans-serif;
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #E5E5E5;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
        }

        .form-container input, 
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
    <h2>Update Inquiry</h2>
    <form action="update_inquiries.inc.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['uName']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['uEmail']; ?>" required>

        <label for="phone">Phone No:</label>
        <input type="tel" id="phone" name="phone" value="<?php echo $row['phoneNo']; ?>" required>
    
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required><?php echo $row['Umessage']; ?></textarea>
    
        <button type="submit">Update Inquiry</button>
    </form>
</div>

</body>
</html>

<?php
$conn->close();
?>
