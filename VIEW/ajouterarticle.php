<?php
  session_start();
  $username=$_SESSION['nom'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php') ?>
    <title>Ajouter Article</title>
</head>
<body>
    <div class="cont">
        <?php require_once('tete.php') ?>
        <hr>

        <div class="cont1">
               <?php require_once('menu.php') ?>

                    <div class="c2">
                            <div class="el1">
                                <h3>Ajouter Article</h3>
                            </div>
                            <div class="el2">
                                <div class="formu">
                                    <form action="../CONTROLLER/ajouterarticle.controller.php" method="GET">
                                        <div class="f2">
                                           <div>
                                           <label for="">Nom de l'article</label><br>
                                            <input type="text" placeholder="saisir le nom de l article" name="nom" required>
                                           </div>
                                        </div>

                                        <div class="f2">
                                           <div>
                                           <label for="">Description de l'article</label><br>
                                            <input type="text" placeholder="Description de l'article" name="description" required>
                                           </div>
                                        </div>

                                        <div class="f2">
                                           <div>
                                           <label for="">Prix de l'article</label><br>
                                            <input type="number" placeholder="saisir le prix de l'article" name="prix" required>
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
    </div>
</body>
</html>