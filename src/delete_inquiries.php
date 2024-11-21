<?php

//include db connection

require_once './connection.php';

//check the delete_id parameter exists in the URL
if(isset($_GET['delete_id'])){
    $deleteID = $_GET['delete_id'];

    $sql = "DELETE FROM contact WHERE id = '$deleteID'";
    if($conn->query($sql) === TRUE){
        echo "<script>alert ('Inquiry Deleted');</script>";
        echo "<script> window.location.href = 'inquiries.php';</script>";
    }else{
        echo "Inquiry delete Failed";
    }
}else{
    echo "delete id parameter not found";
}
$conn->close();
?>