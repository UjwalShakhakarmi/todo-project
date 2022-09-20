<?php   
    $conn=new mysqli("localhost","root","","new");
    if($conn->connect_error) {
        die($conn->connect_error);
    }
?>