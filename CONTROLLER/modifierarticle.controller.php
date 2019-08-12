<?php
    session_start();
    require_once('../MODEL/article.php');
    $Ar=new article("","","",0);
    if(isset($_GET['ID'])){
        $id=$_GET['ID'];
       $reponse=$Ar->listerID($_SESSION['nom'],$_SESSION['password'],$id);
        if($reponse){
            while($data=mysqli_fetch_array($reponse)){
                header("Location:../VIEW/modifierarticle.php?id=$data[0]&nom=$data[1]&description=$data[2]&prix=$data[3]");
            }
        }

    }
?>