<?php
    $fonction="";
    if($username=='STEEVE'){
        $fonction='Vendeur';
    }elseif($username=='SANON'){
        $fonction='Comptable';
    }else{
        $fonction='Utilisateur';
    }
?>
<div class="tete">
            <div class="t">
                <h1> <img src="ICONES/icons8_Accounting_45px.png" alt=""> SYSTEME DE VENTE</h1>
            </div>
            <div class="t">
                <span><?php print($fonction) ?></span>
                <span><b><?php print $username?></b></span>
                <a href="../MODEL/Deconnecter.php"><img src="ICONES/icons8_Logout_Rounded_Down_30px.png" alt=""></a>
                <a href="dashboard.php"><img src="ICONES/icons8_Home_30px.png" alt=""></a>
            </div>
        </div>