<?php
 

if (!empty($_POST['pseudo']) && !empty($_POST['identifiant']) && !empty($_POST['password']) && !empty($_POST['mail'])) {

    $reqIns = $db->prepare("INSERT INTO `user`(`pseudo`, `identifiant`, `password`, `mail`) VALUES (:pseudo, :identifiant, :password, :mail)");
    $reqIns->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
    $reqIns->bindParam(':identifiant', $_POST['identifiant'], PDO::PARAM_STR);
    $reqIns->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
    $reqIns->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);

    
    $reqIns->execute();
}



