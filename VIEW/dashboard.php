<?php
    session_start();
    $username=$_SESSION['nom'];
    require_once('../MODEL/connexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php') ?>
    <title>Dashboard</title>
</head>
<body>
    <div class="cont">
        <?php require_once('tete.php') ?>
        <hr>

        <div class="cont1">
               <?php require_once('menu.php') ?>

                    <div class="c2">
                            <div class="el1">
                                <h3>BIENVENUE SUR NOTRE SYSTEME</h3>
                            </div>
                            <div class="el2"> 
                                    <h4>Description du systeme</h4>
                                    <p>
                                            Grâce à internet on peut entres autres, converser avec ses amis par tout dans le monde, trouver des informations sur n'importe quel sujet, publier un texte en lui ajoutant des effets multimédias, écouter de la musique, voir des films, s'inscrire à des cours et même les suivre de façon virtuelle, télécharger ou partager des photos, rencontrer des personnes de cultures différentes, consulter ses comptes bancaires et faire des paiements, suivre sa consommation téléphonique à n'importe quel moment du jour et de la nuit, acheter et vendre presque n'importe quoi, etc. Plusieurs domaines de la vie sont également aidés grâce à lui, on peut citer
                                    </p>
                                    <p>
                                            Grâce à internet on peut entres autres, converser avec ses amis par tout dans le monde, trouver des informations sur n'importe quel sujet, publier un texte en lui ajoutant des effets multimédias, écouter de la musique, voir des films, s'inscrire à des cours et même les suivre de façon virtuelle, télécharger ou partager des photos, rencontrer des personnes de cultures différentes, consulter ses comptes bancaires et faire des paiements, suivre sa consommation téléphonique à n'importe quel moment du jour et de la nuit, acheter et vendre presque n'importe quoi, etc. Plusieurs domaines de la vie sont également aidés grâce à lui, on peut citer
                                    </p>
                                    <p>
                                            Grâce à internet on peut entres autres, converser avec ses amis par tout dans le monde, trouver des informations sur n'importe quel sujet, publier un texte en lui ajoutant des effets multimédias, écouter de la musique, voir des films, s'inscrire à des cours et même les suivre de façon virtuelle, télécharger ou partager des photos, rencontrer des personnes de cultures différentes, consulter ses comptes bancaires et faire des paiements, suivre sa consommation téléphonique à n'importe quel moment du jour et de la nuit, acheter et vendre presque n'importe quoi, etc. Plusieurs domaines de la vie sont également aidés grâce à lui, on peut citer
                                    </p>
                                </div>
                    </div>
        </div>
    </div>
</body>
</html>