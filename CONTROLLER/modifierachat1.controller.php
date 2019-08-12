<?php
    session_start();
    require_once('../MODEL/achat.php');
    $AC=new achat("",0,0,0,0);
    if(isset($_GET['btn'])){
        $AC->setquantite($_GET['quantite']);
        $reponse=$AC->Update($_SESSION['nom'],$_SESSION['password'],$_GET['ID']);
        header('Location:../VIEW/consulterachat.php');
    }
?>