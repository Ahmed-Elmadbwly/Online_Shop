<?php
include 'DB.php';
session_start();
$stmt = $pdo->prepare("SELECT quan FROM `usprod` WHERE id_operation=$_GET[id];");
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$pdo->exec("UPDATE `usprod` SET `quan` = ($result[quan]+1) WHERE `usprod`.`id_operation` = $_GET[id];");
header("Location:mycar.php") ;