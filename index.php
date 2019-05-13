<?php
/*
    *
        index.php est le CONTRÔLEUR de notre application "MVC-lite". TOUTES les
        requêtes vers notre application vont passer par ici. Le coeur du contrôleur est sa structure décisionnelle qui traite un paramètre que l'on nommera ACTION. C'est la valeur de ce paramètre qui déterminera les actions que posera le contrôleur.
    
    */
    
    //1. Recevoir le paramètre action
    if(isset($_REQUEST["action"]))
    {
        $action = $_REQUEST["action"];
    }
    else
    {
        //action par défaut
        $action = "Accueil";
    }

    //inclure le modèle
    require_once("fonctionsDB.php");
    //structure décisionnelle
    switch($action)
    {
        case "Accueil":
            require_once("vues/Accueil.html");
            break;
        case "ListeEquipes":
            //afficher la liste des équipes
            //1. aller chercher les équipes dans le modèle
            $donnees = GetAllEquipes();
            //2. inclure la vue de la liste des équipes
            require_once("vues/ListeEquipes.php");
            break;

    }
?>

