<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location:../index.html');
    }
    
    require ('bd.php');
    $sqls = ("SELECT * from skills where PK_skills = :PK");
    $reqs = $db -> prepare($sqls);
    $reqs -> execute([':PK' => $_GET['id']]);
    if($data = $reqs -> fetch()){
        $id = $_GET['id'];

    if(isset($id) && !empty($id)){
       
        $sql = ("SELECT * from skills where PK_skills = $id ");
        $req = $db ->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="../style.css"> 
    <title>UPDATE</title>
</head>
<body>
<?php

      while($data = $req ->fetch()){
echo '
    <div class="container">

    <div class="row justify-content-center">

    <h2 class="h2 p-1 text-center w-100">UPDATE:</h2>
    <div class="col-12 col-sm-8 col-lg-10">
        
        <form class="form"  action="traitementUpdate.php" method="POST"  enctype="multipart/form-data">

        <label for="id" class="form-label ">PK_SKILLS :</label>
      <input class="form-control" id="id" name="id" type="text" value='.$data['PK_skills'].'>

      <label for="title" class="form-label ">titre :</label>
      <input class="form-control" id="title" name="title" type="text" value='.$data['title_skills'].'>
      
      <label for="img" class="form-label ">Image :</label>
      <input class="form-control" id="img" name="file" type="file">
    
      <label for="nameImg" class="form-label">Progression :</label>
      <input class="form-control" id="nameImg" name="nameImg" type="text" value='.$data['img_skills'].'>
      
      <label for="img" class="form-label">Progression :</label>
      <input class="form-control" id="prog" name="prog" type="text" value='.$data['stars_skills'].'>

      <label for="decription" class="form-label">Message :</label>
      <textarea class="form-control" name="description" id="decription" cols="30" rows="10">'.$data['description_skills'].'</textarea>
      <div class="container w-100 d-flex justify-content-center mt-2 mb-2">
          <button class="btn btn-info ms-4 mt-1" type="submit">update</button>
          <a class="btn btn-danger me-1 mt-1" href="admin.php?UpSkills">Annuler</a>
      </div>
  </form>
        
        </div>
    </div>
';
}
$req ->closeCursor();
    }
}else{
        if(!isset($_GET['id']) || empty($_GET['id']) || !$data = $reqs -> fetch()){
            $reqs -> closeCursor();
            header('location:admin.php?error=id');
        }
    }
?>
</body>
</html>