<?php 
include 'includes/include_classes.inc.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop online</title>
  <link rel="stylesheet" href="style/index.css">
</head>
<body>
  <center>
      <div class="main">
        <form action="update.php" method ="post" enctype="multipart/form-data">
          <h2>Edit product</h2>
          <img src="img/on.avif" alt="LOGO" width = "135px">
          <br>
          ID   
          <input type="text" name="id" value=<?php echo $_GET['id']?>>
          <br>
          name 
          <input type="text" name="name" value=<?php echo $_GET['name']?>>
          <br>
          price 
          <input type="text" name ="price" value=<?php echo $_GET['price']?>>
          <br>
          <input type="file" id ="file" name ="img" style="display:none;">
          <label for="file">  Updat Image  </label>
          <button name ="update">Edit Product</button>
          <br><br>
          <a href="product.php">Show Product</a>
        </form>
      </div>
      <p>Developer by Ahmed Almadbwly</p>
  </center>
</body>
</html>