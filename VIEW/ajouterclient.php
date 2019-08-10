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
    <title>Ajouter Client</title>
</head>
<body>
    <div class="cont">
        <?php require_once('tete.php') ?>
        <hr>

        <div class="cont1">
               <?php require_once('menu.php') ?>

                    <div class="c2">
                            <div class="el1">
                                <h3>Ajouter Client</h3>
                            </div>
                            <div class="el2">
                               <div class="formu">
                                    <form action="../CONTROLLER/ajouterclient.controller.php" method="GET">
                                       <div class="f1">
                                            <div>
                                                <label for="">Nom du Client</label>
                                                <input type="text" placeholder="Nom du Client" name="nom" required>
                                            </div>
                                            <div>
                                                <label for="">Prenom du Client</label>
                                                <input type="text" placeholder="Nom du Client" name="prenom" required>
                                            </div>
                                       </div>
                                       
                                       <div class="f1">
                                            <div>
                                                <label for="">Code Postal</label>
                                                <input type="number" placeholder="Nom du Client" name="code" required>
                                            </div>
                                            <div>
                                                <label for="">Ville</label>
                                                <input type="text" placeholder="Nom du Client" name="ville" required>
                                            </div>
                                       </div>

                                       <div class="f1">
                                            <div>
                                                <label for="">Telephone</label>
                                                <input type="text" placeholder="Nom du Client" name="telephone">
                                            </div>
                                            <div>
                                            <label for="">Adresse</label>
                                                <input type="text" placeholder="Adresse du Client" name="adresse" reuired>
                                            </div>
                                       </div>

                                       <div class="f2">
                                        <div>
                                            <label for="pays">Pays</label>
                                        <select  name="p" required>
                                                    <option value="HAITI">HAITI</option>
                                                    <option value="CANADA">CANADA</option>
                                                    <option value="FRANCE">FRANCE</option>
                                                    <option value="GUADELOUPE">GUADELOUPE</option>
                                                    <option value="MEXIQUE">MEXIQUE</option>
                                                </select>
                                        </div>
                                       </div>
                                       <div class="btn1">
                                            <button type="submit" name="bt1">Enregistrer</button>
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