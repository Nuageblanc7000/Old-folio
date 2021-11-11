<?php
 session_start();
if(isset($_POST["pseudo"]) && isset($_POST["password"]) && isset($_POST["mail"])){
    $pseudo =htmlspecialchars($_POST["pseudo"]);
$password = $_POST["password"];
$mail = htmlspecialchars($_POST["mail"]);
$count = 0;
if(!empty($pseudo) && !empty($password) && !empty($mail)){
    require 'bd.php';
    $sql = ('SELECT * FROM admin WHERE pseudo_admin = :pseudoA and mail_admin = :mailA');
    $request = $db -> prepare($sql);
    $request -> execute(['pseudoA'=> $pseudo,'mailA'=>$mail]);
    if($data = $request -> fetch()){
        if(password_verify($password,$data['password_admin'])){
            $_SESSION['admin'] = $data['pseudo_admin'];
            header("location:admin.php");
    }else{
        $count++;
        $_SESSION['count'] = $count + $_SESSION['count'];
        header("location:index.php");
    }
    }else{
        $count++;
        $_SESSION['count'] = $count + $_SESSION['count'];
        header("location:index.php");
    }
}else{
}
}else{
}