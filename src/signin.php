<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - AutoParkX</title>
    <link rel="icon" href="Images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-image: url('Images/bgimg.png'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0; 
        }

        .login-container {
            background-color: #E5E5E5;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            color: #14213d;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
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
            text-decoration: none;
            transition: all 0.5s ease;
            box-shadow: 0 4px 8px #14213d34;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            background: linear-gradient(145deg, #FCA311, #ffffff);
            color: #14213D;
            text-shadow: 0px 0px 10px #00ff99;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.8);
            border: 2px solid #00ff99;
        }

        .signup-option {
            text-align: center;
            margin-top: 15px;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
            font-size: 0.9rem;
        }

        .back-home {
            text-align: center;
            margin-bottom: 15px; 
            background: #00ff99;
            border-radius: 5px;
        }

        .back-home a {
            color: #14213D;
            text-decoration: none;
            font-weight: bold;
        }

        .back-home a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="back-home">
            <i class="fas fa-arrow-left" style="margin-right: 5px;"></i>
            <a href="index.php">Back to Home</a>
        </div>
        <h2>Log In</h2>
        <form action="insert.inc.php" method="post" id="loginForm">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Log In</button>
        </form>

        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>

        <div class="signup-option">
            <p>Don't have an account?</p>
            <button onclick="window.location.href='signup.php';">Sign Up</button>
        </div>
    </div>
</body>
</html>
