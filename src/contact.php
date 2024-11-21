<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoParkX</title>
    <link rel="icon" href="Images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .form-container {
            max-width: 1200px;  
            margin: 40px auto; 
            padding: 20px;    
            background-color: #E5E5E5; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }

        .form-container h2 {
            text-align: center;
            font-size:40px;
        }

        .form-container p {
            text-align: center;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
        }

        .form-container input, 
        .form-container textarea {
            width: 1150px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            width: 30%;
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
            text-decoration: none;
            transition: all 0.5s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
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
    <header>
        <div id="header-placeholder"></div>
    </header>
    
    <div>
        <img src="images/contact.png" class="hero-image" type="img/png">
    </div>

    <div class="form-container">
    <h2>Get in Touch with AutoParkX</h2>
    <p>We’re here to help with any questions or inquiries you may have. Feel free to reach out to us using the form below or through the contact details provided. Your feedback and questions are important to us!</p>
        <form action="./contact.inc.php" method="POST" class="review-form">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone no:</label>
            <input type="tel" id="phone" name="phone" required>
    
            <label for="message">message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
    
            <button type="submit">Send </button>
        </form>
    </div>

    <div id="footer-placeholder"></div>
    
    <script>
        // to include the footer
        fetch('footer.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer-placeholder').innerHTML = data;
            });

        // to include the header   
        fetch('header.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('header-placeholder').innerHTML = data;
            });
    </script>
</body>
</html>
