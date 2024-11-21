<?php

//include db connection

require_once './connection.php';

//check the delete_id parameter exists in the URL
if(isset($_GET['delete_id'])){
    $deleteID = $_GET['delete_id'];

    $sql = "DELETE FROM reviews WHERE id = '$deleteID'";
    if($conn->query($sql) === TRUE){
        echo "<script>alert ('Review Deleted');</script>";
        echo "<script> window.location.href = 'reviews.php';</script>";
    }else{
        echo "review delete Failed";
    }
}else{
    echo "delete id parameter not found";
}
$conn->close();
?>