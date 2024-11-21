<?php
//Include connection PHP file
require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST ["firstName"];
    $lastname = $_POST ["lastName"];
    $phone = $_POST ["phone"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];

    //check email
    $checkQuery = "SELECT * FROM user_details WHERE userEmail = '$email'";
    $result = $conn->query($checkQuery);

    if($result->num_rows > 0){
        //email already exists
        echo "<script>alert('This email address is already registered. use a diffrent one.')</script>";
        echo"<script>window.location.href='signup.php'</script> ";
    }else{

    //insert data into the database
    $sql = "INSERT INTO user_details (firstName,lastName,phoneNo,userEmail,userPassword)
    VALUES ('$firstname','$lastname','$phone','$email','$password')" ;

    //check if the insert was successful
    if($conn->query($sql)===TRUE){
        echo"<script>alert('Data added successfully')</script>";
        echo"<script>window.location.href='signin.php' </script>";
    }else{
        echo "Error : " . $sql . "<br>" . $conn ->error;
    }
}

}
$conn->close();
?>

