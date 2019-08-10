<?php
session_start();
require_once('../MODEL/Client.php');
$cl=new Client("","","","","","","","");
    if(isset($_GET['numero'])){
        $id=$_GET['numero'];
        $nom=$_GET['nom'];
        $prenom=$_GET['prenom'];
        $adresse=$_GET['adresse'];
        $code=$_GET['code'];
        $ville=$_GET['ville'];
        $pays=$_GET['pays'];
        $tel=$_GET['telephone'];

        $cl->setnom_client($nom);
        $cl->setprenom_client($prenom);
        $cl->setadresse_client($adresse);
        $cl->setcode_postal_client($code);
        $cl->setville_client($ville);
        $cl->setpays_client($pays);
        $cl->settelephone_client($tel);

        $reponse=$cl->Update($_SESSION['nom'],$_SESSION['password'],$id);

        if($reponse){
            header('Location:../VIEW/consulterclient.php');
        }
    }
?>