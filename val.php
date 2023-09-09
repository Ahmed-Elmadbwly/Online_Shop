<?php
     
    include 'DB.php';
    $id=$_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM `prod` WHERE id=$id");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop online</title>
  <link rel="stylesheet" href="style/index.css">
  <style>
    input{
        display:none;
    }
    .main{
        margin-top:150px;
    }
  </style>
</head>
<body>
  <center>
      <div class="main">
        <form action="card.php" method ="post" enctype="multipart/form-data">
          <h2> Are you Sure Buy Product?!</h2>
          <input type="text" name="id" value='<?php echo $result['id']?>'>
          <input type="text" name="name" value='<?php echo $result['name']?>'>
          <input type="text" name ="price" value='<?php echo $result['price']?>'>
          <button name ="add" type="submit" class="btn btn-warning">Add to car</button>
          <br><br>
          <a href="shop.php">Back to Product</a>
        </form>
      </div>
  </center>
</body>
</html>