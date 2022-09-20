<?php
include('./db_config.php');
$idValue= $_GET['update'];
echo $idValue;
// session_start();
// $_SESSION["id"] = $_POST['update'];
 if(isset($_POST['update_btn']))
 {
    $val1 = $idValue;
    $newValue= $_POST['update_value'];
   
    $sql = "UPDATE  todo_list set Title='$newValue' where Id='$val1'";
    $result = $conn->query($sql);
     header('location:./index.php');
 }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
        <form action="" method="POST">
            <input Type="text" placeholder="" name="update_value" class="form-control">
            <button class="btn btn-primary" name="update_btn">Update</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>