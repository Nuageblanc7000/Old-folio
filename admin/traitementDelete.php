<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("location:../index.php");
}else{
    if(isset($_GET['UpSkills'])){
    request('skills','PK_skills','UpSkills');
}elseif(isset($_GET['upProjects'])){
    request('projects','PK_projects','upProjects');
}else{
    header("location:admin.php?error");
}
 }
 function request ($nameBd,$PrimaryKey,$location){
    require ('bd.php');
    $sqls = ("SELECT * from $nameBd where $PrimaryKey = :PK");
    $reqs = $db -> prepare($sqls);
    $reqs -> execute([':PK' => $_GET['id']]);
    if($data = $reqs -> fetch()){
        $id = $_GET['id'];

    if(isset($id) && !empty($id)){
    $id =$_GET['id'];
    // on va créer la requête de suppression ça sera une prépare car on ne connait pas encore l'id
    $sql = ('DELETE FROM '.$nameBd.' where '.$PrimaryKey.' = (?) ');
    $req = $db -> prepare($sql);
    $req -> execute([$id]);
    header('location:admin.php?'.$location.'='.true.'');
    $req -> closeCursor();
} 
 }else{
    if(!isset($_GET['id']) || empty($_GET['id']) || !$data = $reqs -> fetch()){
        $reqs -> closeCursor();
        header("location:admin.php?error=id");
    }
}
 }


 /*
     require ('bd.php');
    $sqls = ("SELECT * from skills where PK_skills = :PK");
    $reqs = $db -> prepare($sqls);
    $reqs -> execute([':PK' => $_GET['id']]);
    if($data = $reqs -> fetch()){
        $id = $_GET['id'];

    if(isset($id) && !empty($id)){
    $id =$_GET['id'];
    // on va créer la requête de suppression ça sera une prépare car on ne connait pas encore l'id
    $sql = ('DELETE FROM skills where PK_skills = (?) ');
    $req = $db -> prepare($sql);
    $req -> execute([$id]);
    header('location:admin.php?UpSkills='.true.'');
    $req -> closeCursor();
}
 }else{
    if(!isset($_GET['id']) || empty($_GET['id']) || !$data = $reqs -> fetch()){
        $reqs -> closeCursor();
        header('location:admin.php?error=id');
    }
}
*/
?>