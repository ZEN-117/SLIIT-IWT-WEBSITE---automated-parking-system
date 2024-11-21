<?php

//include db connection

require_once './connection.php';

//check the delete_id parameter exists in the URL
if(isset($_GET['delete_id'])){
    $deleteID = $_GET['delete_id'];

    $sql = "DELETE FROM payment WHERE id = '$deleteID'";
    if($conn->query($sql) === TRUE){
        echo "<script>alert ('Payment details Deleted');</script>";
        echo "<script> window.location.href = 'paymentdetails.php';</script>";
    }else{
        echo "Payment details delete Failed";
    }
}else{
    echo "delete id parameter not found";
}
$conn->close();
?>