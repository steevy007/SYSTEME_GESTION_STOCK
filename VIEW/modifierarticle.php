<?php
  session_start();
  $username=$_SESSION['nom'];
  $upassword=$_SESSION['password'];
  require_once('../MODEL/article.php');
  $id="";
  $nom="";
  $description="";
  $prix="";

  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $nom=$_GET['nom'];
    $description=$_GET['description'];
    $prix=$_GET['prix'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php') ?>
    <title>Modifier Article</title>
</head>
<body>
    <div class="cont">
        <?php require_once('tete.php') ?>
        <hr>

        <div class="cont1">
               <?php require_once('menu.php') ?>

                    <div class="c2">
                            <center> <h3>Modifier Article</h3></center>                       
                            <div class="el2">
                            <div class="search">
                                        <center>
                                            <div>
                                            <form action="../CONTROLLER/modifierarticle1.controller.php" method="GET">
                                                   <select name="numero" class="sel">
                                                     
                                                          <option  value="<?php print($id)?>"><?php print($id)?></option>                                                          
                                               </select>                                   
                                            </div>
                                        </center>
                                   </div>
                            <div class="formu">
                                    <form action="">
                                        <div class="f2">
                                           <div>
                                           <label for="">Nom de l'article</label><br>
                                            <input type="text" value="<?php print($nom)?>" placeholder="saisir le nom de l article" name="nom" required>
                                           </div>
                                        </div>

                                        <div class="f2">
                                           <div>
                                           <label for="">Description de l'article</label><br>
                                            <input type="text" value="<?php print($description)?>" placeholder="Description de l'article" name="description" required>
                                           </div>
                                        </div>

                                        <div class="f2">
                                           <div>
                                           <label for="">Prix de l'article</label><br>
                                            <input type="number" value="<?php print($prix)?>" placeholder="saisir le prix de l'article" name="prix" required>
                                           </div>
                                        </div>

                                        <div class="btn1">
                                            <button type="submit" name="btn">Modifier</button>
                                       </div>
                                    </form>
                                </div>
                                </div>
                    </div>
        </div>
    </div>
</body>
</html>