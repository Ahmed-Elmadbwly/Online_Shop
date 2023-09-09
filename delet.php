<?php
include "DB.php";

$id=$_GET['id'];
$pdo ->exec("DELETE FROM prod WHERE id=$id");
header('location:product.php');