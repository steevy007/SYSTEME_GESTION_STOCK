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
                                    <form action="">
                                        <div class="f2">
                                           <div>
                                           <label for="">Identifiant du client</label><br>
                                            <input type="text" placeholder="saisir l'identifiant du client">
                                           </div>
                                        </div>

                                        <div class="f2">
                                           <div>
                                           <label for="">Identifiant Article</label><br>
                                            <input type="text" placeholder="saisir l'identifiant de l'article">
                                           </div>
                                        </div>

                                        <div class="f2">
                                           <div>
                                           <label for="">Quantite Article</label><br>
                                            <input type="number" placeholder="saisir le nombre d'article">
                                           </div>
                                        </div>

                                        <div class="btn1">
                                            <button type="submit">Enregistrer</button>
                                            <button type="reset">Nouveau</button>
                                       </div>
                                </div>
                    </div>
        </div>
    </div>
</body>
</html>