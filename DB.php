<?php

  $host="localhost";
  $user="root";
  $pass="";
  $dbname="marketonline";

  $dsn = "mysql:host=".$host.";dbname=".$dbname;
  $pdo = new PDO($dsn , $user,$pass);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);