<?php 
include 'DB.php';

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_FILES['img'];
    $img_loc= $_FILES['img']['tmp_name'];
    $img_name=$_FILES['img']['name'];
    $img_up="imges/".$img_name;
    $sql="UPDATE prod SET name='$name',price='$price',img='$img_up' WHERE id=$id";
    $pdo->exec($sql);
    move_uploaded_file($img_loc,$img_up);
    header("location:product.php");
}