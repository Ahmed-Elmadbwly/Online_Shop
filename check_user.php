<?php
include 'DB.php';
 session_start();
if(isset($_POST['log'])){
    $email1 = $_POST['email'];
    $pass1 = $_POST['password'];
    if($email1 == 'admin@gmail.com' && $pass1 == '1'){
        header("location:index.php?");
    }else{
        $stmt = $pdo->prepare("SELECT * FROM `user`");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $ok1=false;  $ok2=false;
        foreach($result as $row){
            if($email1 == $row['email']) $ok1 = true;
            if($email1 == $row['email'] &&$pass1 == $row['pass']) {$ok2 = true; $_SESSION['userid']=$row['id'] ; break; }
        }
        
        if(!$ok1) {
            header("location:login.php?email1=email is not found try again");
        }
        elseif(!$ok2){
            header("location:login.php?pass1=The email and paaword is not true");
        }
        else 
        header("location:shop.php");
    }
}
if(isset($_POST['reg'])){
    $username=$_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $conpass=$_POST['confirm-password'];
    $stmt = $pdo->prepare("SELECT * FROM `user`");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
     $ok=false;
    foreach($result as $row){
        if($email == $row['email']) $ok =true;
    }
    
    if($ok) {
        header("location:singup.php?email=The email is found please try again");
    }
    elseif(strlen($pass) < 8){
        header("location:singup.php?pass=weak password");
    }
    elseif($pass != $conpass){
        header("location:singup.php?conpass=wrong confirm");
    }
    else {
       $pdo->exec("INSERT INTO `user` ( `name`, `email`, `pass`) VALUES ( '$username', '$email', '$pass');");
       header("location:login.php");
    }
}

