<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("location:../index.php");
    exit();
}
if(isset($_POST['title']) && isset($_POST['prog']) && isset($_POST['description'])  && isset($_FILES['file']) && isset($_POST['id']) ){
    $id = $_POST['id'];
    require 'bd.php';
    $file = $_FILES['file'];
    $maxSize =500000;
    if($file['error']===0){
        if($file['size']<=$maxSize){
            $path = pathinfo($file['name']);
            $fileExt = $path['extension'];
            $extenionFileAut =['jpg','jpeg','png','svg'];
            if(in_array($fileExt,$extenionFileAut)){
                $fileName = $path['filename'];
                $fileNameAlea =uniqid(rand(),false).'.'.$fileExt;
                $fileTransfer =  'img/'.$fileNameAlea; 
                var_dump($fileNameAlea);
                $fileTmp = $file['tmp_name'];
                move_uploaded_file($fileTmp,$fileTransfer);
                $img=$fileNameAlea;
            }
        }
    }elseif($file['error']===4){ 
        $sqls = ('SELECT img_skills from skills where PK_skills='.$id.'');
        $reqs = $db -> query($sqls);
        if($data = $reqs ->fetch()){
            $img = $data['img_skills'];
           $reqs -> closeCursor();
        }
    }

    $data =[
        'title' => $_POST['title'],
        'stars' => $_POST['prog'],
        'description'=> $_POST['description'],
         'img' =>  $img,
        'PK' =>  $_POST['id'],
    ];

   
    $sql = ("UPDATE skills SET title_skills=:title,stars_skills=:stars,description_skills=:description,img_skills=:img WHERE PK_skills=:PK");
    $req = $db -> prepare($sql);
    $req -> execute($data);
    if($req){
        $req -> closeCursor();
        header('location:admin.php?UpSkills='.true.'');
        exit();
    }
}else{
    header('location:update.php?error=id-null-ou-introuvable');
    exit();
}
