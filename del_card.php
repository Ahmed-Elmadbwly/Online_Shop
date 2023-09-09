<?php
include "DB.php";
$id=$_GET['id'];
$pdo->exec("DELETE FROM `usprod` WHERE id_operation = $id");
header("location:mycar.php");
