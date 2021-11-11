<?php
//ADD SKILLS
//pour entrer je vérifie que tout soit lest post sont existant
if(isset($_POST['title'])  && isset($_FILES['file']) 
 && isset($_POST['description']) 
 && isset($_POST['lien']) && isset($_POST['date'])
){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $img = [];
    $link = $_POST['lien'];

    $regex ="/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
    //traitement du fichiers téléchargé
    
    //version multi téléchargement en mode tableau
    $file = $_FILES['file'];
    $maxFileSize =500000;
    $extenionFileAut =['jpg','jpeg','png','svg'];
    //-------------------------------------------------
  
    for ($i=0; $i <count($title); $i++){
    if(empty($title[$i]) || empty($description[$i] || empty($date[$i]) ||  empty($link[$i]))){
        echo 'vide';
        die;
    }else{
        // à partir d'ici je nettoie la donnée reçue
        clearHtml($title[$i],$date[$i],$link[$i],$description[$i]);
    //puis je continue mes vérifications et je vérifie que ma progression est bien un chiffre qui servira plus tard à savoir le nombre d'étoile.
        if(!verifRegex($regex,$link[$i])){
            echo "erreur veuillez entrer une adresse valide".$regex;
            die;
        }else{
                 //traitement des fichiers
        if($file['error'][$i] === 0){
            if($file['size'][$i]<=$maxFileSize){
                $path = pathinfo($file['name'][$i]);
                $fileName = $path['filename'];
                $recupExtension =$path['extension'];
         
                if(in_array($recupExtension,$extenionFileAut)){

                    $fileNameAlea =uniqid(rand(),false).'.'.$recupExtension;
                    $fileTransfer = 'img/'.$fileNameAlea;
                 $moveFile = move_uploaded_file($file['tmp_name'][$i],$fileTransfer);
                 
                 //on push le chemin du fichier dans img pour après le transfèrer dans la bd
        array_push($img, $fileNameAlea);
        //si toute les vérifs sont passée alors j'active ma BD
        require 'bd.php';
        //on crée notre requête dans une variable pour éviter toute injections de code
        $sql = 'INSERT INTO projects (title_projects,date_projects,img_projects,description_projects,link_projects) values (?,?,?,?,?)';
        // on prépare
        $req = $db -> prepare($sql);
//ici on va mettre nos variable qui seront envoyer dans la bd
        $req -> execute([$title[$i],$date[$i],$img[$i],$description[$i],$link[$i]]);
        echo "tout est bien envoyé!";
        $req -> closeCursor();

                }else{
                    echo "extension pas correcte pour $i";
                    die;
                }
            }else{
                echo "les fichers sont trop grand".$i."";
                die;
            }
        }else{
            echo 'il y a une erreur dans le fichier';
            die;
        }
        
        }
    }
    }
     }else{
        header("location:admin.php?addSkills");
         die;
     }
    function clearHtml($html){
        return htmlspecialchars($html);
        }
        function verifRegex($reg,$value){
            return preg_match($reg,$value);
        }