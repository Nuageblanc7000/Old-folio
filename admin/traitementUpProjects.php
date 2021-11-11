<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("location:../index.php");
    exit();
}
if(isset($_POST['title']) && isset($_POST['link']) && isset($_POST['description'])  && isset($_FILES['file']) && isset($_POST['id']) && isset($_POST['date']) ){
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
        }else{
            header("location:admin.php?upProjects");
            exit();
        }
    }elseif($file['error']===4){ 
        $sqls = ('SELECT img_projects from projects where PK_projects='.$id.'');
        $reqs = $db -> query($sqls);
        if($data = $reqs ->fetch()){
            $img = $data['img_projects'];
           $reqs -> closeCursor();
        }
    }
    $data =[
        'title' => $_POST['title'],
        'link' => $_POST['link'],
        'description'=> $_POST['description'],
         'img' =>  $img,
        'PK' =>  $_POST['id'],
        'date' => $_POST['date'],
    ];
    $sql = ("UPDATE projects SET title_projects=:title,link_projects=:link,description_projects=:description,img_projects=:img,date_projects=:date WHERE PK_projects=:PK");
    $req = $db -> prepare($sql);
    $req -> execute($data);
    if($req){
        $req -> closeCursor();
        header("location:admin.php?upProjects");
        exit();       
    }
}else{
    header("location:update.php?error=id-null-ou-introuvable");
    exit();
}