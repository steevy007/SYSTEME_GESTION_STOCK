<?php
  session_start();
  $username=$_SESSION['nom'];
 /* require_once('../MODEL/Client.php');
  $cl=new Client("","","","","","","","");
  $reponse=$cl->listerIDCL($_SESSION['nom'],$_SESSION['password']);*/
  $nom="";
  $prenom="";
  $adresse="";
  $code="";
  $ville="";
  $pays="";
  $tel="";
  $id="";

  if(isset($_GET['ID'])){
    $nom=$_GET['nom'];
  $prenom=$_GET['prenom'];
  $adresse=$_GET['adresse'];
  $code=$_GET['code'];
  $ville=$_GET['ville'];
  $pays=$_GET['pays'];
  $tel=$_GET['tel'];
  $id=$_GET['ID'];
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php') ?>
    <title>Modifier Client</title>
</head>
<body>
    <div class="cont">
        <?php require_once('tete.php') ?>
        <hr>

        <div class="cont1">
               <?php require_once('menu.php') ?>

                    <div class="c2">
                            
                            <div class="el2">
                            <div class="search">
                                        <center>
                                            <div>
                                            <form action="../CONTROLLER/modifierclient1.controller.php" method="GET">
                                                   <select name="numero" class="sel">
                                                     
                                                          <option  value="<?php print $id ?>"><?php print $id ?></option>
                                                
                                                        
                                                          
                                                   </select>
                                                   
                                            
                                            </div>
                                        </center>
                                   </div>
                                   <div class="formu">
                                    
                                       <div class="f1">
                                            <div>
                                                <label for="">Nom du Client </label>
                                                <input type="text" placeholder="Nom du Client" name="nom" value="<?php print $nom ?>">
                                            </div>
                                            <div>
                                                <label for="">Prenom du Client</label>
                                                <input type="text" placeholder="Nom du Client" name="prenom" value="<?php print $prenom ?>">
                                            </div>
                                       </div>
                                       
                                       <div class="f1">
                                            <div>
                                                <label for="">Code Postal</label>
                                                <input type="text" placeholder="Nom du Client" name="code"value="<?php print $code ?>">
                                            </div>
                                            <div>
                                                <label for="">Ville</label>
                                                <input type="text" placeholder="Nom du Client" name="ville"value="<?php print $ville ?>">
                                            </div>
                                       </div>

                                       <div class="f1">
                                            <div>
                                                <label for="">Telephone</label>
                                                <input type="text" placeholder="Nom du Client" name="telephone" value="<?php print $tel ?>">
                                            </div>
                                            <div>
                                            <label for="">Adresse</label>
                                                <input type="text" placeholder="Adresse du Client" name="adresse" reuired value="<?php print $adresse ?>">
                                            
                                            </div>
                                       </div>

                                       <div class="f2">
                                        <div>
                                            <label for="" >Pays</label>
                                        <select name="pays" id="">
                                                    <option value="HAITI" <?php if($pays == "HAITI") print("selected='selected'"); ?>>HAITI</option>
                                                    <option value="CANADA" <?php if($pays == "CANADA") print("selected='selected'"); ?>>CANADA</option>
                                                    <option value="FRANCE" <?php if($pays == "FRANCE") print("selected='selected'"); ?>>FRANCE</option>
                                                    <option value="GUADELOUPE" <?php if($pays == "GUADELOUPE") print("selected='selected'"); ?>>GUADELOUPE</option>
                                                    <option value="MEXIQUE" <?php if($pays == "MEXIQUE") print("selected='selected'"); ?>>MEXIQUE</option>
                                                </select>
                                        </div>
                                       </div>
                                       <div class="btn1">
                                            <button type="submit" name="btn">Modifier</button>
                                            <button type="reset">Nettoyer</button>
                                       </div>
                                    </form>
                               </div>
                                </div>
                    </div>
        </div>
    </div>
</body>
</html>