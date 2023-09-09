<?php 
include 'DB.php';

if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_FILES['img'];
    $img_loc= $_FILES['img']['tmp_name'];
    $img_name=$_FILES['img']['name'];
    $img_up="imges/".$img_name;
    $sql="INSERT INTO `prod` ( `name`, `price`, `img`) VALUES ('$name' ,'$price' ,'$img_up')";
    $pdo->exec($sql);
    move_uploaded_file($img_loc,$img_up);
    header("location:index.php");
}