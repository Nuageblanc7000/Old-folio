<?php
session_start();
if(isset($_GET['deco'])){
    session_destroy();
}
if(isset($_SESSION['count'])){
if($_SESSION['count']===3){
    session_destroy();
    header('location:../index.php');
}
echo $_SESSION['count'];   
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Administration</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
    <h3 class="text-center">connection:</h3>
    <div class="col-12 col-sm-8 col-sm-xl-8">
        <form action="traitement.php" class="form-control" method="POST">
           
        <label class="form-label" for="pseudo:">pseudo:</label>
            <input type='text' name="pseudo" id="pseudo" class="form-control" required>
            
            <label class="form-label" for="password">Mot de passe:</label>
            <input type='password' name="password" id="password" class="form-control" required>
            
            <label class="form-label" for="mail">Email:</label>
            <input type='mail' name="mail" id="mail" class="form-control" required>
            
            <button class="btn btn-success m-2" type='submit'>Connection</button>
        </form>
    </div>
    </div>
    </div>
</body>
</html>