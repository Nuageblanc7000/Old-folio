<?php
//ADD SKILLS
//pour entrer je vérifie que tout soit lest post sont existant
if(isset($_POST['title'])  && isset($_FILES['file']) && isset($_POST['prog']) && isset($_POST['description'])){
    $title = $_POST['title'];
    $img = [];
    $progression = $_POST['prog'];
    $description = $_POST['description'];
    $regex = "/^[0,1,2,3,4,5]?$/";
    //traitement du fichiers téléchargé
    
    //version multi téléchargement en mode tableau
    $file = $_FILES['file'];
    $maxFileSize =500000;
    $extenionFileAut =['jpg','jpeg','png','svg'];
    
    //-------------------------------------------------
  
    for ($i=0; $i <count($title); $i++){
    if(empty($title[$i])){
        echo 'vide';
        die;
    }else{
        // à partir d'ici je nettoie la donnée reçue
        clearHtml($title[$i],$progression[$i],$description[$i]);
    //puis je continue mes vérifications et je vérifie que ma progression est bien un chiffre qui servira plus tard à savoir le nombre d'étoile.
        if(!verifRegex($regex,$progression[$i])){
            echo "la progression doit être un chiffre compris entre 0 et 5";
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
                    
                    oveFile = move_uploaded_file($file['tmp_name'][$i],$fileTransfer);
                 
                 //on push le chemin du fichier dans img pour après le transfèrer dans la bd
        array_push($img,$fileNameAlea);
        //si toute les vérifs sont passée alors j'active ma BD
        require 'bd.php';
        //on crée notre requête dans une variable pour éviter toute injections de code
        $sql = 'INSERT INTO skills (title_skills,img_skills,stars_skills,description_skills) values (?,?,?,?)';
        // on prépare
        $req = $db -> prepare($sql);
//ici on va mettre nos variable qui seront envoyer dans la bd
        $req -> execute([$title[$i],$img[$i],$progression[$i],$description[$i]]);
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