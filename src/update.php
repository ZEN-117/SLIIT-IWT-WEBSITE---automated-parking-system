<?php
// db connection
require_once 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // retrieve the record with the given ID
    $sql = "SELECT * FROM user_details WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstname = $row['firstName'];
        $lastname = $row['lastName'];
        $phone = $row['phoneNo'];
        $email = $row['userEmail'];
        $password = $row['userPassword'];

        
        echo "
        <style>
                body {
                    font-family: 'Arial', sans-serif;
                    font-size: 16px;
                    line-height: 1.6;
                    color: #333;
                }
                .signup-container {
                    width: 400px;
                    margin: 50px auto;
                    padding: 20px;
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    background-color: #f9f9f9;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                }

                .signup-container h2 {
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

                input[type='text'],
                input[type='tel'],
                input[type='email'],
                input[type='password'] {
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

            <div class='signup-container'>
                <h2>Update User Information</h2>
                <form action='./update.inc.php' method='post' id='signupForm'>
                    <input type='hidden' name='id' value='" . htmlspecialchars($id) . "'> <!-- Hidden ID field -->
                    
                    <label for='firstName'>First Name:</label>
                    <input type='text' id='firstName' name='firstName' value='" . htmlspecialchars($firstname) . "' >
                    
                    <label for='lastName'>Last Name:</label>
                    <input type='text' id='lastName' name='lastName' value='" . htmlspecialchars($lastname) . "' >
                    
                    <label for='phone'>Phone No:</label>
                    <input type='tel' id='phone' name='phone' value='" . htmlspecialchars($phone) . "' >
                    
                    <label for='email'>Email:</label>
                    <input type='email' id='email' name='email' value='" . htmlspecialchars($email) . "' >
                    
                    <label for='password'>Password:</label>
                    <input type='text' id='password' name='password' value='" . htmlspecialchars($password) . "' >
                    
                    <button type='submit'>Update</button>
                </form>
            </div>
        ";

    } else {
        echo "No record available";
    }
} else {
    echo "ID parameter is missing";
}
?>
