<?php
    session_start();
    require_once('../MODEL/article.php');
    $Ar=new article("","","",0);
    if(isset($_GET['btn'])){
       $Ar->setnom_article($_GET['nom']);
       $Ar->setdescription_article($_GET['description']);
       $Ar->setprix_article($_GET['prix']);

       $reponse=$Ar->Update($_SESSION['nom'],$_SESSION['password'],$_GET['numero']);
       if($reponse){
            header('Location:../VIEW/consulterarticle.php');
       }
    }
?>