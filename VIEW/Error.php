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
    <title>Error</title>
</head>
<body>
    <div class="cont">
        <?php require_once('tete.php') ?>
        <hr>

        <div class="cont1">
               <?php require_once('menu.php') ?>
               
                    <div class="c2">
                    <br><br><br><br><br><br><br><br><br><br><br>
                            <div class="el1">
                                <h3>Desole Acces Interdit</h3>
                            </div>
                        
                    </div>
        </div>
    </div>
</body>
</html>