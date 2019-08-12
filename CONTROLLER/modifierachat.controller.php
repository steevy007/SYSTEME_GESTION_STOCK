<?php
session_start();
require_once('../MODEL/achat.php');
$AC=new achat("",0,0,0,0);
    if(isset($_GET['ID'])){
       $reponse=$AC->listerID($_SESSION['nom'],$_SESSION['password'],$_GET['ID']);

       if($reponse){
           while($data=mysqli_fetch_array($reponse)){
            header("Location:../VIEW/modifierachat.php?ID=$data[0]&quantite=$data[3]");
           }
           
       }
    }
?>