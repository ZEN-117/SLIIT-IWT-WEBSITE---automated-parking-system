<?php 
// Include database connection
require_once 'connection.php';


if (isset($_GET['id'])) {
    $review_id = $_GET['id'];

    
    $sql = "SELECT * FROM reviews WHERE id = $review_id";
    $result = $conn->query($sql);
    $review = $result->fetch_assoc();
} else {
    echo "No review ID provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Review</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #E5E5E5;
            padding: 20px;
        }
        
        .update-form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        
        .update-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .update-form label {
            display: block;
            margin: 10px 0 5px;
        }
        
        .update-form input[type="text"],
        .update-form input[type="email"],
        .update-form textarea {
            
            width: 100%;
            padding: 10px;
            border: 2px solid #8f8b8b;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 16px;
        }
        
        .update-form button {
            width: 100%;
            background-color: #FCA311;
            border: none;
            color: white;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .update-form button:hover {
            background-color: #d89a08;
        }
    </style>
</head>
<body>

<div class="update-form-container">
    <form action="update_reviews.inc.php" method="POST" class="update-form">
        <h2>Update Review</h2>
        <input type="hidden" name="id" value="<?php echo $review['id']; ?>" required>
        
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $review['Uname']; ?>" required>
        
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $review['Uemail']; ?>" required>
        
        <label for="review">Your Review:</label>
        <textarea id="review" name="review" rows="5" required><?php echo $review['review']; ?></textarea>
        
        <button type="submit">Update Review</button>
    </form>
</div>

</body>
</html>
