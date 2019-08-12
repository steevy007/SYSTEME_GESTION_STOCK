<?php
  session_start();
  $username=$_SESSION['nom'];
  $password=$_SESSION['password'];
  require_once('../MODEL/achat.php');
  $AC=new achat("",0,0,0,0);
  $reponse=$AC-> listerIDCL($username,$password);
  $reponse1=$AC-> listerIDAR($username,$password);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php') ?>
    <title>Effectuer Achat</title>
</head>
<body>
    <div class="cont">
        <?php require_once('tete.php') ?>
        <hr>

        <div class="cont1">
               <?php require_once('menu.php') ?>

                    <div class="c2">
                            <div class="el1">
                                <h3>Effectuer Achat</h3>
                            </div>
                            <div class="el2">
                            <div class="formu">
                                    <form action="../CONTROLLER/effectuerachat.controller.php" method="GET">
                                        <div class="f2">
                                           <div>
                                           <label for="">Identifiant du client</label><br>
                                             <select name="numeroCL" class="sel">
                                                 <?php
                                                    while($data=mysqli_fetch_array($reponse)){
                                                 ?>
                                                          <option  value="<?php print($data[0]) ?>"><?php print($data[0]) ?></option>
                                                <?php
                                                    }
                                                ?>
                                                   </select>
                                           </div>
                                        </div>

                                        <div class="f2">
                                           <div>
                                           <label for="">Identifiant Article</label><br>
                                           <select name="numeroAR" class="sel">
                                           <?php
                                                    while($data=mysqli_fetch_array($reponse1)){
                                                 ?>
                                                          <option  value="<?php print($data[0]) ?>"><?php print($data[0]) ?></option>
                                                <?php
                                                    }
                                                ?>
                              ;                     </select>
                                           </div>
                                        </div>

                                        <div class="f2">
                                           <div>
                                           <label for="">Quantite Article</label><br>
                                            <input type="number" name="quantite" placeholder="saisir le nombre d'article" required>
                                           </div>
                                        </div>

                                        <div class="btn1">
                                            <button type="submit" name="btn">Enregistrer</button>
                                            <button type="reset">Nouveau</button>
                                       </div>
                                       </form>
                                </div>
                    </div>
        </div>
    </div>
</body>
</html>