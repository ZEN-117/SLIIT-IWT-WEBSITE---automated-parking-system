<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - AutoParkX</title>
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

        .signup-container {
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

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .terms-container {
            display: flex;
            align-items: center;
            margin: 15px 0;
        }

        .terms-container input {
            margin-right: 10px;
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
        }

        button:hover {
            background: linear-gradient(145deg, #FCA311, #ffffff);
            color: #14213D;
            text-shadow: 0px 0px 10px #00ff99;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.8);
            border: 2px solid #00ff99;
        }

        .login-option {
            text-align: center;
            margin-top: 15px;
        }

        .back-home {
            text-align: center;
            margin-bottom: 20px; 
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
    <div class="signup-container">
        <div class="back-home">
            <i class="fas fa-arrow-left" style="margin-right: 5px;"></i>
            <a href="index.php">Back to Home</a>
        </div>

        <h2>Sign Up</h2>

        <form action = "./signup.inc.php" method ="post" id="signupForm">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="phone">Phone No:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Re-enter Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <div class="terms-container">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">I have read and agree to the Terms & Conditions</label>
            </div>

            <button type="submit">Sign Up</button>
        </form>

        <div class="login-option">
            <p>Or</p>
            <button onclick="window.location.href='signin.php';">Log In</button>
        </div>
    </div>

</body>
</html>
