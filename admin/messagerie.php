<?php
//ADD SKILLS
//pour entrer je vérifie que tout soit lest post sont existant
if(isset($_POST['surname_message']) && isset($_POST['firstname_message']) && isset($_POST['mail']) && isset($_POST['message_message'])){
    $error=0;
    
    $mail=htmlspecialchars($_POST['mail']);
    $message_message=htmlspecialchars($_POST['message_message']);
     if(preg_match("/^[a-zA-Z]+[a-zA-Z0-9.-]?\w+@{1,1}?\w{3,30}\.\w{2,6}$/",$_POST['mail'])){
        $mail=htmlspecialchars($_POST['mail']);
    }else{
        $error=1;
    }
    if(!empty($_POST['surname_message'])){
        $surname_message=htmlspecialchars($_POST['surname_message']);
    }else{
        $error=2;
    }
    if(!empty($_POST['firstname_message'])){
        $firstname_message=htmlspecialchars($_POST['firstname_message']);
    }else{
        $error=3;
    }
    if($error==0){
        require 'bd.php';
        $req = ('INSERT INTO message (surname_message,firstname_message,message_message,mail,date_message)
        values (:surname_message,:firstname_message,:message_message,:mail, now()) ');
        $stmt = $db ->prepare($req);
        $stmt -> execute([
           ":surname_message" => $surname_message,
           ":firstname_message" => $firstname_message,
           ":message_message" => $message_message,
           ":mail" => $mail
        ]);
        $stmt -> closeCursor();
        header("LOCATION:../messageSend.php");
    }
}
  
   