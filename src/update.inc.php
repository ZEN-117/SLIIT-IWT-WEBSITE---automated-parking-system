<?php

//inclde db connection
require_once 'connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST ["id"];
    $firstname = $_POST ["firstName"];
    $lastname = $_POST ["lastName"];
    $phone = $_POST ["phone"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];

    //update data in the database
    $sql = "UPDATE user_details SET firstName='$firstname',lastName ='$lastname', phoneNo = '$phone',
    userEmail = '$email', userPassword = '$password' 
    WHERE id = '$id'";

    //Check if update was successful
    if($conn->query($sql) === TRUE){
        echo "<script>alert('User details updated successfully');</script>";
        echo "<script>window.location.href = 'userprof.php';</script>";
        exit();

    }else{
        echo "Details Update Failed :".$conn->error;
    }
}
$conn->close();
?>