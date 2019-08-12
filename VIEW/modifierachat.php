<?php
  session_start();
  $username=$_SESSION['nom'];
  $password=$_SESSION['password'];
    $quantite="";
    $id="";
    if(isset($_GET['ID'])){
        $quantite=$_GET['quantite'];
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
    <title>Modifier Achat</title>
</head>
<body>
    <div class="cont">
        <?php require_once('tete.php') ?>
        <hr>

        <div class="cont1">
               <?php require_once('menu.php') ?>
               
                    <div class="c2">
                               <center> <h3>Modifier Achat</h3></center><br>
                               <div class="el2">
                            <div class="formu">
                                    <form action="../CONTROLLER/modifierachat1.controller.php" method="GET">
                                        

                                        <div class="f2">
                                           <div>
                                           <label for="">Quantite Article</label><br>
                                            <input type="number" name="quantite" value="<?php print($quantite) ?>" placeholder="saisir le nombre d'article" required>
                                            <input type="hidden"  name="ID" value="<?php print($id) ?>">
                                           </div>
                                        </div>

                                        <div class="btn1">
                                            <button type="submit" name="btn">Enregistrer</button>
                                            
                                       </div>
                                       </form>
                                </div>
                    </div>
        </div>
    </div>
</body>
</html>