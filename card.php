<?php
include "DB.php";
session_start();
if(isset($_POST['add'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
   
    $pdo->exec("INSERT INTO usprod(id_user,id_prod,quan) VALUES($_SESSION[userid],$id,1)");
    header("location:shop.php");
}
?>