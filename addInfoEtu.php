<?php

    if(isset($_POST['btnInscrire'])){
        $Nom = htmlspecialchars($_POST['Nom']); 
        $Prenom = htmlspecialchars($_POST['Prenom']); 
        $Pays = htmlspecialchars($_POST['Pays']); 
        $Email = htmlspecialchars($_POST['Email']); 
        $Mdp = htmlspecialchars($_POST['Mdp']); 
        if(!empty($Nom) AND !empty($Prenom) AND !empty($Pays) AND !empty($Email) AND !empty($Mdp)) {
            /**
             * insertion dans la bdd des 5 infos
             * utilise la methode ajouterPremiereInfos($_POST)
             */
        } else {
            /**
             * message d'erreur demandant de remplir tous les champs
             */
        }
    }

?>