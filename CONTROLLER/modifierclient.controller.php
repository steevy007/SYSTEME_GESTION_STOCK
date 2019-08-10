<?php
session_start();
require_once('../MODEL/Client.php');
   /* if(isset($_GET['btn'])){
        $numero=htmlspecialchars($_GET['numero']);
        $nom=htmlspecialchars($_GET['nom']);
        $prenom=htmlspecialchars($_GET['prenom']);
        $code=htmlspecialchars($_GET['code']);
        $ville=htmlspecialchars($_GET['ville']);
        $telephone=htmlspecialchars($_GET['telephone']);
        $adresse=htmlspecialchars($_GET['adresse']);
        $pays=htmlspecialchars($_GET['pays']);

        //echo $numero."-".$nom."-".$prenom."-".$code."-".$ville."-".$telephone."-".$adresse."-".$pays;

        
    }*/
   
    $cl=new Client("","","","","","","","");
    $reponse=$cl->listerID($_SESSION['nom'],$_SESSION['password'],$_GET['ID']);
    $id=$_GET['ID'];
    while($data=mysqli_fetch_array($reponse)){
      
       header("Location:../VIEW/modifierclient.php?nom=$data[1]&prenom=$data[2]&adresse=$data[3]&code=$data[4]&ville=$data[5]&pays=$data[6]&tel=$data[7]&ID=$id");
    }
?>