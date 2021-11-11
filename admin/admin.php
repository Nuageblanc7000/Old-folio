<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="../style.css">
    <title>Gestion</title>
</head>
<body>
   <div class="container">
  <?php 
  require 'modules/nav.php';
  ?>
       <div class="row justify-content-center">
           <?php 
           if(isset($_GET['error'])){
               echo '<div class="col-6 m-auto d-flex align-items-center justify-content-center bg-danger" style="height:50px;">Console log:'.$_GET['error'].'</div>';
           }
           if(isset($_GET['addSkills'])){
               require "modules/ajouter.php";
           }elseif(isset($_GET['addProjects'])){
               require "modules/ajouter.php";
           }elseif(isset($_GET['UpSkills'])){
              require "modules/skills.php";
           }elseif(isset($_GET['upProjects'])){
            require "modules/projects.php";
           }
           ?>   
   </div>
  
</body>
</html>