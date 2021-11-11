<?php
    if(!isset($_SESSION['admin'])){
        header('location:../../index.html');
    }
echo 'bien essayé';
?>