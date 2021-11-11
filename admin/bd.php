<?php
try{
    $user='auvg1675_remy';
    $pass ='kerleoguy29910';
    $base = 'auvg1675_folio';
    $user1='root';
    $pass1 ='';
    $base1 = 'folio';
    $db = new pdo('mysql:host=localhost;dbname='.$base.';charset=utf8',$user,$pass,
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }catch(Exception $e){
        die('erreur'.$e -> getMessage());
    }
?>
