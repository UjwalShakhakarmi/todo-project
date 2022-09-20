<?php 
    include('./db_config.php');
    
 if(isset($_POST['delete']))
    {
        $val=$_POST['delete'];
        $sql = "DELETE FROM todo_list WHERE Id='$val'";
        $result = $conn->query($sql);
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
    <div class="container" style="margin-top:45px">
        <form action="savetodo.php" method="post">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control mb-4" placeholder="Type your title" name="Title">
            <input type="submit" class="btn btn-primary mb-4">
        </form>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col"></th>
            </tr>
            <?php
                $sql = "SELECT * FROM todo_list";
                $result = $conn->query($sql);//query run            
                while($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?=$row['Id']?></td>
                <td><?=$row['Title']?></td>
                <td><form action="" method="POST">
                      <button class="btn btn-danger" name="delete" value="<?=$row['Id']?>">DELETE</button>
                </form>
                </td>
                <td>
                <form action="edit.php" method="GET">
                         
                      <button class="btn btn-success" name="update" value="<?=$row['Id']?>">UPDATE</button>
                </form>
                </td>   
               
    
            </tr>
            <?php } ?>
        </thead>

        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
