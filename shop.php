<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
        h3{
            margin-top:20px;
        }
        .card{
            float: right;
            margin: 20px 10px ;
        }
        .card img{
            width: 100%;
            height: 150px;
        }
        main{
            width: 64%;
        }
        #aa{
            margin-left:30px;
            text-decoration:none;
            color:white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
       <a href="mycar.php" class="navbar-brand" id="aa">My car</a>
       <a href="login.php" style='text-decoration: none;  margin-right:20px;  color: white;padding: 7px;'>Log Out</a>
    </nav>
    <center>
        <h3>All Prouduct</h3>
    </center>
    <?php
      include 'DB.php';
      $stmt = $pdo->prepare("SELECT * FROM `prod`");
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as $row){
        echo "
        <center>
          <main>
           <div class='card' style='width: 15rem;'>
            <img src='$row[img]' class='card-img-top'>
            <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price]</p>
            <a href='val.php? id=$row[id]' class='btn btn-success'>Add product</a>
            </div>
           </div>
          </main>
        </center>
        ";
      }
    ?>

</body>
</html>