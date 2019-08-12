<?php
session_start();
    require_once('../MODEL/article.php');
    $Ar=new article("","","",0);
    if(isset($_GET['btn'])){
        $nom=htmlspecialchars($_GET['nom']);
        $description=htmlspecialchars($_GET['description']);
        $prix=htmlspecialchars($_GET['prix']);

        $Ar->setnom_article_article($nom);
        $Ar->setdescription_article($description);
        $Ar->setprix_article($prix);

        $reponse=$Ar->inserer($_SESSION['nom'],$_SESSION['password']);

        if($reponse){
            header('Location:../VIEW/consulterarticle.php');
        }
    }
?>