<?php
    session_start();
    $username=$_SESSION['nom'];
    $password=$_SESSION['password'];
    require_once('../MODEL/Client.php');
    $cl=new Client("","","","","","","","");

    if(isset($_GET['bt1'])){
        $nom=htmlspecialchars($_GET['nom']);
        $prenom=htmlspecialchars($_GET['prenom']);
        $code=htmlspecialchars($_GET['code']);
        $ville=htmlspecialchars($_GET['ville']);
        $telephone=htmlspecialchars($_GET['telephone']);
        $adresse=htmlspecialchars($_GET['adresse']);
        $pays=htmlspecialchars($_GET['p']);
       $cl->setnom_client($nom);
       $cl->setprenom_client($prenom);
       $cl->setcode_postal_client($code);
       $cl->setville_client($ville);
       $cl->settelephone_client($telephone);
       $cl->setpays_client($pays);
       $cl->setadresse_client($adresse);
        //echo $password;
        //echo $nom."-".$prenom."-".$code."-".$ville."-".$telephone."-".$adresse."-".$pays;

        $reponse=$cl->inserer($username,$password);
        if($reponse){
            header('Location:../VIEW/consulterclient.php');
        }
    }
?>