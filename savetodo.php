<?php
    include('./db_config.php');
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $val = $_POST['Title'];
        $sql = "INSERT INTO todo_list(Title) VALUES ('$val')";
        $result = $conn->query($sql);
        header('location:./index.php');
    }
?>