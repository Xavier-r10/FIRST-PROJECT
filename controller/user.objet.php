<?php
include_once('../model/user.class.php');

if(!empty($_POST['email']) AND !empty($_POST['password']))
{
    $informations = new GetInformation(4);
    $reponse = $informations->getAllEmail();
    while($donnees = $reponse -> fetch())
    {
        if($donnees['email'] == $_POST['email'])
        {
            $informations -> setEmail($_POST['email']);
            $key_reponse = $informations -> getKey();
            $donnee = $key_reponse -> fetch();
            if($_POST['password'] == $donnee['password'])
            {
                header('Location:../view/accueil.php');
            }
            else
            {
                header('Location:../view/erreurs/erreur_login.php');
            }
        }
    }
}
?>