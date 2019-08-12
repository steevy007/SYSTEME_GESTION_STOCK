<?php
session_start();
require_once('../MODEL/achat.php');
$AC=new achat("",0,0,0,0);
    if(isset($_GET['btn'])){
        $AC->setid_client($_GET['numeroCL']);
        $AC->setid_article($_GET['numeroAR']);
        $AC->setquantite($_GET['quantite']);

        $reponse=$AC->inserer($_SESSION['nom'],$_SESSION['password']);
        if($reponse){
            header('Location:../VIEW/consulterachat.php');
        }
    }
?>